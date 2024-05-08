/**
 * Special concat/build task to handle build requirements
 * Concats AMD modules, removes their definitions,
 * and includes/excludes specified modules
 */

module.exports = function( grunt ) {
    "use strict";

    var fs = require( "fs" ),
        requirejs = require( "requirejs" ),
        pkg = require( "../package.json" ),
        srcFolder = __dirname + "/../src/",
        rdefineEnd = /\r?\n\}\s*?\);[^}\w]*$/,
        read = function( fileName ) {
            return grunt.file.read( srcFolder + fileName );
        },
        wrapper = read( "wrapper.js" ).split( /\/\/ \@CODE\r?\n\/\/[^\n]+\n/ ),
        config = {
            baseUrl: "src",
            name: pkg.name,

            paths: {
                jquery : 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min'
            },

            // We have multiple minify steps
            optimize: "none",

            // Include dependencies loaded with require
            findNestedDependencies: true,

            // Avoid inserting define() placeholder
            skipModuleInsertion: true,

            // Avoid breaking semicolons inserted by r.js
            skipSemiColonInsertion: true,
            wrap: {
                start: wrapper[ 0 ].replace( /\/\*jshint .* \*\/\r?\n/, "" ),
                end: wrapper[ 1 ]
            },
            rawText: {},
            onBuildWrite: convert
        };

    /**
     * Strip all definitions generated by requirejs
     * Convert "var" modules to var declarations
     * "var module" means the module only contains a return
     * statement that should be converted to a var declaration
     * This is indicated by including the file in any "var" folder
     * @param {String} name
     * @param {String} path
     * @param {String} contents The contents to be written (including their AMD wrappers)
     */
    function convert( name, path, contents ) {
        var amdName;

        // Convert var modules
        if ( /.\/var\//.test( path.replace( process.cwd(), "" ) ) ) {
            contents = contents
                .replace( /define\([\w\W]*?return undefined\s*;/, "    var " + ( /var\/([\w-]+)/.exec( name )[ 1 ] ) + ";" )
                .replace( /define\([\w\W]*?return/, "    var " + ( /var\/([\w-]+)/.exec( name )[ 1 ] ) + " =" )
                .replace( rdefineEnd, "" );

        } else if ( /.\/function\//.test( path.replace( process.cwd(), "" ) ) ) {
            contents = contents
                .replace( /define\([\w\W]*?return function/, "    function " + ( /function\/([\w-]+)/.exec( name )[ 1 ] ) + "")
                .replace( rdefineEnd, "" );

            // Remove empty definitions
            contents = contents
                .replace( /define\(\[[^\]]*\]\)[\W\r\n]+$/, "" );

        } else {
            contents = contents
                .replace( /\s*return\s+[^\}]+(\}\s*?\);[^\w\}]*)$/, "$1" )

                // Multiple exports
                .replace( /\s*exports\.\w+\s*=\s*\w+;/g, "" );

            // Remove define wrappers, closure ends, and empty declarations
            contents = contents
                .replace( /define\([^{]*?{/, "" )
                .replace( rdefineEnd, "" );

            // Remove anything wrapped with
            // /* ExcludeStart */ /* ExcludeEnd */
            // or a single line directly after a // BuildExclude comment
            contents = contents
                .replace( /\/\*\s*ExcludeStart\s*\*\/[\w\W]*?\/\*\s*ExcludeEnd\s*\*\//ig, "" )
                .replace( /\/\/\s*BuildExclude\r?\n\r?[\w\W]*?\r?\n\r?/ig, "" );

            // Remove empty definitions
            contents = contents
                .replace( /define\(\[[^\]]*\]\)[\W\r\n]+$/, "" );
        }

        // AMD Name
        if ( ( amdName = grunt.option( "amd" ) ) != null && /^exports\/amd$/.test( name ) ) {

            // Remove the comma for anonymous defines
            contents = contents
                .replace( new RegExp('/(\s*)"' + pkg.name + '"(\,\s*)/'),
                    amdName ? "$1\"" + amdName + "\"$2" : "" );

        }
        return contents;
    }

    grunt.registerMultiTask(
        "build",
        "Concatenate source, remove sub AMD definitions, " +
            "(include/exclude modules with +/- flags), embed date/version",
    function() {
        var flag, index,
            done = this.async(),
            flags = this.flags,
            name = grunt.option( "filename" ),
            minimum = this.data.minimum,
            removeWith = this.data.removeWith,
            excluded = [],
            included = [],
            version = grunt.config( "pkg.version" ),
            /**
             * Recursively calls the excluder to remove on all modules in the list
             * @param {Array} list
             * @param {String} [prepend] Prepend this to the module name.
             *  Indicates we're walking a directory
             */
            excludeList = function( list, prepend ) {
                if ( list ) {
                    prepend = prepend ? prepend + "/" : "";
                    list.forEach( function( module ) {

                        // Exclude var modules as well
                        if ( module === "var" ) {
                            excludeList(
                                fs.readdirSync( srcFolder + prepend + module ), prepend + module
                            );
                            return;
                        }
                        if ( prepend ) {

                            // Skip if this is not a js file and we're walking files in a dir
                            if ( !( module = /([\w-\/]+)\.js$/.exec( module ) ) ) {
                                return;
                            }

                            // Prepend folder name if passed
                            // Remove .js extension
                            module = prepend + module[ 1 ];
                        }

                        // Avoid infinite recursion
                        if ( excluded.indexOf( module ) === -1 ) {
                            excluder( "-" + module );
                        }
                    } );
                }
            },
            /**
             * Adds the specified module to the excluded or included list, depending on the flag
             * @param {String} flag A module path relative to
             *  the src directory starting with + or - to indicate
             *  whether it should included or excluded
             */
            excluder = function( flag ) {
                var m = /^(\+|\-|)([\w\/-]+)$/.exec( flag ),
                    exclude = m[ 1 ] === "-",
                    module = m[ 2 ];

                if ( exclude ) {

                    // Can't exclude certain modules
                    if ( minimum.indexOf( module ) === -1 ) {

                        // Add to excluded
                        if ( excluded.indexOf( module ) === -1 ) {
                            grunt.log.writeln( flag );
                            excluded.push( module );

                            // Exclude all files in the folder of the same name
                            // These are the removable dependencies
                            // It's fine if the directory is not there
                            try {
                                excludeList( fs.readdirSync( srcFolder + module ), module );
                            } catch ( e ) {
                                grunt.verbose.writeln( e );
                            }
                        }

                        // Check removeWith list
                        excludeList( removeWith[ module ] );
                    } else {
                        grunt.log.error( "Module \"" + module + "\" is a minimum requirement." );
                        if ( module === "selector" ) {
                            grunt.log.error(
                                "If you meant to replace Sizzle, use -sizzle instead."
                            );
                        }
                    }
                } else {
                    grunt.log.writeln( flag );
                    included.push( module );
                }
            };

        // Filename can be passed to the command line using
        // command line options
        name = name ? ( "dist/" + name ) : this.data.dest;

        // append commit id to version
        if ( process.env.COMMIT ) {
            version += " " + process.env.COMMIT;
        }

        // figure out which files to exclude based on these rules in this order:
        //  dependency explicit exclude
        delete flags[ "*" ];
        for ( flag in flags ) {
            excluder( flag );
        }

        grunt.verbose.writeflags( excluded, "Excluded" );
        grunt.verbose.writeflags( included, "Included" );

        // append excluded modules to version
        if ( excluded.length ) {
            version += " -" + excluded.join( ",-" );

            // set pkg.version to version with excludes, so minified file picks it up
            grunt.config.set( "pkg.version", version );
            grunt.verbose.writeln( "Version changed to " + version );

            // Have to use shallow or core will get excluded since it is a dependency
            config.excludeShallow = excluded;
        }
        config.include = included;

        /**
         * Handle Final output from the optimizer
         * @param {String} compiled
         */
        config.out = function( compiled ) {
            compiled = compiled

                // Embed Version
                .replace( /@VERSION/g, version )

                // Embed Date
                // yyyy-mm-ddThh:mmZ
                .replace( /@DATE/g, ( new Date() ).toISOString().replace( /:\d+\.\d+Z$/, "Z" ) );

            // Write concatenated source to file
            grunt.file.write( name, compiled );
        };

        // Trace dependencies and concatenate files
        requirejs.optimize( config, function( response ) {
            grunt.verbose.writeln( response );
            grunt.log.ok( "File '" + name + "' created." );
            done();
        }, function( err ) {
            done( err );
        } );
    } );
};

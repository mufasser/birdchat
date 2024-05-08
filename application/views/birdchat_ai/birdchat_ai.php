<!DOCTYPE html>
<html lang="en">

<!-- <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">]
    
</head> -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">



    <title>Birdchat-ai</title>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.png">
    <?php
    include FCPATH . 'application/views/include/new.php';
    include FCPATH . 'application/views/include/js_include_back.php';
    ?>
</head>

<style>
    .navbar {
        Type: "Button primary";
        Size: "sm";
        Full width: False;
        Breakpoint: "Desktop";
        width: Fixed (1, 080px)px;
        height: Hug (84px)px;
        padding: var(--containermd);
        gap: var(--spacing-md);
        border: 0px 0px 1px 0px;
        opacity: 0px;
        /* border-bottom: 1px solid var(--Border-Base-main, #D1D5DB); */
        margin-top: -81px;

    }

    .navpill {
        Current: False;
        Size: "sm";
        Type: "Button primary";
        Full-width: False;
        Badge: False;
        State: "Default";
        width: Hug (82px)px;
        height: Fixed (36px)px;
        padding: var(--spacing-md) var(--spacing-lg) var(--spacing-md) var(--spacing-lg);
        gap: var(--spacing-md);
        border-radius: var(--radius-sm);
        opacity: 0px;
        color: #667085;



    }

    .nav-link {
        color: #667085 !important;
    }

    .minibadge {

        font-size: small;
        background-color: #F9FAFB;
        border-radius: 50px;

    }

    .minibadged {
        font-size: small;
        background-color: #47e247;
        border-radius: 50px;
    }

    .table-body {
        border-style: none;
    }

    .prev-button {
        display: inline-block;
        padding: 4px 20px;
        border: 1px solid #ccc;
        border-radius: 9px;
        font-size: 16px;
        color: #333;
        text-decoration: none
    }

    .prev-button:hover {
        background-color: #f0f0f0;
    }

    .custom-tabs {
        border: none;
    }

    .nav-link {
        color: var(--Content-Base-subtle, #9CA3AF);
    }

    .reset-button {
        color: red;
        background: none;

    }
</style>
<!-- ///secnd screen styling. -->
 <style>
        /* Hide default checkbox */
       

        /* Style for toggle switch */
        .toggle-switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        /* Slider (round or rectangle) */
        .toggle-slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: .4s;
            border-radius: 34px;
        }

        /* Rounded sliders */
        .toggle-slider.round {
            border-radius: 34px;
        }

        /* On state */
        .toggle-slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }

        /* Rounded slider (circle) */
        .toggle-slider.round:before {
            border-radius: 50%;
        }

        /* Checked state */
        input[type="checkbox"]:checked + .toggle-switch .toggle-slider {
            background-color: #2196F3;
        }

        /* Checked state of slider */
        input[type="checkbox"]:checked + .toggle-switch .toggle-slider:before {
            transform: translateX(26px);
        }
         
        .btn-primarye{
        background: linear-gradient(90deg, #2285C7 -2.34%, #2C3C8A 100%);
        color: white;
    }
    </style>


<body class="hold-transition  sidebar-gone  layout-fixed" style="height: auto; background-color: #FFFFFF;">
    <div id="app">
        <div class="main-wrapper">
            <?php
            $menus = $this->basic->get_data('menu', '', '', '', '', '', 'serial asc');
            $data['menus'] = $menus;
            // include(FCPATH . 'application/views/admin/theme/header.php');
            include FCPATH . 'application/views/admin/theme/sidebar.php';
            
            echo '<div class="main-content">';
            ?>

            <section>



                <header class="container ">
                    <nav class="navbar">
                        <ul class="nav nav-pills navpill justify-content-start">
                            <li class="nav-item"><a id="libraryLink" class="nav-link" href="#collectSection"
                                    onclick="loadContent('collect')">Library</a></li>
                            <li class="nav-item"><a id="settingsLink" class="nav-link" href="#connectSection"
                                    onclick="loadContent('connect')">Settings</a></li>
                        </ul>
                    </nav>
                </header>

                <main id="mainContent" class="container py-4 " style="margin-right: 550px; margin-top: -27px; ">

                    <section id="collectSection" style="display:none; " class="row custom-row">
                        <div class="container mt-3">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-md-auto d-flex align-items-center">
                                    <h3>Library</h3>
                                    <span class="text-muted"
                                        style="margin-left: 10px ; background-color: #e9ecef; padding: 5px 10px; border-radius: 50px;">0/1000
                                        pages</span>
                                </div>
                                <div class="col-md-auto">
                                    <div class="input-group">
                                        <input type="text" class="form-control"
                                            placeholder="Search by data source name"
                                            style="    margin-right: 14px; border-radius: 10px">
                                        <button class="btn btn-primarye" style=" border-radius: 10px" type="button">+
                                            Add
                                            new
                                            source</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-row-reverse mt-3" style="align-items: center ;    margin-bottom: 7px;">
                            <div>
                                <button class="btn reset-button">Reset filter</button>


                            </div>
                            <div>
                                <select class="form-select form-control" id="filterSelect"
                                    style="width: 200px ;margin-left: 10px">
                                    <option value="all">Training status: All </option>
                                    <option value="uploaded">Uploaded</option>
                                    <option value="trained">Trained</option>
                                </select>
                            </div>
                            <div>
                                <select class="form-select form-control" id="filterSelect" style="width: 200px ">
                                    <option value="all">Upload date (newest first)</option>
                                    <option value="uploaded">Uploaded</option>
                                    <option value="trained">Trained</option>
                                </select>

                            </div>








                        </div>

                        <main class="container  " style="    border: 1px solid #ccc;border-radius: 17px; padding: 0;">

                            <div class="table-responsive">
                                <table class="table ">
                                    <thead>
                                        <tr style="">
                                            <th scope="col">
                                               <input type="checkbox" class="form-check-input me-1"
                                                    style="margin-left: -4px;">
                                            </th>
                                            <th scope="col">Data Source Name</th>
                                            <th scope="col">Pages</th>
                                            <th scope="col">Training Status</th>
                                            <th scope="col">Upload Date</th>
                                            <th scope="col">Last Updated by </th>
                                            <th scope="col">Updated by</th>
                                        </tr>
                                    </thead>
                                    <tbody style="">
                                        <tr>
                                            <td>
                                               <input type="checkbox" class="form-check-input me-1"
                                                    style="margin-left: -4px;">
                                            </td>
                                            <td>Jiyangsen </td>
                                            <td>Text</td>
                                            <td>1</td>
                                            <td>Mar 20, 2019</td>
                                            <td>Mar 20, 2019 23:14</td>
                                            <td>Albert Flores</td>
                                        </tr>
                                        <tr>
                                            <td>
                                             <input type="checkbox" class="form-check-input me-1"
                                                    style="margin-left: -4px;">
                                            </td>
                                            <td>Jiyangsen </td>
                                            <td>Text</td>
                                            <td>1</td>
                                            <td>Mar 20, 2019</td>
                                            <td>Mar 20, 2019 23:14</td>
                                            <td>Albert Flores</td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>

                        </main>
                    </section>

                    <section id="connectSection" style="display:none;">
                        <h2 style="font-weight: 600;">Birdchat AI Settings</h2>
                        <div class="d-flex" style="justify-content: space-between; align-items: center;">
                            <div class="">
                                <div class="column">
                                    <h3 style="font-weight: 400;">Birdchat AI Settings</h3>
                                    <p>Use birdchat AI to translate, shorten, lengthen and change the tone of voice of
                                        your messages before sending them.</p>
                                </div>
                            </div>
                            <label class="toggle-switch">
                                
                                <span class="toggle-slider round"></span>
                            </label>
                        </div>
                        <div class="d-flex" style="justify-content: space-between; align-items: center;">
                            <div class="">
                                <div class="column">
                                    <h3 style="font-weight: 400;">AI Smart Reply</h3>
                                    <p>Instruct Birdchat AI to generate smart reply suggestions in chat by importing
                                        data sources and training materials.</p>
                                </div>
                            </div>
                            <label class="toggle-switch">
                                
                                <span class="toggle-slider round"></span>
                            </label>
                        </div>
                    </section>

                </main>
            </section>
            <?php
            echo '</div>'; // Closing main-content div
            ?>

        </div>
    </div>
    <script>
        function loadContent(pageName) {
            var sections = document.querySelectorAll('main section');
            sections.forEach(function(section) {
                section.style.display = 'none';
            });

            document.getElementById(pageName + 'Section').style.display = 'block';

            var navItems = document.querySelectorAll('.nav-item');
            navItems.forEach(function(navItem) {
                navItem.classList.remove('active');
            });

            document.getElementById(pageName + 'Link').parentNode.classList.add('active');
        }

        // Initially display the Library section
        document.getElementById('collectSection').style.display = 'block';
        document.getElementById('libraryLink').parentNode.classList.add('active');
    </script>
</body>

</html>

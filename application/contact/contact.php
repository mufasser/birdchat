
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
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title><?php echo $this->config->item('product_name')." | ".$page_title;?></title>
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/favicon.png"> 
    <?php 
    include(FCPATH.'application/views/include/new.php'); 
    include(FCPATH.'application/views/include/js_include_back.php');
    ?>
</head>
<!-- <style> 

        /* .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
           
            background-color: #f8f9fa;
          
           
          
            height: 100vh;
           
            width: 300px;
        }

        .sidebar h2 {
            margin-top: 0;
        }

        .sidebar-menu{
                padding: 0;
    margin: 20px 0 0 0;
    list-style: none;
    

        }

        .sidebar ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .sidebar li {
            margin-bottom: 10px;
        }

        .sidebar a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: #333;
        }
        a img{
                height: 88px;
                width: 152px;
        }
        .navbar{
	         Type: "Button primary";
            Size: "sm";
            Full width: False;
            Breakpoint: "Desktop";
                width: Fixed (1,080px)px;
            height: Hug (84px)px;
            padding: var(--containermd);
            gap: var(--spacing-md);
            border: 0px 0px 1px 0px;
                opacity: 0px;
                border-bottom: 1px solid var(--Border-Base-main, #D1D5DB); 

         }
       .navpill{
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
        
        

       
       
   
    

        

    </style> */-->
    <style>
         .navbar{
	         Type: "Button primary";
            Size: "sm";
            Full width: False;
            Breakpoint: "Desktop";
                width: Fixed (1,080px)px;
            height: Hug (84px)px;
            padding: var(--containermd);
            gap: var(--spacing-md);
            border: 0px 0px 1px 0px;
                opacity: 0px;
                border-bottom: 1px solid var(--Border-Base-main, #D1D5DB); 
                margin-top: -81px;

         }
       .navpill{
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
        
        
       
    </style>

<body class="hold-transition  layout-fixed" style="height: auto; background-color: #fff;">
                    <div id="app">
	    <div class="main-wrapper">
			<?php 
			$menus = $this->basic->get_data('menu', '', '', '', '', '', 'serial asc');
              $data['menus']=$menus;
            // include(FCPATH.'application/views/admin/theme/header.php');
			include(FCPATH.'application/views/admin/theme/sidebar.php');
		
			?>
		</div>
	</div>
    
<section >
	
	<header class="container ">
      <nav class=navbar>
        <ul class="nav nav-pills navpill justify-content-start">
                 <li class="nav-item active"><a class="nav-link" href="#" onclick="loadContent('collect')">All Contacts</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" onclick="loadContent('connect')">My Contacts</a></li>
                    
        </ul>
     </nav>
 
	</header>
</section> 
<main id="mainContent" class="container py-4 card" style="margin-right: 686px; margin-top: 80px; ">
        <section id="collectSection" style="display:none; " class="row custom-row" >
                 <header class="container py-3 d-flex justify-content-between align-items-center border-bottom">
        <h1>Contacts</h1>
        <div class="d-flex">
            <input type="text" class="form-control me-2" placeholder="Search">
            <button type="button" class="btn btn-primary">+</button>
        </div>
    </header>
    
    <main  class="container py-4">
        
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col" >
                            <input type="checkbox" class="form-check-input me-1">
                        </th>
                        <th scope="col">Name</th>
                        <th scope="col">Labels</th>
                        <th scope="col">Lists</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Company N.</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <input type="checkbox" class="form-check-input me-1">
                        </td>
                        <td>Jane Cooper</td>
                        <td>In Progress [Tem] VIP</td>
                        <td>-</td>
                        <td>tanya.hill@example.com</td>
                        <td>(302) 555-0107</td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" class="form-check-input me-1">
                        </td>
                        <td>Robert Fox</td>
                        <td>In Progress [Tem] Pending</td>
                        <td>-</td>
                        <td>jackson.graham@example.com</td>
                        <td>(208) 555-0112</td>
                        <td>30</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-between align-items-center">
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
            <div class="text-muted">Showing 1-10 of 50 items</div>
        </div>
    </main> 
        </section>
        <section id="connectSection" style="display:none;">
              
        </section>
        <section id="convertSection" style="display:none;">
            <!-- Content for Convert section -->
            <h2>Convert Info</h2>
            <p>This is the convert info content...</p>
        </section>
        <section id="automationSection" style="display:none;">
            <!-- Content for Automation section -->
            <h2>Automation Info</h2>
            <p>This is the automation info content...</p>
        </section>
        <section id="customizeSection" style="display:none;">
            <!-- Content for Customize section -->
            <h2>Customize Info</h2>
            <p>This is the customize info content...</p>
        </section>
    </main>

    <!-- <header class="container py-3 d-flex justify-content-between align-items-center border-bottom">
        <h1>Contacts</h1>
        <div class="d-flex">
            <input type="text" class="form-control me-2" placeholder="Search">
            <button type="button" class="btn btn-primary">+</button>
        </div>
    </header>
    
    <main  class="container py-4">
        
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col" >
                            <input type="checkbox" class="form-check-input me-1">
                        </th>
                        <th scope="col">Name</th>
                        <th scope="col">Labels</th>
                        <th scope="col">Lists</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Company N.</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <input type="checkbox" class="form-check-input me-1">
                        </td>
                        <td>Jane Cooper</td>
                        <td>In Progress [Tem] VIP</td>
                        <td>-</td>
                        <td>tanya.hill@example.com</td>
                        <td>(302) 555-0107</td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" class="form-check-input me-1">
                        </td>
                        <td>Robert Fox</td>
                        <td>In Progress [Tem] Pending</td>
                        <td>-</td>
                        <td>jackson.graham@example.com</td>
                        <td>(208) 555-0112</td>
                        <td>30</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-between align-items-center">
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
            <div class="text-muted">Showing 1-10 of 50 items</div>
        </div>
    </main> -->
    <script>
        // JavaScript function to load content based on the selected navigation item
function loadContent(pageName) {
    
    var sections = document.querySelectorAll('main section');
    sections.forEach(function(section) {
        section.style.display = 'none';
    });

   
    document.getElementById(pageName + 'Section').style.display = 'block';

    
    var navItems = document.querySelectorAll('#navList .nav-item');
    navItems.forEach(function(navItem) {
        navItem.classList.remove('active');
    });

    document.getElementById(pageName + 'Link').parentNode.classList.add('active');
}


document.getElementById('collectSection').style.display = 'block';


document.getElementById('collectLink').parentNode.classList.add('active');

    </script>
</body>

</html>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">



    <title>Contacts</title>
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
        border-bottom: 1px solid var(--Border-Base-main, #D1D5DB);
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
        background: var(--Background-success-Muted, #F0FDF4);
         color: var(--Content-Success-main, #166534);
        
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
                    <nav class=navbar>
                        <ul class="nav nav-pills navpill justify-content-start">
                            <li class="nav-item "><a class="nav-link" href="#"
                                    onclick="loadContent('collect')">All
                                    Contacts</a></li>
                            <li class="nav-item"><a class="nav-link" href="#" onclick="loadContent('connect')">My
                                    Contacts</a></li>

                        </ul>
                    </nav>

                </header>

                <main id="mainContent" class="container py-4 " style="margin-right: 550px; margin-top: -27px; ">

                    <head id="collectSection" style="display:none; " class="row custom-row">
                        <header class="container py-3 d-flex justify-content-between align-items-center ">
                            <h2 style="    font-weight: 500;">Edit Contact <?php echo $id ?> <span class="minibadge ">12</span></h2>
                            <div class="d-flex ">
                                <div class="d-flex text-aligh-center">
                                    <!-- <i class="fa fa-search" aria-hidden="true"></i> -->

                                    <input type="text" class="form-control   "style=" font-family: Inter;" placeholder="Search">
                                </div>

                                <div class="d-flex  ">
                                    <button type="button"
                                        style="margin-left:15px ;background-color: #FFFFFF; border: 2px solid var(--Border-Base-subtle, #E5E7EB) ;width: 40px; border-radius: 10px;  "
                                        class=""><i class="fa fa-filter" style="color : black"></i></button>
                                    <button type="button"
                                        style="margin-left:9px ;background-color: #FFFFFF; border: 2px solid var(--Border-Base-subtle, #E5E7EB) ;width: 40px; border-radius: 10px;  "
                                        class=""><i class="fa fa fa-pencil-square-o"
                                            style="color : black"></i></button>
                                        <?= anchor('contacts/create', '<i class="fa fa-plus" style="color: black"></i>', ['class' => 'btn btn-light']); ?>

                                    


                                </div>
                            </div>
                        </header>

                        <main class="container  " style="    border: 1px solid #ccc;border-radius: 17px; padding: 0;">

                            <div class="table-responsive">
                                <table class="table ">
                                    <thead>
                                        <tr style="">
                                            <th scope="col">
                                                <input type="checkbox" class="form-check-input me-1"
                                                    style="margin-left: -4px;">
                                            </th>
                                            <th scope="col">Names</th>
                                            <th scope="col">Labels</th>
                                            <th scope="col">Lists</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Phone Number</th>
                                            <th scope="col">Company N.</th>
                                        </tr>
                                    </thead>
                                    <tbody style="">
                                        <tr>
                                            <td>
                                                <input type="checkbox" class="form-check-input me-1"
                                                    style="margin-left: -4px;">
                                            </td>
                                            <td>Jane Cooper</td>
                                            <td><span class="minibadged ">in progress</span></td>
                                            <td>vip</td>
                                            <td>tanya.hill@example.com</td>
                                            <td>(302) 555-0107</td>
                                            <td>30</td>
                                        </tr>
                                        <tr style="">
                                            <td>
                                                <input type="checkbox" class="form-check-input me-1"
                                                    style="margin-left: -4px;">
                                            </td>
                                            <td>Robert Fox</td>
                                            <td><span class="minibadged ">in progress</span></td>
                                            <td>Vip</td>
                                            <td>jackson.graham@example.com</td>
                                            <td>(208) 555-0112</td>
                                            <td>30</td>
                                        </tr>
                                        <tr style="">
                                            <td>
                                                <input type="checkbox" class="form-check-input me-1"
                                                    style="margin-left: -4px;">
                                            </td>
                                            <td>Robert Fox</td>
                                            <td><span class="minibadged ">in progress</span></td>
                                            <td>Vip</td>
                                            <td>jackson.graham@example.com</td>
                                            <td>(208) 555-0112</td>
                                            <td>30</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex justify-content-between align-items-center"
                                style="border-top: 1px solid #ccc;padding-top: 17px;">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination" style="align-items: center;     padding-left: 18px;">
                                        <li class="page-item disabled">
                                            <!-- <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a> -->
                                            <a href="" style="text-decoration: none;" class="prev-button"><i class="fa fa-angle-left" aria-hidden="true"></i>
                                                Previous</a>
                                        </li>
                                        <div style="margin-left: 13px;" class="">Showing 1-10 of 50 items</div>
                                    </ul>
                                </nav>
                                <div>
                                    <ul class="pagination">
                                        <li class="page-item active">
                                            <a  class="page-link" style="background-color: #3730A3;border-color: #3730A3;" href="#">1</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>

                                        <li class="page-item disabled" style="padding-right: 16px;">
                                            <!-- <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a> -->

                                            <a href="" style="text-decoration: none; "
                                                class="prev-button">Next
                                                 <i class="fa fa-angle-right" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </main>
                    </head>

                    <head id="connectSection" style="display:none;">

                    </head>

                </main>
            </section>
            <?php
            echo '</div>'; // Closing main-content div
            ?>

        </div>
    </div>
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

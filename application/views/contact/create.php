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
                            <li class="nav-item"><a class="nav-link" href="#" onclick="loadContent('connect')">Create</a></li>

                        </ul>
                    </nav>

                </header>

                <main id="mainContent" class="container py-4 " style="margin-right: 550px; margin-top: -27px; ">

                    <head id="collectSection" style="display:none; " class="row custom-row">
                        <header class="container py-3 d-flex justify-content-between align-items-center ">
                            <h2 style="    font-weight: 500;">Create Contact </h2>
                            
                        </header>

                        <main class="container  " style="    border: 1px solid #ccc;border-radius: 17px; padding: 0;">

                            
                        <form class="form-horizontal" action="<?php echo site_url().'admin/add_user_action';?>" method="POST">

                            <input type="hidden" name="csrf_token" id="csrf_token" value="<?php echo $this->session->userdata('csrf_token_session'); ?>">

                            <div class="card">

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">

                                            <label for="name"> <?php echo $this->lang->line("First Name")?> </label>

                                            <input name="name" value="<?php echo set_value('first_name');?>"  class="form-control" type="text">

                                            <span class="red"><?php echo form_error('first_name'); ?></span>

                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">

                                            <label for="name"> <?php echo $this->lang->line("Last Name")?> </label>

                                            <input name="name" value="<?php echo set_value('last_name');?>"  class="form-control" type="text">

                                            <span class="red"><?php echo form_error('last_name'); ?></span>

                                            </div>
                                        </div>
                                    </div>
                                    

                                    <div class="row">
                                        <?php

                                            $labels = [
                                                'vip' => 'VIP',
                                                'paid' => 'PAID',
                                                'issue' => 'ISSUE',
                                            ]
                                        ?>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="package_id"> <?php echo $this->lang->line("Package")?> *</label>
                                                <?php echo form_dropdown('label_id', $labels, '1','class="form-control select2"'); ?>                  
                                                <span class="red"><?php echo form_error('package_id'); ?></span>
                                            </div>
                                        </div>

                                        <div class="col-6">

                                            <div class="form-group">

                                            <label for="mobile"><?php echo $this->lang->line("Mobile")?></label>              

                                            <input name="mobile" value="<?php echo set_value('mobile');?>"  class="form-control" type="text">

                                            <span class="red"><?php echo form_error('mobile'); ?></span>               

                                            </div>

                                        </div>  

                                    </div>



                                    <div class="col-12 col-md-6">

                                        <div class="form-group">

                                            <label for="status" > <?php echo $this->lang->line('Status');?></label><br>

                                            <label class="custom-switch mt-2">

                                            <input type="checkbox" name="status" value="1" class="custom-switch-input" checked>

                                            <span class="custom-switch-indicator"></span>

                                            <span class="custom-switch-description"><?php echo $this->lang->line('Active');?></span>

                                            <span class="red"><?php echo form_error('status'); ?></span>

                                        </label>

                                        </div>

                                    </div>   
                                    
                                    <hr>

                                    <header class="container py-3 d-flex justify-content-between align-items-center ">
                                        <h2 style="    font-weight: 500;">Additional information </h2>
                                        
                                    </header>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">

                                            <label for="name"> <?php echo $this->lang->line("Email")?> </label>

                                            <input name="name" value="<?php echo set_value('email');?>"  class="form-control" type="text">

                                            <span class="red"><?php echo form_error('email'); ?></span>

                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">

                                            <label for="name"> <?php echo $this->lang->line("Company Name")?> </label>

                                            <input name="name" value="<?php echo set_value('company_name');?>"  class="form-control" type="text">

                                            <span class="red"><?php echo form_error('company_name'); ?></span>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">

                                            <label for="name"> <?php echo $this->lang->line("Job Title")?> </label>

                                            <input name="name" value="<?php echo set_value('job_title');?>"  class="form-control" type="text">

                                            <span class="red"><?php echo form_error('job_title'); ?></span>

                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">

                                            <label for="name"> <?php echo $this->lang->line("Lead Stage")?> </label>

                                            <input name="name" value="<?php echo set_value('lead_stage');?>"  class="form-control" type="text">

                                            <span class="red"><?php echo form_error('lead_stage'); ?></span>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">

                                            <label for="name"> <?php echo $this->lang->line("LEAD SOURCE")?> </label>

                                            <input name="name" value="<?php echo set_value('lead_source');?>"  class="form-control" type="text">

                                            <span class="red"><?php echo form_error('lead_source'); ?></span>

                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">

                                            <label for="name"> <?php echo $this->lang->line("Priority")?> </label>

                                            <input name="name" value="<?php echo set_value('Priority');?>"  class="form-control" type="text">

                                            <span class="red"><?php echo form_error('Priority'); ?></span>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">

                                            <label for="name"> <?php echo $this->lang->line("Subscriber")?> </label>

                                            <input name="name" value="<?php echo set_value('subscriber');?>"  class="form-control" type="text">

                                            <span class="red"><?php echo form_error('subscriber'); ?></span>

                                            </div>
                                        </div>
                                    </div>
                                    <hr>

                                    <header class="container py-3 d-flex justify-content-between align-items-center ">
                                        <h2 style="    font-weight: 500;">Add to list </h2>
                                        
                                    </header>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">

                                            <label for="name"> <?php echo $this->lang->line("Subscriber")?> </label>

                                            <input name="name" value="<?php echo set_value('subscriber');?>"  class="form-control" type="text">

                                            <span class="red"><?php echo form_error('subscriber'); ?></span>

                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>



                                <!-- <div class="row" id="hidden">

                                <div class="col-6">

                                    <div class="form-group">

                                    <label for="package_id"> <?php echo $this->lang->line("Package")?> *</label>

                                    <?php echo form_dropdown('package_id', $packages, '1','class="form-control select2"'); ?>                  

                                    <span class="red"><?php echo form_error('package_id'); ?></span>

                                    </div>

                                </div>

                                <div class="col-6">

                                    <?php $expired_date_default = date('Y-m-d H:i:s', strtotime(date("Y-m-d H:i:s"). ' + 7 days'));

                                    ?>

                                    <div class="form-group">

                                    <label for="expired_date"> <?php echo $this->lang->line("Expiry Date")?> *</label>

                                    <input name="expired_date" value="<?php echo (set_value('expired_date')!="") ? set_value('expired_date') : $expired_date_default;?>"  required class="form-control datepicker" type="text">

                                    <span class="red"><?php echo form_error('expired_date'); ?></span>
                                    </div>
                                </div>
                                </div> -->
                            
                            
                                <hr>
                                <div class="card-footer bg-whitesmoke">
                                    <button name="submit" type="submit" class="btn btn-primary btn-lg"><i class="fas fa-save"></i> <?php echo $this->lang->line("Save");?></button>
                                    <button  type="button" class="btn btn-secondary btn-lg float-right" onclick='goBack("admin/user_manager",0)'><i class="fa fa-remove"></i> <?php echo $this->lang->line("Cancel");?></button>
                                </div>
                            </div>

                        </form>  
                        </main>
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

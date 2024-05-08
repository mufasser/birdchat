<head>
    <style>
        .login-brandd {
  margin: 20px -20;
  margin-bottom: 40px;
  font-size: 24px;
  text-transform: uppercase;
  letter-spacing: 4px;
  color: #666;
 
}
    </style>
</head>
<div class="container mt-5">
    <div class="row">
        <!-- Login Section and Footer -->
        <div class="col-12 col-lg-5" style="max-width: 600px; margin: 0 auto;">
            <div>
                <div class="login-brandd">
                    <a href="<?php echo base_url();?>"><img src="<?php echo base_url(); ?>assets/img/logo.png" alt="<?php echo $this->config->item('product_name');?>" width="200"></a>
                </div>
                <div class=" card-primary">
                    <div class="">
                        <h4 style=" color:#101828 ;font-family: Inter; font-size: 36px; font-weight: 600; line-height: 44px; letter-spacing: -0.02em; text-align: left"><i class=""></i> <?php echo $is_exist_team_member_addon && $is_team_login=='1' ? $this->lang->line("Team Login") : $this->lang->line("Login"); ?></h4>
                       <p style=" width: 360px; height: 24px; font-family: Inter; font-size: 14px; font-weight: 300; line-height: 24px;  text-align: left; color: #475467;">Welcome back! Please enter your details.</p>
                    </div>
                    <?php
                        if($this->session->userdata('login_msg')!='')
                        {
                            echo "<div class='alert alert-danger text-center'>";
                                echo $this->session->userdata('login_msg');
                            echo "</div>";
                            $this->session->unset_userdata('login_msg');
                        }
                        if($this->session->flashdata('reset_success')!='')
                        {
                            echo "<div class='alert alert-success text-center'>";
                                echo $this->session->flashdata('reset_success');
                            echo "</div>";
                        }
                        if($this->session->userdata('reg_success') != ''){
                            echo '<div class="alert alert-success text-center">'.$this->session->userdata("reg_success").'</div>';
                            $this->session->unset_userdata('reg_success');
                        }
                        if(form_error('username') != '' || form_error('password')!="" )
                        {
                            $form_error="";
                            if(form_error('username') != '') $form_error.=form_error('username');
                            if(form_error('password') != '') $form_error.=form_error('password');
                            echo "<div class='alert alert-danger text-center'>".$form_error."</div>";

                        }

                        $default_user = $default_pass ="";
                        if($this->is_demo=='1'){
                            $default_pass="123456";
                        }
                    ?>
                    <div class="">
                        <form method="POST" action="<?php echo $is_exist_team_member_addon && $is_team_login=='1' ? base_url('home/login/1') : base_url('home/login'); ?>" class="needs-validation" novalidate="">
                            <input type="hidden" name="csrf_token" id="csrf_token" value="<?php echo $this->session->userdata('csrf_token_session'); ?>">
                            <div class="form-group">
                                <label for="email"><?php echo $is_exist_team_member_addon && $is_team_login=='1' ? $this->lang->line("Email") : $this->lang->line("Email"); ?></label>
                                <input id="email" type="text" class="form-control" value="<?php echo $default_user;?>" name="username" tabindex="1" required autofocus>
                            </div>

                            <div class="form-group">
                                <div class="d-block">
                                    <label for="password" class="control-label"><?php echo $this->lang->line("Password"); ?></label>
                                    
                                </div>
                                <input id="password" type="password" class="form-control" value="<?php echo $default_pass;?>" name="password" tabindex="2" required>
                                  
                            </div>
                            <div class="d-flex justify-content-between ">
                              <p class="text-muted text-small ">rember this password for 30 days</p>
                              <?php if(!$is_exist_team_member_addon || $is_team_login=='0'):?>
                                        <div class="float-right text-color-yellow mb-0">
                                            <a href="<?php echo site_url();?>home/forgot_password" class="text-small" style="color:#6941C6;font-family: Inter; font-size: 14px; font-weight: 600; line-height: 20px; text-align: left; ">
                                                <?php echo $this->lang->line("Forgot your password?"); ?>
                                            </a>
                                        </div>
                                    <?php endif;?>
                            </div>
                          

                            <div class="form-group">
                                <button type="submit" style="background-color:#7F56D9 " class="  btn-lg btn-block " tabindex="4">
                                    <i class=""></i> <?php echo $is_exist_team_member_addon && $is_team_login=='1' ? $this->lang->line("Team Login") : $this->lang->line("Sign in"); ?>
                                </button>
                            </div>
                        </form>

                        <?php if($this->config->item('enable_signup_form')!='0' && ($is_team_login=='0'|| !$is_exist_team_member_addon)) : ?>
                            <div class="  btn-lg btn-block">
                                <div class="    btn-lg btn-block">
                                    <?php echo str_replace("ThisIsTheLoginButtonForGoogle",$this->lang->line("Sign in with Google"), $google_login_button); ?>
                                </div>
                                <div class=" btn-lg btn-block ">
                                    <?php echo $fb_login_button2=str_replace("ThisIsTheLoginButtonForFacebook",$this->lang->line("Sign in with Facebook"), $fb_login_button); ?>
                                </div>
                            </div>
                        <?php endif;?>

                        <div class="row sm-gutters">
                            <div class="col-12">

                                <?php if($is_team_login=='0' || !$is_exist_team_member_addon):?>

                                    <?php if($this->config->item('enable_signup_form')!='0'):?>
                                        <div class="text-muted text-center">
                                            <?php echo $this->lang->line("Do not have an account?"); ?> <a href="<?php echo base_url('home/sign_up'); ?>"><?php echo $this->lang->line("Create one"); ?></a>
                                        </div>
                                    <?php endif;?>

                                    <?php if($is_team_login=='0' && $is_exist_team_member_addon):?>
                                        <div class="text-muted text-center">
                                            <a href="<?php echo base_url('home/login/1'); ?>"><?php echo $this->lang->line("Login as Team"); ?></a>
                                        </div>
                                    <?php endif;?>

                                <?php endif;?>

                                <?php if($is_team_login=='1' &&$is_exist_team_member_addon):?>
                                    <div class="text-muted text-center">
                                        <a href="<?php echo base_url('home/login'); ?>"><?php echo $this->lang->line("Login as User"); ?></a>
                                    </div>
                                <?php endif;?>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Footer -->
            <footer class="text-center mt-4">
                <p>&copy; <?php echo date('Y'); ?> Your Company. All rights reserved.</p>
            </footer>
        </div>

        <!-- Image Section -->
        <div class="col-lg-7  d-lg-block">
            <img src="<?php echo base_url(); ?>assets/Section.png" style="height: 99vh;margin-top: -46px; margin-left: 152px; width: 139%;"  alt="Image">
        </div>
    </div>
</div>


<?php
$current_theme = $this->config->item('current_theme');
if($current_theme == '') $current_theme = 'modern';
$style_url = "application/views/site/".$current_theme."/login_style.php";
include($style_url);
?>
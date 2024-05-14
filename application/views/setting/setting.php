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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

    <title>Setting</title>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.png">
    <?php
    include FCPATH . 'application/views/include/new.php';
    include FCPATH . 'application/views/include/js_include_back.php';
    ?>
</head>

<style>
    /* responsive */

    /* responsive */


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

    .minibadged {
        font-size: small;
        background: var(--Background-success-Muted, #F0FDF4);
        color: var(--Content-Success-main, #166534);

        border-radius: 50px;
    }

    .second-header {
        display: flex;
        list-style: none;
        padding: 2px;
        margin-bottom: -4px;
        border-bottom: aqua;
    }

    .second-header li.active {
        color: blue;

        /* Change color as desired */
    }

    /* Style for the bar underneath */
    .second-header li.active::after {
        content: "";
        display: block;
        width: 100%;
        height: 3px;
        /* Adjust thickness of the bar */
        background-color: blue;
        /* Change color as desired */
    }

    .nav-link {
        color: #667085 !important;
        /* Your desired text color */
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
    input[type="checkbox"]:checked+.toggle-switch .toggle-slider {
        background-color: #2196F3;
    }

    /* Checked state of slider */
    input[type="checkbox"]:checked+.toggle-switch .toggle-slider:before {
        transform: translateX(26px);
    }

    .btn-primarye {
        background: linear-gradient(90deg, #2285C7 -2.34%, #2C3C8A 100%);
        color: white;
    }

    .input-field:focus {
        outline: none;
        /* Remove default focus outline */
        border-width: 1px;
        /* Reset border width */
    }

    .iti__flag-container {
        left: -49px !important;
    }

    .iti__country-list {
        width: 408px !important;
    }
</style>
<style>
    /* Custom CSS to change active text color and add bottom border */
    .nav-link.active {
        color: #3730A3 !important;
        /* Change active text color */
        border-bottom: 2px solid #3730A3;

        /* Add bottom border */
    }

    li.list-group-item {
        border: none !important;
        /* or border: 0 !important; */
    }
</style>
<!-- meida query of plan and pricing -->
<!-- <style>
    /* Your existing CSS styles */

    /* Media query for screens smaller than 576px (typical mobile screens) */
    @media (max-width: 575.98px) {
        .pricing-card {
            width: 100%;
            margin-bottom: 20px;
        }
    }

    /* Media query for screens between 576px and 767.98px (smaller tablets and larger mobile screens) */
    @media (min-width: 576px) and (max-width: 767.98px) {
        .pricing-card {
            width: 100%;
            margin-bottom: 20px;
        }
    }

    /* Media query for screens between 768px and 991.98px (larger tablets and smaller laptops) */
    @media (min-width: 768px) and (max-width: 991.98px) {
        .pricing-card {
            width: calc(50% - 20px);
            margin-right: 20px;
            margin-bottom: 20px;
        }

        .pricing-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
    }

    /* Media query for screens between 992px and 1199.98px (larger laptops and smaller desktops) */
    @media (min-width: 992px) and (max-width: 1199.98px) {
        .pricing-card {
            width: calc(33.333% - 20px);
            margin-right: 20px;
            margin-bottom: 20px;
        }

        .pricing-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
    }

    /* Media query for screens larger than 1200px (typical desktop screens) */
    @media (min-width: 1200px) {
        /* Adjust your styles for larger screens here */
    }
</style> -->
<!-- 2nd navbar -->
<style>

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
                            <li class="nav-item"><a id="ProfileLink" class="nav-link" href="#ProfileSection"
                                    onclick="loadContent('Profile')">Profile</a></li>
                            <li class="nav-item"><a id="PasswordLink" class="nav-link" href="#PasswordSection"
                                    onclick="loadContent('Password')">Password</a></li>
                            <li class="nav-item"><a id="Company-DetailsLink" class="nav-link"
                                    href="#Company-DetailsSection" onclick="loadContent('Company-Details')">Company
                                    Details</a></li>
                            <li class="nav-item"><a id="User-ManagementsLink" class="nav-link"
                                    href="#User-ManagementsSection" onclick="loadContent('User-Managements')">User
                                    Managements</a></li>
                            <li class="nav-item"><a id="Plans-and-BillingsLink" class="nav-link"
                                    href="#Plans-and-BillingsSection" onclick="loadContent('Plans-and-Billings')">Plans
                                    and Billings</a></li>
                            <li class="nav-item"><a id="Inbox-SettingsLink" class="nav-link"
                                    href="#Inbox-SettingsSection" onclick="loadContent('Inbox-Settings')">Inbox
                                    Settings</a></li>
                            <li class="nav-item"><a id="Custom-ObjectsLink" class="nav-link"
                                    href="#Custom-ObjectsSection" onclick="loadContent('Custom-Objects')">Custom
                                    Objects</a></li>

                            <li class="nav-item"><a id="System-PreferenceLink" class="nav-link"
                                    href="#System-PreferenceSection" onclick="loadContent('System-Preference')">System
                                    Preference</a></li>
                        </ul>
                    </nav>
                </header>

                <main id="mainContent" class="container py-4 " style="margin-right: 550px; margin-top: -27px; ">
                    <!-- profile  section    open -->
                    <section id="ProfileSection" style="display:none;" class="container">
                        <div class="mt-3" style="margin-bottom: 34px; border-bottom: 1px solid #ccc;">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-md-auto d-flex align-items-center"
                                    style="  flex-direction: column; padding: 0;">
                                    <p
                                        style="margin-right: 168px ;  font-size: 17px; font-weight: 500;     margin-bottom: 0px">
                                        Personal info</p>
                                    <p class="ms-3">Update your photo and personal details here.</p>
                                </div>
                                <div class="col-md-auto">
                                    <div class="input-group">
                                        <button class="btn btn-secondary me-2"
                                            style="border-radius: 10px;">Cancel</button>
                                        <button class="btn btn-primary"
                                            style="border-radius: 10px;background: #2C3C8A;border: #2C3C8A;"
                                            type="button">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <p>Your photo<svg style="height:22px" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                                    </svg>
                                </p>
                                <p>This will be displayed on your profile.</p>
                            </div>
                            <div class="col-md-4">
                                <img src="<?php echo base_url('assets/images/img/setting-profile.png'); ?>" style="height: 80px; width: 80px;">
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="row justify-content-center">
                                        <div class="">
                                            <div class="text-center">
                                                <img src="http://100dayscss.com/codepen/upload.svg"
                                                    class="upload-icon" />
                                                <input type="file" id="fileInput" accept=".svg, .png, .jpg, .gif"
                                                    style="display: none;">
                                            </div>
                                            <div class="text-center mt-2">
                                                <p><span>Click here to upload</span> or drag and drop</p>
                                                <p>SVG, PNG, JPG, or GIF (max. 800x400px)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="g-col-4">Name</div>
                            <div class="">
                                <input type="text" class="input-field"
                                    style="border: 1px solid #ccc; width: 192px; border-radius: 7px; height: 31px; ;padding-left: 13px;"
                                    placeholder="Johnson" />
                            </div>
                            <div class="g-col-4">
                                <input type="text" class="input-field"
                                    style="border: 1px solid #ccc; width: 192px; border-radius: 7px; height: 31px; ;padding-left: 13px; ;padding-left: 13px;"
                                    placeholder="Sier" />
                            </div>
                        </div>
                        <div class="grid "style="padding-top:16px">
                            <div class="g-col-4">Email address</div>

                            <div class="g-col-4">
                                <input type="text" class="input-field"
                                    style="border: 1px solid #ccc;width: 407px;border-radius: 7px;height: 31px;margin-left: -46px; ;padding-left: 13px;"
                                    placeholder="Sier" />
                            </div>
                        </div>
                        <div class="grid "style="padding-top:16px">
                            <div class="g-col-4">Username</div>

                            <div class="g-col-4">
                                <input type="text" class="input-field"
                                    style="border: 1px solid #ccc;width: 407px;border-radius: 7px;height: 31px;margin-left: -46px; ;padding-left: 13px;"
                                    placeholder="ad_jon" />
                            </div>
                        </div>
                        <div class="grid "style="padding-top:16px">
                            <div class="g-col-4">Phone Number </div>

                            <div class="g-col-4">
                                <input id="phone" type="tel" name="" class="input-field"
                                    style="border: 1px solid #ccc;width: 407px;border-radius: 7px;height: 31px;margin-left: -46px; ;padding-left: 40px;"
                                    placeholder="+222 2323287" />

                                <!-- <input type="text" class="input-field"
                                    style="border: 1px solid #ccc;width: 407px;border-radius: 7px;height: 31px;margin-left: -46px; ;padding-left: 13px;"
                                    placeholder="+222 2323287" /> -->
                            </div>
                        </div>
                        <div class="grid "style="padding-top:16px">
                            <div class="g-col-4">Position </div>

                            <div class="g-col-4">
                                <input type="text" class="input-field"
                                    style="border: 1px solid #ccc;width: 407px;border-radius: 7px;height: 31px;margin-left: -46px; ;padding-left: 13px;"
                                    placeholder="" />
                            </div>
                        </div>
                        <div class="grid "style="padding-top:16px">
                            <div class="g-col-4">Unique Link </div>

                            <div class="g-col-4">
                                <input type="text" class="input-field"
                                    style="border: 1px solid #ccc;width: 407px;border-radius: 7px;height: 31px;margin-left: -46px; ;padding-left: 13px;"
                                    placeholder="" />
                            </div>
                        </div>
                        <!-- Input fields -->
                    </section>
                    <!-- profile  section     end -->

                    <!-- password section    open -->
                    <section id="PasswordSection" style="display:none;">
                        <div class="mt-3" style="margin-bottom: 34px; border-bottom: 1px solid #ccc;">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-md-auto d-flex align-items-center"
                                    style="  flex-direction: column; padding: 0;">
                                    <p
                                        style="margin-right: 289px ;  font-size: 17px; font-weight: 500;     margin-bottom: 0px">
                                        Password </p>
                                    <p class="ms-3">Please enter your current password to change your password.</p>
                                </div>
                                <div class="col-md-auto">
                                    <div class="input-group">
                                        <button class="btn btn-secondary me-2"
                                            style="border-radius: 10px;">Cancel</button>
                                        <button class="btn btn-primary"
                                            style="border-radius: 10px;background: #2C3C8A;border: #2C3C8A;"
                                            type="button">Update Password</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid "style="padding-top:16px">
                            <div class="g-col-4">Current password </div>

                            <div class="g-col-4">
                                <input type="text" class="input-field"
                                    style="border: 1px solid #ccc;width: 407px;border-radius: 7px;height: 31px;margin-left: -46px; ;padding-left: 13px;"
                                    placeholder="************" />
                            </div>
                        </div>
                        <div class="grid" style="padding-top: 16px">
                            <div class="g-col-4">New password</div>
                            <div class="g-col-4">
                                <input type="password" class="input-field" id="newPassword"
                                    style="border: 1px solid #ccc; width: 407px; border-radius: 7px;  height: 31px; margin-left: -46px; padding-left: 13px;"
                                    placeholder="************" oninput="validatePassword()" />
                                <span id="passwordError" style="color: #ccc; display: none;margin-left: -38px;">
                                    Your new password must be more than 8 characters.
                                </span>
                            </div>
                        </div>
                        <div class="grid "style="padding-top:16px">
                            <div class="g-col-4">Confirm new password </div>

                            <div class="g-col-4">
                                <input type="text" class="input-field"
                                    style="border: 1px solid #ccc;width: 407px;border-radius: 7px;height: 31px;margin-left: -46px; ;padding-left: 13px;"
                                    placeholder="************" />
                            </div>
                        </div>

                    </section>
                    <!-- password section    end -->


                    <!-- Company Details section    start -->
                    <section id="Company-DetailsSection" style="display:none;">
                        <div class="mt-3" style="margin-bottom: 34px; border-bottom: 1px solid #ccc;">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-md-auto d-flex align-items-center"
                                    style="  flex-direction: column; padding: 0;">
                                    <p
                                        style="margin-right: 241px ;  font-size: 17px; font-weight: 500;     margin-bottom: 0px">
                                        Company Details </p>
                                    <p class="ms-3">Please enter your current company name and default time zone</p>
                                </div>
                                <div class="col-md-auto">
                                    <div class="input-group">
                                        <button class="btn btn-secondary me-2"
                                            style="border-radius: 10px;">Confirm</button>
                                        <button class="btn btn-primary"
                                            style="border-radius: 10px;background: #2C3C8A;border: #2C3C8A;"
                                            type="button">Reset </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid "style="padding-top:16px">
                            <div class="g-col-4">Company Name </div>

                            <div class="g-col-4">
                                <input type="text" class="input-field"
                                    style="border: 1px solid #ccc;width: 407px;border-radius: 7px;height: 31px;margin-left: -46px; ;padding-left: 13px;"
                                    placeholder="************" />
                            </div>
                        </div>
                        <div class="grid "style="padding-top:16px">
                            <div class="g-col-4">Default Time Zone </div>

                            <div class="g-col-4">
                                <select id="timezoneSelect" class="input-field"
                                    style="border: 1px solid #ccc; width: 407px; border-radius: 7px; height: 31px; margin-left: -46px; padding-left: 13px;">
                                    <!-- Options will be populated dynamically using JavaScript -->
                                </select>
                            </div>

                        </div>
                    </section>
                    <!-- Company Details section    end -->


                    <!-- User Managements section    end -->
                    <section id="User-ManagementsSection" style="display:none;">
                        <main id="mainContent" class="container py-4"
                            style="margin-right: 550px; margin-top: -27px;">
                            <header class="container py-3 d-flex justify-content-between align-items-center">
                                <h2 style="font-weight: 500;">Contacts <span class="minibadge">12</span></h2>
                                <div class="d-flex">
                                    <div class="d-flex text-aligh-center">
                                        <input type="text" class="form-control" style="font-family: Inter;"
                                            placeholder="Search">
                                    </div>
                                    <div class="d-flex">
                                        <button type="button"
                                            style="margin-left:15px ;background-color: #FFFFFF; border: 2px solid var(--Border-Base-subtle, #E5E7EB);width: 40px; border-radius: 10px;"
                                            class=""><i class="fa fa-filter"
                                                style="color : black"></i></button>
                                        <button type="button"
                                            style="margin-left:9px ;background-color: #FFFFFF; border: 2px solid var(--Border-Base-subtle, #E5E7EB);width: 40px; border-radius: 10px;"
                                            class=""><i class="fa fa fa-pencil-square-o"
                                                style="color : black"></i></button>
                                        <button type="button"
                                            style="margin-left:9px ;background-color: #FFFFFF; border: 2px solid var(--Border-Base-subtle, #E5E7EB);width: 40px; border-radius: 10px;"
                                            class=""><i class="fa fa-plus" style="color : black"></i></button>
                                    </div>
                                </div>
                            </header>
                            <div class="container" style="border: 1px solid #ccc; border-radius: 17px; padding: 0;">
                                <div class="table-responsive">
                                    <table class="table">
                                        <!-- Table header -->
                                        <thead>
                                            <tr>
                                                <th scope="col">
                                                    <input type="checkbox" class="form-check-input me-1"
                                                        style="margin-left: -4px;margin-top: -5px;">
                                                </th>
                                                <th scope="col">User</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Teams</th>
                                                <th scope="col">Role</th>
                                                <th scope="col">Position</th>
                                                <th scope="col">Created at</th>
                                            </tr>
                                        </thead>
                                        <!-- Table body -->
                                        <tbody>
                                            <!-- Rows go here -->
                                            <tr>
                                                <td>
                                                    <input type="checkbox" class="form-check-input me-1"
                                                        style="margin-left: -4px;margin-top: -5px;">
                                                </td>
                                                <td>Jane Cooper</td>
                                                <td>tanya.hill@example.com</td>
                                                <td>[Tem] VIP</td>
                                                <td><span class="minibadged">Admin</span></td>
                                                <td>[Tem] VIP</td>
                                                <td>(Mar 20, 2019 23:14)</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" class="form-check-input me-1"
                                                        style="margin-left: -4px;margin-top: -5px;">
                                                </td>
                                                <td>Jane Cooper</td>
                                                <td>tanya.hill@example.com</td>
                                                <td>[Tem] VIP</td>
                                                <td><span class="minibadged">Admin</span></td>
                                                <td>[Tem] VIP</td>
                                                <td>(Mar 20, 2019 23:14)</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" class="form-check-input me-1"
                                                        style="margin-left: -4px;margin-top: -5px;">
                                                </td>
                                                <td>Jane Cooper</td>
                                                <td>tanya.hill@example.com</td>
                                                <td>[Tem] VIP</td>
                                                <td><span class="minibadged">Admin</span></td>
                                                <td>[Tem] VIP</td>
                                                <td>(Mar 20, 2019 23:14)</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" class="form-check-input me-1"
                                                        style="margin-left: -4px;margin-top: -5px;">
                                                </td>
                                                <td>Jane Cooper</td>
                                                <td>tanya.hill@example.com</td>
                                                <td>[Tem] VIP</td>
                                                <td><span class="minibadged">Admin</span></td>
                                                <td>[Tem] VIP</td>
                                                <td>(Mar 20, 2019 23:14)</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" class="form-check-input me-1"
                                                        style="margin-left: -4px;margin-top: -5px;">
                                                </td>
                                                <td>Jane Cooper</td>
                                                <td>tanya.hill@example.com</td>
                                                <td>[Tem] VIP</td>
                                                <td><span class="minibadged">Admin</span></td>
                                                <td>[Tem] VIP</td>
                                                <td>(Mar 20, 2019 23:14)</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" class="form-check-input me-1"
                                                        style="margin-left: -4px;margin-top: -5px;">
                                                </td>
                                                <td>Jane Cooper</td>
                                                <td>tanya.hill@example.com</td>
                                                <td>[Tem] VIP</td>
                                                <td><span class="minibadged">Admin</span></td>
                                                <td>[Tem] VIP</td>
                                                <td>(Mar 20, 2019 23:14)</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" class="form-check-input me-1"
                                                        style="margin-left: -4px;margin-top: -5px;">
                                                </td>
                                                <td>Jane Cooper</td>
                                                <td>tanya.hill@example.com</td>
                                                <td>[Tem] VIP</td>
                                                <td><span class="minibadged">Admin</span></td>
                                                <td>[Tem] VIP</td>
                                                <td>(Mar 20, 2019 23:14)</td>
                                            </tr>

                                            <!-- Add more rows here -->
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Pagination -->
                                <div class="d-flex justify-content-between align-items-center"
                                    style="border-top: 1px solid #ccc;padding-top: 17px;">
                                    <nav aria-label="Page navigation">
                                        <ul class="pagination" style="align-items: center;     padding-left: 18px;">
                                            <li class="page-item disabled">
                                                <!-- <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a> -->
                                                <a href="" style="text-decoration: none;"
                                                    class="prev-button"><i class="fa fa-angle-left"
                                                        aria-hidden="true"></i>
                                                    Previous</a>
                                            </li>
                                            <div style="margin-left: 13px;" class="">Showing 1-10 of 50
                                                items</div>
                                        </ul>
                                    </nav>
                                    <div>
                                        <ul class="pagination">
                                            <li class="page-item active">
                                                <a class="page-link"
                                                    style="background-color: #3730A3;border-color: #3730A3;"
                                                    href="#">1</a>
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
                    </section>
                    <!-- User Managements section    end -->

                    <!--Plans and Billings    end -->
                    <section id="Plans-and-BillingsSection" style="display:none;">
                        <div class="container">
                            <div class="row"style="    margin-bottom: 24px;">
                                <div class="col-lg-12 text-center mt-5">

                                    <div class="btn-group toggle-btn" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-outline-primary active"
                                            data-toggle="billing-cycle" data-value="monthly">Monthly</button>
                                        <button type="button" class="btn btn-outline-primary"
                                            data-toggle="billing-cycle" data-value="yearly">Yearly</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-center pricing-row">
                                <div class="col-md-3">
                                    <div class=" pricing-card">
                                        <div class="header">
                                        </div>
                                        <div class="card-body " style="padding-top:195px">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Accounts</li>
                                                <li class="list-group-item">Customer contacts </li>
                                                <li class="list-group-item">Broadcast messages</li>
                                                <li class="list-group-item">Automation rules</li>
                                                <li class="list-group-item"># of messaging channels </li>
                                                <hr>
                                                <p class=""style="color: #2C3C8A;font-weight: 700;">Advanced
                                                    features </p>

                                                <li class="list-group-item">Zapier & Integromat integration</li>
                                                <li class="list-group-item">Advanced team settings</li>
                                                <li class="list-group-item">Analytics dashboard</li>
                                                <li class="list-group-item">API integration</li>
                                                <li class="list-group-item">Onboarding Support</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class=" pricing-card">
                                        <div class="header">
                                            <h3>Startup</h3>
                                            <p class="lead">Suitable for 4 persons team</p>
                                            <p class="price" data-price="monthly">Free</p>
                                            <button class="btn btn-primary">Current Plan </button>
                                            <!-- <h6 class="text-muted">Monthly Plan</h6> -->
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">5</li>
                                                <li class="list-group-item">120</li>
                                                <li class="list-group-item">20</li>
                                                <li class="list-group-item">10</li>
                                                <li class="list-group-item">10</li>
                                                <hr>
                                                <li class="list-group-item"style="padding-top: 47px;"></li>
                                                <li class="list-group-item">--</li>
                                                <li class="list-group-item">--</li>
                                                <li class="list-group-item">--</li>
                                                <li class="list-group-item">--</li>
                                                <li class="list-group-item">--</li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class=" pricing-card">
                                        <div class="header">
                                            <h3>Pro plan</h3>
                                            <p class="lead">Suitable for 4 persons team</p>
                                            <p class="price" data-price="monthly">$39 <spam class="text-muted">
                                                    /Monthly Plan</spam>
                                            </p>
                                            <button class="btn btn-primary">Upgrade</button>
                                            <!-- <h6 class="text-muted">Monthly Plan</h6> -->
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">10</li>
                                                <li class="list-group-item">200</li>
                                                <li class="list-group-item">50</li>
                                                <li class="list-group-item">20</li>
                                                <li class="list-group-item">20</li>
                                                <hr>
                                                <li class="list-group-item"style="padding-top: 47px;"></li>
                                                <li class="list-group-item">
                                                    <img src="<?php echo base_url('assets/images/img/Checkicon.png'); ?>" style="height: 24px; width: 24px;">
                                                </li>
                                                <li class="list-group-item">--</li>
                                                <li class="list-group-item">--</li>
                                                <li class="list-group-item">--</li>
                                               <li class="list-group-item">
                                                    <img src="<?php echo base_url('assets/images/img/Checkicon.png'); ?>" style="height: 24px; width: 24px;">
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class=" pricing-card">
                                        <div class="header">
                                            <h3>Enterprise plan</h3>
                                            <p class="lead">Suitable for Organization</p>
                                            <p class="price" data-price="monthly">$49 <spam class="text-muted">
                                                    /Monthly Plan</spam>
                                            </p>
                                            <button class="btn btn-primary">Upgrade</button>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">20</li>
                                                <li class="list-group-item">2000</li>
                                                <li class="list-group-item">80</li>
                                                <li class="list-group-item">50</li>
                                                <li class="list-group-item">50</li>
                                                <hr>
                                                <li class="list-group-item"style="padding-top: 47px;"></li>
                                                <li class="list-group-item">
                                                    <img src="<?php echo base_url('assets/images/img/Checkicon.png'); ?>" style="height: 24px; width: 24px;">
                                                </li>
                                                <li class="list-group-item">
                                                    <img src="<?php echo base_url('assets/images/img/Checkicon.png'); ?>" style="height: 24px; width: 24px;">
                                                </li>
                                                 <li class="list-group-item">
                                                    <img src="<?php echo base_url('assets/images/img/Checkicon.png'); ?>" style="height: 24px; width: 24px;">
                                                </li>
                                                <li class="list-group-item">
                                                    <img src="<?php echo base_url('assets/images/img/Checkicon.png'); ?>" style="height: 24px; width: 24px;">
                                                </li>
                                               <li class="list-group-item">
                                                    <img src="<?php echo base_url('assets/images/img/Checkicon.png'); ?>" style="height: 24px; width: 24px;">
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--Plans and Billings    end -->

                    <!--Inbox Settings    end -->
                    <section id="Inbox-SettingsSection" style="display:none;">
                        <ul class="nav " id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#home-tab-pane" type="button" role="tab"
                                    aria-controls="home-tab-pane" aria-selected="true">Notifications</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#profile-tab-pane" type="button" role="tab"
                                    aria-controls="profile-tab-pane" aria-selected="false">Collaborator</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                    data-bs-target="#contact-tab-pane" type="button" role="tab"
                                    aria-controls="contact-tab-pane" aria-selected="false" disabled>Channels <span
                                        class="minibadged">Premium</span></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="disabled-tab" data-bs-toggle="tab"
                                    data-bs-target="#disabled-tab-pane" type="button" role="tab"
                                    aria-controls="disabled-tab-pane" aria-selected="false">Sort messages</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                                aria-labelledby="home-tab" tabindex="0">
                                <div class="container px-4 text-center">
                                    <div class="row gx-5">
                                        <div class="col-md-auto d-flex align-items-center"
                                            style="  flex-direction: column; padding: 0;">
                                            <p
                                                style="margin-right: 290px ;  font-size: 17px; font-weight: 500;     margin-bottom: 0px">
                                                Unassigned conversations</p>
                                            <p class="ms-3">Manage which role(s) will receive push notifications from
                                                unassigned conversations</p>
                                        </div>
                                        <div class="col">
                                            <div class="p-3">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch"
                                                        id="flexSwitchCheckChecked" checked>
                                                    <label class="form-check-label"
                                                        for="flexSwitchCheckChecked">Admin</label>
                                                </div>
                                                <div class="form-check form-switch" style="padding-left: 56px;">
                                                    <input class="form-check-input" type="checkbox" role="switch"
                                                        id="flexSwitchCheckChecked" checked>
                                                    <label class="form-check-label" for="flexSwitchCheckChecked">Team
                                                        admin</label>
                                                </div>
                                                <div class="form-check form-switch" style="   margin-left: -8px;">
                                                    <input class="form-check-input" type="checkbox" role="switch"
                                                        id="flexSwitchCheckChecked" checked>
                                                    <label class="form-check-label" for="flexSwitchCheckChecked">Staff
                                                    </label>
                                                </div>



                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel"
                                aria-labelledby="profile-tab" tabindex="0">
                                <div class="container px-4 text-center">
                                    <div class="row gx-5">
                                        <div class="col-md-auto d-flex align-items-center"
                                            style="  flex-direction: column;">
                                            <p
                                                style="margin-right: 290px ;  font-size: 17px; font-weight: 500;     margin-bottom: 0px">
                                                Become a collaborator after replying to messages</p>
                                            <p class=""style="   margin-left: -184px;">Manage which role(s) will
                                                join as a collaborator in conversations after replying.</p>
                                        </div>
                                        <div class="col">
                                            <div class="p-3">
                                                <div class="form-check ">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label"
                                                        for="flexCheckDefault">Admin</label>
                                                </div>
                                                <div class="form-check" style="padding-left: 56px;">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">Team
                                                        admin</label>
                                                </div>
                                                <div class="form-check " style=" margin-left: -8px;">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">Staff
                                                    </label>
                                                </div>



                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="container px-4 text-center">
                                    <div class="row gx-5">
                                        <div class="col-md-auto d-flex align-items-center"
                                            style="  flex-direction: column;">
                                            <p
                                                style="margin-right: 290px ;  font-size: 17px; font-weight: 500;     margin-bottom: 0px">
                                                Remain as collaborator after assigning conversation</p>
                                            <p class=""style="   margin-left: -106px;">Manage which role(s) will
                                                remain as a collaborator after assigning conversations to teammates.</p>
                                        </div>
                                        <div class="col">
                                            <div class="p-3">
                                                <div class="form-check ">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label"
                                                        for="flexCheckDefault">Admin</label>
                                                </div>
                                                <div class="form-check" style="padding-left: 56px;">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">Team
                                                        admin</label>
                                                </div>
                                                <div class="form-check "style="margin-left: -9px;">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">Staff
                                                    </label>
                                                </div>



                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel"
                                aria-labelledby="contact-tab" tabindex="0">not available</div>
                            <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel"
                                aria-labelledby="disabled-tab" tabindex="0">
                                <div class="container px-4 text-center">
                                    <div class="row gx-5">
                                        <div class="col-md-auto d-flex align-items-center"
                                            style="  flex-direction: column;">
                                            <p
                                                style="margin-right: 290px ;  font-size: 17px; font-weight: 500;     margin-bottom: 0px">
                                                Manage default sorting for messages</p>
                                            <p class=""style="   margin-left: -68px;">Manage which role(s) will
                                                receive push notifications from unassigned conversations</p>
                                        </div>
                                        <div class="col">
                                            <div class="p-3">
                                                <div class="form-check ">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">Sort by
                                                        newest message</label>
                                                </div>
                                                <div class="form-check" style="margin-left: -7px;">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">Sort by
                                                        oldest message</label>
                                                </div>




                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!--Inbox Settings    end -->

                    <!-- custom objects -->
                    <section id="Custom-ObjectsSection" style="display:none;">
                        <main id="mainContent" class="container py-4"
                            style="margin-right: 550px; margin-top: -27px;">
                            <header class="container py-3 d-flex justify-content-between align-items-center">
                                <h2 style="font-weight: 500;">Contacts <span class="minibadge">12</span></h2>
                                <div class="d-flex">
                                    <div class="d-flex text-aligh-center">
                                        <input type="text" class="form-control" style="font-family: Inter;"
                                            placeholder="Search">
                                    </div>
                                    <div class="d-flex">
                                        <button type="button"
                                            style="margin-left:15px ;background-color: #FFFFFF; border: 2px solid var(--Border-Base-subtle, #E5E7EB);width: 40px; border-radius: 10px;"
                                            class=""><i class="fa fa-filter"
                                                style="color : black"></i></button>
                                        <button type="button"
                                            style="margin-left:9px ;background-color: #FFFFFF; border: 2px solid var(--Border-Base-subtle, #E5E7EB);width: 40px; border-radius: 10px;"
                                            class=""><i class="fa fa fa-pencil-square-o"
                                                style="color : black"></i></button>
                                        <button type="button"
                                            style="margin-left:9px ;background-color: #FFFFFF; border: 2px solid var(--Border-Base-subtle, #E5E7EB);width: 40px; border-radius: 10px;"
                                            class=""><i class="fa fa-plus" style="color : black"></i></button>
                                    </div>
                                </div>
                            </header>
                            <div class="container" style="border: 1px solid #ccc; border-radius: 17px; padding: 0;">
                                <div class="table-responsive">
                                    <table class="table">
                                        <!-- Table header -->
                                        <thead>
                                            <tr>
                                                <th scope="col">
                                                    <input type="checkbox" class="form-check-input me-1"
                                                        style="margin-left: -4px;margin-top: -5px;">
                                                </th>
                                                <th scope="col">User</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Teams</th>
                                                <th scope="col">Role</th>
                                                <th scope="col">Position</th>
                                                <th scope="col">Created at</th>
                                            </tr>
                                        </thead>
                                        <!-- Table body -->
                                        <tbody>
                                            <!-- Rows go here -->
                                            <tr>
                                                <td>
                                                    <input type="checkbox" class="form-check-input me-1"
                                                        style="margin-left: -4px;margin-top: -5px;">
                                                </td>
                                                <td>Jane Cooper</td>
                                                <td>tanya.hill@example.com</td>
                                                <td>[Tem] VIP</td>
                                                <td><span class="minibadged">Admin</span>
                                                </td>
                                                <td>[Tem] VIP</td>
                                                <td>(Mar 20, 2019 23:14)</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" class="form-check-input me-1"
                                                        style="margin-left: -4px;margin-top: -5px;">
                                                </td>
                                                <td>Jane Cooper</td>
                                                <td>tanya.hill@example.com</td>
                                                <td>[Tem] VIP</td>
                                                <td><span class="minibadged">Admin</span>
                                                </td>
                                                <td>[Tem] VIP</td>
                                                <td>(Mar 20, 2019 23:14)</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" class="form-check-input me-1"
                                                        style="margin-left: -4px;margin-top: -5px;">
                                                </td>
                                                <td>Jane Cooper</td>
                                                <td>tanya.hill@example.com</td>
                                                <td>[Tem] VIP</td>
                                                <td><span class="minibadged">Admin</span>
                                                </td>
                                                <td>[Tem] VIP</td>
                                                <td>(Mar 20, 2019 23:14)</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" class="form-check-input me-1"
                                                        style="margin-left: -4px;margin-top: -5px;">
                                                </td>
                                                <td>Jane Cooper</td>
                                                <td>tanya.hill@example.com</td>
                                                <td>[Tem] VIP</td>
                                                <td><span class="minibadged">Admin</span>
                                                </td>
                                                <td>[Tem] VIP</td>
                                                <td>(Mar 20, 2019 23:14)</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" class="form-check-input me-1"
                                                        style="margin-left: -4px;margin-top: -5px;">
                                                </td>
                                                <td>Jane Cooper</td>
                                                <td>tanya.hill@example.com</td>
                                                <td>[Tem] VIP</td>
                                                <td><span class="minibadged">Admin</span>
                                                </td>
                                                <td>[Tem] VIP</td>
                                                <td>(Mar 20, 2019 23:14)</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" class="form-check-input me-1"
                                                        style="margin-left: -4px;margin-top: -5px;">
                                                </td>
                                                <td>Jane Cooper</td>
                                                <td>tanya.hill@example.com</td>
                                                <td>[Tem] VIP</td>
                                                <td><span class="minibadged">Admin</span>
                                                </td>
                                                <td>[Tem] VIP</td>
                                                <td>(Mar 20, 2019 23:14)</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" class="form-check-input me-1"
                                                        style="margin-left: -4px;margin-top: -5px;">
                                                </td>
                                                <td>Jane Cooper</td>
                                                <td>tanya.hill@example.com</td>
                                                <td>[Tem] VIP</td>
                                                <td><span class="minibadged">Admin</span>
                                                </td>
                                                <td>[Tem] VIP</td>
                                                <td>(Mar 20, 2019 23:14)</td>
                                            </tr>

                                            <!-- Add more rows here -->
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Pagination -->
                                <div class="d-flex justify-content-between align-items-center"
                                    style="border-top: 1px solid #ccc;padding-top: 17px;">
                                    <nav aria-label="Page navigation">
                                        <ul class="pagination" style="align-items: center;     padding-left: 18px;">
                                            <li class="page-item disabled">
                                                <!-- <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a> -->
                                                <a href="" style="text-decoration: none;"
                                                    class="prev-button"><i class="fa fa-angle-left"
                                                        aria-hidden="true"></i>
                                                    Previous</a>
                                            </li>
                                            <div style="margin-left: 13px;" class="">Showing 1-10 of 50
                                                items</div>
                                        </ul>
                                    </nav>
                                    <div>
                                        <ul class="pagination">
                                            <li class="page-item active">
                                                <a class="page-link"
                                                    style="background-color: #3730A3;border-color: #3730A3;"
                                                    href="#">1</a>
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
                    </section>
                    <!-- custom objects -->


                    <!--System Preference     end -->
                    <section id="System-PreferenceSection" style="display:none;">
                         <div class="container">
                            <div class="row"style="    margin-bottom: 24px;">
                                <div class="col-lg-12 text-center mt-5">

                                    <div class="btn-group toggle-btn" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-outline-primary active"
                                            data-toggle="billing-cycle" data-value="monthly">Monthly</button>
                                        <button type="button" class="btn btn-outline-primary"
                                            data-toggle="billing-cycle" data-value="yearly">Yearly</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-center pricing-row">
                                <div class="col-md-3">
                                    <div class=" pricing-card">
                                        <div class="header">
                                        </div>
                                        <div class="card-body " style="padding-top:195px">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Accounts</li>
                                                <li class="list-group-item">Customer contacts </li>
                                                <li class="list-group-item">Broadcast messages</li>
                                                <li class="list-group-item">Automation rules</li>
                                                <li class="list-group-item"># of messaging channels </li>
                                                <hr>
                                                <p class=""style="color: #2C3C8A;font-weight: 700;">Advanced
                                                    features </p>

                                                <li class="list-group-item">Zapier & Integromat integration</li>
                                                <li class="list-group-item">Advanced team settings</li>
                                                <li class="list-group-item">Analytics dashboard</li>
                                                <li class="list-group-item">API integration</li>
                                                <li class="list-group-item">Onboarding Support</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class=" pricing-card">
                                        <div class="header">
                                            <h3>Startup</h3>
                                            <p class="lead">Suitable for 4 persons team</p>
                                            <p class="price" data-price="monthly">Free</p>
                                            <button class="btn btn-primary">Current Plan </button>
                                            <!-- <h6 class="text-muted">Monthly Plan</h6> -->
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">5</li>
                                                <li class="list-group-item">120</li>
                                                <li class="list-group-item">20</li>
                                                <li class="list-group-item">10</li>
                                                <li class="list-group-item">10</li>
                                                <hr>
                                                <li class="list-group-item"style="padding-top: 47px;"></li>
                                                <li class="list-group-item">--</li>
                                                <li class="list-group-item">--</li>
                                                <li class="list-group-item">--</li>
                                                <li class="list-group-item">--</li>
                                                <li class="list-group-item">--</li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class=" pricing-card">
                                        <div class="header">
                                            <h3>Pro plan</h3>
                                            <p class="lead">Suitable for 4 persons team</p>
                                            <p class="price" data-price="monthly">$39 <spam class="text-muted">
                                                    /Monthly Plan</spam>
                                            </p>
                                            <button class="btn btn-primary">Upgrade</button>
                                            <!-- <h6 class="text-muted">Monthly Plan</h6> -->
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">10</li>
                                                <li class="list-group-item">200</li>
                                                <li class="list-group-item">50</li>
                                                <li class="list-group-item">20</li>
                                                <li class="list-group-item">20</li>
                                                <hr>
                                                <li class="list-group-item"style="padding-top: 47px;"></li>
                                                <li class="list-group-item">
                                                    <img src="<?php echo base_url('assets/images/img/Checkicon.png'); ?>" style="height: 24px; width: 24px;">
                                                </li>
                                                <li class="list-group-item">--</li>
                                                <li class="list-group-item">--</li>
                                                <li class="list-group-item">--</li>
                                               <li class="list-group-item">
                                                    <img src="<?php echo base_url('assets/images/img/Checkicon.png'); ?>" style="height: 24px; width: 24px;">
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class=" pricing-card">
                                        <div class="header">
                                            <h3>Enterprise plan</h3>
                                            <p class="lead">Suitable for Organization</p>
                                            <p class="price" data-price="monthly">$49 <spam class="text-muted">
                                                    /Monthly Plan</spam>
                                            </p>
                                            <button class="btn btn-primary">Upgrade</button>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">20</li>
                                                <li class="list-group-item">2000</li>
                                                <li class="list-group-item">80</li>
                                                <li class="list-group-item">50</li>
                                                <li class="list-group-item">50</li>
                                                <hr>
                                                <li class="list-group-item"style="padding-top: 47px;"></li>
                                                <li class="list-group-item">
                                                    <img src="<?php echo base_url('assets/images/img/Checkicon.png'); ?>" style="height: 24px; width: 24px;">
                                                </li>
                                                <li class="list-group-item">
                                                    <img src="<?php echo base_url('assets/images/img/Checkicon.png'); ?>" style="height: 24px; width: 24px;">
                                                </li>
                                                 <li class="list-group-item">
                                                    <img src="<?php echo base_url('assets/images/img/Checkicon.png'); ?>" style="height: 24px; width: 24px;">
                                                </li>
                                                <li class="list-group-item">
                                                    <img src="<?php echo base_url('assets/images/img/Checkicon.png'); ?>" style="height: 24px; width: 24px;">
                                                </li>
                                               <li class="list-group-item">
                                                    <img src="<?php echo base_url('assets/images/img/Checkicon.png'); ?>" style="height: 24px; width: 24px;">
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--System Preference     end -->







                </main>
            </section>
            <?php
            echo '</div>'; // Closing main-content div
            ?>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
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
        document.getElementById('ProfileSection').style.display = 'block';
        document.getElementById('libraryLink').parentNode.classList.add('s');
    </script>

    <!-- country phone code///////////// -->
    <script>
        const phoneInputField = document.querySelector("#phone");
        const phoneInput = window.intlTelInput(phoneInputField, {
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        });
    </script>
    <script>
        function validatePassword() {
            var password = document.getElementById('newPassword').value;
            var passwordError = document.getElementById('passwordError');

            if (password.length <= 8) {
                passwordError.style.display = 'block';
            } else {
                passwordError.style.display = 'none';
            }
        }
    </script>

    <!-- timezone funchality///////////// -->
    <script>
        // Function to populate the dropdown with time zone options
        function populateTimezones() {
            const timezones = [{
                    name: "UTC",
                    offset: "+00:00"
                },
                {
                    name: "GMT",
                    offset: "+00:00"
                },
                // Add more time zones as needed
            ];

            const select = document.getElementById("timezoneSelect");

            timezones.forEach(timezone => {
                const option = document.createElement("option");
                option.value = timezone.offset;
                option.text = `${timezone.name} ${timezone.offset}`;
                select.appendChild(option);
            });
        }

        // Call the populateTimezones function to populate the dropdown when the page loads
        populateTimezones();
    </script>


    <!-- pagination funchality ///////////////////-->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const tableRows = document.querySelectorAll('tbody tr');
            const rowsPerPage = 10;
            let currentPage = 1;

            // Function to show rows for the current page
            const showRows = () => {
                const startIndex = (currentPage - 1) * rowsPerPage;
                const endIndex = Math.min(startIndex + rowsPerPage, tableRows.length);
                tableRows.forEach((row, index) => {
                    if (index >= startIndex && index < endIndex) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                });
            };

            // Function to handle previous page button click
            const prevPage = () => {
                if (currentPage > 1) {
                    currentPage--;
                    showRows();
                }
            };

            // Function to handle next page button click
            const nextPage = () => {
                const totalPages = Math.ceil(tableRows.length / rowsPerPage);
                if (currentPage < totalPages) {
                    currentPage++;
                    showRows();
                }
            };

            // Event listeners for pagination buttons
            document.querySelector('.prev-button').addEventListener('click', prevPage);
            document.querySelector('.next-button').addEventListener('click', nextPage);

            // Initial display of rows
            showRows();
        });
    </script>
    <!-- plan and pricing -->
    <script>
        const pricingButtons = document.querySelectorAll('.toggle-btn button');
        const pricingCards = document.querySelectorAll('.pricing-card');

        pricingButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                pricingButtons.forEach(btn => btn.classList.remove('active'));
                // Add active class to clicked button
                this.classList.add('active');

                // Update pricing based on selected cycle (monthly/yearly)
                const cycle = this.dataset.value;
                updatePricing(cycle);
            });
        });

        function updatePricing(cycle) {
            pricingCards.forEach(card => {
                const priceElement = card.querySelector('.price');
                const priceValue = priceElement.dataset.price;

                if (cycle === 'yearly') {
                    // Apply discount for yearly billing (example: 10% off)
                    const discount = 0.1; // Adjust discount percentage as needed
                    const discountedPrice = priceValue * (1 - discount);
                    priceElement.textContent = `$${discountedPrice.toFixed(2)}`;
                } else {
                    priceElement.textContent = `$${priceValue}`;
                }
            });
        }
    </script>
    <!-- inbox -->





</body>

</html>

<head>


    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


    <title>contact</title>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.png">
    <?php
    include FCPATH . 'application/views/include/new.php';
    include FCPATH . 'application/views/include/js_include_back.php';
    ?>
    <style>
        /* Add your custom styles here */
        @keyframes slideInRight {
            from {
                transform: translateX(100%);
            }

            to {
                transform: translateX(0);
            }
        }

        .modal-content {
            animation: slideInRight 0.5s forwards;
        }
    </style>
    <style>
        html,
        body,
        div,
        span,
        applet,
        object,
        iframe,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        blockquote,
        pre,
        a,
        abbr,
        acronym,
        address,
        big,
        cite,
        code,
        del,
        dfn,
        em,
        img,
        ins,
        kbd,
        q,
        s,
        samp,
        small,
        strike,
        strong,
        sub,
        sup,
        tt,
        var,
        b,
        u,
        i,
        center,
        dl,
        dt,
        dd,
        ol,
        ul,
        li,
        fieldset,
        form,
        label,
        legend,
        table,
        caption,
        tbody,
        tfoot,
        thead,
        tr,
        th,
        td,
        article,
        aside,
        canvas,
        details,
        embed,
        figure,
        figcaption,
        footer,
        header,
        hgroup,
        menu,
        nav,
        output,
        ruby,
        section,
        summary,
        time,
        mark,
        audio,
        video {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
        }


        /* HTML5 display-role reset for older browsers */

        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        menu,
        nav,
        section {
            display: block;
        }

        body {
            line-height: 1.5;
        }

        ol,
        ul {
            list-style: none;
        }

        blockquote,
        q {
            quotes: none;
        }

        blockquote:before,
        blockquote:after,
        q:before,
        q:after {
            content: '';
            content: none;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }



        body {
            margin: 0;
            font-family: 'Open Sans', sans-serif;
            line-height: 1.5;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        html {
            min-height: 100%;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        h1 {
            font-size: 36px;
        }

        h2 {
            font-size: 30px;
        }

        h3 {
            font-size: 26px;
        }

        h4 {
            font-size: 22px;
        }

        h5 {
            font-size: 18px;
        }

        h6 {
            font-size: 16px;
        }

        p {
            font-size: 15px;
        }

        a {
            text-decoration: none;
            font-size: 15px;
        }

        * {
            margin-bottom: 0;
        }





        .message-area {
            height: 100vh;
            overflow: hidden;
            margin-top: -94px;
            /* padding: 30px 0; */
            /* background: #f5f5f5; */
        }

        .chat-area {
            position: relative;
            width: 100%;
            background-color: #fff;
            border-radius: 0.3rem;
            height: 90vh;
            overflow: hidden;
            min-height: calc(100% - 1rem);
        }

        .chatlist {
            outline: 0;
            height: 100%;
            overflow: hidden;
            width: 350px;
            float: left;

        }

        .chat-area .modal-content {
            border: none;
            border-radius: 0;
            outline: 0;
            height: 100%;
        }

        .chat-area .modal-dialog-scrollable {
            height: 100% !important;
        }

        .chatbox {

            width: auto;
            overflow: hidden;
            height: 100%;
            border-left: 1px solid #ccc;
        }



        .chatbox .modal-dialog,
        .chatlist .modal-dialog {
            max-width: 100%;
            margin: 0;
        }

        .msg-search {
            display: flex;
            flex-direction: column;
            border-bottom: 1px solid #ccc;
            padding-bottom: 30px;
            /* align-items: center;
            justify-content: space-between; */
        }

        .chat-area .form-control {
            display: block;
            width: 80%;
            padding: 0.375rem 0.75rem;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.5;
            color: #222;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ccc;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 0.25rem;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }

        .chat-area .form-control:focus {
            outline: 0;
            box-shadow: inherit;
        }

        a.add img {
            height: 36px;
        }

        .chat-area .nav-tabs {
            border-bottom: 1px solid #dee2e6;
            align-items: center;
            justify-content: space-between;
            flex-wrap: inherit;
        }

        .chat-area .nav-tabs .nav-item {
            width: 100%;
        }

        .chat-area .nav-tabs .nav-link {
            width: 100%;
            color: #180660;
            font-size: 14px;
            font-weight: 500;
            line-height: 1.5;
            text-transform: capitalize;
            margin-top: 5px;
            margin-bottom: -1px;
            background: 0 0;
            border: 1px solid transparent;
            border-top-left-radius: 0.25rem;
            border-top-right-radius: 0.25rem;
        }

        .chat-area .nav-tabs .nav-item.show .nav-link,
        .chat-area .nav-tabs .nav-link.active {
            color: #222;
            background-color: #fff;
            border-color: transparent transparent #000;
        }

        .chat-area .nav-tabs .nav-link:focus,
        .chat-area .nav-tabs .nav-link:hover {
            border-color: transparent transparent #000;
            isolation: isolate;
        }

        .chat-list h3 {
            color: #222;
            font-size: 16px;
            font-weight: 500;
            line-height: 1.5;
            text-transform: capitalize;
            margin-bottom: 0;
        }

        .chat-list p {
            color: #343434;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.5;
            text-transform: capitalize;
            margin-bottom: 0;
        }

        .chat-list a.d-flex {
            margin-bottom: 15px;
            position: relative;
            text-decoration: none;
        }

        .chat-list .active {
            display: block;
            content: '';
            clear: both;
            position: absolute;
            bottom: 3px;
            left: 34px;
            height: 12px;
            width: 12px;
            background: #00DB75;
            border-radius: 50%;
            border: 2px solid #fff;
        }

        .msg-head h3 {
            color: #222;
            font-size: 18px;
            font-weight: 600;
            line-height: 1.5;
            margin-bottom: 0;
        }

        .msg-head p {
            color: #343434;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.5;
            text-transform: capitalize;
            margin-bottom: 0;
        }

        .msg-head {
            padding: 15px;
            border-bottom: 1px solid #ccc;
        }

        .moreoption {
            display: flex;
            align-items: center;
            justify-content: end;
        }

        .moreoption .navbar {
            padding: 0;
        }

        .moreoption li .nav-link {
            color: #222;
            font-size: 16px;
        }

        .moreoption .dropdown-toggle::after {
            display: none;
        }

        .moreoption .dropdown-menu[data-bs-popper] {
            top: 100%;
            left: auto;
            right: 0;
            margin-top: 0.125rem;
        }

        .msg-body ul {
            overflow: hidden;
        }

        .msg-body ul li {
            list-style: none;
            margin: 15px 0;
        }

        .msg-body ul li.sender {
            display: block;
            width: 100%;
            position: relative;
        }

        .msg-body ul li.sender:before {
            display: block;
            clear: both;
            content: '';
            position: absolute;
            top: -6px;
            left: -7px;
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 0 12px 15px 12px;
            border-color: transparent transparent #f5f5f5 transparent;
            -webkit-transform: rotate(-37deg);
            -ms-transform: rotate(-37deg);
            transform: rotate(-37deg);
        }

        .msg-body ul li.sender p {
            color: #000;
            font-size: 14px;
            line-height: 1.5;
            font-weight: 400;
            padding: 15px;
            background: #f5f5f5;
            display: inline-block;
            border-bottom-left-radius: 10px;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
            margin-bottom: 0;
        }

        .msg-body ul li.sender p b {
            display: block;
            color: #180660;
            font-size: 14px;
            line-height: 1.5;
            font-weight: 500;
        }

        .msg-body ul li.repaly {
            display: block;
            width: 100%;
            text-align: right;
            position: relative;
        }

        .msg-body ul li.repaly:before {
            display: block;
            clear: both;
            content: '';
            position: absolute;
            bottom: 15px;
            right: -7px;
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 0 12px 15px 12px;
            border-color: transparent transparent #4b7bec transparent;
            -webkit-transform: rotate(37deg);
            -ms-transform: rotate(37deg);
            transform: rotate(37deg);
        }

        .msg-body ul li.repaly p {
            color: #fff;
            font-size: 14px;
            line-height: 1.5;
            font-weight: 400;
            padding: 15px;
            background: #4b7bec;
            display: inline-block;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            border-bottom-left-radius: 10px;
            margin-bottom: 0;
        }

        .msg-body ul li.repaly p b {
            display: block;
            color: #061061;
            font-size: 14px;
            line-height: 1.5;
            font-weight: 500;
        }

        .msg-body ul li.repaly:after {
            display: block;
            content: '';
            clear: both;
        }

        .time {
            display: block;
            color: #000;
            font-size: 12px;
            line-height: 1.5;
            font-weight: 400;
        }

        li.repaly .time {
            margin-right: 20px;
        }

        .divider {
            position: relative;
            z-index: 1;
            text-align: center;
        }

        .msg-body h6 {
            text-align: center;
            font-weight: normal;
            font-size: 14px;
            line-height: 1.5;
            color: #222;
            background: #fff;
            display: inline-block;
            padding: 0 5px;
            margin-bottom: 0;
        }

        .divider:after {
            display: block;
            content: '';
            clear: both;
            position: absolute;
            top: 12px;
            left: 0;
            border-top: 1px solid #EBEBEB;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .send-box {
            padding: 15px;
            border-top: 1px solid #ccc;
        }

        .send-box form {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 15px;
        }

        .send-box .form-control {
            display: block;
            width: 85%;
            padding: 0.375rem 0.75rem;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.5;
            color: #222;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ccc;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 0.25rem;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }

        .send-box button {
            border: none;
            background: #3867d6;
            padding: 0.375rem 5px;
            color: #fff;
            border-radius: 0.25rem;
            font-size: 14px;
            font-weight: 400;
            width: 24%;
            margin-left: 1%;
        }

        .send-box button i {
            margin-right: 5px;
        }

        .send-btns .button-wrapper {
            position: relative;
            width: 125px;
            height: auto;
            text-align: left;
            margin: 0 auto;
            display: block;
            background: #F6F7FA;
            border-radius: 3px;
            padding: 5px 15px;
            float: left;
            margin-right: 5px;
            margin-bottom: 5px;
            overflow: hidden;
        }

        .send-btns .button-wrapper span.label {
            position: relative;
            z-index: 1;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            width: 100%;
            cursor: pointer;
            color: #343945;
            font-weight: 400;
            text-transform: capitalize;
            font-size: 13px;
        }

        #upload {
            display: inline-block;
            position: absolute;
            z-index: 1;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            opacity: 0;
            cursor: pointer;
        }

        .send-btns .attach .form-control {
            display: inline-block;
            width: 120px;
            height: auto;
            padding: 5px 8px;
            font-size: 13px;
            font-weight: 400;
            line-height: 1.5;
            color: #343945;
            background-color: #F6F7FA;
            background-clip: padding-box;
            border: 1px solid #F6F7FA;
            border-radius: 3px;
            margin-bottom: 5px;
        }

        .send-btns .button-wrapper span.label img {
            margin-right: 5px;
        }

        .button-wrapper {
            position: relative;
            width: 100px;
            height: 100px;
            text-align: center;
            margin: 0 auto;
        }

        button:focus {
            outline: 0;
        }

        .add-apoint {
            display: inline-block;
            margin-left: 5px;
        }

        .add-apoint a {
            text-decoration: none;
            background: #F6F7FA;
            border-radius: 8px;
            padding: 8px 8px;
            font-size: 13px;
            font-weight: 400;
            line-height: 1.2;
            color: #343945;
        }

        .add-apoint a svg {
            margin-right: 5px;
        }

        .chat-icon {
            display: none;
        }

        .closess i {
            display: none;
        }



        @media (max-width: 767px) {
            .chat-icon {
                display: block;
                margin-right: 5px;
            }

            .chatlist {
                width: 100%;
            }

            .chatbox {
                width: 100%;
                position: absolute;
                left: 1000px;
                right: 0;
                background: #fff;
                transition: all 0.5s ease;
                border-left: none;
            }

            .showbox {
                left: 0 !important;
                transition: all 0.5s ease;
            }

            .msg-head h3 {
                font-size: 14px;
            }

            .msg-head p {
                font-size: 12px;
            }

            .msg-head .flex-shrink-0 img {
                height: 30px;
            }

            .send-box button {
                width: 28%;
            }

            .send-box .form-control {
                width: 70%;
            }

            .chat-list h3 {
                font-size: 14px;
            }

            .chat-list p {
                font-size: 12px;
            }

            .msg-body ul li.sender p {
                font-size: 13px;
                padding: 8px;
                border-bottom-left-radius: 6px;
                border-top-right-radius: 6px;
                border-bottom-right-radius: 6px;
            }

            .msg-body ul li.repaly p {
                font-size: 13px;
                padding: 8px;
                border-top-left-radius: 6px;
                border-top-right-radius: 6px;
                border-bottom-left-radius: 6px;
            }
        }

        .nav-links {

            color: #222;
            background-color: #fff;
            border-color: transparent transparent #000;
            width: 100%;
            color: #180660;
            font-size: 12px;
            font-weight: 500;
            line-height: 1.5;
            text-transform: capitalize;
            margin-top: 5px;
            margin-bottom: -1px;
            background: 0 0;
            border: 1px solid transparent;
            border-top-left-radius: 0.25rem;
            border-top-right-radius: 0.25rem;

        }

        .custom-tabs .nav-links.active {
            color: blue;
            border-bottom: 2px solid #2285C6;
            /* Bottom bar color and thickness */
        }
    </style>

</head>
<div class="">

    <div class="main-wrapper">
        <?php
        $menus = $this->basic->get_data('menu', '', '', '', '', '', 'serial asc');
        $data['menus'] = $menus;
        include FCPATH . 'application/views/admin/theme/sidebar.php';
        echo '<div class="main-content">';
        ?>
        <!-- chat-area -->
        <section class="message-area">
            <div class="">
                <div class="row">
                    <div class="col">
                        <div class="chat-area">
                            <!-- chatlist -->
                            <div class="chatlist">
                                <div class="modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="chat-header">
                                            <div class="msg-search d-flex">
                                                <h1 style="font-weight: 500;">Inbox</h1>
                                                <input type="text" class="form-control" id="inlineFormInputGroup"
                                                    placeholder="Search" aria-label="search" style="width: 95%;">
                                            </div>
                                            <ul style="padding: 2px;" class="nav nav-tabs" id="myTab"
                                                role="tablist">
                                                <li class="nav-item custom-tabs" role="presentation">
                                                    <button style="padding-bottom: 10px; color: #667085;"
                                                        class="nav-links active" id="Open-tab" data-bs-toggle="tab"
                                                        data-bs-target="#Open" type="button" role="tab"
                                                        aria-controls="Open" aria-selected="true">Assigned to
                                                        me</button>
                                                </li>
                                                <li class="nav-item custom-tabs" role="presentation">
                                                    <button style="padding-bottom: 10px; color: #667085;"
                                                        class="nav-links" id="Closed-tab" data-bs-toggle="tab"
                                                        data-bs-target="#Closed" type="button" role="tab"
                                                        aria-controls="Closed"
                                                        aria-selected="false">Collaborations</button>
                                                </li>
                                                <li class="nav-item custom-tabs" role="presentation">
                                                    <button style="padding-bottom: 10px; color: #667085;"
                                                        class="nav-links" id="mention-tab" data-bs-toggle="tab"
                                                        data-bs-target="#mention" type="button" role="tab"
                                                        aria-controls="mention" aria-selected="false">Mentions</button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="modal-body">
                                            <!-- chat-list -->
                                            <div class="chat-lists">
                                                <div class="tab-content" id="myTabContent">
                                                    <div class="tab-pane fade show active" id="Open"
                                                        role="tabpanel" aria-labelledby="Open-tab">
                                                        <!-- chat-list -->
                                                        <div class="chat-list">
                                                            <a href="#" class="d-flex align-items-center">
                                                                <div class="flex-shrink-0">
                                                                    <img src="<?php echo base_url('assets/images/img/Avatar.png'); ?>" class="img-fluid">
                                                                </div>
                                                                <div class="flex-grow-1 ms-3">
 							<?php 
                                                    $query = $this->db->query("SELECT recipient FROM whatsapp_messages LIMIT 1");
                                                    $result = $query->row_array();

                                                    $columnData = $result['recipient'];
                                                    ?>
                                                      <h3 style="font-size: 14px !important;"><?php echo $columnData; ?></h3>
                                                                   
							<?php 
                                                          $query = $this->db->query("SELECT timestamp FROM whatsapp_messages ORDER BY timestamp DESC LIMIT 1");
                                                           $result = $query->row_array();
	 $timestamp = strtotime($result['timestamp']);
    $current_time = time();
$difference = $current_time - $timestamp;
$minutes = floor($difference / 60);
                             
								?>
<p style="font-size: 12px !important;color: #475467 !important;"><?php echo $minutes; ?>min ago</p>
                                                                       <!-- <p
                                                                        style="font-size: 12px !important;color: #475467 !important;">
                                                                        5min ago</p> -->

                                                                </div>
                                                            </a>

                                                            <?php 
                                                            
$query = $this->db->query("SELECT message_body FROM whatsapp_messages WHERE message_body IS NOT NULL ORDER BY timestamp DESC");
                                                            $result = $query->row_array();

                                                            $columnData = $result['message_body'];
                                                            ?>
                                                        <p style="color: #475467 !important;"><?php echo $columnData; ?></p>
                                                            <!-- <p style="color: #475467 !important;">
                                                            Hey Olivia, Katherine
                                                                sent me over the latest doc. I just have a quick
                                                                question about the...</p> -->

                                                        </div>
                                                        <!-- chat-list -->
                                                    </div>
                                                    <div class="tab-pane fade" id="Closed" role="tabpanel"
                                                        aria-labelledby="Closed-tab">
                                                        <!-- chat-list -->
                                                        <div class="chat-list">
                                                            <a href="#" class="d-flex align-items-center">
                                                                <div class="flex-shrink-0">
                                                                    <img src="<?php echo base_url('assets/images/img/Avatar4.png'); ?>" class="img-fluid">
                                                                </div>
                                                                <div class="flex-grow-1 ms-3">
                                                                    <h3 style="font-size: 14px !important;">Cameron
                                                                        Williamson</h3>
                                                                    <p
                                                                        style="font-size: 12px !important;color: #475467 !important;">
                                                                        5min ago</p>
                                                                </div>
                                                            </a>
                                                            <p style="color: #475467 !important;">Hey Olivia, Katherine
                                                                sent me over the latest doc. I just have a quick
                                                                question about the...</p>
                                                        </div>
                                                        <!-- chat-list -->
                                                    </div>
                                                    <div class="tab-pane fade" id="mention" role="tabpanel"
                                                        aria-labelledby="Closed-tab">
                                                        <!-- chat-list -->
                                                        <div class="chat-list">
                                                            <a href="#" class="d-flex align-items-center">
                                                                <div class="flex-shrink-0">
                                                                    <img src="<?php echo base_url('assets/images/img/Avatar2.png'); ?>" class="img-fluid">
                                                                </div>
                                                                <div class="flex-grow-1 ms-3">
                                                                    <h3 style="font-size: 14px !important;">Cameron
                                                                        Williamson</h3>
                                                                    <p
                                                                        style="font-size: 12px !important;color: #475467 !important; ;">
                                                                        5min ago</p>
                                                                </div>
                                                            </a>
                                                            <p style="color: #475467 !important; margin-bottom: 45px;">
                                                                Hey Olivia, Katherine sent me over the latest doc. I
                                                                just have a quick question about the...</p>
                                                            <a href="#" class="d-flex align-items-center">
                                                                <div class="flex-shrink-0">
                                                                    <img src="<?php echo base_url('assets/images/img/Avatar3.png'); ?>" class="img-fluid">
                                                                </div>
                                                                <div class="flex-grow-1 ms-3">
                                                                    <h3 style="font-size: 14px !important;">Cameron
                                                                        Williamson</h3>
                                                                    <p
                                                                        style="font-size: 12px !important;color: #475467 !important; ">
                                                                        5min ago</p>
                                                                </div>
                                                            </a>
                                                            <p style="color: #475467 !important; margin-bottom: 45px;">
                                                                Hey Olivia, Katherine sent me over the latest doc. I
                                                                just have a quick question about the...</p>
                                                            <a href="#" class="d-flex align-items-center">
                                                                <div class="flex-shrink-0">
                                                                    <img src="<?php echo base_url('assets/images/img/Avatar4.png'); ?>" class="img-fluid">
                                                                </div>
                                                                <div class="flex-grow-1 ms-3">
                                                                    <h3 style="font-size: 14px !important;">Cameron
                                                                        Williamson</h3>
                                                                    <p
                                                                        style="font-size: 12px !important;color: #475467 !important;">
                                                                        5min ago</p>
                                                                </div>
                                                            </a>
                                                            <p style="color: #475467 !important;margin-bottom: 45px;">
                                                                Hey Olivia, Katherine sent me over the latest doc. I
                                                                just have a quick question about the...</p>
                                                        </div>
                                                        <!-- chat-list -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- chat-list -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- chatlist -->
                            <!-- chatbox -->
                            <div class="chatbox">
                                <div class="modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="msg-head">
                                            <div class="row">
                                                <div class="d-flex"
                                                    style="flex-direction: row;justify-content: space-between;">
                                                    <div class="container2" style=" padding-left: 43px;">
							 <?php 
                                                    $query = $this->db->query("SELECT recipient FROM whatsapp_messages LIMIT 1");
                                                    $result = $query->row_array();

                                                    $columnData = $result['recipient'];
                                                    ?>
                                                      <h1><?php echo $columnData; ?></h1>
                                                        
                                                        <div style="margin-top: 18px">
                                                            <label for="assignedTo">Assigned to:</label>
                                                            <select name="assignedTo" id="assignedTo"
                                                                style="border: none;">
                                                                <option value="you">you</option>
                                                                <!-- Add more options as needed -->
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="container1" style=" padding-right: 161px;">
                                                        <div>
                                                            <ul style="display: flex;">
                                                                <li style="margin-left:17px">
                                                                    <svg style="height: 22px;"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke-width="1.5" stroke="currentColor"
                                                                        class="w-6 h-6">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
                                                                    </svg>
                                                                </li>
                                                                <li style="margin-left:17px">
                                                                    <svg style="height: 22px;"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke-width="1.5" stroke="currentColor"
                                                                        class="w-6 h-6">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                                                                    </svg>
                                                                </li>
                                                                <button id="three-dots"
                                                                    style="text-align: center; border: none; background: none; margin-top: 0px; margin-left: 17px;"
                                                                    type="button" class="btn"
                                                                    data-bs-toggle="modal" data-bs-target="#myModal">
                                                                    <svg style="height: 22px;"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke-width="1.5" stroke="currentColor"
                                                                        class="w-6 h-6">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
                                                                    </svg>
                                                                </button>

                                                                <div id="myModal" class="modal" tabindex="-1"
                                                                    data-bs-backdrop="false">
                                                                    <div class="modal-dialog modal-dialog-centered" style="height: 100vh;  width: 300px;margin-left: auto;">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title">Phoenix Baker</h5>
                                                                                <button type="button"
                                                                                    class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <form action="<?php echo base_url('home/threedialog_register'); ?>"
                                                                                    method="post">
                                                                                    <div class="mb-3">
                                                                                        
                                                                                    </div>
                                                                                    
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </ul>
                                                        </div>
                                                        <div style="margin-top: 35px">
                                                            <label for="assignedTo">Filter by:</label>
                                                            <select name="assignedTo" id="assignedTo"
                                                                style="border: none;">
                                                                <option value="you">All channels</option>
                                                                <!-- Add more options as needed -->
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                            <div class="msg-body">
                                                <!-- Your message body content -->
                                                <?php if (!empty($messages)) : ?>
                                                <ul>
                                                    <?php foreach ($messages->result() as $message) : ?>
                                                    <?php if (!empty($message->message_body)) : ?>
                                                    <?php if (is_null($message->entry_id)) : ?>
                                                    <li class="repaly">
                                                        <p>
                                                            <?php echo $message->message_body; ?>
                                                        </p>
                                                        <!-- <span class="time">10:20 am</span> -->
                                                    </li>
                                                    <?php else : ?>
                                                    <?php if (!is_null($message->entry_id)) : ?>
                                                    <li class="sender">
                                                        <p>
                                                            <?php echo $message->message_body; ?>
                                                        </p>
                                                        <!-- <span class="time">10:26 am</span> -->
                                                    </li>

                                                    <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php endforeach; ?>


                                                </ul>

                                               
                                                <?php endif; ?>
 <li id="message-list" class="sender">

                                                </li>
                                            </div>
                                        </div>
                                        <div class="send-box">
                                            <!-- Your send message box content -->
                                            <form action="<?php echo base_url('home/send_messages'); ?>" method="post">
                                                <input type="text" id="message" name="message"
                                                    class="form-control" aria-label="message"
                                                    placeholder="Write message…" style="height: 89px; width:100%;"
                                                    required>
                                                <button
                                                    style="margin-left: -282px; width: 109px; margin-right: 203px; margin-top: 41px;"
                                                    type="submit"><i class="fa fa-paper-plane"
                                                        aria-hidden="true"></i> Send</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- chatbox -->
                        </div>
                        <!-- chat-area -->
                    </div>
                </div>
            </div>
        </section>
        <!-- char-area -->
        <?php
        echo '</div>'; // Closing main-content div
        ?>
    </div>
</div>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function() {
        $("#three-dots").click(function() {
            $("#myModal").modal('show');
        });
    });
</script>

<script src="https://js.pusher.com/7.0/pusher.min.js"></script>

<script>
    var pusher = new Pusher('ae65b6841edff9407432', {
        cluster: 'ap2',
        encrypted: true
    });
    var channel = pusher.subscribe('my-channel');
	// Redirect to the specified URL


    channel.bind('message-sent', function(data) {

        // Create a new list item element
        var listItem = document.createElement('li');
        listItem.classList.add('sender');

        // Create a paragraph element for the message body
        var paragraph = document.createElement('p');
        paragraph.textContent = data.message; // Assign the received message

        // Append the paragraph element to the list item
        listItem.appendChild(paragraph);

        // Append the list item to the message list
        var messageList = document.getElementById('message-list');
        messageList.appendChild(listItem);
    });
</script>






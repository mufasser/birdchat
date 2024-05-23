<head>


    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


    <title>Inbox</title>
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
            width: 100%;
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
            /* height: 100%; */
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
            padding: 16px;
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
            border-bottom: 1px solid #ccc;
            border-right: 1px solid #ccc
        }

        .send-box form {
            display: flex;
            align-items: center;
            /* justify-content: space-between; */
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


        @media (max-width: 1100px) {

            .row>.col:first-child,
            .row>.col:last-child {
                display: none;
            }
        }

        .buttonIn {
            width: 300px;
            position: relative;
        }

        .message-send-button {
            position: absolute;
            top: 0;
            border-radius: 5px;
            right: 0px;
            z-index: 2;
            border: none;
            top: 2px;
            height: 30px;
            cursor: pointer;
            color: white;
            background-color: #1e90ff;
            transform: translateX(2px);
        }

        .message-send-button-icon {
            position: absolute;
            top: 0;
            border-radius: 5px;
            right: 0px;
            z-index: 2;
            border: none;
            top: 2px;

            cursor: pointer;
            color: white;

            transform: translateX(2px);
        }

        input {
            margin: 0px;
            padding: 0px;
            width: 100%;
            outline: none;
            height: 30px;
            border-radius: 5px;
        }

        ::-webkit-scrollbar {
            width: 5px;
            height: 5px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #e3e5f5;
            border-radius: 10px;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #94a3b8;
            border-radius: 10px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }

        @media (max-width: 768px) {
            .message-send-button {
                margin-right: 10px;
                /* Adjust as needed */
            }

            .message-send-button-icon:first-child {
                margin-right: 10px;
                /* Adjust as needed */
            }

            .message-send-button-icon:last-child {
                margin-right: 20px;
                /* Adjust as needed */
            }
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
        <section>
            <div class="" style=" margin-top: -92px;">
                <div class="row">
                    <!-- imbox -->
                    <div class="col " style="height: 100vh;padding: 0px;margin-left: 9px;">
                        <div class="chatlist">
                            <div class="modal-dialog-scrollable">
                                <div class="modal-content" style="height: 100vh;">
                                    <div class="chat-header">
                                        <div class="msg-search d-flex">
                                            <h1 style="font-weight: 500;">Inbox</h1>
                                            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Search" aria-label="search" style="width: 95%;">
                                        </div>
                                        <ul style="padding: 2px;justify-content: space-evenly;" class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item custom-tabs" role="presentation">
                                                <button style="padding-bottom: 10px; color: #667085;" class="nav-links active" id="Open-tab" data-bs-toggle="tab" data-bs-target="#Open" type="button" role="tab" aria-controls="Open" aria-selected="true">Assigned to
                                                    me</button>
                                            </li>
                                            <li class="nav-item custom-tabs" role="presentation">
                                                <button style="padding-bottom: 10px; color: #667085;" class="nav-links" id="Closed-tab" data-bs-toggle="tab" data-bs-target="#Closed" type="button" role="tab" aria-controls="Closed" aria-selected="false">Collaborations</button>
                                            </li>
                                            <li class="nav-item custom-tabs" role="presentation">
                                                <button style="padding-bottom: 10px; color: #667085;" class="nav-links" id="mention-tab" data-bs-toggle="tab" data-bs-target="#mention" type="button" role="tab" aria-controls="mention" aria-selected="false">Mentions</button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="modal-body" style="height:100vh;">
                                        <!-- chat-list -->

                                        <!-- this commentout -->
                                        <div class="chat-lists">
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active" id="Open" role="tabpanel" aria-labelledby="Open-tab">
                                                    <?php
                                                    // $query = $this->db->query("SELECT message_from FROM 360_dialog_contacts");
                                                    $query = $this->db->query("SELECT message_from FROM 360_dialog_contacts ORDER BY id DESC");

                                                    // Fetch all rows
                                                    $results = $query->result_array(); // Use result_array() to get an array of all rows

                                                    if (!empty($results)) {
                                                        foreach ($results as $result) {
                                                    ?>
                                                            <div class="chat-list">
                                                                <a href="#" class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0">
                                                                        <img src="<?php echo base_url('assets/images/img/Avatar.png'); ?>" class="img-fluid">
                                                                    </div>
                                                                    <div class="flex-grow-1 ms-3">
                                                                        <?php
                                                                        $message_from = isset($result['message_from']) ? $result['message_from'] : 'No data';
                                                                        ?>
                                                                        <h1 style="font-size: 14px !important;"><?php echo $message_from; ?></h1>
                                                                    </div>
                                                                </a>
                                                                <?php
                                                                // Fetch the most recent message body
                                                                $message_query = $this->db->query("SELECT message_body FROM whatsapp_messages WHERE message_body IS NOT NULL ORDER BY timestamp DESC");
                                                                $message_result = $message_query->row_array();
                                                                $message_body = $message_result['message_body'] ?? null;
                                                                ?>
                                                                <!-- <! -- <p style="color: #475467 !important;"></p> --> 
                                                            </div>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                </div>
                                                <div class="tab-pane fade" id="Closed" role="tabpanel" aria-labelledby="Closed-tab">
                                                    <!-- Content for the Closed tab -->
                                                </div>
                                                <div class="tab-pane fade" id="mention" role="tabpanel" aria-labelledby="Closed-tab">
                                                    <!-- Content for the Mention tab -->
                                                </div>
                                            </div>
                                        </div>

                                        <!-- chat-list -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- chatbox -->
                    <div class="col-6 " style="padding: 0px;height: 100vh;">
                        <div class="chatbox">
                            <div class="modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="msg-head">
                                        <div class="row">
                                            <div class="d-flex" style="flex-direction: row;justify-content: space-between;">
                                                <div class="container2" style=" padding-left: 43px;">
                                                    <?php
                                                $query = $this->db->query("SELECT message_from FROM whatsapp_messages ORDER BY `timestamp` DESC");


                                                $result = $query->row_array();

                                                    // Check if $result['recipient'] exists and is not null
                                                    $columnData = isset($result['message_from']) ? $result['message_from'] : null;
                                                    ?>
                                                    <h1><?php echo $columnData; ?></h1>

                                                    <div style="margin-top: 18px">
                                                        <label for="assignedTo">Assigned to:</label>
                                                        <select name="assignedTo" id="assignedTo" style="border: none;">
                                                            <option value="you">you</option>
                                                            <!-- Add more options as needed -->
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="container1" style=" padding-right: 0px;">
                                                    <div>
                                                        <ul style="display: flex;">
                                                            <li style="margin-left:17px">
                                                                <svg style="height: 22px;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
                                                                </svg>
                                                            </li>
                                                            <li style="margin-left:17px">
                                                                <svg style="height: 22px;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                                                                </svg>
                                                            </li>
                                                            <button id="three-dots" style="text-align: center; border: none; background: none; margin-top: 0px; margin-left: 17px;" type="button" class="btn" data-bs-toggle="modal" data-bs-target="#myModal">
                                                                <svg style="height: 22px;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
                                                                </svg>
                                                            </button>

                                                        </ul>
                                                    </div>
                                                    <div style="margin-top: 35px">
                                                        <label for="assignedTo">Filter by:</label>
                                                        <select name="assignedTo" id="assignedTo" style="border: none;">
                                                            <option value="you">All channels</option>
                                                            <!-- Add more options as needed -->
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-body" style="height: 100vh;">
                                        <div class="msg-body">
                                            <!-- Your message body content -->
                                            <?php if (!empty($messages)) : ?>
                                                
                                                <ul>
                                                    <?php foreach ($messages as $message) : ?>
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
                                        </div>
                                        <ul id="message-list" class="sender">

                                        </ul>
                                    </div>

                                    <!--  -->
                                    <div class="send-box">
                                        <form id="messageForm" action="<?php echo base_url('home/send_messages'); ?>" method="post" enctype="multipart/form-data">
                                            <div class="buttonIn" style="width: 100%;">
                                                <input type="text" id="message" name="message" class="form-control" placeholder="Write message…" style="width: 100%; height: 100px; padding-bottom: 36px;">
                                                <button type="submit" class="message-send-button" style="margin-top: 64px; margin-right: 19px;">Send</button>
                                                <label for="doc" class="message-send-button-icon" style="margin-top: 64px; margin-right: 216px; cursor: pointer; display: inline-block;">
                                                    <svg style="height: 20px; color: black;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="m18.375 12.739-7.693 7.693a4.5 4.5 0 0 1-6.364-6.364l10.94-10.94A3 3 0 1 1 19.5 7.372L8.552 18.32m.009-.01-.01.01m5.699-9.941-7.81 7.81a1.5 1.5 0 0 0 2.112 2.13" />
                                                    </svg>
                                                    <input type="file" id="doc" name="file" style="display: none;" accept=".pdf,.txt,.jpeg,.jpg,.png">
                                                </label>
                                            </div>
                                        </form>
                                    </div>


                                </div>
                            </div>

                        </div>

                    </div>

                    <!-- discripation -->
                    <div class="col overflow-auto" style="max-height: 892px; height: 943px;     margin-top: -35px;">
                        <div class="modal-dialog" style=" height: max-content;margin-left: auto;background-color: none !important; margin: 0px;">
                            <div class="modal-content" style="background: #ffffff">
                                <div class="modal-header">


                                </div>
                                <div class="header" style=" display: flex;  justify-content: center; flex-direction: column; align-items: center;border-bottom: 1px solid #ccc;">
                                    <div class="profil">
                                        <img src="<?php echo base_url('assets/images/img/Avatardialogbox.png'); ?>" style="height: 57px; width: 57px" />
                                    </div>
                                    <h5 class="modal-title" style="margin-top: 14px; font-weight: 700; padding-bottom: 29px">
                                        Phoenix Baker
                                    </h5>
                                </div>
                                <div class="contact-section" style="border-bottom: 1px solid #ccc">
                                    <ul style="     display: flex;    justify-content: center;   justify-content: space-evenly;       padding-top: 15px;">

                                        <button style="   text-align: center;  border: none;    background: none;   margin-top: 0px; margin-left: 17px;" type="button" class="btn" data-bs-toggle="modal" data-bs-target="#myModal">
                                            <svg style="height: 22px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
                                            </svg>
                                        </button>
                                        <!-- firstbutton -->
                                        <!-- secondbutton-->
                                        <button style="         text-align: center;    border: none; background: none;  margin-top: 0px;margin-left: 17px;  " type="button" class="btn" data-bs-toggle="modal" data-bs-target="#myModal">
                                            <svg style="height: 22px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                                            </svg>
                                        </button>
                                        <!-- secondbutton -->
                                        <!-- thirdbutton-->
                                        <button style="text-align: center; border: none; background: none; margin-top: 0px; margin-left: 17px;" type="button" class="btn" data-bs-toggle="modal" data-bs-target="#myModal">
                                            <svg style="height: 22px;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                                            </svg>

                                        </button>
                                        <!-- thirdbutton -->
                                        <!-- fourthbutton -->
                                        <button style="text-align: center; border: none; background: none; margin-top: 0px; margin-left: 17px;" type="button" class="btn" data-bs-toggle="modal" data-bs-target="#myModal">
                                            <svg style="height: 22px;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m18.375 12.739-7.693 7.693a4.5 4.5 0 0 1-6.364-6.364l10.94-10.94A3 3 0 1 1 19.5 7.372L8.552 18.32m.009-.01-.01.01m5.699-9.941-7.81 7.81a1.5 1.5 0 0 0 2.112 2.13" />
                                            </svg>

                                        </button>
                                        <!-- fourthbutton -->
                                    </ul>

                                    <div class="contactss" style="display: flex; align-items: center;  justify-content: center; margin-top: 18px;">

                                        <button style="text-align: center; border: none; background: none; margin-top: 0px; margin-left: 17px;" type="button" class="btn" data-bs-toggle="modal" data-bs-target="#myModal">
                                            <svg style="height: 22px;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                            </svg>

                                        </button>
                                        <p>01823894527</p>



                                    </div>
                                    <div class="contactss" style="display: flex; align-items: center;  justify-content: center; margin-top: 18px;     padding-bottom: 38px;">

                                        <button style="text-align: center; border: none; background: none; margin-top: 0px; margin-left: 17px;" type="button" class="btn" data-bs-toggle="modal" data-bs-target="#myModal">
                                            <svg style="height: 22px;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                            </svg>


                                        </button>
                                        <p>contact@phoenixbaker.com</p>







                                    </div>

                                </div>
                                <!-- label section -->
                                <div class="label" style="display: flex;  align-items: center;justify-content: space-between;padding: 22px 20px;">
                                    <h3>label</h3>
                                    <svg style="height: 22px;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                    </svg>


                                </div>
                                <div class="labelbody" style=" align-items: center;padding: 22px 20px; display: flex;flex-direction: column;     border-bottom: 1px solid #ccc;">
                                    <h4 style=" color: black; font-size: larger;">
                                        No Labels here.</h4>
                                    <p style="  color: gray;">Add
                                        labels for this contact with the
                                        “+” icon</p>
                                </div>


                                <!-- notes section -->
                                <div class="label" style="display: flex;  align-items: center;justify-content: space-between;padding: 22px 20px;">
                                    <h3>Notes</h3>
                                    <svg style="height: 22px;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                    </svg>


                                </div>
                                <div class="labelbody" style=" align-items: center;padding: 22px 20px; display: flex;flex-direction: column;     border-bottom: 1px solid #ccc;">
                                    <h4 style=" color: black; font-size: larger;">
                                        No Notes here.</h4>
                                    <p style="  color: gray;">Add
                                        Notes for this contact with the
                                        “+” icon</p>
                                </div>


                                <div class="contactssss" style="padding: 5px 18px;">
                                    <h2 style="color: black;font-size: 24px;font-weight: 500;">
                                        Contact Info</h2>
                                    <div class="firstname" style="padding-top:12px">
                                        <p style="font-size: 12px; padding-top:5px ; color:gray ;">
                                            firstname</p>
                                        <p style=" font-size: large;  color: black;font-weight: 500;">
                                            phonix </p>
                                    </div>
                                </div>
                                <div class="contactssss" style="padding: 5px 18px;">

                                    <div class="firstname" style="padding-top:-16px">
                                        <p style=" font-size: 12px; padding-top:5px ; color:gray ">
                                            Last Name</p>
                                        <p style=" font-size: large;  color: black;font-weight: 500; ">
                                            Baker </p>
                                    </div>
                                </div>

                                <div class="contactssss" style="padding: 5px 18px;">

                                    <div class="firstname" style="padding-top:-16px">
                                        <p style=" font-size: 12px;   padding-top:5px ; color:gray ">
                                            Lists </p>
                                        <p style=" font-size: large;  color: black;font-weight: 500;">
                                            Phoenix </p>
                                    </div>
                                </div>
                                <div class="contactssss" style="padding: 5px 18px;">

                                    <div class="firstname" style="padding-top:-16px">
                                        <p style="font-size: 12px;   padding-top:5px ; color:gray ">
                                            Lists</p>
                                        <p style=" font-size: large;  color: black;font-weight: 500;">
                                            phonix </p>
                                    </div>
                                </div>
                                <div class="contactssss" style="padding: 5px 18px;">

                                    <div class="firstname" style="padding-top:-16px">
                                        <p style="  font-size: 12px; padding-top:5px ; color:gray ">
                                            Phone Number</p>
                                        <p style=" font-size: large;  color: black;font-weight: 500;">
                                            92833729832839 </p>
                                    </div>
                                </div>
                                <div class="contactssss" style="padding: 5px 18px;">

                                    <div class="firstname" style="padding-top:-16px">
                                        <p style="font-size: 12px; padding-top:5px ; color:gray ">
                                            Company Name</p>
                                        <p style=" font-size: large;  color: black;font-weight: 500;">
                                            - </p>
                                    </div>
                                </div>
                                <div class="contactssss" style="padding: 5px 18px;">

                                    <div class="firstname" style="padding-top:-16px">
                                        <p style="font-size: 12px; padding-top:5px ; color:gray ">
                                            Job Title </p>
                                        <p style=" font-size: large;  color: black;font-weight: 500;">
                                            Marketing Coordinator</p>
                                    </div>
                                </div>
                                <div class="contactssss" style="padding: 5px 18px;">

                                    <div class="firstname" style="padding-top:-16px">
                                        <p style="font-size: 12px; padding-top:5px ; color:gray ">
                                            Contact Owner </p>
                                        <p style=" font-size: large;  color: black;font-weight: 500;">
                                            Phoenix</p>
                                    </div>
                                </div>
                                <div class="contactssss" style="padding: 5px 18px;">

                                    <div class="firstname" style="padding-top:-16px">
                                        <p style="font-size: 12px; padding-top:5px ; color:gray ">
                                            Lead Stage </p>
                                        <p style=" font-size: large;  color: black;font-weight: 500;">
                                            - </p>
                                    </div>
                                </div>
                                <div class="contactssss" style="padding: 5px 18px;">

                                    <div class="firstname" style="padding-top:-16px">
                                        <p style="font-size: 12px; padding-top:5px ; color:gray ">
                                            Lead Source </p>
                                        <p style=" font-size: large;  color: black;font-weight: 500;">
                                            - </p>
                                    </div>
                                </div>
                                <div class="contactssss" style="padding: 5px 18px;">

                                    <div class="firstname" style="padding-top:-16px">
                                        <p style="font-size: 12px; padding-top:5px ; color:gray ">
                                            Priority </p>
                                        <p style=" font-size: large;  color: black;font-weight: 500;">
                                            - </p>
                                    </div>
                                </div>
                                <div class="contactssss" style="padding: 5px 18px;">

                                    <div class="firstname" style="padding-top:-16px">
                                        <p style="font-size: 12px; padding-top:5px ; color:gray ">
                                            Country </p>
                                        <p style=" font-size: large;  color: black;font-weight: 500;">
                                            - </p>
                                    </div>
                                </div>
                                <div class="contactssss" style="padding: 5px 18px;">

                                    <div class="firstname" style="padding-top:-16px">
                                        <p style="font-size: 12px; padding-top:5px ; color:gray ">
                                            Subsciber </p>
                                        <p style=" font-size: large;  color: black;font-weight: 500;">
                                            True</p>
                                    </div>
                                </div>
                                <div class="contactssss" style="padding: 5px 18px;">

                                    <div class="firstname" style="padding-top:-16px">
                                        <p style="font-size: 12px; padding-top:5px ; color:gray ">
                                            Last Channel </p>
                                        <p style=" font-size: large;  color: black;font-weight: 500;">
                                            Facebook - Friday Chua </p>
                                    </div>
                                </div>
                                <div class="contactssss" style="padding: 5px 18px;">

                                    <div class="firstname" style="padding-top:-16px">
                                        <p style="font-size: 12px; padding-top:5px ; color:gray ">
                                            Last Contact From You </p>
                                        <p style=" font-size: large;  color: black;font-weight: 500;">
                                            Phonex </p>
                                    </div>
                                </div>
                                <div class="contactssss" style="padding: 5px 18px;">

                                    <div class="firstname" style="padding-top:-16px">
                                        <p style="font-size: 12px; padding-top:5px ; color:gray ">
                                            Last Contact From Customers </p>
                                        <p style=" font-size: large;  color: black;font-weight: 500;">
                                            15 May 2020 8:30 am </p>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>


                </div>
            </div>
    </div>
</div>
</div>

</div>

</section>

<?php
echo '</div>'; // Closing main-content div
?>
</div>
</div>
<script></script>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function() {
        $("#three-dots").click(function() {
            $("#myModal").modal('show');
        });
    });

    function setEqualHeight() {
        var cols = document.querySelectorAll('.col');
        var maxHeight = 0;
        cols.forEach(function(col) {
            col.style.height = 'auto';
            var colHeight = col.offsetHeight;
            if (colHeight > maxHeight) {
                maxHeight = colHeight;
            }
        });
        cols.forEach(function(col) {
            col.style.height = maxHeight + 'px';
        });
    }

    window.addEventListener('resize', setEqualHeight);
    setEqualHeight();
</script>
<script>
    var pusher = new Pusher('ae65b6841edff9407432', {
        cluster: 'ap2',
        encrypted: true
    });
    var channel = pusher.subscribe('my-channel');

    channel.bind('message-sent', function(data) {
        console.log('Received data:', data); // Debugging: Log the received data

        // Create a new list item element
        var listItem = document.createElement('li');
        listItem.classList.add('sender');

        // Check if the received data contains an image URL

        // Create a paragraph element for the message body
        if (data.message) {
            console.log('Message:', data.message); // Debugging: Log the message

            var paragraph = document.createElement('p');
            paragraph.textContent = data.message; // Assign the received message

            // Append the paragraph element to the list item
            listItem.appendChild(paragraph);
        } else {
            console.log('No message found in data'); // Debugging: Log if no message
        }

        // Append the list item to the message list
        var messageList = document.getElementById('message-list');
        messageList.appendChild(listItem);
    });
</script>
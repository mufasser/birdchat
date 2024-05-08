<head>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Manrope:300,400,500,600,700&display=swap&subset=latin-ext");

        :root {
            --body-bg-color: #e5ecef;
            --theme-bg-color: #fff;
            --settings-icon-hover: #9fa7ac;
            --developer-color: #f9fafb;
            --input-bg: #f8f8fa;
            --input-chat-color: #a2a2a2;
            --border-color: #eef2f4;
            --body-font: "Manrope", sans-serif;
            --body-color: #273346;
            --settings-icon-color: #c1c7cd;
            --msg-message: #969eaa;
            --chat-text-bg: #f1f2f6;
            --theme-color: #0086ff;
            --msg-date: #c0c7d2;
            --button-bg-color: #f0f7ff;
            --button-color: var(--theme-color);
            --detail-font-color: #919ca2;
            --msg-hover-bg: rgba(238, 242, 244, 0.4);
            --active-conversation-bg: linear-gradient(to right,
                    rgba(238, 242, 244, 0.4) 0%,
                    rgba(238, 242, 244, 0) 100%);
            --overlay-bg: linear-gradient(to bottom,
                    rgba(255, 255, 255, 0) 0%,
                    rgba(255, 255, 255, 1) 65%,
                    rgba(255, 255, 255, 1) 100%);
            --chat-header-bg: linear-gradient(to bottom,
                    rgba(255, 255, 255, 1) 0%,
                    rgba(255, 255, 255, 1) 78%,
                    rgba(255, 255, 255, 0) 100%);
        }

        [data-theme="purple"] {
            --theme-color: #9f7aea;
            --button-color: #9f7aea;
            --button-bg-color: rgba(159, 122, 234, 0.12);
        }

        [data-theme="green"] {
            --theme-color: #38b2ac;
            --button-color: #38b2ac;
            --button-bg-color: rgba(56, 178, 171, 0.15);
        }

        [data-theme="orange"] {
            --theme-color: #ed8936;
            --button-color: #ed8936;
            --button-bg-color: rgba(237, 137, 54, 0.12);
        }

        .dark-mode {
            --body-bg-color: #1d1d1d;
            --theme-bg-color: #27292d;
            --border-color: #323336;
            --body-color: #d1d1d2;
            --active-conversation-bg: linear-gradient(to right,
                    rgba(47, 50, 56, 0.54),
                    rgba(238, 242, 244, 0) 100%);
            --msg-hover-bg: rgba(47, 50, 56, 0.54);
            --chat-text-bg: #383b40;
            --chat-text-color: #b5b7ba;
            --msg-date: #626466;
            --msg-message: var(--msg-date);
            --overlay-bg: linear-gradient(to bottom,
                    rgba(0, 0, 0, 0) 0%,
                    #27292d 65%,
                    #27292d 100%);
            --input-bg: #2f3236;
            --chat-header-bg: linear-gradient(to bottom,
                    #27292d 0%,
                    #27292d 78%,
                    rgba(255, 255, 255, 0) 100%);
            --settings-icon-color: #7c7e80;
            --developer-color: var(--border-color);
            --button-bg-color: #393b40;
            --button-color: var(--body-color);
            --input-chat-color: #6f7073;
            --detail-font-color: var(--input-chat-color);
        }

        .blue {
            background-color: #0086ff;
        }

        .purple {
            background-color: #9f7aea;
        }

        .green {
            background-color: #38b2ac;
        }

        .orange {
            background-color: #ed8936;
        }

        * {
            outline: none;
            box-sizing: border-box;
        }

        img {
            max-width: 100%;
        }

        body {
            background-color: var(--body-bg-color);
            font-family: var(--body-font);
            color: var(--body-color);
        }

        html {
            box-sizing: border-box;
            -webkit-font-smoothing: antialiased;
        }

        .app {
            display: flex;
            flex-direction: column;
            background-color: var(--theme-bg-color);
            max-width: 1600px;
            height: 100vh;
            margin: 0 auto;
            overflow: hidden;
        }

        .header {
            height: 80px;
            width: 100%;
            border-bottom: 1px solid var(--border-color);
            display: flex;
            align-items: center;
            padding: 0 20px;
        }

        .wrapper {
            width: 100%;
            display: flex;
            flex-grow: 1;
            overflow: hidden;
        }

        .conversation-area,
        .detail-area {
            width: 340px;
            flex-shrink: 0;
        }

        .detail-area {
            border-left: 1px solid var(--border-color);
            margin-left: auto;
            padding: 30px 30px 0 30px;
            display: flex;
            flex-direction: column;
            overflow: auto;
        }

        .chat-area {
            flex-grow: 1;
        }

        .search-bar {
            height: 80px;
            z-index: 3;
            position: relative;
            margin-left: 280px;

            input {
                height: 100%;
                width: 100%;
                display: block;
                background-color: transparent;
                border: none;
                color: var(--body-color);
                padding: 0 54px;
                background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 56.966 56.966' fill='%23c1c7cd'%3e%3cpath d='M55.146 51.887L41.588 37.786A22.926 22.926 0 0046.984 23c0-12.682-10.318-23-23-23s-23 10.318-23 23 10.318 23 23 23c4.761 0 9.298-1.436 13.177-4.162l13.661 14.208c.571.593 1.339.92 2.162.92.779 0 1.518-.297 2.079-.837a3.004 3.004 0 00.083-4.242zM23.984 6c9.374 0 17 7.626 17 17s-7.626 17-17 17-17-7.626-17-17 7.626-17 17-17z'/%3e%3c/svg%3e");
                background-repeat: no-repeat;
                background-size: 16px;
                background-position: 25px 48%;
                font-family: var(--body-font);
                font-weight: 600;
                font-size: 15px;

                &::placeholder {
                    color: var(--input-chat-color);
                }
            }
        }

        .logo {
            color: var(--theme-color);
            width: 38px;
            flex-shrink: 0;

            svg {
                width: 100%;
            }
        }

        .user-settings {
            display: flex;
            align-items: center;
            cursor: pointer;
            margin-left: auto;
            flex-shrink: 0;

            &>*+* {
                margin-left: 14px;
            }
        }

        .dark-light {
            width: 22px;
            height: 22px;
            color: var(--settings-icon-color);
            flex-shrink: 0;

            svg {
                width: 100%;
                fill: transparent;
                transition: 0.5s;
            }
        }

        .user-profile {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }

        .settings {
            color: var(--settings-icon-color);
            width: 22px;
            height: 22px;
            flex-shrink: 0;
        }

        .conversation-area {
            border-right: 1px solid var(--border-color);
            overflow-y: auto;
            overflow-x: hidden;
            display: flex;
            flex-direction: column;
            position: relative;
        }

        .msg-profile {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 15px;

            &.group {
                display: flex;
                justify-content: center;
                align-items: center;
                background-color: var(--border-color);

                svg {
                    width: 60%;
                }
            }
        }

        .msg {
            display: flex;
            align-items: center;
            padding: 20px;
            cursor: pointer;
            transition: 0.2s;
            position: relative;

            &:hover {
                background-color: var(--msg-hover-bg);
            }

            &.active {
                background: var(--active-conversation-bg);
                border-left: 4px solid var(--theme-color);
            }

            &.online:before {
                content: "";
                position: absolute;
                background-color: #23be7e;
                width: 9px;
                height: 9px;
                border-radius: 50%;
                border: 2px solid var(--theme-bg-color);
                left: 50px;
                bottom: 19px;
            }
        }

        .msg-username {
            margin-bottom: 4px;
            font-weight: 600;
            font-size: 15px;
        }

        .msg-detail {
            overflow: hidden;
        }

        .msg-content {
            font-weight: 500;
            font-size: 13px;
            display: flex;
        }

        .msg-message {

            overflow: hidden;
            text-overflow: ellipsis;
            color: var(--msg-message);
        }

        .msg-date {
            font-size: 14px;
            color: var(--msg-date);
            margin-left: 3px;

            &:before {
                content: "•";
                margin-right: 2px;
            }
        }

        .add {
            position: sticky;
            bottom: 25px;
            background-color: var(--theme-color);
            width: 60px;
            height: 60px;
            border: 0;
            border-radius: 50%;
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='none' stroke='white' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-plus'%3e%3cpath d='M12 5v14M5 12h14'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: 50%;
            background-size: 28px;
            box-shadow: 0 0 16px var(--theme-color);
            margin: auto auto -55px;
            flex-shrink: 0;
            z-index: 1;
            cursor: pointer;
        }

        .overlay {
            position: sticky;
            bottom: 0;
            left: 0;
            width: 340px;
            flex-shrink: 0;
            background: var(--overlay-bg);
            height: 80px;
        }

        .chat-area {
            display: flex;
            flex-direction: column;
            overflow: auto;

            &-header {
                display: flex;
                position: sticky;
                top: 0;
                left: 0;
                z-index: 2;
                width: 100%;
                align-items: center;
                justify-content: space-between;
                padding: 20px;
                background: var(--chat-header-bg);
            }

            &-profile {
                width: 32px;
                border-radius: 50%;
                object-fit: cover;
            }

            &-title {
                font-size: 18px;
                font-weight: 600;
            }

            &-main {
                flex-grow: 1;
            }
        }

        .chat-msg-img {
            height: 40px;
            width: 40px;
            border-radius: 50%;
            object-fit: cover;
        }

        .chat-msg-profile {
            flex-shrink: 0;
            margin-top: auto;
            margin-bottom: -20px;
            position: relative;
        }

        .chat-msg-date {
            position: absolute;
            left: calc(100% + 12px);
            bottom: 0;
            font-size: 12px;
            font-weight: 600;
            color: var(--msg-date);
            white-space: nowrap;
        }

        .chat-msg {
            display: flex;
            padding: 0 20px 45px;

            &-content {
                margin-left: 12px;
                max-width: 70%;
                display: flex;
                flex-direction: column;
                align-items: flex-start;
            }

            &-text {
                background-color: var(--chat-text-bg);
                padding: 15px;
                border-radius: 20px 20px 20px 0;
                line-height: 1.5;
                font-size: 14px;
                font-weight: 500;

                &+& {
                    margin-top: 10px;
                }
            }
        }

        .chat-msg-text {
            color: var(--chat-text-color);
        }

        .owner {
            flex-direction: row-reverse;

            .chat-msg-content {
                margin-left: 0;
                margin-right: 12px;
                align-items: flex-end;
            }

            .chat-msg-text {
                background-color: var(--theme-color);
                color: #fff;
                border-radius: 20px 20px 0 20px;
            }

            .chat-msg-date {
                left: auto;
                right: calc(100% + 12px);
            }
        }

        .chat-msg-text img {
            max-width: 300px;
            width: 100%;
        }

        .chat-area-footer {
            display: flex;
            border-top: 1px solid var(--border-color);
            width: 100%;
            padding: 10px 20px;
            align-items: center;
            background-color: var(--theme-bg-color);
            position: sticky;
            bottom: 0;
            left: 0;
        }

        .chat-area-footer svg {
            color: var(--settings-icon-color);
            width: 20px;
            flex-shrink: 0;
            cursor: pointer;

            &:hover {
                color: var(--settings-icon-hover);
            }

            &+svg {
                margin-left: 12px;
            }
        }

        .chat-area-footer input {
            border: none;
            color: var(--body-color);
            background-color: var(--input-bg);
            padding: 12px;
            border-radius: 6px;
            font-size: 15px;
            margin: 0 12px;
            width: 100%;

            &::placeholder {
                color: var(--input-chat-color);
            }
        }

        .detail-area-header {
            display: flex;
            flex-direction: column;
            align-items: center;

            .msg-profile {
                margin-right: 0;
                width: 60px;
                height: 60px;
                margin-bottom: 15px;
            }
        }

        .detail-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .detail-subtitle {
            font-size: 12px;
            font-weight: 600;
            color: var(--msg-date);
        }

        .detail-button {
            border: 0;
            background-color: var(--button-bg-color);
            padding: 10px 14px;
            border-radius: 5px;
            color: var(--button-color);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            flex-grow: 1;
            font-weight: 500;

            svg {
                width: 18px;
                margin-right: 10px;
            }

            &:last-child {
                margin-left: 8px;
            }
        }

        .detail-buttons {
            margin-top: 20px;
            display: flex;
            width: 100%;
        }

        .detail-area input {
            background-color: transparent;
            border: none;
            width: 100%;
            color: var(--body-color);
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 56.966 56.966' fill='%23c1c7cd'%3e%3cpath d='M55.146 51.887L41.588 37.786A22.926 22.926 0 0046.984 23c0-12.682-10.318-23-23-23s-23 10.318-23 23 10.318 23 23 23c4.761 0 9.298-1.436 13.177-4.162l13.661 14.208c.571.593 1.339.92 2.162.92.779 0 1.518-.297 2.079-.837a3.004 3.004 0 00.083-4.242zM23.984 6c9.374 0 17 7.626 17 17s-7.626 17-17 17-17-7.626-17-17 7.626-17 17-17z'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-size: 16px;
            background-position: 100%;
            font-family: var(--body-font);
            font-weight: 600;
            font-size: 14px;
            border-bottom: 1px solid var(--border-color);
            padding: 14px 0;

            &::placeholder {
                color: var(--detail-font-color);
            }
        }

        .detail-changes {
            margin-top: 40px;
        }

        .detail-change {
            color: var(--detail-font-color);
            font-family: var(--body-font);
            font-weight: 600;
            font-size: 14px;
            border-bottom: 1px solid var(--border-color);
            padding: 14px 0;
            display: flex;

            svg {
                width: 16px;
                margin-left: auto;
            }
        }

        .colors {
            display: flex;
            margin-left: auto;
        }

        .color {
            width: 16px;
            height: 16px;
            border-radius: 50%;
            cursor: pointer;

            &.selected {
                background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' stroke='%23fff' stroke-width='3' fill='none' stroke-linecap='round' stroke-linejoin='round' class='css-i6dzq1' viewBox='0 0 24 24'%3E%3Cpath d='M20 6L9 17l-5-5'/%3E%3C/svg%3E");
                background-size: 10px;
                background-position: center;
                background-repeat: no-repeat;
            }

            &:not(:last-child) {
                margin-right: 4px;
            }
        }

        .detail-photo-title {
            display: flex;
            align-items: center;

            svg {
                width: 16px;
            }
        }

        .detail-photos {
            margin-top: 30px;
            text-align: center;
        }

        .detail-photo-title {
            color: var(--detail-font-color);
            font-weight: 600;
            font-size: 14px;
            margin-bottom: 20px;

            svg {
                margin-right: 8px;
            }
        }

        .detail-photo-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-column-gap: 6px;
            grid-row-gap: 6px;
            grid-template-rows: repeat(3, 60px);

            img {
                height: 100%;
                width: 100%;
                object-fit: cover;
                border-radius: 8px;
                object-position: center;
            }
        }

        .view-more {
            color: var(--theme-color);
            font-weight: 600;
            font-size: 15px;
            margin: 25px 0;
        }

        .follow-me {
            text-decoration: none;
            font-size: 14px;
            width: calc(100% + 60px);
            margin-left: -30px;
            display: flex;
            align-items: center;
            margin-top: auto;
            overflow: hidden;
            color: #9c9cab;
            padding: 0 20px;
            height: 52px;
            flex-shrink: 0;
            position: relative;
            justify-content: center;

            svg {
                width: 16px;
                height: 16px;
                margin-right: 8px;
            }
        }

        .follow-text {
            display: flex;
            align-items: center;
            transition: 0.3s;
        }

        .follow-me:hover {
            .follow-text {
                transform: translateY(100%);
            }

            .developer {
                top: 0;
            }
        }

        .developer {
            position: absolute;
            color: var(--detail-font-color);
            font-weight: 600;
            left: 0;
            top: -100%;
            display: flex;
            transition: 0.3s;
            padding: 0 20px;
            align-items: center;
            justify-content: center;
            background-color: var(--developer-color);
            width: 100%;
            height: 100%;
        }

        .developer img {
            border-radius: 50%;
            width: 26px;
            height: 26px;
            object-fit: cover;
            margin-right: 10px;
        }

        .dark-mode {

            .search-bar input,
            .detail-area input {
                background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 56.966 56.966' fill='%236f7073'%3e%3cpath d='M55.146 51.887L41.588 37.786A22.926 22.926 0 0046.984 23c0-12.682-10.318-23-23-23s-23 10.318-23 23 10.318 23 23 23c4.761 0 9.298-1.436 13.177-4.162l13.661 14.208c.571.593 1.339.92 2.162.92.779 0 1.518-.297 2.079-.837a3.004 3.004 0 00.083-4.242zM23.984 6c9.374 0 17 7.626 17 17s-7.626 17-17 17-17-7.626-17-17 7.626-17 17-17z'/%3e%3c/svg%3e");
            }

            .dark-light svg {
                fill: #ffce45;
                stroke: #ffce45;
            }

            .chat-area-group span {
                color: #d1d1d2;
            }
        }

        .chat-area-group {
            flex-shrink: 0;
            display: flex;

            * {
                border: 2px solid var(--theme-bg-color);
            }

            *+* {
                margin-left: -5px;
            }

            span {
                width: 32px;
                height: 32px;
                background-color: var(--button-bg-color);
                color: var(--theme-color);
                border-radius: 50%;
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 14px;
                font-weight: 500;
            }
        }

        @media (max-width: 1120px) {
            .detail-area {
                display: none;
            }
        }

        @media (max-width: 780px) {
            .conversation-area {
                display: none;
            }

            .search-bar {
                margin-left: 0;
                flex-grow: 1;

                input {
                    padding-right: 10px;
                }
            }
        }
    </style>
    <style>
        .serchoption {
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

        .serchoption:focus {
            outline: 0;
            box-shadow: inherit;
        }

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
            /* Your desired text color */
        }

        .nav-link:active {
            color: #667085 !important;
            /* Your desired text color */
            background-color: #fff;
            border-color: transparent transparent #000;
        }

        .navpill {
            display: flex;
            justify-content: space-evenly;
            ;
            font-size: smaller;
            flex-direction: row;
            list-style: none;
            text-decoration: none;
        }

        ul a {
            text-decoration: none;
        }

        .header-user {
            display: flex;
            justify-content: space-between;
            align-items: center;

            color: black;
            padding: 10px;
        }

        .icons span {
            margin-left: 10px;
        }

        .filters {
            display: flex;
            justify-content: space-between;
            padding: 10px;
        }

        select {
            padding: 5px;
        }
    </style>
</head>
<div class="app">
    <div class="header">
        <div class="logo">
            <svg viewBox="0 0 513 513" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M256.025.05C117.67-2.678 3.184 107.038.025 245.383a240.703 240.703 0 0085.333 182.613v73.387c0 5.891 4.776 10.667 10.667 10.667a10.67 10.67 0 005.653-1.621l59.456-37.141a264.142 264.142 0 0094.891 17.429c138.355 2.728 252.841-106.988 256-245.333C508.866 107.038 394.38-2.678 256.025.05z" />
                <path
                    d="M330.518 131.099l-213.825 130.08c-7.387 4.494-5.74 15.711 2.656 17.97l72.009 19.374a9.88 9.88 0 007.703-1.094l32.882-20.003-10.113 37.136a9.88 9.88 0 001.083 7.704l38.561 63.826c4.488 7.427 15.726 5.936 18.003-2.425l65.764-241.49c2.337-8.582-7.092-15.72-14.723-11.078zM266.44 356.177l-24.415-40.411 15.544-57.074c2.336-8.581-7.093-15.719-14.723-11.078l-50.536 30.744-45.592-12.266L319.616 160.91 266.44 356.177z"
                    fill="#fff" />
            </svg>
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Search..." />
        </div>
        <div class="user-settings">
            <div class="dark-light">
                <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" />
                </svg>
            </div>
            <div class="settings">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="3" />
                    <path
                        d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-2 2 2 2 0 01-2-2v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83 0 2 2 0 010-2.83l.06-.06a1.65 1.65 0 00.33-1.82 1.65 1.65 0 00-1.51-1H3a2 2 0 01-2-2 2 2 0 012-2h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 010-2.83 2 2 0 012.83 0l.06.06a1.65 1.65 0 001.82.33H9a1.65 1.65 0 001-1.51V3a2 2 0 012-2 2 2 0 012 2v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 0 2 2 0 010 2.83l-.06.06a1.65 1.65 0 00-.33 1.82V9a1.65 1.65 0 001.51 1H21a2 2 0 012 2 2 2 0 01-2 2h-.09a1.65 1.65 0 00-1.51 1z" />
                </svg>
            </div>
            <img class="user-profile" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3364143/download+%281%29.png"
                alt="" class="account-profile" alt="">
        </div>
    </div>
    <div class="wrapper">
        <!-- converaction area -->
        <div class="conversation-area">

            <header class="container">
                <nav class="navbar">
                    <ul id="navList" class="nav nav-pills navpill justify-content-evenly">
                        <li class="nav-item active"><a id="assigneLink" class="nav-link" href="#"
                                onclick="loadContent('assigne')">Assigned to me</a></li>
                        <li class="nav-item"><a id="CollabLink" class="nav-link" href="#"
                                onclick="loadContent('Collab')">Collaborations</a></li>
                        <li class="nav-item"><a id="MentionsLink" class="nav-link" href="#"
                                onclick="loadContent('Mentions')">Mentions</a></li>

                    </ul>
                </nav>
            </header>

            <!-- section one -->
            <section id="assigneSection" class="row custom-row">
                <div class="msg">
                    <div class="contant-area">
                        <div class="d-flex flex-row " style="display:flex; align-items: center;">
                            <img src="<?php echo base_url('assets/images/img/Avatar.png'); ?>" class="msg-profile">
                            <div>
                                <p class="msg-username">Doe</p>
                                <p class="msg-date">5min ago</p>
                            </div>
                        </div>
                        <div class="msg-detail">
                            <div class="msg-content">
                                <span style="overflow-wrap: break-word" class="msg-message">Hey Olivia, Katherine
                                    sent me over the latest doc. I just have a quick question about the...
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- section two -->
            <section id="CollabSection" class="row custom-row">
                <div class="msg">
                    <div class="contant-area">
                        <div class="d-flex flex-row " style="display:flex; align-items: center;">
                            <img src="<?php echo base_url('assets/images/img/Avatar.png'); ?>" class="msg-profile">
                            <div>
                                <p class="msg-username">David</p>
                                <p class="msg-date">5min ago</p>
                            </div>
                        </div>
                        <div class="msg-detail">
                            <div class="msg-content">
                                <span style="overflow-wrap: break-word" class="msg-message">Hey Olivia, Katherine
                                    sent me over the latest doc. I just have a quick question about the...
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- section three -->
            <section id="MentionsSection" class="row custom-row">
                <div class="msg">
                    <div class="contant-area">
                        <div class="d-flex flex-row " style="display:flex; align-items: center;">
                            <img src="<?php echo base_url('assets/images/img/Avatar.png'); ?>" class="msg-profile">
                            <div>
                                <p class="msg-username">Joe</p>
                                <p class="msg-date">5min ago</p>
                            </div>
                        </div>
                        <div class="msg-detail">
                            <div class="msg-content">
                                <span style="overflow-wrap: break-word" class="msg-message">Hey Olivia, Katherine
                                    sent me over the latest doc. I just have a quick question about the...
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="overlay"></div>
        </div>

        <!-- chat area -->
        <div class="chat-area">
            <div class="chat-area-main" style="height:100vh;">
                <?php if (!empty($messages)) : ?>
                <?php foreach ($messages->result() as $message) : ?>
                <?php if (!empty($message->message_body)) : ?>
                <?php if (is_null($message->entry_id)) : ?>
                <div class="chat-msg owner">
                    <?php else : ?>
                    <div class="chat-msg">
                        <?php endif; ?>
                        <div class="chat-msg-profile">
                            <img class="chat-msg-img"
                                src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3364143/download+%281%29.png"
                                alt="" />
                            <div class="chat-msg-date"><?php echo $message->timestamp; ?></div>
                        </div>
                        <div class="chat-msg-content">
                            <div class="chat-msg-text"><?php echo $message->message_body; ?></div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div>
                <div class="chat-area-footer">
                    <div class="send-box">
                        <form action="<?php echo base_url('home/send_messages'); ?>" method="post">
                            <textarea id="message" name="message" rows="5" cols="50"></textarea><br><br>
                            <input type="submit" value="Send">
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <script>
        // Define the loadContent function
        function loadContent(pageName) {
            // Hide all sections
            var sections = document.querySelectorAll('.conversation-area section');
            sections.forEach(function(section) {
                section.style.display = 'none';
            });

            // Show the selected section
            document.getElementById(pageName + 'Section').style.display = 'block';

            // Remove 'active' class from all nav items
            var navItems = document.querySelectorAll('#navList .nav-item');
            navItems.forEach(function(navItem) {
                navItem.classList.remove('active');
            });

            // Add 'active' class to the selected nav item
            document.getElementById(pageName + 'Link').parentNode.classList.add('active');
        }

        // Call loadContent with default page name when the window loads
        window.onload = function() {
            loadContent('assigne');
        };
    </script>

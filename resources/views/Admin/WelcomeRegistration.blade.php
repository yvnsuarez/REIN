<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i''https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i">
        <!-- Styles -->
        <style>
                body {
                background: #dfe4e6;
                font-family: 'Roboto Condensed', sans-serif;
                }

                /* Menus */
                #
                container {
                background: #fff;
                width: 1200px;
                height: 600px;
                margin: 40px auto;
                border-radius: 5px;
                }

                #logo {
                background: #DABC20;
                color: #000000;
                display: block;
                float: left;
                font-size: 14px;
                text-decoration: none;
                border-radius: 5px 0 0 0;
                padding: 26px 40px 27px !important;
                }

                #top-menu {
                background: #DABC20;
                width: 100%;
                height: 70px;
                border-radius: 5px 5px 0 0;
                }

                #top-menu-left a,
                #top-menu-right a {
                border-right: solid #DABC20 1px;
                color: #000000;
                display: block;
                float: left;
                font-size: 14px;
                padding: 4px 40px 4px;
                text-decoration: none;
                position: relative;
                top: 21px;
                }

                #top-menu-left a:hover,
                #top-menu-right a:hover {
                color: #000000;
                }

                .active {
                color: #000000;
                border-bottom: 3px solid #000000;
                padding: 0 5px 3px;
                }

                #top-menu-right {
                float: right;
                }

                /* Left Column */
                #left-column {
                border-right: solid 1px #edf0f1;
                font-size: 13.5px;
                float: left;
                width: 250px;
                height: 450px;
                padding: 40px;
                }

                .column-heading {
                color: #000000;
                text-transform: uppercase;
                font-size: 12px;
                font-weight: 700;
                letter-spacing: 2px;
                }

                .vertical-menu {
                width: 250px;
                font-family: 'Roboto', sans-serif;
                }

                .vertical-menu a {
                color: #aab3b5;
                display: block;
                font-weight: bold;
                padding: 5px;
                text-decoration: none;
                width: 100%;
                }

                .vertical-menu a:hover {
                color: #000000;
                }

                .vertical-menu a.active {
                color: #000000;
                border: none;
                }

                .vertical-menu a.highlight {
                color: #DABC20;
                }

                .side-menu-item {
                margin-left: 22px;
                width: 228px !important;
                }

                .highlight .fa,
                .menu-icon .fa {
                margin-right: 10px;
                margin-left: -8px;
                margin-bottom: 7px;
                }

                .num {
                float: right;
                }

                /* Content Area */
                #content-area {
                width: 869px;
                height: 530px;
                float: left;
                font-family: 'Roboto', sans-serif;
                font-size: 14px;
                overflow: hidden;
                }

                #message-options {
                border-bottom: solid 1px #f2f4f5;
                width: 100%;
                height: 106px;
                }

                #message-options a {
                color: #aab4b5;
                }

                #message-options a:hover {
                color: #32b287;
                }

                #options-left {
                padding: 45px 30px;
                float: left;
                width: 280px;
                }

                #options-right {
                color: #727c80;
                padding: 45px 35px;
                float: right;
                width: 220px;
                text-align: right;
                }

                #sorted-by {
                cursor: pointer;
                }

                .option-link {
                border: solid 2px #dfe4e6;
                border-radius: 100px;
                margin-right: 10px;
                }

                .option-link:hover {
                border: solid 2px #32b287;
                }

                .square,
                .trash,
                .user {
                padding: 10px 12px;
                }

                .flag {
                padding: 10px 10px;
                }

                .tag {
                padding: 10px 11px;
                }

                .message-row {
                border-bottom: solid 1px #f2f4f5;
                padding: 20px 30px 30px;
                }

                .message-row img {
                border-radius: 100px;
                border: solid 2px #fff;
                box-shadow: 0px 0px 5px #259d75;
                float: left;
                margin-right: 15px;
                }

                .sender-name {
                color: #475259;
                font-weight: 700;
                }

                .message {
                position: relative;
                top: 5px;
                }

                /*.active-message,*/
                .message-row:hover {
                background: #f3f5f6;
                cursor: pointer;
                }

                .label {
                color: #fff;
                text-transform: uppercase;
                font-size: 10px;
                padding: 1px 8px;
                border-radius: 50px;
                }

                .label-left {
                margin-right: 6px;
                }

                .label-right {
                margin-left: 6px;
                }

                .blue-label {
                background: #45a7b9;
                }

                .grey-label {
                background: #687377;
                }

                .red-label {
                background: #ec7b65;
                }

                #credit {
                color: #76838c;
                width: 300px;
                margin: 0 auto;
                font-size: 12px;
                text-align: center;
                }
        </style>
    </head>
    <body>
        <div id="container">
            <!-- Menus -->
            <a id="logo" href="#">
                <a id="logo" href="#">
                    <img src="/images/JustREIN.png" width="24px" length="40px" />
                </a>
            </a>
            <!-- End Menus -->

            <!-- Content Area -->
            <div id="content-area">
                <h1> Welcome, Registration!
            </div>
            <!-- End Content Area -->
          </div>

    </body>
</html>

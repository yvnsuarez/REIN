<!DOCTYPE html>
<html>
<head>
    <title>REIN</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <style>
        /* Design for Hover Navigation */
        body {
            font-family: 'Roboto', sans-serif;
            background: #000000;
            height: 100%;
            overflow: hidden;
        }

        h1 {
            font-size: 35px;
            text-align: center;
        }

        .layer {
            display: flex;
            align-items: center;
            justify-content: center;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            /*transition*/
            transition: transform .4s;
            transform: perspective(800px) scale(1) translateX(0) rotateY(0);
            transform-style: preserve-3d;
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            color: #f1f1f1;
            text-align: center;
            font-size: 12px;
        }

        .footer a {
            color: #fff;
        }

        .footer a:hover {
            color: #DABC20;
        }

        nav {
            vertical-align: center;
        }

        nav ul {
            padding-left: 66.66%;
            font-size: larger;
            line-height: 2;
        }

        nav ul li {
            list-style-type: none;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
        }

        nav ul li a:hover {
            color:#DABC20;
        }

        .front{
            background: #DABC20;
        }

        body:hover .front{
            transform: perspective(700px) scale(0.5) translateX(-16.66%) rotateY(25deg);
        }



        /* Design for Modal */
        body {
            font-family: 'Roboto', sans-serif;
        }

        .overlay {
            height: 0%;
            width: 100%;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #DABC20;
            background-color: #DABC20;
            overflow-y: hidden;
            transition: 0.5s;
        }

        .overlay-content {
            position: relative;
            top: 25%;
            width: 100%;
            text-align: center;
            margin-top: 30px;
        }

        .overlay a {
            padding: 8px;
            text-decoration: none;
            font-size: 18px;
            color: black;
            display: block;
            transition: 0.3s;
        }

        .overlay h1 {
            color: black;
        }

        .overlay p {
            text-align: justify;
            padding: 8px;
            text-decoration: none;
            font-size: 18px;
            color: black;
            display: block;
            transition: 0.3s;
            margin-left: 20em;
            margin-right: 20em;
            line-height: 2;
        }

        .overlay a:hover, .overlay a:focus {
            color: #fff;
        }

        .overlay figure {
            float: left;
            margin: 0;
            text-align: center;
            padding: 0;
        }

        .overlay figure figcaption {
            color: #fff;
        }

        .overlay .closebtn {
            position: absolute;
            top: 20px;
            right: 45px;
            font-size: 60px;
            color: black;
        }

        @media screen and (max-height: 450px) {
            .overlay {overflow-y: auto;}
            .overlay a {font-size: 20px}
            .overlay .closebtn {
                font-size: 40px;
                top: 15px;
                right: 35px;
            }
        }


    </style>
    <!--Initial Covering Layer-->
</head>
<body>
    <!-- Nav -->
    <nav class="layer">
        <ul>
            <li><a href="javascript:void(0)" onclick="openAbout()">ABOUT US</a></li>
            <li><a href="javascript:void(0)" onclick="openServices()">OUR SERVICES</a></li>
            <li><a href="javascript:void(0)" onclick="openContact()">CONTACT US</a></li>
            <li><a href="javascript:void(0)" onclick="openBePartner()">BE A PARTNER</a></li>
        </ul>
    </nav>
    <div class="footer">
        <p>&copy; Copyright 2018 REIN All Rights Reserved</p>
        <a href="javascript:void(0)" onclick="openTerms()">Terms and Conditions</a>
    </div>
    <!--Initial Covering Layer-->
    <div class="front page layer">
        <h1>
            <img src="{{asset('/images/REIN01.png')}}" width="400px" length="150px">
        </h1>
    </div>

    <!-- Modal for About Us page -->
    <div id="myAbout" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeAbout()">×</a>
        <div class="overlay-content">
            <h1>WELCOME</h1>
            <div>
                <p>
                    <img src="{{asset('/images/Mobile.png')}}" width="90px" length="90px" style="float:left; display:inline; padding-right: 50px; padding-top: 10px;"/>
                    What is REIN?<br>
                    <b>REIN</b> is a <u>roadside emergency booking application</u> in Android mobile. It caters to private vehicle motorists around Metro Manila.
                    REIN gives 24/7 access to convenient and immediate assistance which lessens the hassle of searching for the right service
                    at the right location.
                </p>
            </div>
        </div>

        <!-- Modal for Our Services page -->
        <div id="myServices" class="overlay">
            <a href="javascript:void(0)" class="closebtn" onclick="closeServices()">×</a>

            <div class="overlay-content">
                <h1>OUR SERVICES</h1>
                <p style="text-align:center">Our <b>REIN</b> booking application allow motorists to book emergency roadside services such as: </p>
                <br>
                <p>
                    <figure style="width:20%">
                        <img src=""/>
                        <figcaption></figcaption>
                    </figure>

                    <figure style="width:15%">
                        <img src="{{asset('/images/Towing.png')}}" width="80px" length="80px"/>
                        <figcaption>Towing</figcaption>
                    </figure>

                    <figure style="width:15%">
                        <img src="{{asset('/images/Tire.png')}}" width="80px" length="80px"/>
                        <figcaption>Flat Tire Replacement</figcaption>
                    </figure>

                    <figure style="width:15%">
                        <img src="{{asset('/images/Jumpstart.png')}}" width="80px" length="80px"/>
                        <figcaption>Jumpstart</figcaption>
                    </figure>

                    <figure style="width:15%">
                        <img src="{{asset('/images/Engine.png')}}" width="80px" length="80px"/>
                        <figcaption>Other engine problem fixes</figcaption>
                    </figure>

                    <figure style="width:20%">
                        <img src=""/>
                        <figcaption></figcaption>
                    </figure>
                </p>
            </div>
        </div>

        <!-- Modal for Contact Us page -->
        <div id="myContact" class="overlay">
            <a href="javascript:void(0)" class="closebtn" onclick="closeContact()">×</a>
            <div class="overlay-content">
                <h1>CONTACT US</h1>

                <br>
                <br>

                <figure style="width:15%;">
                    <img src=""/>
                    <figcaption></figcaption>
                </figure>

                <figure style="width:20%">
                    <img src="{{asset('/images/Gmail.png')}}" width="100px" length="100px" style="padding-bottom: 20px"/>
                    <figcaption><b>GMAIL: </b><br>rein.inquiry@gmail.com</figcaption>
                </figure>

                <figure style="width:25%">
                    <img src="{{asset('/images/Address.png')}}" width="80px" length="80px" style="padding-bottom: 20px"/>
                    <figcaption>
                        <b>ADDRESS: </b><br>DE LA SALLE-COLLEGE OF SAINT BENILDE<br>2544 Taft Avenue, Malate Manila<br>
                        1004 Metro Manila<br> Philippines
                    </figcaption>
                </figure>

                <figure style="width:30%">
                    <img src="{{asset('/images/Mobile.png')}}" width="43px" length="43px" style="padding-bottom: 20px"/>
                    <figcaption><b>MOBILE: </b><br>+639 26 062 6402</figcaption>
                </figure>


                <figure style="width:10%">
                    <img src=""/>
                    <figcaption></figcaption>
                </figure>
            </div>
        </div>

        <!-- Modal for Be A Partner page -->
        <div id="myBePartner" class="overlay">
            <a href="javascript:void(0)" class="closebtn" onclick="closeBePartner()">×</a>
            <div class="overlay-content">
                <h1>BE A PARTNER</h1>
                <p>
                    How to be a <b>REIN PARTNER?</b><br>
                    Companies who offer <i>roadside assistance services</i> are welcome to be our partner, if you would like to
                    be a part of <b>REIN</b> kidly visit us at our office for the on-site registration or if you have any
                    inquiry feel free to <a href="javascript:void(0)" onclick="closeBePartner();openContact();" style="display:inline; text-decoration:underline;">
                        contact us</a>.
                    </p>
                    <p>
                        Already a REIN PARTNER?<a href="{{url('/partner/login')}}" style=display:inline;text-decoration:underline;>Login as a Partner</a>
                    </p>
                </div>
            </div>

            <!-- Modal for Terms and Conditions page -->
            <div id="myTerms" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeTerms()">×</a>
                <div class="overlay-content">
                    <h3>TERMS AND CONDITIONS</h3>
                    <p>
                        Terms and Conditions
                    </p>
                    <p>
                    </p>
                </div>
            </div>

            <script>
                function openAbout() {
                    document.getElementById("myAbout").style.height = "100%";
                }

                function closeAbout() {
                    document.getElementById("myAbout").style.height = "0%";
                }

                function openServices() {
                    document.getElementById("myServices").style.height = "100%";
                }

                function closeServices() {
                    document.getElementById("myServices").style.height = "0%";
                }

                function openContact() {
                    document.getElementById("myContact").style.height = "100%";
                }

                function closeContact() {
                    document.getElementById("myContact").style.height = "0%";
                }

                function openBePartner() {
                    document.getElementById("myBePartner").style.height = "100%";
                }

                function closeBePartner() {
                    document.getElementById("myBePartner").style.height = "0%";
                }

                function openTerms() {
                    document.getElementById("myTerms").style.height = "100%";
                }

                function closeTerms() {
                    document.getElementById("myTerms").style.height = "0%";
                }
            </script>
        </body>
        </html>

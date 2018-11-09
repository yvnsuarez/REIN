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
            top: 0%;
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
            color: #000000;
        }

        .overlay hr {
            width: 5%;
            border: 1.5px solid #000000;
        }

        .overlay .overflow {
            background-color: #DABC20;
            height: 300px;
            width: 60%;
            overflow-y: scroll;
            padding-left: 20%;
        }

        .overlay ol li {
            padding: 0% !important;
            text-align: justify;
            font-size: 12px;
            margin: 30px;
            text-align: justify;
        }

        .overlay .emailLogin:hover {
            padding-bottom: 25px;
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
            <hr>
            <div>
                <p>
                    <img src="{{asset('/images/Mobile Black.png')}}" width="90px" length="90px" style="float:left; display:inline; padding-right: 50px; padding-top: 10px;"/>
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
                <hr>
                <br>
                <!-- Place download link for REIN Motorists App here -->
                <p style="text-align:center">Our <a href="{{url('/APK/motorist.apk')}}" style=display:inline;text-decoration:underline;><b>REIN</b> booking application</a> allow motorists to book emergency roadside services such as: </p>
                <p>
                    <figure style="width:20%">
                        <img src=""/>
                        <figcaption></figcaption>
                    </figure>

                    <figure style="width:15%">
                        <img src="{{asset('/images/Towing Black.png')}}" width="80px" length="80px"/>
                        <figcaption>Towing</figcaption>
                    </figure>

                    <figure style="width:15%">
                        <img src="{{asset('/images/Tire Black.png')}}" width="80px" length="80px"/>
                        <figcaption>Flat Tire Replacement</figcaption>
                    </figure>

                    <figure style="width:15%">
                        <img src="{{asset('/images/Jumpstart Black.png')}}" width="80px" length="80px"/>
                        <figcaption>Jumpstart</figcaption>
                    </figure>

                    <figure style="width:15%">
                        <img src="{{asset('/images/Engine Black.png')}}" width="80px" length="80px"/>
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
                <hr>
                <br>
                <br>

                <figure style="width:15%;">
                    <img src=""/>
                    <figcaption></figcaption>
                </figure>

                <figure style="width:20%">
                    <a href="https://accounts.google.com/ServiceLogin" class="emailLogin"  onclick="window.open(this.href);
                    return false;" onkeypress="window.open(this.href); return false;">
                    <img src="{{asset('/images/Gmail Black.png')}}" width="100px" length="100px" style="padding-bottom: 20px"/></a>
                    <figcaption><b>GMAIL: </b><br>rein.inquiry@gmail.com</figcaption>
                </figure>

                <figure style="width:25%">
                    <img src="{{asset('/images/Address Black.png')}}" width="80px" length="80px" style="padding-bottom: 20px"/>
                    <figcaption>
                        <b>ADDRESS: </b><br>DE LA SALLE-COLLEGE OF SAINT BENILDE<br>2544 Taft Avenue, Malate Manila<br>
                        1004 Metro Manila<br> Philippines
                    </figcaption>
                </figure>

                <figure style="width:30%">
                    <img src="{{asset('/images/Mobile Black.png')}}" width="43px" length="43px" style="padding-bottom: 20px"/>
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
                <hr>
                <p>
                    How to be a <b>REIN PARTNER?</b><br>
                    Companies who offer <i>roadside assistance services</i> are welcome to be our partner, if you would like to
                    be a part of <b>REIN</b> please visit us at our office for the on-site registration or if you have any
                    inquiry feel free to <a href="javascript:void(0)" onclick="closeBePartner();openContact();" style="display:inline; text-decoration:underline;">
                        contact us</a>.
                    </p>
                    <p>
                        Already a REIN PARTNER?<a href="{{url('/partner/login')}}" style=display:inline;text-decoration:underline;>Login as a Partner</a>
                    </p>
                    <p>
                        Download the <a href="{{url('/APK/assistant.apk')}}" style=display:inline;text-decoration:underline;> Assistant App</a> now!
                    </p>
                </div>
            </div>

            <!-- Modal for Terms and Conditions page -->
            <div id="myTerms" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeTerms()">×</a>
                <div class="overlay-content">
                    <h1>TERMS AND CONDITIONS</h1>
                    <hr>
                    <div class="overflow">
                        <ol>
                            <li><b>Introduction</b><br>
                                These Terms and Conditions contained herein, shall administer the usage of REIN, including <u>the application and the mobile application</u>. These terms apply all out and affect all the <u>users of REIN: (a) Motorists, (b) Assistants, and (c) Partner Companies.</u><br><br>
                                <b><u>By using REIN, you explicitly agree to all terms and conditions contained herein. The use of this application is not encouraged if you have any objection to any of these Terms and Conditions.</u></b></li>

                                <li><b>Intellectual Property Rights</b><br>
                                    The content and the data you own, which you may have been required to submit, under these Terms, REIN and/or its licensors own all rights to intellectual property and materials used in the application, excluding the content or data that you own. Thus, <u>REIN is not entitled to any content and data that you provided for the usage of the application.</u><br><br>
                                    Hence, you are granted to limited license only, subject to restrictions provided in these Terms, for the sole purpose of using REIN and its services. </li>

                                    <li><b>Restrictions</b><br>
                                        You are expected to clearly and fully understand that you are restricted from doing all the following:<br>
                                        <ol type="a">
                                            <li style="margin-top:1px">Publishing any material and data from this application to any forms of media;</li>
                                            <li style="margin-top:1px">Selling, sublicensing and/or otherwise commercializing any application material and data;</li>
                                            <li style="margin-top:1px">Publicly showing and claiming the application material;</li>
                                            <li style="margin-top:1pxm">The usage of the application that may incur damages;</li>
                                            <li style="margin-top:1px">The usage of the application that may affect user access;</li>
                                            <li style="margin-top:1px">Negligence to perform user any user responsibility;</li>
                                            <li style="margin-top:1px">The usage of the application contrary to laws and regulations, or in a way that causes, or may cause harm to the application, its users, or to any person or business entity.</li>
                                        </ol>
                                        Certain areas of this application are restricted by REIN and may further restrict to any area or module, at any time, in its independent and absolute discretion.<br><br>
                                        Any user ID and password you may have for this application is confidential and encrypted and it is your sole responsibility to maintain its confidentiality.</li>

                                        <li><b>Your Content</b><br>
                                            The Terms and Conditions of REIN states that “Your Content” are the content and data that you willingly choose to submit and display on this application. By that and with respect, you grant REIN a non-exclusive, worldwide, irrevocable, royalty-free, sublicense license to use your content and data for any operations related to the application.
                                            <br><br>
                                            <u>Your content must be your own and must not be undermining on any third-party rights.</u> REIN reserves the right to remove or release any of your content to the authorities from this application, at any time, and for any reason, without notice.</li>

                                            <li><b>No warranties</b><br>
                                                REIN is provided just as it is, with its future faults, and REIN makes no implied representation or warranties, of any kind related to this application or the content and data it stores. <u>Nothing in this website shall be specifically and expressly construed to any of its users.</u></li>

                                                <li><b>Limitation of Liability</b><br>
                                                    REIN, or anyone from its administration, shall not be liable for anything arising out of or in any way connected with, your usage of this application. Whether such liability is under any contract, tort, or otherwise. <u>REIN shall not be liable for any indirect, consequential, or special liability arising from the misuse of this application.</u></li>

                                                    <li><b>Indemnification</b><br>
                                                        You, as a user of REIN, hereby indemnify REIN from and against any of the liabilities, costs, demands, consequences of actions, damages, expenses, etc. arising out of or in any way related to your breach of any of the provisions of these Terms.</li>

                                                        <li><b>Severability</b><br>
                                                            If any of these terms is found to be invalid under enforceable and applicable law, such invalidity shall not render these Terms as wholly or completely invalid, and such provision or report shall remove such term without affecting the remaining terms.</li>

                                                            <li><b>Variation of Terms</b><br>
                                                                REIN is permitted to revise these Terms at any time as it sees fit, and by using this application, you are required to review such terms on a regular basis to ensure that you understand all Terms and Conditions governing the usage of this application.</li>

                                                                <li><b>Assignment</b><br>
                                                                    REIN shall be permitted to assign, transfer, and subcontract its rights and/or obligations under this Terms without any notifications or consent required. However, you shall not be permitted to assign, transfer, and subcontract its rights and/or obligations under these Terms.</li>

                                                                    <li><b>Entire Agreement</b><br>
                                                                        These terms, including any legal notices and disclaimers contained in REIN, constitutes the Entire Agreement between you and REIN. In relation, you use of the application and supersede all prior agreements and understandings with respect to the same.</li>

                                                                        <li><b>Governing Law and Jurisdiction</b><br>
                                                                            These terms will be governed by and construed in accordance with the laws of the Republic of the Philippines, and you shall submit to the non-exclusive jurisdiction of the state and federal count in the Republic of the Philippines for the resolution of any disputes.</li>
                                                                        </ol>
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

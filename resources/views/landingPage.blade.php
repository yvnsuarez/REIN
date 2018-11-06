<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>

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

<<<<<<< HEAD
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <style>
=======
>>>>>>> 3369393121009c14574435163d924e6d9581decb

            /* Design for Hover Navigation */
            body {
              font-family: 'Roboto', sans-serif;
              background: #000000;
              height: 100%;
              overflow: hidden;
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

            nav ul li a:hover {
                color:#DABC20;
            }

            .front{
              background: #DABC20;
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
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0, 0.9);
            overflow-y: hidden;
            transition: 0.5s;
        }

<<<<<<< HEAD
            /* Design for Modal */
            body {
                font-family: 'Roboto', sans-serif;
            }

            .overlay {
                height: 100%;
                width: 100%;
                display: none;
                position: fixed;
                z-index: 1;
                top: 0;
                left: 0;
                background-color: rgb(0,0,0);
                background-color: rgba(0,0,0, 0.9);
            }

            .overlay-content {
                position: relative;
                top: 25%;
                width: 100%;
                text-align: center;
                margin-top: 30px;
            }

            .overlay figure {
                float: left;
                margin: 0;
                text-align: center;
                padding: 0;
            }

            .overlay figure figcaption {
                font-family: 'Roboto', sans-serif;
                color: #fff;
                padding-top: 5px;
            }

            .overlay h1 {
                color: #fff;
            }

            .overlay p {
                text-align: justify;
                padding: 8px;
                text-decoration: none;
                font-size: 18px;
                color: #fff;
                display: block;
                transition: 0.3s;
                margin-left: 20em;
                margin-right: 20em;
                line-height: 2;
            }

            .overlay p:hover, .overlay p:focus {
                color: #f1f1f1;
            }

            .overlay .closebtn {
                position: absolute;
                top: 20px;
                right: 45px;
                font-size: 60px;
                color: #fff;
            }

            .overlay .closebtn:hover {
                color: #818181;
            }

            @media screen and (max-height: 450px) {
              .overlay p {font-size: 20px}
              .overlay .closebtn {
                font-size: 40px;
                top: 15px;
                right: 35px;
              }
            }


        </style>
    </head>
    <body>
          <!--Nav-->
        <nav class="layer">
=======
             /* Design for Modal */
             body {
        font-family: 'Lato', sans-serif;
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
        font-size: 36px;
        color: #000000;
        display: block;
        transition: 0.3s;
    }
    
    .overlay p {
        padding: 8px;
        text-decoration: none;
        font-size: 36px;
        color: #000000;
        display: block;
        transition: 0.3s;
    }

    .overlay a:hover, .overlay a:focus {
        color: #eae3bf;
    }

    .overlay .closebtn {
        position: absolute;
        top: 20px;
        right: 45px;
        font-size: 60px;
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

        .overlay a {
            padding: 8px;
            text-decoration: none;
            font-size: 18px;
            color: #fff;
            display: block;
            transition: 0.3s;
        }

        .overlay h1 {
            color: #fff;
        }

        .overlay p {
            text-align: justify;
            padding: 8px;
            text-decoration: none;
            font-size: 18px;
            color: #fff;
            display: block;
            transition: 0.3s;
            margin-left: 20em;
            margin-right: 20em;
            line-height: 2;
        }

        .overlay a:hover, .overlay a:focus {
            color: #eae3bf;
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
            color: #fff;
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
<nav class="layer">
>>>>>>> 3369393121009c14574435163d924e6d9581decb
          <ul>
            <li><a href="javascript:void(0)" onclick="openAbout()">ABOUT US</a></li>
            <li><a href="javascript:void(0)" onclick="openServices()">OUR SERVICES</a></li>
            <li><a href="javascript:void(0)" onclick="openContact()">CONTACT US</a></li>
            <li><a href="javascript:void(0)" onclick="openBePartner()">BE A PARTNER</a></li>

          </ul>
        </nav>
<<<<<<< HEAD

      <!--Initial Covering Layer-->
      <div class="front page layer">
        <h1>
          <img src="{{asset('/images/REIN01.png')}}" width="400px" length="150px"/>
        </h1>
      </div>

       <!-- Modal for About Us page -->
        <div id="myAbout" class="overlay">
          <a href="javascript:void(0)" class="closebtn" onclick="closeAbout()">&times;</a>
=======
    <div class="front page layer">
            <h1>
              <img src="{{asset('/images/REIN01.png')}}" width="400px" length="150px">
            </h1>
          </div>
      
      <div id="myAbout" class="overlay">
          <a href="javascript:void(0)" class="closebtn" onclick="closeAbout()">×</a>
>>>>>>> 3369393121009c14574435163d924e6d9581decb
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
        </div>
<<<<<<< HEAD

        <!-- Modal for Our Services page -->
        <div id="myServices" class="overlay">
          <a href="javascript:void(0)" class="closebtn" onclick="closeServices()">&times;</a>
=======
        <div id="myServices" class="overlay">
          <a href="javascript:void(0)" class="closebtn" onclick="closeServices()">×</a>
          
>>>>>>> 3369393121009c14574435163d924e6d9581decb
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
<<<<<<< HEAD

        <!-- Modal for Contact Us page -->
=======
>>>>>>> 3369393121009c14574435163d924e6d9581decb
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

        <!-- Modal for About Us page -->
        <div id="myBePartner" class="overlay">
          <a href="javascript:void(0)" class="closebtn" onclick="closeBePartner()">×</a>
          <div class="overlay-content">
            <p>
              <a href="{{url('/partner/login')}}">Login as a Partner</a>

            </p>
          </div>
        </div>
<<<<<<< HEAD


=======
        
>>>>>>> 3369393121009c14574435163d924e6d9581decb
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
        </script>
</body>
</html>

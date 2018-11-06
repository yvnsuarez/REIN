<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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
          <ul>
            <li><a href="javascript:void(0)" onclick="openAbout()">ABOUT US</a></li>
            <li><a href="javascript:void(0)" onclick="openServices()">OUR SERVICES</a></li>
            <li><a href="javascript:void(0)" onclick="openContact()">CONTACT US</a></li>
            <li><a href="javascript:void(0)" onclick="openBePartner()">BE A PARTNER</a></li>

          </ul>
        </nav>

      <!--Initial Covering Layer-->
      <div class="front page layer">
        <h1>
          <img src="{{asset('/images/REIN01.png')}}" width="400px" length="150px"/>
        </h1>
      </div>

       <!-- Modal for About Us page -->
        <div id="myAbout" class="overlay">
          <a href="javascript:void(0)" class="closebtn" onclick="closeAbout()">&times;</a>
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

        <!-- Modal for Our Services page -->
        <div id="myServices" class="overlay">
          <a href="javascript:void(0)" class="closebtn" onclick="closeServices()">&times;</a>
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
          <a href="javascript:void(0)" class="closebtn" onclick="closeContact()">&times;</a>
          <div class="overlay-content">
            <p>This is the contact page</p>
          </div>
        </div>

        <!-- Modal for About Us page -->
        <div id="myBePartner" class="overlay">
          <a href="javascript:void(0)" class="closebtn" onclick="closeBePartner()">&times;</a>
          <div class="overlay-content">
            <p>
              <a href="{{url('/partner/login')}}">Login as a Partner</a>

            </p>
          </div>
        </div>


        <script>
              function openAbout() {
                document.getElementById("myAbout").style.display = "block";
              }

              function closeAbout() {
                document.getElementById("myAbout").style.display = "none";
              }

              function openServices() {
                document.getElementById("myServices").style.display = "block";
              }

              function closeServices() {
                document.getElementById("myServices").style.display = "none";
              }

              function openContact() {
                document.getElementById("myContact").style.display = "block";
              }

              function closeContact() {
                document.getElementById("myContact").style.display = "none";
              }

              function openBePartner() {
                document.getElementById("myBePartner").style.display = "block";
              }

              function closeBePartner() {
                document.getElementById("myBePartner").style.display = "none";
              }
        </script>
    </body>
</html>

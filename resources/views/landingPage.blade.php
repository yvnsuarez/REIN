<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <style>

            /* Design for Hover Navigation */
            body {
              font-family: 'Roboto Condensed';
              text-transform: uppercase;
              background: #222;
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

            .front{
              background: #DABC20;
            }

            body:hover .front{
              transform: perspective(700px) scale(0.5) translateX(-16.66%) rotateY(25deg);
            }



            /* Design for Modal */
            body {
                font-family: 'Lato', sans-serif;
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

            .overlay p {
                padding: 8px;
                text-decoration: none;
                font-size: 36px;
                color: #818181;
                display: block;
                transition: 0.3s;
            }

            .overlay p:hover, .overlay p:focus {
                color: #f1f1f1;
            }

            .overlay .closebtn {
                position: absolute;
                top: 20px;
                right: 45px;
                font-size: 60px;
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
            <li><a onclick="openAbout()">About</a></li>
            <li><a onclick="openServices()">Services</a></li>
            <li><a onclick="openContact()">Contact</a></li>
            <li><a onclick="openBePartner()">Be A Partner</a></li>

          </ul>
        </nav>

      <!--Initial Covering Layer-->
      <div class="front page layer">
        <h1>
          <img src="/images/REIN01.png" width="400px" length="150px"/>
        </h1>
      </div>

       <!-- Modal -->
        <div id="myAbout" class="overlay">
          <a href="javascript:void(0)" class="closebtn" onclick="closeAbout()">&times;</a>
          <div class="overlay-content">
            <p>This is the about page</p>
          </div>
        </div>
        
        <div id="myServices" class="overlay">
          <a href="javascript:void(0)" class="closebtn" onclick="closeServices()">&times;</a>
          
          <div class="overlay-content">
            <p>This is the services page</p>
          </div>
        </div>
        
        <div id="myContact" class="overlay">
          <a href="javascript:void(0)" class="closebtn" onclick="closeContact()">&times;</a>
          <div class="overlay-content">
            <p>This is the contact page</p>
          </div>
        </div>
        
        <div id="myBePartner" class="overlay">
          <a href="javascript:void(0)" class="closebtn" onclick="closeBePartner()">&times;</a>
          <div class="overlay-content">
            <p>
              <a href="/partner/login">Login as a Partner</a>
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

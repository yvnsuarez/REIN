<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>

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

</head>
<body>
<nav class="layer">
          <ul>
            <li><a onclick="openAbout()">About</a></li>
            <li><a onclick="openServices()">Services</a></li>
            <li><a onclick="openContact()">Contact</a></li>
            <li><a onclick="openBePartner()">Be A Partner</a></li>

          </ul>
        </nav>
    <div class="front page layer">
            <h1>
              <img src="{{asset('/images/REIN01.png')}}" width="400px" length="150px">
            </h1>
          </div>
      
      <div id="myAbout" class="overlay">
          <a href="javascript:void(0)" class="closebtn" onclick="closeAbout()">×</a>
          <div class="overlay-content">
            <p>This is the about page</p>
          </div>
        </div>
        <div id="myServices" class="overlay">
          <a href="javascript:void(0)" class="closebtn" onclick="closeServices()">×</a>
          
          <div class="overlay-content">
            <p>This is the services page</p>
          </div>
        </div>
        <div id="myContact" class="overlay">
          <a href="javascript:void(0)" class="closebtn" onclick="closeContact()">×</a>
          <div class="overlay-content">
            <p>This is the contact page</p>
          </div>
        </div>
        
        <div id="myBePartner" class="overlay">
          <a href="javascript:void(0)" class="closebtn" onclick="closeBePartner()">×</a>
          <div class="overlay-content">
            <p>
              <a href="{{url('/partner/login')}}">Login as a Partner</a>
              
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
        </script>
</body>
</html>

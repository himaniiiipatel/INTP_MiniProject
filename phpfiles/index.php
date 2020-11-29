<?php
?>
<!DOCTYPE html>
<html>
<head>
  <title>FITFEELZ</title>
  <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" type="text/css" href="style.css">
 
 <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.0.3/leaflet.js"></script>
    <script src="https://cdn.maptiler.com/mapbox-gl-js/v1.5.1/mapbox-gl.js"></script>
    <script src="https://cdn.maptiler.com/mapbox-gl-leaflet/latest/leaflet-mapbox-gl.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.0.3/leaflet.css" />
    <link rel="stylesheet" href="https://cdn.maptiler.com/mapbox-gl-js/v1.5.1/mapbox-gl.css" />
    <style>
      #map {position: relative; top: 0px; right: 0px; bottom: 0px; left: 400px;}
    </style>
 
 <style type="text/css">

.nav{
    z-index: 1000;
    top: 0;
    right: 0;
    left: 0;
    height: 80px;
    overflow: hidden;
    background-color: #fff;
    position: fixed;
    top: 0;
    width: 100%;
    font-weight: bold;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    padding: 0 25px 0 25px;
}



.nav .links a{
    margin-right: 25px;
    font-size: 16px;
    font-weight: 600;
    color: #000;
}



li a {
  display: block;
  color: maroon;
  text-align: center;
  text-decoration: none;
}
.nav h4{
    font-size: 22px;
    font-weight: bold;
    margin-left: 25px;
}
a:hover {
  background-color: red;
}
 .links .sub-menu{
 display: none;
 
}
.nav .logo .links ul li:hover .sub-menu{

position: absolute;
background :rgba(0,100,0);
margin-top: 15px;
margin-left: -15px
}

.nav .logo .links ul li:hover .sub-menu ul{
 display: block;
 margin : 10px;
}

.nav .logo .links ul li:hover .sub-menu ul li{
 width: 150px;
 padding: 10px;
 border-bottom: 1px dotted #fff;
 background: transparent;
 border-radius: 0;
 text-align: left;
}

.nav .logo .links ul li:hover .sub-menu ul li a:hover{
 color: #b2ff00;
}
 
a.active {
  background-color: #ccc;
}
</style>
  </head>
  <body>
 
 
    <div class="nav">
            <div class="logo">
                <h4 style="color: black;">FIT FEELZ</h4>
            </div>
            <div class="links">
                <a href="#home">Home</a>
                <a href="#aboutus">About Us</a>
                <a href="#contact">Contact Us</a>
                 <a href="signup.php">Signin/Register</a>
                  <a href="adminlogin.php">AdminLogin</a>
             
               
            </div>
            </div>
        

  <!-- Start Home -->
  
    <section class="banner cover-bg">
      <div class="container h-100">
        <div class="row align-items-center h-100">
          <div class="col-12 caption text-center">
            <h4 class="mt-20 mb-20">WELCOME TO THE BEST HEALTH COMMUNITY</h4>
            <h1 class="mt-20">FITFEELZ</h1>
            <p class="mt-20">Health is a state of complete harmony of the body, mind and spirit.<br> When one is free from physical disabilities and mental distractions,<br> the gates of the soul open.</p>
            <div class="social_icon text-center">
             
              <a href="#"><span><i class="fa fa-facebook"></i></span></a>
               <a href="#"><span><i class="fa fa-twitter"></i></span></a>
               <a href="#"><span><i class="fa fa-linkedin"></i></span></a>
               <a href="#"><span><i class="fa fa-instagram"></i></span></a>
               <a href="#"><span><i class="fa fa-youtube-play"></i></span></a>
            </div>
          </div>
        </div>
      </div>
    </section>
   
   
    <section class="aboutus">
      <div class="para">
        <h1>ABOUT US</h1>
        <p>Fitfeelz focuses on having good mental as well as physical health.Recent circumstances are disturbing, hence we look forward to answer your questions with atmost and provide you with proper guidance. The site asks series of questions and based on the answers, your health will be evaluated. Some exercises would be suggested and to keep you motivated, we have lots of videos. Since our goal is to have your care entirely covered, we have contacts with good doctors and consultants. We know that your privacy is precious hence you can have private sessions with your own doctor too. Together, let us walk towards better future.</p>
      </div>
      
      <div id="map" style="height: 150px; width: 600px;"></div>
    <p><a href="https://www.maptiler.com/copyright/" target="_blank">© MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">© OpenStreetMap contributors</a></p>
    <script>
      var map = L.map('map').setView([18.98998, 73.12863], 19);
      var gl = L.mapboxGL({
        attribution: "\u003ca href=\"https://www.maptiler.com/copyright/\" target=\"_blank\"\u003e\u0026copy; MapTiler\u003c/a\u003e \u003ca href=\"https://www.openstreetmap.org/copyright\" target=\"_blank\"\u003e\u0026copy; OpenStreetMap contributors\u003c/a\u003e",
        style: 'https://api.maptiler.com/maps/d3e64896-8bad-4706-a0dd-e19bbc98776f/style.json?key=Zw6mQDSR6F7AFhq9E1pA'
      }).addTo(map)
        .bindPopup("Pillai College of Engineering")
        .openPopup();
    </script>
      
      <div class="team">
        <div class="container">
          <h1>OUR TEAM</h1>
          <div class="row">
            <div class="col-md-3 profile text-center">
              <div class="img-box">
                <img src="himani.jpeg" width="250px" height="250px" class="image-responsive">
                <ul>
                  <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                  <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                  <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                </ul>
              </div>
              <h2>HIMANI RANPARIYA</h2>
              <h3>Founder</h3>
              <p>You have to put your own description here guyss....Fitfeelz focuses on having good mental as well as physical health.</p>
            </div>
                        <div class="col-md-3 profile text-center">
              <div class="img-box">
                <img src="anushka.jpeg" width="250px" height="250px" class="image-responsive">
                <ul>
                  <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                  <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                  <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                </ul>
              </div>
              <h2>ANUSHKA MORE</h2>
              <h3>Business Head</h3>
              <p>You have to put your own description here guyss....Fitfeelz focuses on having good mental as well as physical health.</p>
            </div>
                        <div class="col-md-3 profile text-center">
              <div class="img-box">
                <img src="nidhi.jpeg" width="250px" height="250px" class="image-responsive">
                <ul>
                  <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                  <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                  <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                </ul>
              </div>
              <h2>NIDHI MUSALE</h2>
              <h3>Marketing Head</h3>
              <p>You have to put your own description here guyss....Fitfeelz focuses on having good mental as well as physical health.</p>
            </div>
                        <div class="col-md-3 profile text-center">
              <div class="img-box">
                <img src="sarthak.jpeg" width="250px" height="250px" class="image-responsive">
                <ul>
                  <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                  <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                  <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                </ul>
              </div>
              <h2>SARTHAK SALUNKE</h2>
              <h3>UI Design</h3>
              <p>You have to put your own description here guyss....Fitfeelz focuses on having good mental as well as physical health.</p>
            </div>          
          </div>
        </div>
      </div>
    </section>
   
   
  <section class="services section_padding" id="home">
    <div class="container">
      <div class="row">
        <div class="section_title text-center">
          <p>FITFEELZ</p>
          <h3>SERVICES</h3>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 py-15">
          <div class="services_box box">
            <div class="icon">
              <i class="fa fa-mobile"></i>
            </div>
            <div class="text">
              <h4 class="box_title mb-20">Yoga Classes</h4>
              <div style="text-align:center"> 
  <button onclick="playPause()">Play/Pause</button> 
  <button onclick="makeBig()">Big</button>
  <button onclick="makeSmall()">Small</button>
  <button onclick="makeNormal()">Normal</button>
  <br><br>
  <video id="video1" width="320" height="240">
   <source src="video.mp4" type="video/mp4">
  <source src="video.mp4" type="video/mp4">
    Your browser does not support HTML video.
  </video>
</div> 

<script> 
var myVideo = document.getElementById("video1"); 

function playPause() { 
  if (myVideo.paused) 
    myVideo.play(); 
  else 
    myVideo.pause(); 
} 

function makeBig() { 
    myVideo.width = 560; 
} 

function makeSmall() { 
    myVideo.width = 320; 
} 

function makeNormal() { 
    myVideo.width = 420; 
} 
</script>
              <p>Access the all yoga videos and also take part in live yoga class by our professionals</p>
            </div>
          </div>
        </div>
         <div class="col-lg-4 col-md-6 col-sm-12 py-15">
          <div class="services_box box">
            <div class="icon">
              <i class="fa fa-mobile"></i>
            </div>
            <div class="text">
              <h4 class="box_title mb-20">Consultancy</h4>
              <div>
  <img src="Consultancy.jpeg" width="300" height="200">
</div>
              <p>Connect with best Doctors and Consultants</p>
            </div>
          </div>
        </div>
         <div class="col-lg-4 col-md-6 col-sm-12 py-15">
          <div class="services_box box">
            <div class="icon">
              <i class="fa fa-pie-chart"></i>
            </div>
            <div class="text">
              <h4 class="box_title mb-20">Diet Plans</h4>
              <div>
  <img src="dietplan.jpg" width="300" height="200">
</div>
              <p>There are numerous diet plans suggested by best Dietitian and Nutritionist</p>
            </div>
          </div>
        </div>
         <div class="col-lg-4 col-md-6 col-sm-12 py-15">
          <div class="services_box box">
            <div class="icon">
              <i class="fa fa-cogs"></i>
            </div>
            <div class="text">
              <h4 class="box_title mb-20">Health Insurance</h4>
             <div>
  <img src="health.jpeg" width="300" height="200">
</div>
              <p>We also provide variety of health policies</p>
            </div>
          </div>
        </div>
         <div class="col-lg-4 col-md-6 col-sm-12 py-15">
          <div class="services_box box">
            <div class="icon">
              <i class="fa fa-camera"></i>
            </div>
            <div class="text">
              <h4 class="box_title mb-20">Events</h4>
              <div>
  <img src="events.jpeg" width="300" height="200">
</div>
              <p>Access the all yoga videos and also take part in live yoga class by our professionals</p>
            </div>
          </div>
        </div>
         <div class="col-lg-4 col-md-6 col-sm-12 py-15">
          <div class="services_box box">
            <div class="icon">
              <i class="fa fa-wrench"></i>
            </div>
            <div class="text">
              <h4 class="box_title mb-20">Support</h4>
              <div>
  <img src="support.jpeg" width="300" height="200">
</div>
              <p>Access the all yoga videos and also take part in live yoga class by our professionals</p>
            </div>
          </div>
        </div>
         
      </div>
    </div>
  </section>

   
    <section class="contact section_padding cover-bg" id="contact">
      <div class="container">
        <div class="row">
          <div class="section_title text-center" >
            <h3>Contact Us</h3>
          </div>
          <div class="col-md-12">
            <div class="part-info">
              <div class="row">
                <div class="col-md-4">
                  <div class="info-block text-center">
                    <div class="icon">
                      <i class="fa fa-map-marker"></i>
                    </div>
                    <h5>Address</h5>
                    <p>12th Floor, Giga Complex, GM-Road, Panvel, Mumbai(410206)</p>
                  </div>
                   
                  

                  </div>
               
                  <div class="col-md-4" >
                <div class="info-block text-center">
                    <div class="icon">
                      <i class="fa fa-mobile"></i>
                    </div>
                    <h5>Phone Number</h5>
                    <p>02112-246985/02112-256897</p>
                  </div>
                </div>
                  <div class="col-md-4">
                  <div class="info-block text-center">
                    <div class="icon">
                      <i class="fa fa-envelope"></i>
                    </div>
                    <h5>Email-Address</h5>
                    <p>fitfeelz@support.gmail.com</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
         
          <div class="col-md-12">
            <div class="contact-form">
              <form>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <a href="c.php" style="color: white;"><h2><center>GET IN TOUCH WITH US </center></h2></a>
                     
                     </div>  
                </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        </div>
</section>
   
  <!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
 
 
 
  </body>
</html>


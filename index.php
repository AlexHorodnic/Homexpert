<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/8891f6df96.js" crossorigin="anonymous"></script>
    <title>HomeXpert - Join the world's work marketplace</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" href="favicon.ico" type="ico">
  </head>
  <body>
      <div class="container-fluid">
          <div class="row row1" style="background-color: white;">
              <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="index.php" style="color: #d35400; margin-right: 250px; font-size: 35px; font-weight: bolder;">HomeXpert</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Design
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="pages/logodesign.php">Logo Design</a>
                            </div>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Video & Audio
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="pages/videoedit.php">Video Editing</a>
                            </div>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Development & IT
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="pages/coding.php">Online Coding Lessons</a>
                            </div>
                          </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Marketing
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="pages/advertising.php">Social Media Advertising</a>
                          </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Writing & Translation
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="pages/bookedit.php">Book Editing</a>
                            </div>
                          </li>
                      </ul>
                    </div>
                    <a href="logout.php" style="color: #d35400; font-size: 25px; font-weight: bolder;">Log Out</a>
                  </nav>
              </div>
          </div>
          <div class="container">
          <div class="row row2" style=" text-align: center; justify-content: center; height: 500px; align-items:center;">
            <div class="col-6 align-content-center">
                <div style="font-size: 50px;">Join the world's work marketplace</div><br>
                <div style="font-size: 20px;">Find great talent. Build your business. Take your career to the next level.</div><br>
                <div style="font-size: 20px; font-weight: bolder; color: #a0ac94;">Trusted by</div>
                <img src="img/microsoft.77d03cc.svg" id="trusted">
                <img src="img/airbnb.2baea51.svg" id="trusted">
                <img src="img/bissell.dcb03c9.svg" id="trusted">
                <img src="img/godaddy.75298df.svg" id="trusted">
            </div>
            <div class="col-6 align-content-center">
              <img src="img/1.jpg" class="img-fluid">
            </div>
          </div>
          <div class="row" style="justify-content: center;  align-items: center; background-color:#ffe9de;">
            <div class="col-6">
              <div style="font-size: 40px;">1. Browse</div>
              <div style="padding-left: 30px; font-size: 20px;">
                Find the type of work you need, clearly defined and ready to start.</div>
                <hr style="border: 1px solid #d35400;">
                <div style="font-size: 40px;">2. Buy</div>
              <div style="padding-left: 30px; font-size: 20px;">
                Work begins as soon as you purchase and provide requirements.</div>
                <hr style="border: 1px solid #d35400;">
                <div style="font-size: 40px;">3. Approve</div>
              <div style="padding-left: 30px; font-size: 20px;">
                Receive and review your project. The professional will be paid once you’ve approved it.
                </div>
            </div>
            <div class="col-6">
              <img src="img/3.png" class="img-fluid">
            </div>
          </div>
          <div class="row row3" style="justify-content: center;  padding-top: 50px; padding-bottom:50px;">
            <div class="col-6" style="padding: 0;">
              <img src="img/2.jpg" class="img-fluid" style="border-radius: 5%;">
            </div>
            <div class="col-6" style="background-color: f39c12; border-radius: 5%; background-image: linear-gradient(#f39c12, #d35400);">
              <div class="row" style="color: white; font-size: 30px; padding-top: 30px; padding-left: 20px;">
                <div class="col-12" style="background-color: #d35400;">For talent</div>
              </div>
              <div class="row" style="color: white; font-size: 60px; padding-top: 10px; padding-left: 20px;">
                <div class="col-12">Find Great <br> Work</div>
              </div>
              <div class="row" style="color: white; font-size: 20px; padding-top: 20px; padding-left: 20px; height: 100px;">
                <div class="col-12">Meet clients you’re excited to work with and take your career or business to new heights.</div>
              </div>
              <div class="row">
                <div class="col-12">
                  <hr style="border: 1px solid white;">
                </div>
              </div>
              <div class="row" style="color: white; font-size: 20px; font-weight: bolder; padding-top: 10px; padding-left: 20px;">
                <div class="col-4">
                  Find opportunities for every stage of your freelance career
                </div>
                <div class="col-4">
                  Control when, where, and how you work
                </div>
                <div class="col-4">
                  Explore different ways to earn
                </div>
              </div>
              <div class="row" style="padding-top: 20px; padding-left: 20px;">
                <div class="col-12">
                  <button type="button" class="btn btn-outline-light">Find Opportunities</button>
                </div>
              </div>
            </div>
          </div>
        </div>
          <div class="row rowfooter" style="background-color: #d35400; height: 310px;  justify-content: center; color: white; padding-top: 30px" >
              <div class="col-2">
                <div>For Clients</div><br>
                <div><a href="#">⮞ How to Hire</a></div>
                <div><a href="#">⮞ Talent Marketplace</a></div>
                <div><a href="#">⮞ Project Catalog</a></div>
                <div><a href="#">⮞ Talent Scout</a></div>
                <div><a href="#">⮞ Enterprise</a></div>
                <div><a href="#">⮞ Payroll Services</a></div>
                <div><a href="#">⮞ Direct Contracts</a></div>
                <div><a href="#">⮞ Hire Worldwide</a></div>
                <div><a href="#">⮞ Hire in the USA</a></div>
              </div>
              <div class="col-2">
                <div>For Talent</div><br>
                <div><a href="#">⮞ How to Find Work</a></div>
                <div><a href="#">⮞ Direct Contracts</a></div>
                <div><a href="#">⮞ Find Freelance Jobs Worldwide</a></div>
                <div><a href="#">⮞ Find Freelance Jobs in the USA</a></div>
              </div>
              <div class="col-2">
                <div>Resources</div><br>
                <div><a href="#">⮞ Help & Support</a></div>
                <div><a href="#">⮞ Success Stories</a></div>
                <div><a href="#">⮞ Reviews</a></div>
                <div><a href="#">⮞ Blog</a></div>
                <div><a href="#">⮞ Community</a></div>
                <div><a href="#">⮞ Affiliate Program</a></div>
              </div>
              <div class="col-2">
                <div>Company</div><br>
                <div><a href="#">⮞ About Us</a></div>
                <div><a href="#">⮞ Leadership</a></div>
                <div><a href="#">⮞ Investor Relations</a></div>
                <div><a href="#">⮞ Careers</a></div>
                <div><a href="#">⮞ Our Impact</a></div>
                <div><a href="#">⮞ Press</a></div>
                <div><a href="#">⮞ Contact Us</a></div>
                <div><a href="#">⮞ Trust, Safety & Security</a></div>
                <div><a href="#">⮞ UK Modern Slavery Statement</a></div>
              </div>
          </div> 
          <div class="row rowfooter" style="background-color: #d35400; justify-content: center;">
            <div class="col-8">
              <hr style="border: 1px solid white;">
            </div>
          </div>
          <div class="row rowfooter" style="background-color: #d35400; height: 50px;">
            <div class="col-2">
            </div>
            <div class="col-2">
              <div>© 2015 - 2021 HomeXpert Global Inc.</div>
            </div>
            <div class="col-6">
              <a href="#" id="paddedlinks">Privacy</a>
              <a href="#" id="paddedlinks">Policy</a>
              <a href="#" id="paddedlinks">Accessibility</a>
              <a href="#" id="paddedlinks" style="float: right;">HomeXpert</a>
            </div>
            <div class="col-2">
            </div>
          </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');
    </style>
</html>
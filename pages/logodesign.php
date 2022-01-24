<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'homexpert');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
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
    <title>Design - Logo Design</title>
    <link rel="stylesheet" href="../css/categories.css">
    <link rel="icon" href="../favicon.ico" type="ico">
  </head>
  <body>
      <div class="container-fluid">
          <div class="row row1" style="background-color: white;">
              <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="../index.php" style="color: #d35400; margin-right: 250px; font-size: 35px; font-weight: bolder;">HomeXpert</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="../index.php">Home <span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Design
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="logodesign.php">Logo Design</a>
                            </div>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Video & Audio
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="videoedit.php">Video Editing</a>
                            </div>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Development & IT
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="coding.php">Online Coding Lessons</a>
                            </div>
                          </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Marketing
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="advertising.php">Social Media Advertising</a>
                          </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Writing & Translation
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="bookedit.php">Book Editing</a>
                            </div>
                          </li>
                      </ul>
                    </div>
                    <a href="../logout.php" style="color: #d35400; font-size: 25px; font-weight: bolder;">Log Out</a>
                  </nav>
              </div>
          </div>
        </div>
        <div class="container">
            <div class="row" style="background-color:#fc7930; height: 170px; align-items:center;">
                <div class="col-12">
                    <div style="color:white; font-size: 45px;">Hire the best Logo designers</div>
                    <div style="color:white; font-size: 20px;">Get to know top Logo designers. And say hello to the newest member of your team.</div>
                </div>
            </div>
            <div class="row row2" style="height:380px; align-items:center; ">
                <div class="col-3" style="border-right: 1px solid #d35400; height: 300px; text-align:center;">
                    <div style=" padding-top:20px;">
                        <?php
                            $result = mysqli_query($link,"SELECT * FROM design where id='1'");

                            while($row = mysqli_fetch_array($result))
                            {
                            echo '<img src="data:image;base64,'.base64_encode($row['profile_img']).'">';
                            echo "<div id='fullname' >" . $row['fullname'] . "</div>";
                            echo "<div id='profession' >" . $row['profession'] . "</div>";
                            echo "<div id='rating' >★ " . $row['rating'] . "</div>";
                            echo "<div id='price' >" . $row['price'] . "</div>";
                            }
                        ?>
                    </div>
                    <button type="button" class="btn btn-dark" style="margin-top:20px; border:none;"><a href="olena.php">See More</a></button>
                </div>
                <div class="col-3" style="border-right: 1px solid #d35400; height: 300px; text-align:center;">
                    <div style=" padding-top:20px;">
                        <?php
                            $result = mysqli_query($link,"SELECT * FROM design where id='2'");

                            while($row = mysqli_fetch_array($result))
                            {
                            echo '<img src="data:image;base64,'.base64_encode($row['profile_img']).'">';
                            echo "<div id='fullname' >" . $row['fullname'] . "</div>";
                            echo "<div id='profession' >" . $row['profession'] . "</div>";
                            echo "<div id='rating' >★ " . $row['rating'] . "</div>";
                            echo "<div id='price' >" . $row['price'] . "</div>";
                            }
                        ?>
                    </div>
                    <button type="button" class="btn btn-dark" style="margin-top:20px; border:none;"><a href="barnabas.php">See More</a></button>
                </div>
                <div class="col-3" style="border-right: 1px solid #d35400; height: 300px; text-align:center;">
                    <div style=" padding-top:20px;">
                        <?php
                            $result = mysqli_query($link,"SELECT * FROM design where id='3'");

                            while($row = mysqli_fetch_array($result))
                            {
                            echo '<img src="data:image;base64,'.base64_encode($row['profile_img']).'">';
                            echo "<div id='fullname' >" . $row['fullname'] . "</div>";
                            echo "<div id='profession' >" . $row['profession'] . "</div>";
                            echo "<div id='rating' >★ " . $row['rating'] . "</div>";
                            echo "<div id='price' >" . $row['price'] . "</div>";
                            }
                        ?>
                    </div>
                    <button type="button" class="btn btn-dark" style="margin-top:20px; border:none;"><a href="laura.php">See More</a></button>
                </div>
                <div class="col-3" style="height: 300px; text-align:center;">
                    <div style=" padding-top:20px;">
                        <?php
                            $result = mysqli_query($link,"SELECT * FROM design where id='4'");

                            while($row = mysqli_fetch_array($result))
                            {
                            echo '<img src="data:image;base64,'.base64_encode($row['profile_img']).'">';
                            echo "<div id='fullname' >" . $row['fullname'] . "</div>";
                            echo "<div id='profession' >" . $row['profession'] . "</div>";
                            echo "<div id='rating' >★ " . $row['rating'] . "</div>";
                            echo "<div id='price' >" . $row['price'] . "</div>";
                            }
                        ?>
                    </div>
                    <button type="button" class="btn btn-dark" style="margin-top:20px; border:none;"><a href="nikolay.php">See More</a></button>
                </div>
            </div>
            <!-- SHOW DATABASE POST -->
            <div class="row" >
            <div class="col-6" style="background-color: black; color:white; padding-top:40px;  opacity:80%;">
                        <?php
                            $result = mysqli_query($link,"SELECT * FROM posts where id='1'");

                            while($row = mysqli_fetch_array($result))
                            {
                            echo "<div id='posttitle'>" . $row['title'] . "</div>";
                            echo "<div id='postdescription'>" . $row['description'] . "</div>";
                            }

                        ?>
              </div>
              <div class="col-6" style="padding:0px;">
                        <?php
                            $result = mysqli_query($link,"SELECT * FROM posts where id='1'");

                            while($row = mysqli_fetch_array($result))
                            {
                            echo '<img id="postimg" src="data:image;base64,'.base64_encode($row['image']).'">';
                            }
                            mysqli_close($link);
                          ?>
              </div>
            </div>
        </div>
        </div>
        <div class="container-fluid">
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
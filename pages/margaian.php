<?php
// Include config file
require_once "../config.php";
 
// Define variables and initialize with empty values
$fullname = $email = $job_description = "";
$fullname_err = $email_err = $job_description_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate fullname
    if(empty(trim($_POST["fullname"]))){
        $fullname_err = "Please enter your full name.";
    } elseif(!preg_match('/^[a-zA-Z -]+$/', trim($_POST["fullname"]))){
        $fullname_err = "Full name can only contain letters.";
    } else{
          $fullname = trim($_POST["fullname"]);
    }
    
    // Validate email
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter your email.";     
    } else{
        $email = trim($_POST["email"]);
    }
    
    // Validate job description
    if(empty(trim($_POST["job_description"]))){
        $job_description_err = "Please write the job description.";     
    } else{
        $job_description = trim($_POST["job_description"]);
    }
    
    // Check input errors before inserting in database
    if(empty($fullname_err) && empty($email_err) && empty($job_description_err)){
         // Prepare an insert statement
         $sql = "INSERT INTO contact (fullname, email, job_description) VALUES (?, ?, ?)";
         
         if($stmt = mysqli_prepare($link, $sql)){
             // Bind variables to the prepared statement as parameters
             mysqli_stmt_bind_param($stmt, "sss", $param_fullname, $param_email, $param_job_description );
             
             // Set parameters
             $param_fullname = $fullname;
             $param_email = $email;
             $param_job_description = $job_description;

             // Attempt to execute the prepared statement
             if(mysqli_stmt_execute($stmt)){
                 echo '<script>alert("Thank you for your message!")</script>';
             } else{
                 echo "Oops! Something went wrong. Please try again later.";
             }
 
             // Close statement
             mysqli_stmt_close($stmt);
         }
    }
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
    <link rel="stylesheet" href="../css/profiles.css">
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
            <div class="row" style="align-items: center; height: 250px; background-color: #292929; border-bottom: 1px solid #d35400; background-image: linear-gradient(150deg, #4f2100, black, #4f2100);">
                <div class="col-3" style="text-align: center;">
                    <?php
                                $result = mysqli_query($link,"SELECT * FROM video_audio where id='3'");

                                while($row = mysqli_fetch_array($result))
                                {
                                echo '<img style="border: 2px solid #d35400;" src="data:image;base64,'.base64_encode($row['profile_img']).'">';

                                }
                    ?>
                  </div>
                  <div class="col-3" style="text-align: left;  border-left: 1px solid #d35400;">
                    <?php
                                $result = mysqli_query($link,"SELECT * FROM video_audio where id='3'");

                                while($row = mysqli_fetch_array($result))
                                {
                                  echo "<div id='fullname' >Name : " . $row['fullname'] . "</div><br>";
                                  echo "<div id='profession' >Profession : " . $row['profession'] . "</div><br>";
                                  echo "<div id='rating' >Rating : ★ " . $row['rating'] . "</div><br>";
                                  echo "<div id='price' >Price : " . $row['price'] . "</div>";
                                }
                    ?>
                  </div>
                  <div class="col-4" style="text-align: left;  border-left: 1px solid #d35400;">
                    <?php
                                $result = mysqli_query($link,"SELECT * FROM video_audio where id='3'");

                                while($row = mysqli_fetch_array($result))
                                {
                                  echo "<div id='fullname' >Nationality : " . $row['nationality'] . "</div><br>";
                                  echo "<div id='profession' >Education : " . $row['education'] . "</div><br>";
                                  echo "<div id='rating' >Experience : " . $row['experience'] . "</div><br>";
                                  echo "<div id='rating' >Awards : " . $row['awards'] . "</div>";
                                }
                    ?>
                  </div>
                  <div class="col-2" style="text-align: center;">
                    <?php
                                $result = mysqli_query($link,"SELECT * FROM video_audio where id='3'");

                                while($row = mysqli_fetch_array($result))
                                {
                                  echo "<a target='_blank' id='social' style='color: #d35400;' href=". $row['linkedin'] ."><i class='fab fa-linkedin'></i></a><br>";
                                  echo "<a target='_blank' id='social' style='color: #d35400;' href=". $row['facebook'] ."><i class='fab fa-facebook-square'></i></a><br>";
                                  echo "<a target='_blank' id='social' style='color: #d35400;' href=". $row['instagram'] ."><i class='fab fa-instagram'></i></a><br>";
                                  echo "<a target='_blank' id='social' style='color: #d35400;' href='mailto:'". $row['email'] ."><i class='fas fa-envelope-square'></i></i></a>";
                                }
                    ?>
                  </div>
            </div>
            <div class="row" style="align-items: center; height: 600px; justify-content:center;">
                <div class="col-6">
                <div class="wrapper">
        <h2 style="color: #d35400;">Contact Form</h2>
        <p>Please fill this form in order to contact me.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Full Name</label>
                <input type="text" name="fullname" class="form-control <?php echo (!empty($fullname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $fullname; ?>">
                <span class="invalid-feedback"><?php echo $fullname_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                <span class="invalid-feedback"><?php echo $email_err; ?></span>
            </div>
            <div class="form-group">
                <label>Job Description</label>
                <textarea  style="resize: none;" cols="10" rows="5" charswidth="23" type="job_description" name="job_description" class="form-control <?php echo (!empty($job_description_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $job_description; ?>"></textarea>
                <span class="invalid-feedback"><?php echo $job_description_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Send" style="background-color: #d35400; border:none;">
            </div>
        </form>
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
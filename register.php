<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        *{ font-family: 'Open Sans', sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');
    </style>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container-fluid">
    <div class="row" style="background-color: white; justify-content: center; border-bottom: 2px solid #fc7930;">
              <div class="col-2">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="login.php" style="color: #d35400; margin-right: 250px; font-size: 35px;">HomeXpert</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  </nav>
              </div>
          </div>
    </div>
    <div class="container" >
        <div class="row" style="align-items: center; justify-content: center; height:600px; ">
        <div class="wrapper">
        <h2 style="color: #d35400;">Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit" style="background-color: #d35400; border:none;">
            </div>
            <p>Already have an account? <a href="login.php" style="color: #d35400;">Login here</a>.</p>
        </form>
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
          <div class="row rowfooter" style="background-color: #d35400; height: 40px;">
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
    
</body>
</html>
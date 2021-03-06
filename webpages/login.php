
<?php include('../loginbkend.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spacekids Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/styles/login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
      <div class="bg-img">
        <nav class="navbar-default">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="#">SPACEKIDS</a>
              </div>
              <form class="navbar-form navbar-left" action="">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search" name="search">
                  <div class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                      <i class="glyphicon glyphicon-search"></i>
                    </button>
                  </div>
                </div>
              </form>
              <ul class="nav navbar-nav navbar-right">
                <li> <div class = "nav-link-wrapper"><a href="index.html">Home</a></div></li>
                <li class="dropdown"> <div class = "nav-link-wrapper">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Courses
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Course 1</a></li>
                      <li><a href="#">Course 2</a></li>
                      <li><a href="#">Course 3</a></li>
                    </ul></div>
                </li>
                <li> <div class = "nav-link-wrapper"><a href="#">Contact</a></div></li>
                <li><div class = "nav-link-wrapper active-nav-link">
                    <a href="#">Login / Signup</a> </div></li>
              </ul>
            </div>
          </nav>
          <div class="whitebar"></div>
          
          <div class="headerbanner">
            <h1>Login</h1>      
            
          </div>

          <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffff" fill-opacity="1" d="M0,96L60,85.3C120,75,240,53,360,69.3C480,85,600,139,720,165.3C840,192,960,192,1080,176C1200,160,1320,128,1380,112L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
          </svg>
      </div>
      <div class="page-wrapper">
            <h1>Login</h1>
            <h2>Please fill in your credentials to login.</h2>
            <div class="greenbar"></div>
            <form class="form" method="post">
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" id="email" name="username">
                  <label class="err"><?php echo $username_err ?></label> 
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" id="pwd" name="password">
                  <label class="err"> <?php echo $password_err ?></label> 
                </div>
                <input class="btn btn-primary" type="submit" value="Submit">
              </form>
              <h4>Don't have an account? <a href="registration.php">Sign up now</a></h4>




  </div>
</body>

<!-- Wave image for bottom parallex UNFINISHED -->
<!-- <svg class="bg-img2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#414141" fill-opacity="1" d="M0,96L60,85.3C120,75,240,53,360,69.3C480,85,600,139,720,165.3C840,192,960,192,1080,176C1200,160,1320,128,1380,112L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
</svg>
<div class="bg-color"></div> -->

<!---// Footer-->
<div class = "footer">
    <div class="footer-content">
        <div class="footer-section about">
            <h3>SPACEKIDS</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> <br><br>
            <div class="contact">
           <span><i class="fas fa-phone"></i> &nbsp; +61 123 456 789</span>
           <br><br>
           <span><i class="fas fa-envelope"></i> &nbsp; admin@spacekids.com.au</span>
        </div>
            <div class="socials">
                <a href="#"><i class= "fab fa-facebook"></i></a>
                <a href="#"><i class= "fab fa-twitter"></i></a>
                <a href="#"><i class= "fab fa-instagram"></i></a>
                <a href="#"><i class= "fab fa-linkdn"></i></a>
            </div>
        </div>
        <div class="footer-section OH">
            <h3>Opening Hours</h3>
            <ol>
                <li>Mon-Tue :</li>
                <li>8:00 AM - 4:00 PM</li>
                <li>Wed - Thur :</li>
                <li>9:00 AM - 2:00 PM</li>
                <li>Fri - Sat : </li>
                <li>8:00 AM - 11:00 AM</li>
            </ol>
        </div>
        <div class="footer-section SM">
            <h3>Sitemap</h3>
            <br>
            <a href="#"><li></li></a>
            <a href="#"><li></li></a>
            <a href="#"><li></li></a>
            <a href="#"><li></li></a>
            <a href="#"><li></li></a>
            <a href="#"><li></li></a>

        </div>
    </div>
    <div class="light-grey"></div>
    <div class = "footer-bottom">
      <h3>Space Kids &copy; 2020 </h3>
    </div>
</div>    
</html>
<?php
session_start();

?>

<!DOCTYPE html>

<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width,initial-scale=1.0">
      <meta name="csrf-token" content="3ROaGxAcGgiRe4N2AuHybeASmVwAkGiOSsLrlTIW">
    
      <title>Education</title>
      <link rel="shortcut icon" type="image/x-icon" href="images/logo/favicon.ico">
       
    
    
      <link rel="stylesheet" href="vendors/css/vendors.min.css" />
      <link rel="stylesheet" href="vendors/css/ui/prism.min.css" />
    
      <link rel="stylesheet" href="boost/css/bootstrap.min.css">
    
      <link rel="stylesheet" href="css/core.css" />
    
    
    
    
      <link rel="stylesheet" href="css/base/core/menu/menu-types/vertical-menu.css" />
    
    
    
    
      <link rel="stylesheet" href="css/overrides.css" />
    
    
    
    
    
      <link rel="stylesheet" href="css/style.css" />
</head>
<body>
  <section class="pt-4 pt-md-11">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-md-5 col-lg-6 order-md-2 pb-5">
  
          <img class="img-fluid" src="images/pages/login-v2.svg" alt="Login V2">  
        </div> 
     
        <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
          <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
            <h2 class="card-title font-weight-bold mb-1">Welcome to Cader! &#x1F44B;</h2>
            <p class="card-text mb-2">Please sign-in to your account and start the adventure</p>
            <?php 
            if(isset($_SESSION['verifie']))
            {
              echo $_SESSION['verifie'];
              unset($_SESSION['verifie']);
            }
            
            ?>
            <form class="auth-login-form mt-2" action="confirm2.php" method="GET">
              <div class="form-group">
                <label class="form-label" for="login-email">Email</label>
                <input class="form-control" id="login-email" type="text" name="login-email" placeholder="john@example.com" aria-describedby="login-email" autofocus="" tabindex="1" />
              </div>
              <div class="form-group">
                <div class="d-flex justify-content-between">
                  <label for="login-password">Password</label>
                  <a href="motDePasseOublie.php">
                    <small>Forgot Password?</small>
                  </a>
                </div>
               


                <div class="input-group input-group-merge form-password-toggle">
                    <input class="form-control form-control-merge" id="login-password" type="password" name="login-password" placeholder="············" aria-describedby="login-password" tabindex="2" />
                    <div class="input-group-append">
                      <span class="input-group-text cursor-pointer">
                        <i data-feather="eye"></i>
                      </span>
                    </div>
                  </div>

              </div>
              <div class="form-group">
                <div div class="custom-control custom-checkbox">
                  <input class="custom-control-input" id="remember-me" type="checkbox" tabindex="3" />
                  <label class="custom-control-label" for="remember-me">Remember Me</label>
                </div>
              </div>
              <button class="btn btn-primary btn-block" tabindex="4">Sign in</button>
            </form>
            <p class="text-center mt-2">
              <span>New on our platform?</span>
              <a href="inscription.php"><span>&nbsp;Create an account</span></a>
            </p>
            <div class="divider my-2">
              <div class="divider-text">or</div>
            </div>
            <div class="auth-footer-btn d-flex justify-content-center">
              <a class="btn btn-facebook" href="">
                <i data-feather="facebook"></i>
              </a>
              <a class="btn btn-twitter white" href="">
                <i data-feather="twitter"></i>
              </a>
              <a class="btn btn-google" href="">
                <i data-feather="mail"></i>
              </a>
              <a class="btn btn-github" href="">
                <i data-feather="github"></i>
              </a>
            </div>
        </div>
      </div>
        <!-- /Register-->
        </div>
      </div>
      <!-- /Login-->
    </div>
  </div>
  
        </div>
      </div>
    </div>



      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </section>

  <pre>








  </pre>
  
  <!-- FEATURES
  ================================================== -->
 
  <script src="vendors/js/vendors.min.js"></script>
    <script src="vendors/js/ui/prism.min.js"></script>

    <script src="js/core/app-menu.js"></script>
    <script src="js/core/app.js"></script>
    <script src="js/scripts/customizer.js"></script>


     <script src="../vendors/js/vendors.min.js"></script>
<script src="../vendors/js/ui/prism.min.js"></script>
<script src="../vendors/js/forms/validation/jquery.validate.min.js"></script>

<script src="../js/core/app-menu.js"></script>
<script src="../js/core/app.js"></script>

<script src="../js/scripts/pages/page-auth-login.js"></script>



<script src="../vendors/js/vendors.min.js"></script>
<script src="../vendors/js/ui/prism.min.js"></script>
<script src="../vendors/js/forms/validation/jquery.validate.min.js"></script>

<script src="../js/core/app-menu.js"></script>
<script src="../js/core/app.js"></script>

<script src="../js/scripts/pages/page-auth-login.js"></script>


  <script type="text/javascript">
    $(window).on('load', function() {
      if (feather) {
        feather.replace({
          width: 14
          , height: 14
        });
      }
    })

  </script>


  
  
</body>
</html>
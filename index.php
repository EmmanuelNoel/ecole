
<?php

session_start();

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="boost/css/bootstrap.min.css">

    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="icons-1.5.0/font/bootstrap-icons.css">

</head>
<script src="icons-1.5.0/font/bootstrap-icons.json"></script>
<script src="icons-1.5.0\font\bootstrap-icons.js" crossorigin="anonymous"></script>

<body background="background-site.jpg">
    <header class="mx-3 p-3">

    </header>



    <section class="pt-4 pt-md-11">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-md-5 col-lg-6 order-md-2 pb-5 gx-3">

          <img class="img-fluid" src="login-v2.svg" alt="Login V2" width="100%">
        </div>

        <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
          <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
            <h2 class="card-title font-weight-bold mb-1">Bienvenue! &#x1F44B;</h2>
            <div class="mt-2 mr-2">

            </div>
            <?php
if (isset($_SESSION['verifie'])) {

    ?>
<div class="alert alert-danger" role="alert">
  <?php
echo $_SESSION['verifie'];
    unset($_SESSION['verifie']);
    ?>
  </div>

              <?php
}

?>
            <form class="auth-login-form mt-2" action="confirmer.php" method="post">
              <div class="form-group">
                <label class="form-label mt-2 fw-bold" for="login-email">Email</label>
                <input class="form-control mt-2" id="login-email" type="text" name="login-email" placeholder="john@example.com" aria-describedby="login-email" autofocus="" tabindex="1" required />
              </div>
              <div class="form-group">
                <div class="d-flex justify-content-between">
                  <label class="mt-2 fw-bold" for="login-password">Mot de passe</label>

                </div>



                <div class="input-group input-group-merge form-password-toggle mt-2">
                    <input class="form-control form-control-merge" id="login-password" type="password" name="login-password" placeholder="············" aria-describedby="login-password" tabindex="2" required />
                    <div class="input-group-append">
                   
                    </div>
                  </div>

              </div>
              <div class="form-group">
                <div div class="custom-control custom-checkbox">
                  <input class="custom-control-input" id="remember-me" type="checkbox" tabindex="3" required  />
                  <label class="custom-control-label mt-2 fw-bold" for="remember-me" >Remember Me</label>
                </div>
              </div>
              <button class="btn btn-primary btn-block mt-2  " tabindex="4">Se connecter</button>
            </form >
            <p class="text-center mt-2">
              <span>Nouveau sur le site ?</span>
              <a href="inscription.html"><span>&nbsp;Créer un compte</span></a>
            </p>
            <div class="divider my-2 text-center">
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





<script src="vendors.min.js"></script>
    <script src="boost/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        $(window).on('load', function () {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>

</body>

</html>
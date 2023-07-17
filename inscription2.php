<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="icons-1.5.0/font/bootstrap-icons.css">

</head>
<script src="icons-1.5.0/font/bootstrap-icons.json"></script>
<script src="icons-1.5.0\font\bootstrap-icons.js" crossorigin="anonymous"></script>

<body background="background-site.jpg">
    <header class="mx-3 p-3">
        <div class="container text-center fs-3 fw-bold">
            L'aventure commence ici 🚀
        </div>
    </header>

<?php

try
{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=ecole', 'root', '');

} catch (Exception $e) {
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : ' . $e->getMessage());

}

$req = $bdd->prepare('SELECT * FROM visiteurs WHERE id=:id');
$req->execute(array('id' => $_GET['val']));

$donnes = $req->fetch();

?>




    <div class="container  mt-3 px-3 gx-3 gy-3 align-items-center mx-auto  p-lg-5 ">
        <form action="modifier.php" method="post">

        <div>

            <input type="hidden" name="id" value="<?php echo $_GET['val']; ?>">
        </div>

            <div class="row align-items-center gx-3 gy-3 offset-md-1 offset-lg-4">
                <div class="mb-3 col-md-4  ">
                    <div class="d-flex align-items-center ">
                        <label for="matricule" class="form-label  col-3">Matricule</label>
                        <input name="matricules" type="number" value="<?php echo $donnes['matricule']; ?>" class="offset-md-1 form-control col-lg-5" id="matricule"
                            placeholder="<?php echo $donnes['matricule']; ?>" required>
                    </div>
                </div>
            </div>




            <div class="row align-items-center gx-3 gy-3 offset-md-1 offset-lg-4">
                <div class="mb-3 col-md-4  ">
                    <div class="d-flex align-items-center ">
                        <label for="nom" class="form-label  col-3">Nom</label>
                        <input name="noms" type="text" value="<?php echo $donnes['nom']; ?>" class="offset-md-1 form-control col-lg-5 " id="nom"
                         placeholder="<?php echo $donnes['matricule']; ?>"
                            required>
                    </div>
                </div>
            </div>




            <div class="row align-items-center gx-3 gy-3 offset-md-1 offset-lg-4">
                <div class="mb-3 col-md-4  ">
                    <div class="d-flex align-items-center ">
                        <label for="prenom" class="form-label col-md-3 col-2">Prénom</label>
                        <input name="prenoms" type="text" value="<?php echo $donnes['prenom']; ?>" class="offset-1 form-control col-lg-5" id="prenom"
                            aria-describedby="prenoms" placeholder="Emmanuel" required>
                    </div>
                </div>
            </div>










           



            <div class="row align-items-center gx-3 gy-3 offset-md-1 offset-lg-4 mt-1">
                <div class="mb-3 col-md-4  ">
                    <div class="d-flex align-items-center ">
                    <label class="col-3" >Sexe:</label>
			<select name="sexes" id="sexes"  class="form-select col-lg-4 offset-md-1" aria-label="Default select example ">
				<?php if ($donnes['sexe'] == 'homme') {
    ?>

<option value="homme" ><?php echo $donnes['sexe']; ?></option>

				<option value="femme">femme</option>
				<option value="non binaire">non binaire</option>

<?php
} else if ($donnes['sexe'] == 'femme') {
    ?>
<option value="homme"><?php echo $donnes['sexe']; ?></option>
<option value="femme">homme</option>
				<option value="non binaire">non binaire</option>
<?php
} else {
    ?>


<option value="homme"><?php echo $donnes['sexe']; ?></option>
<option value="femme">homme</option>
				<option value="non binaire">femme</option>


<?php
}

?>
			</select>

                    </div>
                </div>
            </div>





            <div class="row align-items-center gx-3 gy-3 offset-md-1 offset-lg-4 mt-1">
                <div class="mb-3 col-md-4  ">
                    <div class="d-flex align-items-center ">
                        <label for="email" class="form-label col-3">Email</label>
                        <input name="emails" type="email" value="<?php echo $donnes['email']; ?>" class="offset-md-1 form-control col-lg-5" id="email"
                            aria-describedby="prenoms" placeholder="emmanuelsouwouin@gmail.com"  required>
                    </div>
                </div>
            </div>





            <div class="row align-items-center gx-3 gy-3 offset-md-1 offset-lg-4">
                <div class="mb-3 col-md-4 col-12 ">
                    <div class="d-flex align-items-center ">
                        <label for="exampleInputPassword1" class="form-label col-md-3 col-2">Password</label>
 <input name="passwds" type="password" class="offset-1 form-control col-lg-5" value="<?php echo $donnes['passwd']; ?>" id="exampleInputPassword1"
          required>

                    </div>
                </div>
            </div>





          <center>
          <button  type="submit" name="soumettre" class=" mt-2 btn btn-secondary mx-3 "  >
        Soumettre
          </button></center>






        </form>
    </div>









    <script src="js/bootstrap.bundle.min.js"></script>
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
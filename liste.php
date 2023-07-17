<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>Document</title>

    <link rel="stylesheet" href="forme.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="icons-1.5.0/font/bootstrap-icons.css">


</head>

<body background="background-site.jpg">

<header class="mx-3 p-3">
        <div class="container text-center fs-3 fw-bold">
           Liste de tous les étudiants
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

$donnes = $bdd->query('SELECT * FROM visiteurs');

?>

<div class="container">
<table class="table table-striped table-bordered table-condensed">

<thead>
<button  type="submit" class="btn btn-success mx-3 "  >
          <a href="inscription.html" style="text-decoration: none; color: white;"  >

Ajouter
</a>





          <tr>
            <th>ID</th>
            <th>Matricule</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Sexe</th>
            <th>Email</th>
            <th>Action</th>

          </tr>
        </thead>
<?php

while ($affichage = $donnes->fetch()) {
    ?>


<tbody>
          <tr>
            <td><?php echo $affichage['id']; ?></td>
            <td><?php echo $affichage['matricule']; ?></td>
            <td><?php echo $affichage['nom']; ?></td>
            <td><?php echo $affichage['prenom']; ?></td>
            <td><?php echo $affichage['sexe']; ?></td>
            <td><?php echo $affichage['email']; ?></td>

          <td>
          <button  type="submit" class="btn btn-danger mx-3 "  >
          <a href="inscription2.php?val=<?php echo $affichage['id']; ?>" style="text-decoration: none; color: white;" >

Modifier
</a>
          </button>
          <button type="submit" class="btn btn-primary mx-3" data-bs-toggle="modal" data-bs-target="#exampleModal" style="text-decoration: none; color: white;" >
          <a href="supprimer.php?val=<?php echo $affichage['id']; ?>" style="text-decoration: none; color: white;" >

Supprimer
</a>
</button>
          </td>
          </tr>

        </tbody>




<?php

}

?>

</table>

</div>

<script src="boost/js/bootstrap.bundle.js"></script>
</body>


</html>
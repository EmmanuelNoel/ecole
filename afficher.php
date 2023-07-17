<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="icons-1.5.0/font/bootstrap-icons.css">
</head>
<script src="icons-1.5.0/font/bootstrap-icons.json"></script>
<script src="icons-1.5.0\font\bootstrap-icons.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="">

<body background="background-site.jpg">

    

    

<header class="py-4 text-center fs-3 fw-light ">
    <h4 class="fw-bold fs-2">VOS INFORMATIONS</h4>
  </header> 

  <?php 

  if( isset($_POST['matricules']) AND isset($_POST['noms']) AND isset($_POST['prenoms']) 

AND isset($_POST['sexes']) AND isset($_POST['emails']) AND isset($_POST['passwds']) )

{

?>


  <table class="table table-bordered table-striped table-condensed ">
    
   
    <tbody>
    
<tr>
<td>Matricule</td>
</tr>
<td> <?php echo $_POST['matricules'];  ?></td>
<tr>
<td>Nom</td>
<td><?php echo $_POST['noms'];  ?></td>
</tr>
<tr>
<td>Prénoms</td>
<td><?php echo $_POST['prenoms'];  ?></td>
</tr>
<tr>
<td>Sexe</td>
<td><?php echo $_POST['sexes'];  ?></td>
</tr>
<tr>
<td>Email</td>
<td><?php echo $_POST['emails'];  ?></td>
</tr>
<tr>
    <td>Password</td>
    <td><?php echo $_POST['passwds'];  ?></td>
    </tr>
</tbody>
</table>


<?php
}


else
{
    echo 'Données non reçues';
}


?>






    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
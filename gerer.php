<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<center>
<div class="container text-center p-3 mt-3 align-items-center">
<?php 


try
{
    $bdd = new PDO('mysql:host=localhost;dbname=ecole','root', '');
}

catch(Exception $e)
{
    die('Veuillez patientez un moment:'.$e->getMessage());
}

if(!(empty($_POST['enregistrement'])))
{
    
     $re=$bdd->prepare('INSERT INTO visiteurs(matricule,nom,prenom,sexe,email,passwd) 
     VALUES (:matricule,:nom,:prenom,:sexe,:email,:passwd)');

     $re ->execute(array('matricule' => htmlspecialchars($_POST['matricules']) ,
     'nom'=> htmlspecialchars($_POST['noms']),
    'prenom' => htmlspecialchars($_POST['prenoms']),'sexe'=>htmlspecialchars($_POST['sexes']),
    'email' => htmlspecialchars($_POST['emails']),'passwd' => htmlspecialchars($_POST['passwds'])    ) );


    
    header("Refresh:0; url=liste.php");
   



}

 if(!(empty($_POST['affichage'])))
{

    ?>
    <div class="card" style="width: 18rem;">
  <ul class="list-group list-group-flush container mt-4">
    
    <?php 
    
    foreach($_POST as $cle => $element)

    {
        ?>
        <li class="list-group-item">

        <?php
        echo ' ' .$cle. ' '.$element;

        ?>  </li>
        <?php
    }

    
    ?>
  
   
  </ul>
  
</div>
 
   


<div class="container ">
       <div class="row gx-3 gy-3 mt-3 offset-md-5 ">
           <div class="col-5 col-sm-4 col-lg-4 col-xl-2">
               <div class="d-flex align-items-center offset-md-2">
                
                <a href="inscription.html" class="offset-md-1 btn btn-primary">Retour</a>
                
               </div>
           </div>
       </div>
    </div>

<?php

}



?>




























</div></center>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

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
</head>
<body>

<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=ecole','root', '');
}

catch(Exception $e)
{
    die('Veuillez patientez un moment:'.$e->getMessage());
}


if(isset($_POST['login-email'] ) AND isset ($_POST['login-password']))
{
    $req=$bdd->prepare('SELECT email,passwd FROM visiteurs WHERE email =:email');
$req->execute(array('email' => $_POST['login-email']));


$donnes = $req->fetch();

  $valeur = $donnes['email'];
$valeur2 = $donnes['passwd'];

if ($_POST['login-email'] == $valeur AND $_POST['login-password'] == $valeur2 )
{
       

            header("Refresh:0; url=accueil.php");
          


        }


        
else
{

    $_SESSION['verifie']= 'Vos identifiants ne sont pas corrects. ';
    header("location:index.php");
   

}

}



   









?> 




    
</body>
</html>
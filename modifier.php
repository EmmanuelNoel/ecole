



<?php

try
{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=ecole', 'root', '');

} catch (Exception $e) {
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : ' . $e->getMessage());

}

$req = $bdd->prepare('UPDATE visiteurs SET matricule=:matricule,nom=:nom, prenom=:prenom,
            sexe=:sexe, email=:email, passwd=:passwd WHERE id=:id');

$req->execute(array('matricule' => htmlspecialchars($_POST['matricules']),
    'nom' => htmlspecialchars($_POST['noms']),
    'prenom' => htmlspecialchars($_POST['prenoms']), 'sexe' => htmlspecialchars($_POST['sexes']),
    'email' => htmlspecialchars($_POST['emails']), 'passwd' => htmlspecialchars($_POST['passwds']), 'id' => $_POST['id']));

header("Refresh:0; url=liste.php");

?>
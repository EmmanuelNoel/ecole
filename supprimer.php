



<?php

try
{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=ecole', 'root', '');

} catch (Exception $e) {
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : ' . $e->getMessage());

}

$req = $bdd->prepare('DELETE FROM visiteurs WHERE id=:id');

$req->execute(array('id' => $_GET['val']));

header('location:liste.php');

?>
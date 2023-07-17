<?php

$bdd = new PDO('mysql:host=localhost;dbname=ecole','root','');

$sql = 'SELECT table_name FROM information_schema.tables WHERE table_schema = ecole';

    $list = mysqli_query($sql);

    echo $list;


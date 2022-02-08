<?php
require 'sapologie/Connect.php';

 $connect= new Connect();

 $serveur = $connect->setServer('localhost');
 $user = $connect->setUser('root');
 $password = $connect->setPassword('');
 $db = $connect->setDb('bdd_cours');


try {
    $conn = new PDO("mysql:host=$serveur;dbname=$db", $user, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'connection reussi avec succés';
}

catch (PDOException $e) {
    echo 'Une erreur c\'est produite avec succés' . $e->getMessage();
}

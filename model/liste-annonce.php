<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=projectmmi;charset=utf8', 'root', '');
}
catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$result = $bdd->prepare("SELECT * FROM annonces, members, projets WHERE annonces.chef=members.email AND annonces.projet=projets.nomProjet");
$result->execute();
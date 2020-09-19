<?php

include "verify.php";

include "db_connect.php";
//print_r($_POST);
$id = $_POST["id"];
$vereinsname = $_POST["vereinsname"];
$stadt = $_POST["stadt"];
$vorstand = $_POST["vorstand"];
$gruendung = $_POST["gruendung"];


// Update mit Prepared Statements
$statement = $pdo->prepare("UPDATE verein SET name = ?, stadt = ?, vorstandsvors = ?, gruendung = ? WHERE verein_id = ?"); //Bezeichnung wie in DB
$statement->execute(array($vereinsname, $stadt, $vorstand, $gruendung, $id)); // gleiche Reihenfolge wie bei $pdo -> prepare //Bezeichnung wie oben



// Weiterleitung auf index.php
header('Location: index.php');
?>

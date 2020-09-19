<?php

include "verify.php";

include "db_connect.php";
//print_r($_POST);
$id = $_POST["id"];
$vorname = $_POST["vorname"];
$name = $_POST["name"];
$geschlecht = $_POST["geschlecht"];
$geb_dat = $_POST["geb_dat"];
$strasse = $_POST["strasse"];
$nr = $_POST["nr"];
$plz = $_POST["plz"];
$ort = $_POST["ort"];


// Update mit Prepared Statements
$statement = $pdo->prepare("UPDATE mitglied SET vorname = ?, name = ?, geschlecht = ?, geb_dat = ?, strasse = ?,
                          nr = ?, plz = ?, ort = ? WHERE mitglied_id = ?"); //Bezeichnung wie in DB
$statement->execute(array($vorname, $name, $geschlecht, $geb_dat, $strasse, $nr, $plz, $ort, $id)); // gleiche Reihenfolge wie bei $pdo -> prepare //Bezeichnung wie oben



// Weiterleitung auf index.php
header('Location: index.php');
?>

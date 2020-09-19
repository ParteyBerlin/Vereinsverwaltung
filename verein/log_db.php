<?php
#print_r($_POST);
$email = $_POST["email"];
$pw = $_POST["pw"];

//Datenbankverbindung aufbauen
include "db_connect.php";

$statement = $pdo->prepare("SELECT * FROM login WHERE email = ? ");
$statement->execute(array($email));
$datensatz = $statement->fetchAll(PDO::FETCH_ASSOC);
print_r($datensatz);

if(password_verify($pw, $datensatz[0]["passwort"]))
{
  // neue Session erzeugen
  session_start();
  // email in Session-Array speichern
  $_SESSION["email"] = $email;
  header("Location: index.php");
}
else {
  echo "FALSCH!";
}
?>

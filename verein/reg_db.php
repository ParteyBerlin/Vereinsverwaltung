<?php
#print_r($_POST);
$email = $_POST["email"];
$pw = $_POST["pw"];
$pw_wh = $_POST["pw_wh"];

if($pw == $pw_wh)
{
  //Datenbankverbindung aufbauen
  include "db_connect.php";
  // PW hashen
  $pw_hash = password_hash($pw, PASSWORD_DEFAULT);
  // echo $pw_hash;
  $statement = $pdo->prepare("INSERT INTO login (email, passwort)  VALUES (?, ?)");
  $statement->execute(array($email, $pw_hash));

}
else
{
  header("Location: reg.html");
}
?>

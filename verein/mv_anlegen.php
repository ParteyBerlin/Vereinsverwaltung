<?php

  include "verify.php";

  #print_r($_POST);

  include "db_connect.php";
  # print_r($_POST);
  $verein_id = $_POST["verein"];
  $mitglied_id = $_POST["mitglied"];
  $bezahlt = $_POST["bezahlt"];


  // Insert Into mit Prepared Statements
  $statement = $pdo->prepare("INSERT INTO vereinmitglied (verein_id, mitglied_id, bezahlt)
  VALUES (?, ?, ?)");
  $statement->execute(array($verein_id, $mitglied_id, $bezahlt ));

  // Weiterleitung auf index.php
  header('Location: mitglied_verein.php');
 ?>

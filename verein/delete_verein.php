<?php
  include "verify.php";

  include "db_connect.php";

  $id = $_GET["id"];

  $statement = $pdo->prepare("DELETE FROM verein WHERE verein_id = ?");
  $statement->execute(array($id));

  $statement = $pdo->prepare("DELETE FROM vereinmitglied WHERE verein_id = ?");
  $statement->execute(array($id));

  // Weiterleitung auf index.php
  header('Location: index.php');


 ?>

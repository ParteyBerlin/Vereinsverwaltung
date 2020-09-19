<?php
# print_r($_POST)
include "verify.php";
include "db_connect.php";

$bezahlt = $_POST["bezahlt"];
$verein_id = $_POST["verein_id"];
$mitglied_id = $_POST["mitglied_id"];
$statement = $pdo->prepare("UPDATE vereinmitglied SET bezahlt = ? WHERE verein_id = ? AND mitglied_id = ?");
$statement->execute(array($bezahlt, $verein_id, $mitglied_id));

header("Location: verein_overview.php?id=$verein_id");
?>

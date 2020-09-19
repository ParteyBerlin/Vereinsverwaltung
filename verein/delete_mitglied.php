<?php
#print_r($_POST)
include "verify.php";

include "db_connect.php";

$verein_id = $_POST["verein_id"];
$mitglied_id = $_POST["mitglied_id"];
$statement = $pdo->prepare("DELETE FROM vereinmitglied WHERE verein_id = ? AND mitglied_id = ?");
$statement->execute(array($verein_id, $mitglied_id));

header("Location: verein_overview.php?id=$verein_id");
?>

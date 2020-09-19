<?php

include "verify.php";

include "db_connect.php";
# print_r($_POST);
$vereinsname = $_POST["vereinsname"];
$stadt = $_POST["stadt"];
$vorstand = $_POST["vorstand"];
$gruendung = $_POST["gruendung"];


// Insert Into mit Prepared Statements
$statement = $pdo->prepare("INSERT INTO verein (name, stadt, vorstandsvors, gruendung) VALUES (?, ?, ?, ?)");
$statement->execute(array($vereinsname, $stadt, $vorstand, $gruendung));

// Weiterleitung auf index.php
header('Location: index.php');
?>

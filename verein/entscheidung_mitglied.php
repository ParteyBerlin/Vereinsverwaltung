<?php

include "verify.php";

# Get parameter id speichern
$id = $_GET["id"];
//echo $id;
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Wollen Sie wirklich löschen?</h1>
    <p><a href="<?php echo "delete_mitglied.php?id=" . $id ?>">Ja</a></p>
    <p><a href="index.php">Nein</a></p>

  </body>
</html>

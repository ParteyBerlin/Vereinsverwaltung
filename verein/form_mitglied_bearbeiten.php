<?php
include "verify.php";

include "db_connect.php";
#Vereine aus DB holen

$id = $_GET["id"]; #holt sich id aus der URL :  ?id=1
$statement = $pdo->prepare("SELECT * FROM mitglied WHERE mitglied_id = ?"); #in prepare darf man noch keine expliziten Werte angeben, deswegen = ?
$statement->execute(array($id)); #erstelle Array mit o.g. ID
$mitglied = $statement->fetchAll(PDO::FETCH_ASSOC); #fetchAll liest alle[*] Datensätze der DB aus
//print_r($mitglied);
?>

<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Mitglied bearbeiten</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>
    <?php include "menu.php";?>
    <div class="container">
      <h1>Mitglied bearbeiten</h1>
      <form class="" action="mitglied_bearbeiten.php" method="post">

        <p>Vorname*<br>
          <input type="text" name="vorname" value="<?php echo $mitglied[0]["vorname"] ?>" required>
        </p>
        <p>Nachname*<br>
          <input type="text" name="name" value="<?php echo $mitglied[0]["name"] ?>"  required>
        </p>
        <p>Geschlecht<br>
          <input type="text" name="geschlecht" value="<?php echo $mitglied[0]["geschlecht"] ?>" >
        </p>
        <p>Geburtsdatum*<br>
          <input type="date" name="geb_dat" value="<?php echo $mitglied[0]["geb_dat"] ?>" required>
        </p>
        <p>Straße*<br>
          <input type="text" name="strasse" value="<?php echo $mitglied[0]["strasse"] ?>" required>

          Hausnummer*
          <input type="text" name="nr" value="<?php echo $mitglied[0]["nr"] ?>" required>
        </p>
        <p>PLZ*<br>
          <input type="number" name="plz" value="<?php echo $mitglied[0]["plz"] ?>" required>
        </p>
        <p>Ort*<br>
          <input type="text" name="ort" value="<?php echo $mitglied[0]["ort"] ?>" required>
        </p>
        <!-- verein_id übergeben verstecktes Formularfeld -->
        <input type="hidden" name="id" value="<?php echo $id ?>"> <!-- wie bei $id = $_POST["id"]; in verein_bearbeiten.php -->

        <p><input type="submit" name="" value="ändern"></p>
      </form>
</div>
<!-- JS einbinden-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

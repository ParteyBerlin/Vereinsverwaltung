<?php
include "verify.php";


include "db_connect.php";

#Vereine aus DB holen

$statement = $pdo->prepare("SELECT verein_id, name FROM verein"); #name und id um Verein zuzuordnen
$statement->execute(array()); #erstelle leeres Array
$vereine = $statement->fetchAll(PDO::FETCH_ASSOC);#fetchAll liest obige Datensätze der DB aus

# Mitglieder aus DB holen

$statement = $pdo->prepare("SELECT mitglied_id, name, vorname FROM mitglied");
$statement->execute(array()); #erstelle leeres Array
$mitglied = $statement->fetchAll(PDO::FETCH_ASSOC); #fetchAll liest [name,vorname] Datensätze der DB aus

 //echo "<pre>";
 //print_r($mitglied);
 //echo "</pre>";



 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Vereinsverwaltung</title>
    <!-- Bootstrap-CSS einbinden-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>
    <?php include "menu.php";?>
    <div class="container">
      <!-- neue Zeile vom GRID -->
      <div class="row">
        <!-- 1. Spalte vom GRID -->
        <div class="col-sm-12 col-md-6">

      <!-- Formular -->
          <form class="" action="mv_anlegen.php" method="post">
            <!-- Drop Down menu-->
            Verein anlegen<br>
            <br>
            <select  name="verein">
              <option value="-1" selected disabled>Verein auswählen</option>
              <?php
                for($i=0; $i<count($vereine);$i++)
                {
                  echo "<option value=\"" . $vereine[$i]["verein_id"] . " \">" . $vereine[$i]["name"] . "</option>"; #value MASKIEREN!
                # echo "<option value=\"" ++STRING BEENDET++ . $vereine[0]["verein_id"] . ++ARRAY mit . verbunden++ " \">" .$vereine[0]["name"] . "</option>";
                }
              ?>

            </select>
            <br>
            <br>
            <select  name="mitglied">
              <option value="-1" selected disabled>Mitglied auswählen</option>
              <?php
                for($i=0; $i<count($mitglied);$i++)
                {
                  echo "<option value=\"" . $mitglied[$i]["mitglied_id"] . " \">" . $mitglied[$i]["vorname"] . " " . $mitglied[$i]["name"] . "</option>"; #value MASKIEREN!
                  # echo "<option value=\"" ++STRING BEENDET++ . $vereine[0]["verein_id"] . ++ARRAY mit . verbunden++ " \">" .$vereine[0]["name"] . "</option>";
                }
                ?>

              </select><br>

              <br>
              Mitglied hat bezahlt<br>
              <input type="radio" name="bezahlt" value="n" checked>
              <label>nein</label><br>
              <input type="radio"name="bezahlt" value="j">
              <label>ja</label><br>

              <br>
              <p><input type="submit" name="" value="Eintragen"</p>

            </form


    </div>
    </div>

    </div>
    </div>
    <!-- JS einbinden-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

<?php

include "verify.php";


include "db_connect.php";

#Vereine aus DB holen

$statement = $pdo->prepare("SELECT * FROM verein");
$statement->execute(array()); #erstelle leeres Array
$vereine = $statement->fetchAll(PDO::FETCH_ASSOC); #fetchAll liest alle[*] Datensätze der DB aus und schreibt die Daten is das Array

# Mitglieder aus DB holen

$statement = $pdo->prepare("SELECT * FROM mitglied");
$statement->execute(array()); #erstelle leeres Array
$mitglied = $statement->fetchAll(PDO::FETCH_ASSOC); #fetchAll liest [name,vorname] Datensätze der DB aus und schreibt die Daten in das Array
 //echo "<pre>";
 //print_r($mitglied);
 //echo "</pre>";



 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Vereinsverwaltung</title>

    <!-- folgende CSS Reihenfolge EINHALTEN!!!!!  -->
    <!-- 1) Bootstrap -->
    <!-- 2) FontAwesome -->
    <!-- CUSTOM (überschreibt bootstrap)-->

    <!-- Bootstrap-CSS  immer zuerst einbinden-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Font Awesome CSS einbinden -->
    <link href="fontawesome\css\all.css" rel="stylesheet">
    <!-- CUSTOM (meine eigene) CSS einbinden -->
    <link href="css\custom.css" rel="stylesheet">
  </head>
  <body>
    <?php include "menu.php";?>
    <div class="container">
      <!-- neue Zeile vom GRID -->
      <div class="row">
        <!-- 1. Spalte vom GRID -->
        <div class="col-sm-12 col-md-6">
      <!-- Vereinsliste-->
          <ul class="list-group">
            <!-- AUSGABE Vereine -->
            <?php
            for($i=0; $i<count($vereine); $i++){
              ?>

            <li class="list-group-item ">

            <?php echo $vereine[$i]["name"].
            "<a class=\"float-right\" href=\"entscheidung_verein.php?id=" . $vereine[$i]["verein_id"] .
            "\"> <i class=\"fas fa-trash-alt abstand_icon\"></i></i></a>" .
            "<a class=\"float-right\" href=\"form_verein_bearbeiten.php?id=" . $vereine[$i]["verein_id"] .
            "\"> <i class=\"fas fa-edit abstand_icon\"></i></i></a>" .
            "<a class=\"float-right\" href=\"verein_overview.php?id=" . $vereine[$i]["verein_id"] .
            "\"> <i class=\"fas fa-user-friends abstand_icon\"></i></i></a>" .

             "</li>" ?>
              <!--  <i>-TAG für ICONS <i class=\"fas fa-pen-square\"></i> erzeugt edit symbol , funzt nur weil FONT AWESOME oben eingebunden ist -->
              <!-- class = float-right : bootstrap-klasse -->
              <!-- <i> hat 3 verschiedene Klassen fas & fa-trash-alt/fa-edit & abstand_icon -->

            <?php } ?> <!--schließende Klammer der FOR-Schleife  #nötig, da PHP und HTML gemixt -->
        </ul>
    </div>
      <!-- 2. Spalte vom GRID -->
    <div class="col-sm-12 col-md-6">
      <!-- Vereinsliste-->
          <ul class="list-group">
            <?php
            for($i=0; $i<count($mitglied); $i++){
              ?> <!-- Ende PHP-->

              <li class="list-group-item ">

              <?php echo $mitglied[$i]["vorname"]. " " .$mitglied[$i]["name"].
              "<a class=\"float-right\" href=\"entscheidung_mitglied.php?id=" . $mitglied[$i]["mitglied_id"] .
              "\"> <i class=\"fas fa-trash-alt abstand_icon\"></i></i></a>" .
              "<a class=\"float-right\" href=\"form_mitglied_bearbeiten.php?id=" . $mitglied[$i]["mitglied_id"] .
              "\"> <i class=\"fas fa-edit abstand_icon\"></i></i></a>" .

               "</li>" ?>
              <!--  <i>-TAG für ICONS <i class=\"fas fa-pen-square\"></i> erzeugt edit symbol , funzt nur weil FONT AWESOME oben eingebunden ist -->
              <!-- class = float-right : bootstrap-klasse -->

              <?php } ?> <!--  #nötig, da PHP und HTML gemixt -->
        </ul>
    </div>

    </div>
    </div>
    <!-- JS einbinden-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

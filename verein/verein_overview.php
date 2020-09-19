<?php

include "verify.php";

include "db_connect.php";

#verein_id als Get-Parameter übernehmen
$id = $_GET["id"];


#Vereine aus DB holen

$statement = $pdo->prepare("SELECT vereinmitglied.verein_id, vereinmitglied.mitglied_id,
  vereinmitglied.bezahlt,  mitglied.vorname, mitglied.name, verein.name AS v_name
FROM vereinmitglied
INNER JOIN mitglied
ON vereinmitglied.mitglied_id = mitglied.mitglied_id
INNER JOIN verein
ON vereinmitglied.verein_id = verein.verein_id
WHERE vereinmitglied.verein_id = ? ");

$statement->execute(array($id)); #erstelle leeres Array
$verein_mitglieder = $statement->fetchAll(PDO::FETCH_ASSOC); #fetchAll liest alle[*] Datensätze der DB aus



 // echo "<pre>";
 // print_r($verein_mitglieder);
 // echo "</pre>";



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
      <?php
      if(!empty($verein_mitglieder))
      {
        echo "<h1>" . $verein_mitglieder[0]["v_name"] . "</h1>";
      }
      else
      {
        echo "<h1>keine Mitglieder vorhanden</h1>";
      }
      ?>

      <!-- neue Zeile vom GRID -->
      <div class="row">
        <!-- 1. Spalte vom GRID -->
        <div class="col-sm-12">
      <!-- Mitgliederliste pro Verein-->
          <ul class="list-group">

            <!-- Start-Schleife über $verein_mitglieder-array -->
            <?php
              for($i=0; $i<count($verein_mitglieder); $i++)
              {
                if($verein_mitglieder[$i]["bezahlt"] == "n")
                {
                  echo "<li class=\"list-group-item\">" .
                  "<i class=\"fab fa-creative-commons-nc-eu red\"></i>" .
                  $verein_mitglieder[$i]["vorname"] . " " .
                  $verein_mitglieder[$i]["name"] .
                  "<form action=\"bezahlt.php\" class = \"float-right\" method=\"post\">" .
                  "<input type = \"radio\" name = \"bezahlt\" value = \"j\">" .
                  "bezahlt " .
                  "<input type = \"radio\" name = \"bezahlt\" value = \"n\" checked>" .
                  "nicht bezahlt " .
                  "<input type = \"hidden\" name = \"verein_id\" value = \"$id\">" .
                  "<input type = \"hidden\" name = \"mitglied_id\" value =\"" . $verein_mitglieder[$i]["mitglied_id"]  . "\">" .

                  "<input type = \"submit\" value = \"OK\">" .
                  "</form>" .
                  "</li>";
                }
                else
                {
                  echo "<li class=\"list-group-item\">" .
                  "<i class=\"fas fa-euro-sign green\"></i>" . " " .
                  $verein_mitglieder[$i]["vorname"] . " " .
                  $verein_mitglieder[$i]["name"] .
                  "<form action=\"bezahlt.php\" class = \"float-right\" method=\"post\">" .
                  "<input type = \"radio\" name = \"bezahlt\" value = \"j\" checked>" .
                  "bezahlt " .
                  "<input type = \"radio\" name = \"bezahlt\" value = \"n\">" .
                  "nicht bezahlt " .
                  "<input type = \"hidden\" name = \"verein_id\" value = \"$id\">" .
                  "<input type = \"hidden\" name = \"mitglied_id\" value =\"" . $verein_mitglieder[$i]["mitglied_id"]  . "\">" . 
                  "<input type = \"submit\" value = \"OK\">" .
                  "</form>" .
                  "</li>";
                }

              }
            ?>

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

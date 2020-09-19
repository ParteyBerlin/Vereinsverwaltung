<?php
include "verify.php";
 ?>

<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Neues Mitglied</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>
    <?php include "menu.php";?>
    <div class="container">
    <h1>Neues Mitglied anlegen</h1>
    <form action="mitglied_anlegen.php" method="post">

      <p>Vorname*<br>
        <input type="text" name="vorname" value=""  placeholder="Vorname" required>
      </p>
      <p>Nachname*<br>
        <input type="text" name="nachname" value="" placeholder="Nachname" required>
      </p>
      <!-- Drop Down menu-->
      <select  name="geschlecht">
        <option value="w">weiblich</option>
        <option value="m">männlich</option>
        <option value="d">divers</option>
      </select>
      <!-- Radio Button
      <input type="radio" name="gender" value="m">
      <label >männlich</label><br>
      <input type="radio"  name="gender" value="w" checked>
      <label >weiblich</label><br>
      <input type="radio"  name="gender" value="d">
      <label>divers</label>-->

      <p>Geburtsdatum*<br>
        <input type="date" name="geb_dat" value="" required>
      </p>
      <p>Straße<br>
        <input type="text" name="strasse" value="" placeholder="Straße">
      </p>
      <p>Hausnummer<br>
        <input type="text" name="hausnummer" value="" placeholder="Hausnummer">
      </p>
      <p>PLZ<br>
        <input type="text" name="plz" value="" placeholder="PLZ">
      </p>
      <p>Ort<br>
        <input type="text" name="ort" value="" placeholder="Ort">
      </p>
      <p><input type="submit" name="" value="eintragen"></p>
    </form>
</div>
    <!-- JS einbinden-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

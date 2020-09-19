<?php
include "verify.php";
 ?>

<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Neuer Verein</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>
    <?php include "menu.php";?>
    <div class="container">
      <h1>Neuen Verein anlegen</h1>
      <form class="" action="verein_anlegen.php" method="post">

        <p>Vereinsname*<br>
          <input type="text" name="vereinsname" value=""  placeholder="Vereinsname" required>
        </p>
        <p>Stadt*<br>
          <input type="text" name="stadt" value="" placeholder="Stadt" required>
        </p>
        <p>Vorstandsvorsitzender<br>
          <input type="number" name="vorstand" value="" placeholder="Mitgliedsnummer">
        </p>
        <p>Gründung*<br>
          <input type="date" name="gruendung" value="" required>
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

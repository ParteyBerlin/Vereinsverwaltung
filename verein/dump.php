<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = " ";
$dbname = "verein";

$dumpfile = "backups/" . $dbname . "_" . date("Y-m-d_H-i-s") . ".sql";
echo "Start dump\n";
exec ("C:/xampp/mysql/bin/mysqldump --user=$dbuser --password=$dbpassword --host=$dbhost $dbname > $dumpfile");
echo "-- Dump collected -- <br>";
echo $dumpfile . " erstellt";

 ?>

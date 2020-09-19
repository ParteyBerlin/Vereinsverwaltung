<?php
session_start();
// wenn SESSION["email"] NICHT vorhanden und belegt ist, dann brich den Seitenaufbau ab
if(!isset($_SESSION["email"]))
{
    die("du musst dich einloggen! <a href=\"log.html\">login</a>");
}
?>

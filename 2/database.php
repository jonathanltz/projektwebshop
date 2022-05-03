<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "shopdb";

//$mysqlicon = new mysqli('localhost', 'root', '', 'shopdb');
$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$con) {
    die("Datenbankverbindung fehlgeschlagen!!");
}
?>

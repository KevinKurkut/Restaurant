<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$host = "localhost";
$user = "root";
$pass="";
$db ="restaurant";

$mysqli = new mysqli($host, $user, $pass, $db);

if ($mysqli->connect_error) {
    echo "There is a connection problem";
}


?>
<?php
$host = "localhost";
$user = "root";
$pass="";
$db ="Restaurant";

$mysqli = new mysqli($host, $user, $pass, $db);

if ($mysqli->connect_error) {
    echo "There is a connection problem";
}


?>
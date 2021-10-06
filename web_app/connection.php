<?php 

$database = "iot-based_direct_solar_dryer_database";
$servername = "localhost";
$username = "root";
$password = "";

$mysqli = new mysqli($servername, $username, $password, $database);

if($mysqli->connect_errno) {
    echo "Failed to connect to MYSQL: (" . $mysqli->connect_errno . ")" . $mysqli->connect_errno;
}

?>
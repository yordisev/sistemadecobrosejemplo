
<?php

$server   = "localhost";
$username = "root";
$password = "";
$database = "test";


$mysqli = new mysqli($server, $username, $password, $database);


if ($mysqli->connect_error) {
    die('error'.$mysqli->connect_error);
}
?>
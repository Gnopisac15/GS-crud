<?php

$localhost = "localhost:3306";
$username = "root";
$password = "";
$dbname = "gnopisac-php-tutorial";

$con = new mysqli($localhost, $username, $password, $dbname);

if($con->connect_error) {
die("connection failed : " . $con->connect_error);
}

/* end of file */
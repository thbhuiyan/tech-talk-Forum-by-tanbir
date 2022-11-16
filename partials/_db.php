<?php
//Script to connect to the database

// https://www.cloudways.com/blog/connect-mysql-with-php/ convert this to class based connection in future

$server = "localhost";
$username = "root";
$password = "";
$database = "techtalk";

$connect = mysqli_connect($server, $username, $password, $database);

if (!$connect) echo "failed connection" . mysqli_connect_error();
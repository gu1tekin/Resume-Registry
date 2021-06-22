<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "javascript_profiles";

// Set DSN
$dsn = 'mysql:hos='. $host. ';dbname='.$dbname;
//Create a PDO instance
$pdo = new PDO($dsn, $user, $password);

?>
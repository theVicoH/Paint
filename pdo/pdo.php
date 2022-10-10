<?php
$engine = "mysql";
$host = "localhost";
$port = 8889;
$dbname = "paint";
$username = "root";
$password = "root";
$pdo = new PDO("$engine:host=$host:$port;dbname=$dbname", $username, $password);
?>
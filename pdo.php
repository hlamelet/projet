<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=ath', "root", "root");

define('DB_SERVER', 'ath');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'vaccination');
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);


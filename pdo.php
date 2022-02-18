<?php
session_start();
<<<<<<< Updated upstream
=======

>>>>>>> Stashed changes
$pdo = new PDO('mysql:host=localhost;dbname=ath', "root", "root");

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'ath');
$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

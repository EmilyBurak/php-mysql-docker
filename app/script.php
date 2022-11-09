<?php 
// $mysqli = new mysqli("database", "admin", "12dlql*41");
define('DB_SERVER', 'database');
define('DB_USERNAME', 'admin');
define('DB_PASSWORD', 'pass');
define('DB_DATABASE', 'test');

$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
echo $db->server_info;
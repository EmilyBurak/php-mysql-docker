<?php 
// $servername= "localhost";
define('DB_SERVER', 'db');
define('DB_USERNAME', 'admin');
define('DB_PASSWORD', 'pass');
define('DB_DATABASE', 'test');

$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
echo $db->server_info;
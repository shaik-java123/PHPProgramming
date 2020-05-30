<?php
   define('DB_SERVER', 'localhost:8889');
   define('DB_USERNAME', 'admin');
   define('DB_PASSWORD', 'mysql');
   define('DB_DATABASE', 'login');
   $conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>
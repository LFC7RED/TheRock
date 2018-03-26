<?php
define ("DB_SERVER","localhost:3306");
define ("DB_USERNAME","Lfc7red");
define ("DB_PASSWORD","Password123");
define ("DB_DATABASE","therock");
$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    if (!$conn)
    {
    die("Connection Failed:" .mysqli_connect_error());
    }

require_once("functions.php");
?> 
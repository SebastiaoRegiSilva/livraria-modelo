<?php

$server_name = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "livraria";

$connection = mysqli_connect($server_name,$db_username,$db_password,$db_name) or die ('Desconnect');
$dbconfig = mysqli_select_db($connection,$db_name); 

?>
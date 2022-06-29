<?php 

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "test";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$conn ) 
{
    die("No hay conexion" . mysqli_conect_error());
}

?>
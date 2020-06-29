<?php
$host="localhost";
$user="root";
$password="1qazxsw2";
$db="facturaweb";
$con = new mysqli($host,$user,$password,$db);
if(!$con){
	die("Conection failure" . mysqli_connect_error());
	}
?>

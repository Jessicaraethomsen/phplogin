<?php
//makes connection to the DB (LOCAL) need to fix later to my database live
$conn = mysqli_connect("jessicaraethomsen.dk.mysql", "jessicaraethoms", "vKeJJ2C6", "jessicaraethoms");
//$conn = mysqli_connect("localhost", "root", "", "user");

if (!$conn) {
	die("Connection failed:".mysqli_connect_error());
	}
?>
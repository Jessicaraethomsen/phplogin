<?php 
include 'header2.php';


if(!isset($_SESSION['id'])){
	die(
	"<h3 id='loginpage'>You need to Login to see this amazing page!</h3>");
	}
	 else {
		 echo 
		 "<img id='logo1' src='img/secret.png' alt='youmadeit'>"; 
 			}

?>




			
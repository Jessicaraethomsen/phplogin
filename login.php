<?php 
session_start();
include 'dbh.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

// checking if the username and the password is in the DB

$sql = "SELECT * FROM test_user WHERE uid='$uid' AND pwd='$pwd'";
$result = $conn->query($sql);

//This is saying if there are no results in the database then do the following if else statment

 if (!$row = mysqli_fetch_assoc($result)) {
	  echo "Your username or password is incorrect!";
	 }
	 else {
		 //Superglobal called SESSION (we are saving information iin the session)
		$_SESSION['id'] = $row['id'];
		 }
header("Location: index.php");
?>



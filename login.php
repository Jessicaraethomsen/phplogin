<?php 

session_start();
include 'dbh.php';


$uid = $_POST['uid'];
$pwd = $_POST['pwd'];


$sql = "SELECT * FROM user WHERE uid='$uid'";
$result = $conn->query($sql);
!$row = mysqli_fetch_assoc($result);
$hash_pwd = $row['pwd'];
$hash = password_verify($pwd, $hash_pwd);

if($hash == 0){ }
	else {
	
$sql = "SELECT * FROM user WHERE uid='$uid' AND pwd='$hash_pwd'";
$result = $conn->query($sql);

 if (!$row = mysqli_fetch_assoc($result)) {
	  echo "Your username or password is incorrect!";
	 }
	 else {
		$_SESSION['id'] = $row['id'];
		 }
header("Location: secret.php");
}
?>





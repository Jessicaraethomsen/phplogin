<?php 

session_start();
include 'dbh.php';


$uid = mysqli_real_escape_string($conn, $_POST['uid']);
$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);


$sql = "SELECT * FROM user WHERE uid='$uid'";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);
$hash_pwd = $row['pwd'];
$passwordvalid = password_verify($pwd, $hash_pwd);

if($passwordvalid) {
	$_SESSION['id'] = $row['id'];
	header("Location: secret.php");
}
else {
	header("Location: index.php");
	echo "<p>Your username or password is incorrect!</p>";	
}


/*$stmt = $conn->prepare("SELECT * FROM user WHERE uid=? AND PWD=?");
$stmt->bind_param("ss", $username, $password);
$username = $uid;
$password = $pwd;
$stmt-> excute();

$sql = "SELECT * FROM user WHERE uid='$uid' AND pwd='$hash_pwd'";
$result = $conn->query($sql);

 if (!$row = mysqli_fetch_assoc($result)) {
	  
	 }
	 else {}
	*/

?>





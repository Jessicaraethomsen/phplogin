<?php 

session_start();
include 'dbh.php';


$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];
// posting the variables to each of this sections

$encrypted_password = password_hash($pwd, PASSWORD_DEFAULT);
$sql = "INSERT INTO user (first, last, uid, pwd) VALUES ('$first', '$last', '$uid', '$encrypted_password')";
// then inserting into the table user with the values of the variables.


$result = mysqli_query($conn, $sql);

header("Location: welcomelogin.php");
?>
<?php 
session_start();
include 'dbh.php';

$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];
// posting the variables to each of this sections

$sql = "INSERT INTO user (first, last, uid, pwd) VALUES ('$first', '$last', '$uid', '$pwd')";
// then inserting into the table user with the values of the variables.

$result = mysqli_query($conn, $sql);

header("Location: index.php");
?>
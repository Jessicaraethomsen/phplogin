<?php 
include 'header.php';
?>

<h4> SIGN IN</h4>
<form action="login.php" method="POST" > 
<input type="text" name="uid" placeholder="Username" required><br>
<input type="Password" name="pwd" placeholder="Password" required><br>
<button type="submit"> SIGN IN</button>
</form>

<?php 
 	if (isset($_SESSION['id'])) {
  echo $_SESSION['id'];
 } else {
  echo "You are not logged in!";
   }
 ?>

<h4> LOG OUT</h4>

<!--ARE LOGOUT FORM-->
    <form action="logout.php">
       <button type="submit"> Log out </button>
 <form>


</body>
</html>
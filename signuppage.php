<?php 
include 'header.php';
?>

<!--Making a form to develop the SIGN UP process-->


<?php 
 	if (isset($_SESSION['id'])) {
  echo "<img id='logo1' src='img/img_heyfriend.png' alt='pencil' >"; 
 } else {
	 echo "<div id='formbox'>";
	 echo "<img id='logo1' src='img/pencil.png' alt='pencil' style=width:50px height:50px/>";
	 echo "<h2> JOIN OUR TEAM </h2>";
	 echo "<h3> Sign up today</h3>";
  echo "<form id='formdesign' action='signup.php' method='POST'> 
<input type='text' name='first' placeholder='Firstname' required><br>
<input type='text' name='last' placeholder='Lastname' required><br>
<input type='text' name='uid' placeholder='Username' required><br>
<input type='Password' name='pwd' placeholder='Password' required><br>
<button type='submit'> SIGN UP</button>
</form>";
 echo "</div>";
   }




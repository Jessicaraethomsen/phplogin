<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>

<h4> SIGN IN</h4>
<form action="login.php" method="POST" > 
<input type="text" name="uid" placeholder="Username" required><br>
<input type="Password" name="pwd" placeholder="Password" required><br>
<button type="submit"> SIGN IN</button>
</form>


<!--Making a form to develop the SIGN UP process-->
<h4> SIGN UP </h4>
<form action="signup.php" method="POST"> 
<input type="text" name="first" placeholder="Firstname" required> <br>
<input type="text" name="last" placeholder="Lastname" required><br>
<input type="text" name="uid" placeholder="Username" required><br>
<input type="Password" name="pwd" placeholder="Password" required><br>
<button type="submit"> SIGN UP</button>
</form>

<br><br> 



</body>
</html>
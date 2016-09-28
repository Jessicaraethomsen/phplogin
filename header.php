<?php 
  session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<header>

<img id="logo" src="img/project-heading-bg copy.png" style="width:200px;height:40px; alt="logo" />
	<nav>
    	<ul>
        	<li><a href="index.php">HOME</a></li>  
        <?php
		
 			if (isset($_SESSION['id'])) {
  			echo 
			  "<form action='logout.php'>
       			<button type='submit'> Log out </button>
 				<form>";
 			} else {
 			 echo "<form action='login.php' method='POST' > 					<input type='text' name='uid'placeholder='Username'>
<input type='Password' name='pwd' placeholder='Password'>
<button type='submit'> SIGN IN</button>
</form>";
   }
       
		?>
            <li><a href="signuppage.php">SIGNUP</a></li>
            
         </ul>
</nav>

</header>
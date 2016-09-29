<?php 
  session_start();
  $curpage = basename($_SERVER['PHP_SELF']);
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
        	<li><a href="index.php"<?php if($curpage == 'index.php') {echo 'class="active"'; }?>>HOME</a></li> '
            <li><a href="secret.php"<?php if($curpage == 'secret.php') {echo 'class="active"'; }?>>ZISSOU</a></li>  
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
            <li><a href="signuppage.php"<?php if($curpage == 'signuppage.php') {echo 'class="active"'; }?>>SIGNUP</a></li>
            
         </ul>
</nav>

</header>
<?php 
	session_start();
$_SESSION['user']=array();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>IMDTalks</title>
	<style>
		body
		{
			background-color: blueviolet;
			color:white;
			font-family:arial
		}
		div
		{
			width:30%;
			float:left;
			text-align: center;
			margin-top:100px;
			margin-left:13.33%;
		}
		form input,
		button
		{
			display:block;
			margin-left:20px;
			margin-top: 10px;
		}
		form
		{
			padding-top: 30px;
		}
		.signup
		{
			background-color: lightgrey;
			height:250px;
		}
		button
		{
			background-color: yellow;
			
		}
		.gone
		{
			display:none;
		}
		.loggedin
		{
			background-color: black;
			height:50px;
			width:100%;
		}
		.loggedout
		{
			display:none;
		}
		.loggedin a
		{
			text-decoration: none;
			color:white;
			float:right;
			margin-right:20px;
			margin-top:15px;
		}
	</style>
</head>
<body>
<?php if(isset($_POST["username"])&&isset($_POST["email"])&&isset($_POST["password"])){
	$_SESSION['user'][0]['username']=($_POST['username']);
	$_SESSION['user'][0]['email']=	$_POST['email'];
	$_SESSION['user'][0]['password']=	$_POST['password'];
	} 
?>
<header class="<?php if(isset($_SESSION['user'])){
	if($_SESSION['user'][0]['username']=="Mario Samison"&&$_SESSION['user'][0]['email']=="samisonmario@gmail.com"&&$_SESSION['user'][0]['password']=="mario123"){
		echo "loggedin";
	}
	else{
		echo "loggedout";
	}
}
			   ?>">
	<a href="imdtalks.php">Logout</a>
</header>
	<div class="info">
		<h2>Welkome to IMD-talks</h2>
		<p>Find out what other IMD'ers are building around you.</p>
	</div>
	<div class="signup">
	<p>New to IMD-talks? Sign Up!</p>
		<form class="<?php
					 if($_SESSION['user'][0]['username']=="Mario Samison"&&$_SESSION['user'][0]['email']=="samisonmario@gmail.com"&&$_SESSION['user'][0]['password']=="mario123"){
						 echo "gone";
					 }
					 else{
						 echo "";
					 }
					 ?>" action="" method="post">
			<label for="username"></label>
			<input type="text" id="username" name="username" placeholder="Full Name">
			<label for="email"></label>
			<input type="text" id="email" name="email" placeholder="E-mail">
			<label for="password"></label>
			<input type="text" id="password" name="password" placeholder="Password">
			<button>Sign up for IMD-talks!</button>
		</form>
	<?php
	if(isset($_SESSION['user'][0])){
	if($_SESSION['user'][0]['username']=="Mario Samison"&&$_SESSION['user'][0]['email']=="samisonmario@gmail.com"&&$_SESSION['user'][0]['password']=="mario123"){
		echo "<p>Welcome back ".$_SESSION['user'][0]['email']."</p>";
	}	
		else{
			echo "";
		}
	}
	?>
	</div>
</body>
</html>
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
			background-color: lightgrey;
			height:150px;
			padding-top: 30px;
		}
		button
		{
			background-color: yellow;
			
		}
	</style>
</head>
<body>
	<div class="info">
		<h2>Welkome to IMD-talks</h2>
		<p>Find out what other IMD'ers are building around you.</p>
	</div>
	<div class="signup">
	<p>New to IMD-talks? Sign Up!</p>
		<form action="" method="post">
			<label for="username"></label>
			<input type="text" id="username" name="username" placeholder="Full Name">
			<label for="email"></label>
			<input type="text" id="email" name="email" placeholder="E-mail">
			<label for="password"></label>
			<input type="text" id="password" name="password" placeholder="Password">
			<button>Sign up for IMD-talks!</button>
		</form>
	</div>
</body>
</html>
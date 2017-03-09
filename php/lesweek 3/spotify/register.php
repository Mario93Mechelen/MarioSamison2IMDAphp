<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<style>
		body
		{
			background-image: url(https://images.pexels.com/photos/26504/pexels-photo.jpg?w=1260&h=750&auto=compress&cs=tinysrgb);
			background-size: cover;
			font-family:montserrat;
			color:white;
		}
		.container
		{
			display:flex;
			flex-wrap:wrap;
			flex-direction:row;
			width:80%;
			margin:auto;
			height:100vh;
			justify-content:space-around;
			align-items: center
		}
		.title
		{
			color: green;
			font-size:1.5em;
		}
		.form
		{
			border-right:2px solid white;
			padding-right:50px;
			width:30%;
		}
		.logosp
		{
			background-image: url(http://shamtrax.com/wp-content/uploads/2015/04/6274-spotify-logo-horizontal-white-rgb.png);
			width:160px;
			background-size: cover;
			height:50px;
			margin:auto;
			margin-bottom:20px;
		}
		.loginfb
		{
			background-color: #3b5998;
			width:100%;
			height:50px;
			border-radius:50px;
			cursor:pointer;
			margin-bottom:20px;
		}
		.loginfb p
		{
			margin:auto;
			color:white;
			width:210px;
			height:10px;
			padding-top:15px;
		}
		.username
		{
			display:flex;
			flex-direction: column;
			flex-wrap:wrap;
		}
		.password
		{
			display:flex;
			flex-direction: column;
			flex-wrap:wrap;
		}
		.robot
		{
			display:flex;
			flex-direction: row;
			flex-wrap:wrap;
			background-color: dimgray;
			margin-bottom:20px;
		}
		label
		{
			margin-bottom:20px;
		}
		input
		{
			margin-bottom:20px;
		}
		input[type="text"]
		{
			border:none;
			border-bottom:2px solid white;	background:transparent;
		}
		input[type="checkbox"]
		{
			margin-top:18px;
			margin-left:20px;
			margin-right:25px;
		}
		button
		{
			width:100%;
			height:50px;
			border:2px solid white;
			border-radius:50px;
			font-family:montserrat;
			color:white;
			background-color: none;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="form">
			<div class="logosp"></div>
			<div class="loginfb">
				<p>
					LOG IN WITH FACEBOOK
				</p>
			</div>
			<form action="" method="post">
				<div class="username">
				<label for="username">Username</label>
				<input type="text" name="username" id="username" placeholder="Your email or username"></div>
				<div class="password">
				<label for="password">Password</label>
				<input type="text" name="password" id="password" placeholder="Your password">
				</div>
				<div class="robot">
				<input type="checkbox" name="robot" id="robot" value="I'm not a robot">
				<p>I'm not a robot</p>
				</div>
				<button>
					LOGIN
				</button>
			</form>
		</div>
		<div class="title">
			<H1>Get the right music, right now</H1>
		</div>
	</div>
</body>
</html>
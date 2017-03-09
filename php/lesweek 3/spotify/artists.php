<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Artists</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<style>
		body
		{
			background-color: black;
			font-family:montserrat;
			color:white;
		}
		.container
		{
			width:80%;
			margin:auto;
			display:flex;
			flex-direction: row;
			flex-wrap: wrap;
			justify-content:space-around;
		}
		.artists
		{
			background-color: darkslategrey;
			height:150px;
			width:150px;
			margin:50px;
			display:flex;
			flex-direction: column;
			cursor:pointer;
		}
		.artists p
		{
			text-align: center;
		}
		.photo
		{
			flex-grow:2;
			background-color: white;
		}
	</style>
</head>
<body>
<div class="container">
	<!--<div class="artists"><div class="photo"></div><p class="artisname"></p></div>-->
	<?php
		$con = new mysqli("localhost","root","","spotify");
		$query = "SELECT * FROM artists;";
		$result = $con->query($query);
		while( $row = mysqli_fetch_array($result) ){
			echo "<div class='artists'><div class='photo'></div><p class='artisname'>".$row['name']."</p></div>";
		}
	?>
</div>
</body>
</html>
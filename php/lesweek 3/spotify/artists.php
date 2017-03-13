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
		a
		{
			text-align: center;
			text-decoration: none;
			color:white;
			font-family:montserrat
		}
		.photo
		{
			flex-grow:2;
			background-color: white;
		}
		.logout
		{
			background: transparent;
			border:2px solid white;
			width:100px;
			height:50px;
			border-radius:50px;
			float:right;
			margin-right:100px;
		}
	</style>
</head>
<body>
<a href="login.php?logout=true"><div class="logout"><p>Log Out</p></div></a>
<div class="container">
	<!--<div class="artists"><div class="photo"></div><p class="artisname"></p></div>-->
	<?php
		/*$con = new mysqli("localhost","root","","spotify");
		$query = "SELECT * FROM artists;";
		$result = $con->query($query);
		while( $row = mysqli_fetch_array($result) ){
			echo "<a href='http://localhost/lesweek3/exercise/albums.php?artistid=".$row['id']."'><div class='artists'><div class='photo'></div><p class='artisname'>".$row['name']."</p></div></a>";
		}*/
		$conn = new PDO('mysql:host=localhost;dbname=spotify', "root", "");
		$sth = $conn->prepare("SELECT * FROM artists;");
		// Or sth->bindParam(':name', $_POST['namefromform']); depending on application
		$sth->execute();
		while( $row = $sth->fetch() ){
			echo "<a href='http://localhost/lesweek3/exercise/albums.php?artistid=".$row['id']."'><div class='artists'><div class='photo'></div><p class='artisname'>".$row['name']."</p></div></a>";
		}
	?>
</div>
</body>
</html>
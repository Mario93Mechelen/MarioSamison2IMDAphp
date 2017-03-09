<?php
	session_start();
	$artistid=$_GET['artistid'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Albums of </title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<style>
		body
		{
			background-color: black;
			font-family: montserrat;
			color:white;
		}
		.container
		{
			width:80%;
			margin:auto;
			display:flex;
			flex-direction: column;
			flex-wrap: wrap;
			justify-content:space-around;
		}
		.artists
		{
			background-color: darkslategrey;
			height:150px;
			width:100%;
			margin:50px;
			display:flex;
			flex-direction: row;
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
			background-color: white;
			order:-1;
			width:150px;
			height:150px;
			margin-right:50px;
		}
	</style>
</head>
<body>
<div class="container">
	<!--<div class="artists"><div class="photo"></div><p class="artisname"></p></div>-->
	<?php
		$con = new mysqli("localhost","root","","spotify");
		$query = "SELECT * FROM albums WHERE (artist_id = '".$artistid."');";
		$result = $con->query($query);
		while( $row = mysqli_fetch_array($result) ){
			echo "<a href='http://localhost/lesweek3/exercise/tracks.php?albumid=".$row['id']."'><div class='artists'><img class='photo' src='".$row['cover']."' alt='cover'><p class='artisname'>".$row['title']."</p></div></a>";
		}
	?>	
	</div>
</body>
</html>
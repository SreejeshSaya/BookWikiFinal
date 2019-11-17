<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" type="images/x-icon" href="images/icon.png" />
	<link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="conf.css" rel="stylesheet">
	<title>Fantasy</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="mainPage.php"><img src="images/icon.png" style="height:30px;width:40px"> BookWiki</a>
	
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
			<a class="nav-link" href="genre.html">Genre</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="Loginrequest.html">Request</a>
			</li>
		</ul>
		<form method="post" action="search.php" class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name='s'>
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		</form>
	
		<ul class="navbar-nav my-2 my-lg-0">
			<li class="nav-item">
			<a class="nav-link" href="signup.html">New User? Sign Up</a>
			</li>
		</ul>
	</nav>
	
	<h1 style="font-family:Helvetica; text-align:center;">Fantasy</h1>
	<table border="0" align="center">
<?php
	//to list out all the books under fantasy genre
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "sample";
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if(!$conn)
	{
		die("Connection failed:"+mysqli_connect_error());
	}
	$query="SELECT Bname,Aname,Publisher,Year,Genre FROM AllBooks where Genre='Fantasy'";
	$result=$conn->query($query);//query is passed and an object is returned which has several attributes, one of which is num_rows.
	
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())//returns that particular row from the list of rows obtained through the query as an array of attributes(think of it like a dictionary). 
		{
				$name=$row['Bname'];
				$name1=str_replace("'","",$name);
				echo "<tr><td align:'center'><a href='BestSellingBooks/$name1.html'><img src='BestSellingBooks/bookCovers/$name1.jpg' style='width:150px; height:200px'/></a></td>";
				echo "<td><a href='BestSellingBooks/$name1.html'>",$row['Bname'],"</a><br />",$row['Aname'],"<br />",$row['Genre'],"</td></tr>";
		}
	}
	else
	{
		echo "No results.";
	}
	
	
	
	
	mysqli_close($conn);

?>
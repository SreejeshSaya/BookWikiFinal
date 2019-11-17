<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" type="images/x-icon" href="images/icon.png" />
	<link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="conf.css" rel="stylesheet">
	<title>Request</title>
</head>
<body>
<nav class="navbar navbar-expand">
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
	
	<table border="0" align="center">
		
<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "sample";
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if(!$conn)
	{
		die("Connection failed:"+mysqli_connect_error());
	}
	
	$Bookname=$_POST['s'];
	if($Bookname=='')
	{
		echo "<script>
		alert('Invalid search.');
		window.location.href='mainPage.php';
		</script>";
	}
	echo "Searched for:$Bookname";
/* 	$sql="SELECT Bname,Aname,Publisher,Year,Genre FROM AllBooks where Bname LIKE '%$Bookname%'";
	$query=mysqli_query($conn,$sql);
	
	if($query) {
    while($row = mysqli_fetch_assoc($query)){
		echo "<tr><td>",$row['Bname'],"</td><td>",$row['Aname'],"</td><td>",$row['Publisher'],"</td><td>",$row['Year'],"</td><td>",$row['Genre'],"</td></tr>";
    }
	else
	{
		echo "No results.";
	}  */
	
	$query="SELECT Bname,Aname,Publisher,Year,Genre FROM AllBooks where Bname LIKE '%$Bookname%'";

	$result=$conn->query($query);
	
	if($result->num_rows>0)
	{
		echo "<script>
		alert('$result->num_rows search results found.');
		</script>";
		while($row=$result->fetch_assoc())
		{
				$name=$row['Bname'];
				/* $name1=$row['Bname']; */
				$name1=str_replace("'","",$name);//In order to not having conflicting single and double quotes in the echo statements, We're removing all single quotes for simplicity.
				//echo "<tr><td><a href='$name.html'>",$row['Bname'],"</a></td><td>",$row['Aname'],"</td><td>",$row['Publisher'],"</td><td>",$row['Year'],"</td><td>",$row['Genre'],"</td></tr>";
				echo "<tr><td align:'center'><a href='BestSellingBooks/$name1.html'><img src='BestSellingBooks/$name1.jpg' style='width:150px; height:200px'/></a></td>";
				//echo "<tr><td><a href='BestSellingBooks/$name.html'><img src='BestSellingBooks/Harry Potter and the Sorcerer's Stone.jpg' /></a></td><br />";
				echo "<td><a href='BestSellingBooks/$name1.html'>",$row['Bname'],"</a><br />",$row['Aname'],"<br />",$row['Genre'],"</td></tr>";
		}
	}
	else
	{
		echo "No results.";
	}
	
	mysqli_close($conn);

?>
	</table>
</body>
</html>
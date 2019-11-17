<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>BookWiki</title>
	<link rel="shortcut icon" type="images/x-icon" href="images/icon.png" />
	<link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="conf.css" rel="stylesheet">
</head>
<body>
	<ul id="contextMenu">
		<li class="menuItems" id="1" onclick="bg()">change bg</li>
		<li class="menuItems" id="2">Sign Out</li>
		<li class="menuItems" id="3">Reload</li>
		<li class="menuItems" id="4">Print</li>
		<li class="menuItems" id="5">Inspect</li>
	</ul>

	<div class="slideshow-container">

			<div class="mySlides fade">
			  <img src="books.jpg" style="width:1480px; height:500px;">
			  <div class="text">Caption Text</div>
			</div>
			
			<div class="mySlides fade">
			  <img src="Books4.jpg" style="width:1480px; height:500px;">
			  <div class="text">Caption Two</div>
			</div>
			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>
		</div>
		<br>
		<div style="text-align:center">
		  <span class="dot" onclick="currentSlide(1)"></span> 
		  <span class="dot" onclick="currentSlide(2)"></span>  
		</div>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="mainPage.php"><img src="images/icon.png" style="height:3	0px;width:40px"> BookWiki</a> 
	
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


	<table border="0" align='center'>
		<tr>
			<th colspan="2" align="left"><h2>Best Selling Books</h2></th>
			<th align="right"><h2>News articles</h2></th>
		</tr>
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

	$val=0;
	$query="SELECT Bname,Aname,Publisher,Year,Genre FROM AllBooks";
	$query2="SELECT Articlename,Link FROM NewsArticles";
	$result=$conn->query($query);
	$result2=$conn->query($query2);
	while($val!=5)
	{
		$val++;
		$row=$result->fetch_assoc();
		$row2=$result2->fetch_assoc();
		$name=$row['Bname'];
		$linkname=$row2['Link'];
		$name1=str_replace("'","",$name);
		echo "<tr><td align:'left'><a href='BestSellingBooks/$name1.html'><img src='BestSellingBooks/$name1.jpg' style='width:150px; height:200px'/></a></td>";
		echo "<td align:'left'><a href='BestSellingBooks/$name1.html'>",$row['Bname'],"</td>";
		echo "<td align='right'><a href='$linkname'>",$row2['Articlename'],"</td></tr>";
	}

?>

	</table>
	<br />
	<br />
	<br />
	<h2 align='center'>Hot Selling Books</h2>
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

	$val=0;
	$query="SELECT Bname,Aname,Publisher,Year,Genre FROM AllBooks where Year >= 1970";
	$result=$conn->query($query);
	while($val!=5)
	{
		$val++;
		$row=$result->fetch_assoc();
		$name=$row['Bname'];
		$name1=str_replace("'","",$name);
		/* echo "<tr><td align:'left'><a href='BestSellingBooks/$name1.html'><img src='BestSellingBooks/$name1.jpg' style='width:150px; height:200px'/></a></td>";
		echo "<td align:'left'><a href='BestSellingBooks/$name1.html'>",$row['Bname'],"</td>";
		echo "<td></td></tr>"; */
		echo "<a href='BestSellingBooks/$name1.html' ><img src='BestSellingBooks/$name1.jpg' id='HSB' float:left align='center' /></a>";
		echo "<a href='BestSellingBooks/$name1.html' id='HSBN'>",$row['Bname'],"</a><br/><br/><br/><br/><br/><br /><br /><br /><br />";
	}
?>
		

</body>
</html>

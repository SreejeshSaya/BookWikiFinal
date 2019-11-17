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
	<link href="mainPage.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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

		<nav class="navbar navbar-expand">
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
	<ul id="contextMenu">
		<li class="menuItems" id="1">change bg</li>
		<li class="menuItems" id="2">Reload</li>
		<li class="menuItems" id="3" onclick="bt()">Back To Top</li>
	</ul>	
	<div id="slider">
		<div id="box">
			<img src="book1.jpg">
		</div>

		<!-- buttons for controls slider -->
		<button id="pi" class="prew fa fa-chevron-left" onclick="prewImage()"></button>
		<button id="ni" class="next fa fa-chevron-right" onclick="nextImage()"></button>
	</div>
	<!-- <table class="Table">
	<col width="1500">
	<col width="500">
	<tr>
	<th class="Sell">Hot selling books</th>
	<th class="News">Announcements/News</th>
	</tr>
	<tr>
	<td class="col1">
		<a href="" class="hb" style="display:inline; text-align:center;"><p class=""><pre>This is the book ranked number 1</pre></p></a>
		<a href="" class="hb" style="display:inline; text-align:center;"><p class=""><pre>This is the book ranked number 2</pre></p></a>
		<a href="" class="hb" style="display:inline; text-align:center;"><p class=""><pre>This is the book ranked number 3</pre></p></a>
		<a href="" class="hb" style="display:inline; text-align:center;"><p class=""><pre>This is the book ranked number 4</pre></p></a>
		<a href="" class="hb" style="display:inline; text-align:center;"><p class=""><pre>This is the book ranked number 5</pre></p></a>
	</td>
	<td>
		<a href="" class="links"><p class="article">This is news article number 1</p></a>
		<a href="" class="links"><p class="article">This is news article number 2</p></a>
		<a href="" class="links"><p class="article">This is news article number 3</p></a>
		<a href="" class="links"><p class="article">This is news article number 4</p></a>
	</td>
	</tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr>
	<th class="Sell">Bestselling books</th>
	</tr>
	<tr>
	<td class="col1">
		<a href="https://www.google.com/" class="hb" style="display:inline; text-align:center;"><p class=""><pre>This is the book ranked number 1</pre></p></a>
		<a href="https://www.google.com/" class="hb" style="display:inline; text-align:center;"><p class=""><pre>This is the book ranked number 2</pre></p></a>
		<a href="https://www.google.com/" class="hb" style="display:inline; text-align:center;"><p class=""><pre>This is the book ranked number 3</pre></p></a>
		<a href="https://www.google.com/" class="hb" style="display:inline; text-align:center;"><p class=""><pre>This is the book ranked number 4</pre></p></a>
		<a href="https://www.google.com/" class="hb" style="display:inline; text-align:center;"><p class=""><pre>This is the book ranked number 5</pre></p></a>
	</td>
	</tr>
	</table> -->

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
 	<script type="text/javascript" src="mainPage.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
	$("#2").click(function(){
		document.location.href="mainPage.html"
	})
	$("#1").bind("click",function(event){
		document.body.style.backgroundColor="lightgrey"
	});
	$("#1").bind("dblclick",function(){
		document.body.style.backgroundColor="white"
	});
})
</script>		
	<footer>
		<a href="about us.html"><p align="center">About us</p></a>
	</footer>
</body>
</html>

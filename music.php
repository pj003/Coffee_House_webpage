
<html>
<head>
	<title>JavaJam Coffee House</title>
	<link rel="stylesheet" type="text/css" href="CSS/javacoffee.css">
</head>
<body>
	<div id="wrapper">
		<header>
			<h1>JavaJam Coffee House</h1>
		</header>
		<nav>
			<ul>
				<li><a href="index.html">Home</a><li>
					<li><a href="menu.html">Menu</a></li>
					<li><a href="music.php">Music</a></li>
					<li><a href="jobs.php">Jobs</a></li>
					<li><a href="gear.php">Gear</a></li>
					<li><a href="cart.php">Cart</a></li>
					<li><a href="placeyourorder.php">Order</a></li>
			</ul>
		</nav>
		<main>
			<div id="guitar"></div>
			<h2>Music at JavaJam</h2>
			<p>The first Friday night each month at JavaJam is a special night. Join us from 8 pm to 11 pm for some music you won&#39;t want to miss!</p>
			<?php
$user = 'root';
$pass = '';
$db = 'wdm';
$con=mysqli_connect('localhost', $user, $pass, $db);

$sql="SELECT musician.Name,musician.Musician_Image_URL,performance.Month,performance.Description FROM musician INNER JOIN performance ON musician.MusicianId=performance.MusicianId;";

$query= mysqli_query($con,$sql);

while ($row = mysqli_fetch_array($query))
{
		echo "<h4>$row[Month]</h4>
			  <div class=\"details\">
				<img src=\"$row[Musician_Image_URL]\" height=\"80\" width=\"80\" class=\"floatleft\">
				<p>$row[Description]</p>
			</div>";
  }
?>
		</main>
		<footer>Copyright &copy; 2018 JavaJam Coffee House<br>
			<i><a href="mailto:poojasd404@gmail.com">poojasd404@gmail.com</a></i>
		</footer>
	</div>
</body>
</html>
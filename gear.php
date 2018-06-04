<!--https://foundation.zurb.com/building-blocks/blocks/input-number-group.html-->
<html>
<head>
	<title>JavaJam Coffee House</title>
	<link rel="stylesheet" type="text/css" href="CSS/javacoffee.css">
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
			<div id="couch"></div>
			<h2>JavaJam Gear</h2>
			<p>JavaJam gear not only looks good, it's good for your wallet too.<br></p>
			<p>Get a 10% discount when you wear a JavaJam shirt or bring in your JavaJam mug!</p>

<?php
			$user = 'root';
			$pass = '';
			$db = 'wdm';
			$con=mysqli_connect('localhost', $user, $pass, $db);
			$sql="SELECT name,description,image from products";
			$query= mysqli_query($con,$sql);
			while ($row = mysqli_fetch_array($query))
			{
				echo "<form action=\"gear.php\" method=\"post\">";
				echo "
			  	<div class=\"detail\">
				<img src=\"$row[image]\" height=\"110\" width=\"110\" class=\"floatleft\">
				<p>$row[description]</p>
				<br>
				<input style=\"display: none;\" type=\"hidden\" name=\"name\" value=\"$row[name]\">		
				<a href=\"cart.php\"><button>Add to Cart</button></a>
				</div>";
				echo "</form>";
 			}

			if($_SERVER['REQUEST_METHOD'] == "POST"){
				$con=mysqli_connect('localhost', $user, $pass, $db);
			$sql="SELECT quantity from cart WHERE description=\"$_POST[name]\";";
			$query= mysqli_query($con,$sql);
			$result=mysqli_fetch_array($query);
			$newQuantity = (int)$result['quantity'] + 1;
			
						$con=mysqli_connect('localhost', $user, $pass, $db);
			$sql="UPDATE cart SET quantity=".$newQuantity." WHERE description=\"".$_POST['name']."\";";
			
			$query= mysqli_query($con,$sql);
		
			}
			?>
			
		</main>
		<footer>Copyright &copy; 2018 JavaJam Coffee House<br>
			<i><a href="poojasd404@gmail.com">poojasd404@gmail.coma></i>
		</footer>
	</div>
</body>
</html>
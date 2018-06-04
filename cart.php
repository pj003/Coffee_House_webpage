<!DOCTYPE html>
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
			<br>
			<h2 align="center">Shopping Cart</h2>
			<?php
$user = 'root';
$pass = '';
$db = 'wdm';
$con=mysqli_connect('localhost', $user, $pass, $db);


$sql="SELECT cart.description, cart.quantity, cart.price FROM cart;";

$query= mysqli_query($con,$sql);

				echo "<table id=\"content\" align=\"center\">
								    <tr>
										<th><b>Description</b></th>
										<th><b>Quantity</b></th>
										<th><b>Price</b></th>
									  </tr>";
				while ($row = mysqli_fetch_array($query))
				{
								echo "
									<tr>
										<td>$row[description]</td>
										<td>$row[quantity]</td>
										<td>" . ((int) $row['quantity'] * $row['price']) . "</td>
									</tr>";
				}
				echo "</table>";
			?>
			<br>
			
			<div id = "shit">
			<a href="placeyourorder.php"> <button> Place Order</button></a>
			<a href="gear.php"> <button> Continue Shopping </button> </a>
		</div>
		</main>
	<footer>Copyright &copy; 2018 JavaJam Coffee House<br>
		<i><a href="mailto:poojasd404@gmail.com">poojasd404@gmail.com</a></i>
	</footer>
</div>
</body>
</html>
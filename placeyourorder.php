<!DOCTYPE html>
<html>
<head>
	<title>JavaJam Coffee House</title>
	<link rel="stylesheet" type="text/css" href="CSS/javacoffee.css">
	<script type="text/javascript">
	function  fun()
	{
	var epattern="(.)+@(.)+\.(.)+";
	var Name=document.getElementById("Name").value;
	var Email=document.getElementById("Email").value;
	var Address=document.getElementById("Address").value;
	var City=document.getElementById("City").value;
	var State=document.getElementById("State").value;
	var zip=document.getElementById("Zip").value;
	var Credit_card=document.getElementById("Credit_card").value;
	var Month=document.getElementById("Month").value;
	var Year=document.getElementById("Year").value;
	if(Name==""||!(Name.match([a-zA-Z]+)))
	{
		alert('Please Enter Name');
		return false;
	}
	else if(Email==""||!(Email.match(epattern)))
	{
		alert('Please Enter valid email');
		return false;
	}
	else if(Address==""||!Address.match([a-zA-Z0-9]+))
	{
		alert('Please Enter Experience');
		return false;
	}
	else if(City==""||!City.match([a-zA-Z]+))
	{
		alert('Please enter City')
		return false;
	}
	else if(State==""||!State.match([a-zA-Z]+))
	{
		alert('Please enter State')
		return false;
	}
	else if(zip==""||!zip.match([0-9]{5}+))
	{
		alert('Please enter City')
		return false;
	}
	else if(Credit_card==""||!Credit_card.match("[0-9]{16}+"))
	{
		alert('Please enter valid Credit card number')
		return false;
	}
	else if(Month==""||!Month.match((0[1-9]|1[012])))
	{
		alert('Please enter Expiry Month')
		return false;
	}
	else if(Year==""||!Year.match([0-9]{4}+))
	{
		alert('Please enter Expiry Year')
		return false;
	}
	return true;
	}
	</script>
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
			
		<table id="content" align="center">
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
										<td>" . ((int) $row['quantity'] * (int)$row['price']) . "</td>
									</tr>";
				}
				echo "</table>";

				if (isset($_POST['name'])) {
				$pattern = "/[a-z A-Z]+/";
				function matching($string, $pattern) {
				return preg_match($pattern, $string, $matches) === 1 && $matches[0] === $string;
				}
				if ($_POST['Name'] == "") {
				echo "Field is blank";
				return false;
				}
				else if (!(matching($_POST['Name'], $pattern))) {
				echo 'name does not match pattern1';
				return false;
				}

$p1 = "/(.)+@(.)+\.(.)+/";
if ($_POST['Email'] == "") {
	echo "Field is blank";
	return false;
}
else if (!matching($_POST['Email'], $p1)) {
	echo 'name does not match pattern2';
	return false;
}
$p2 = "/[a-z A-Z 0-9]+/";
if ($_POST['Address'] == "") {
	echo "Field is blank";
	return false;
}
else if (!matching($_POST['Address'], $p2)) {
	echo 'name does not match pattern2';
	return false;
}
$p3 = "/[a-z A-Z]+/";
if ($_POST['City'] == "") {
	echo "Field is blank";
	return false;
}
else if (!matching($_POST['City'], $p3)) {
	echo 'name does not match pattern3';
	return false;
}
$p4 = "/[a-z A-Z]+/";
if ($_POST['State'] == "") {
	echo "Field is blank";
	return false;
}
else if (!matching($_POST['State'], $p4)) {
	echo 'name does not match pattern4';
	return false;
}
$p5 = "/[0-9]{5}+/";
if ($_POST['Zip'] == "") {
	echo "Field is blank";
		return false;
}
else if (!matching($_POST['Zip'], $p5)) {
	echo 'name does not match pattern5';
	return false;
}
$p6 = "/[0-9]{16}+/";
if ($_POST['Credit_card'] == "") {
	echo "Field is blank";
	return false;
}
else if (!matching($_POST['Credit_card'], $p6)) {
	echo 'name does not match pattern6';
	return false;
}
$p7 = "/0[1-9]|1[012]/";
if ($_POST['Month'] == "") {
	echo "Field is blank";
	return false;
}
else if (!matching($_POST['Month'], $p7)) {
	echo 'name does not match pattern7';
	return false;
}
$p8 = "/[0-9]{4}+/";
if ($_POST['Year'] == "") {
	echo "Field is blank";
	return false;
}
else if (!matching($_POST['Year'], $p8)) {
	echo 'name does not match pattern8';
	return false;
}
			}
			?>
			</table>
			<br>
		   
			<form method="post" action="placeyourorder.php" onsubmit="fun()"> 
			<div class="row">
        	<div class="large-4 small-centered columns">
            <fieldset>
            <legend align = "center"><b>Fill Details:</b></legend>
            <div class="row"> 
			<label id="lab" for="Name">Name</label>
			<input id="myinput" type="text" name="Name" pattern = "[A-Za-z]+" required>
			<label id="lab" for="Email">Email</label>
			<input id="myinput" type="text" name="Email" pattern="(.)+@(.)+\.(.)+" required>
			<label id="lab" for="Address">Address</label>
			<input id="myinput" type="text" name="Address" pattern = "[a-zA-Z0-9]+" required >
			<label id="lab" for="City">City</label>
			<input id="myinput" type="text" name="City" pattern = "[a-zA-Z]+" required>
			<label id="lab" for="State" >State</label>
			<input id="myinput" type="text" name="State" pattern = "[a-zA-Z]+" required>
			<label id="lab" for="Zip">Zip</label>
			<input id="myinput" type="text"  name="Zip" pattern = "[0-9]{5}+" required>
			<label id="lab" for="Credit_card">Credit Card</label>
			<input id="myinput" type="text" name="Credit_card" pattern = "[0-9]{16}+" required>
			<label id="lab" for="Month" >Expiry Month</label>
			<input id="myinput" type="text"  name="Month" pattern="(0[1-9]|1[012])" required>
			<label id="lab" for="Year" >Year</label>
			<input id="myinput" type="text" style="display:inline-block;" name="Year" pattern="[0-9]{4}+" required>
			<div id="shit"><button >Order Now</button></div>
			</fieldset>
			</form>
			<?php
			if (isset($_POST['Name'])){
$user = 'root';
$pass = '';
$db = 'wdm';
$con=mysqli_connect('localhost', $user, $pass, $db);
if($con)
	echo 'connected successfully to wdm database';

$sql="INSERT INTO orders (Name, Email, Address, City, State, Zip, Credit_card, Month, Year) VALUES ('$_POST[Name]','$_POST[Email]','$_POST[Address]','$_POST[City]','$_POST[State]','$_POST[Zip]','$_POST[Credit_card]','$_POST[Month]','$_POST[Year]')";
$query= mysqli_query($con,$sql);
if($query)
	echo 'data inserted successfully';
	}
?>		
</main>
	<footer>Copyright &copy; 2018 JavaJam Coffee House<br>
		<i><a href="mailto:priyanka@bangalorejayadeva.com">priyanka@bangalorejayadeva.com</a></i>
	</footer>
</div>
</body>
</html>
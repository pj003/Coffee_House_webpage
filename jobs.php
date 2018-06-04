<!DOCTYPE html>
<html>
<head>
	<title>JavaJam Coffee House</title>
	<link rel="stylesheet" type="text/css" href="CSS/javacoffee.css">
	
<script type="text/javascript">
function  fun()
{
	var epattern="(.)+@(.)+\.(.)+";
	var name=document.getElementById("name").value;
	var email=document.getElementById("email").value;
	var experience=document.getElementById("experience").value;
	if(name==""||!(name.match([a-z A-Z]+$)))
	{
		alert('Please Enter Name');
		return false;
	}
	 else if(email==""||!(email.match(epattern)))
	 {
	 	alert('Please Enter valid email');
	 	return false;
	 }
	 else if(experience==""||!(experience.match([a-z A-Z]*+)))	{
		alert('Please Enter Experience');
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
			<h2>Jobs at JavaJam</h2>
			<p>Want to work at JavaJam? Fill out the form below to start your application. Required fields are marked with an asterisk (*).</p>
		<form method="post" action="jobs.php" onsubmit="fun()">
			<label  id="lab" for="name">*Name:</label>
			<input  type="text"  name="name" pattern = "[a-z A-Z]+$" required>
			<label  id="lab" for="email">*E-mail:</label>
			<input  type="email"  name="email" pattern="(.)+@(.)+\.(.)+">
			<label  id="lab" for="experience">*Experience:</label>
			<textarea  name="experience" cols="22" rows="2"  pattern="[a-z A-Z]*+" required></textarea>
			<button>Apply Now</button>
		</form>
		<?php
	if (isset($_POST['name'])) {
$user = 'root';
$pass = '';
$db = 'wdm';
$con=mysqli_connect('localhost', $user, $pass, $db);
if($con)
	echo 'connected successfully to wdm database';
// check parameters for correct values
$pattern = "/[a-z A-Z]+/";
function matching($string, $pattern) {
	return preg_match($pattern, $string, $matches) === 1 && $matches[0] === $string;
}
if ($_POST['name'] == "") {
	echo "Field is blank";
	return false;
}
else if (!(matching($_POST['name'], $pattern))) {
	echo 'name does not match pattern1';
	return false;
}

$pat = "/(.)+@(.)+\.(.)+/";
if ($_POST['email'] == "") {
	echo "Field is blank";
	return false;
}
else if (!matching($_POST['email'], $pat)) {
	echo 'name does not match pattern2';
	return false;
}
$p = "/[a-z A-Z0-9]*+/";
if ($_POST['experience'] == "") {
	echo "Field is blank";
	return false;
}
else if (!matching($_POST['experience'], $p)) {
	echo 'name does not match pattern3';
	return false;
}


$sql="INSERT INTO jobs (name, email, experience) VALUES ('$_POST[name]','$_POST[email]','$_POST[experience]')";
$query= mysqli_query($con,$sql);
if($query)
	echo 'data inserted successfully';		
	}
?>
		</main>
	<footer>Copyright &copy; 2018 JavaJam Coffee House<br>
		<i><a href="mailto:poojasd404@gmail.com">poojasd404@gmail.com</a></i>
	</footer>
</div>
</body>
</html>
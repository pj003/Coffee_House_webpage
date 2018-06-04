$pattern = "/[a-zA-Z]+/";
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
$p2 = "/[a-zA-Z0-9]+/";
if ($_POST['Address'] == "") {
	echo "Field is blank";
	return false;
}
else if (!matching($_POST['Address'], $p2)) {
	echo 'name does not match pattern3';
	return false;
}
$p3 = "/[a-zA-Z]+/";
if ($_POST['City'] == "") {
	echo "Field is blank";
	return false;
}
else if (!matching($_POST['City'], $p3)) {
	echo 'name does not match pattern3';
	return false;
}
$p4 = "/[a-zA-Z]+/";
if ($_POST['State'] == "") {
	echo "Field is blank";
	return false;
}
else if (!matching($_POST['State'], $p4)) {
	echo 'name does not match pattern3';
	return false;
}
$p5 = "/[0-9]{5}+/";
if ($_POST['Zip'] == "") {
	echo "Field is blank";
	return false;
}
else if (!matching($_POST['Zip'], $p5)) {
	echo 'name does not match pattern3';
	return false;
}
$p6 = "/[0-9]{16}+/";
if ($_POST['Credit_card'] == "") {
	echo "Field is blank";
	return false;
}
else if (!matching($_POST['Credit_card'], $p6)) {
	echo 'name does not match pattern3';
	return false;
}
$p7 = "/0[1-9]|1[012]/";
if ($_POST['Month'] == "") {
	echo "Field is blank";
	return false;
}
else if (!matching($_POST['Month'], $p7)) {
	echo 'name does not match pattern3';
	return false;
}
$p8 = "/[0-9]{4}+/";
if ($_POST['Year'] == "") {
	echo "Field is blank";
	return false;
}
else if (!matching($_POST['Year'], $p8)) {
	echo 'name does not match pattern3';
	return false;
}
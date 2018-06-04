?php
$user = 'root';
$pass = '';
$db = 'wdm';
$con=mysqli_connect('localhost', $user, $pass, $db);


$sql="SELECT description,image from products";

$query= mysqli_query($con,$sql);


while ($row = mysqli_fetch_array($query))
{
		echo "
			  <div class=\"detail\">
				<img src=\"$row[image]\" height=\"120\" width=\"120\" class=\"floatleft\">
				<p>$row[description]</p>
				<br>
				<br>
			<button>Add to cart</button>
			</div>";
  }
  	echo "</form>";
?>
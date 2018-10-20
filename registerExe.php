
<?php 

include 'db.php';
$objDatabase = Database::getInstance(); // ye db.php wale class ka object
$mail=$pass=$fname=$lname=$git=$link=$about=$gender="";

if ($_SERVER["REQUEST_METHOD"]=="POST")
{
	$fname=test_input($_POST['fname']);
	$lname=test_input($_POST['lname']);
	$about=test_input($_POST['about']);
	$mail=test_input($_POST['mail']);
	$git=test_input($_POST['git']);
	$link=test_input($_POST['link']);
	$pass=test_input($_POST['pwd']);
	$gender=test_input($_POST['gender']);

	$quer="SELECT * from register where email='$mail' and password='$pass'";
	$q = $objDatabase->query($quer);
  	$r=mysqli_num_rows($q);
	if($r==0)
	{ //echo "string";
		$quer1="INSERT INTO `register`(`fname`, `lname`, `about`, `email`, `github`, `linkedin`, `password`, `gender`) VALUES ('$fname','$lname','$about','$mail','$git','$link','$pass','$gender') " or die(mysql_error());
		
		$res=$objDatabase->query($quer1);
		if($res)
		{
			//echo "1";
			$quer2="INSERT INTO `login`(`email`,`password`) VALUES ('$mail','$pass')"  or die(mysql_error());
			$quer3="INSERT INTO `leaderboard`(`email` , `name`) VALUES ('$mail','$fname')"  or die(mysql_error());
			$res1=$objDatabase->query($quer2);
			$res2=$objDatabase->query($quer3);
			if($res1 && $res2)
			{ //echo "Hey";
				echo '<script>
					alert("Registered Successfully!!");
				 window.location="login.php";</script>';
			}
		}
		
	}
	else
		echo '<script>
				alert("Already Registered!!");
				 window.location="login.php";</script>';

}

//function for removing white space and special chars
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<?php
session_start();
include 'db.php';
$objDatabase = Database::getInstance(); // ye db.php wale class ka object
$pass=$fname=$lname=$git=$link=$about=$gender="";
$myid=$_SESSION['uid'];
if (isset($_SESSION['uid']))
{
	$quer="SELECT * from register where email='$myid'";
	$q = $objDatabase->query($quer);
  	$r=mysqli_fetch_assoc($q);
  	$fname=$r['fname'];
	$lname=$r['lname'];
	$about=$r['about'];
	//$mail=$r['mail']);
	$git=$r['github'];
	$link=$r['linkedin'];
	//$pass=$r['pwd'];
	$gender=$r['gender'];
	//echo $_SESSION['uid'];
}
else
{
	header('location:login.php');
}
include 'headlog.php';
?>

<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>

<style>
.jumbotron1{
  width: 60%;
  margin:0px;
}
.jumbotron1 form{
 margin-left: 70px;
 
}
.jumbotron1 {
  margin: auto;
  position: ;
  top: 0; left: 0; bottom: 0; right: 0;

}

</style>
</head>
<body>

  <br>
  <div class="container" style="">
    <h3 class="text-center" style="background-color: #f0f0f0;">PROFILE </h3><br>
  <div class="jumbotron1">

  <form method="post" action="" style="width: 100%;">
    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label">First Name :</label>
    <div class="col-sm-6">
      <input type="text" name="fname" class="form-control" id="inputEmail3" placeholder="<?php echo $fname;?>" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label">Last Name :</label>
    <div class="col-sm-6">
      <input type="text" name="lname" class="form-control" id="inputEmail3" placeholder="<?php echo $lname;?>" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label">About :</label>
    <div class="col-sm-6">
      <input type="text" name="about" class="form-control" id="inputEmail3" placeholder="<?php echo $about;?>" readonly>
    </div>
  </div>
 
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label">Github Link :</label>
    <div class="col-sm-6">
      <input type="text" name="git" class="form-control" id="inputEmail3" placeholder="<?php echo $git;?>" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label">Linked-In Link :</label>
    <div class="col-sm-6">
      <input type="text" name="link" class="form-control" id="inputEmail3" placeholder="<?php echo $link;?>" readonly>
    </div>
  </div>
 
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label">Gender</label>
    <div class="col-sm-6">
      <input type="text" name="link" class="form-control" id="inputEmail3" placeholder="<?php echo $gender;?>" readonly>
    </div>
  </div>

<br>

 
</form>
</div>
</div>
</body>
</html>

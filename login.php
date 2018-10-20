<?php
session_start();
if(isset($_SESSION['uid']))
{
  header('location:profile.php');
}

include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
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
    <h3 class="text-center" style="background-color: #f0f0f0;">LOGIN </h3><br>
  <div class="jumbotron1">

  <form method="post" action="login.php" style="width: 100%;">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label">Email :</label>
    <div class="col-sm-6">
      <input type="email" name="mail" class="form-control" id="inputEmail3" placeholder="" required>
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-3 col-form-label">Password :</label>
    <div class="col-sm-6">
      <input type="password" name="pwd" class="form-control" id="inputPassword3" placeholder="" required>
    </div>
  </div>

<br>

  <div class="form-group row">
    <div class="col-sm-5">
      <button type="submit" name="login" class="btn btn-success" style="float: right;">Login</button>
    </div>
  </div>
</form>
</div>
</div>
</body>
</html>


<?php 
include 'db.php';
$objDatabase = Database::getInstance(); // ye db.php wale class ka object
$mail=$pass="";

if(isset($_POST['login']))
{
  $mail=test_input($_POST['mail']);
  $pass=test_input($_POST['pwd']);
  $quer="SELECT * from login where email='$mail' and password='$pass'";
  $r=$objDatabase->query($quer);
  $row=mysqli_num_rows($r);
  if($row<1)
  {
    //session_start();
    //$_SESSION['uid']=1;

    echo '<script> window.location="login.php";
        alert("Not registered");</script>';
  }
  else
   {
    $data=mysqli_fetch_assoc($r);
    echo $id=$data['email'];
   

    $_SESSION['uid']=$id;
    header('location:leaderboard.php');
  }


}

//function for removing white space and special chars
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

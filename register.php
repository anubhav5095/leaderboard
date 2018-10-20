<?php
include 'header.php';
include 'db.php';
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
    <h3 class="text-center" style="background-color: #f0f0f0;">REGISTER </h3><br>
  <div class="jumbotron1">

  <form method="post" action="registerExe.php" style="width: 100%;">
    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label">First Name :</label>
    <div class="col-sm-6">
      <input type="text" name="fname" class="form-control" id="inputEmail3" placeholder="" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label">Last Name :</label>
    <div class="col-sm-6">
      <input type="text" name="lname" class="form-control" id="inputEmail3" placeholder="" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label">About :</label>
    <div class="col-sm-6">
      <input type="text" name="about" class="form-control" id="inputEmail3" placeholder="" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label">Email :</label>
    <div class="col-sm-6">
      <input type="email" name="mail" class="form-control" id="inputEmail3" placeholder="" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label">Github Link :</label>
    <div class="col-sm-6">
      <input type="text" name="git" class="form-control" id="inputEmail3" placeholder="" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label">Linked In Link :</label>
    <div class="col-sm-6">
      <input type="text" name="link" class="form-control" id="inputEmail3" placeholder="" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-3 col-form-label">Password :</label>
    <div class="col-sm-6">
      <input type="password" name="pwd" class="form-control" id="inputPassword3" placeholder="" required>
    </div>
  </div>
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-3 pt-0">Gender</legend>
      <div class="col-sm-6">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="Male" checked>
          <label class="form-check-label" for="gridRadios1">
            Male
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="Female">
          <label class="form-check-label" for="gridRadios2">
            Female
          </label>
        </div>
      
      </div>
    </div>
  </fieldset>
<br>

  <div class="form-group row">
    <div class="col-sm-8">
      <button type="submit" name="signin" class="btn btn-success" style="width:110%;">Sign in</button>
    </div>
  </div>
</form>
</div>
</div>
</body>
</html>

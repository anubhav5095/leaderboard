<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  <style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 10px 10px 10px 10px;
}

.header a {
	line-height: 30px;
  float: left;
  color: black;
  text-align: center;
  padding: 5px 15px 5px 15px;
  
  text-decoration: none;
  font-size: 15px; 
  border-radius: 4px;
}

.logo{
	padding: 0px;
}

.header a:hover {
	text-decoration: none;
  background-color: dodgerblue;
  
  color: white;
}



.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}
</style>
</head>
<body>

<div class="header">
  <a href="main.php" class="logo"><img src="logo.png" style="width: 200px;height: 40px;" ></a>
  <div class="header-right">
    <a class="active" href="home.php">Leaderboard</a>
    <a href="">Tasks</a>
    <a href="login.php">Login</a>
    <a href="register.php">Register</a>
  </div>
</div>

</body>
</html>

<?php
session_start();
include 'db.php';
include 'headlog.php';
$objDatabase = Database::getInstance(); // ye db.php wale class ka object
$pass=$fname=$lname=$git=$link=$about=$gender="";

	$quer="SELECT * FROM `leaderboard` ORDER BY points DESC";
	$q = $objDatabase->query($quer);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Leader Board</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.container {
  border: 2px solid #ccc;
  background-color: #eee;
  border-radius: 5px;
  padding: 16px;

}

.container {
  margin: auto;
  margin-bottom: 20px;
  position: ;
  top: 0; left: 0; bottom: 0; right: 0;

}
.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  margin-right: 20px;
  border-radius: 50%;
}

.container span {
  font-size: 20px;
  margin-right: 15px;
}


@media (max-width: 500px) {
  .container {
      text-align: center;
  }
  .container img {
      margin: auto;
      float: none;
      display: block;
  }
}	


/*search bar*/
#myInput{
	width: 50%;
	 : center;
	border-radius: 4px;	
	padding: 10px 10px 10px 10px;
}

</style>	
</head>

<body>
	<br><br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="text"  class="" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">&emsp;<i class="fa fa-search" style="font-size:36px"></i>
<br><br><br><br>
<?php
while($row=mysqli_fetch_assoc($q))
{?>

	 <div class="container" id="myUL">
	  <table>
	  	<tr>
	  		<td>
	  			<img src="/w3images/bandmember.jpg" alt="Avatar" style="width:90px">
	  		</td>
	  		<td>
	  			<p><span><?php echo $row['name'];?></span></p>
	  		</td>
	  		<td>
	  			<p><span id="point" style="">POINTS :<?php echo $row['points'];?></span></p>	
	  		</td>
	  	</tr>
	  </table>
	</div>

<?php  
}
?>



</body>
</html>


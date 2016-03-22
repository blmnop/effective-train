<?php

$connect = mysqli_connect('localhost','root','RWcRqvLEDCv5JDrS','propertyList');
if ( mysqli_connect_errno($connect)	) {
	echo 'Failed to connect';
}
	


?>

<!DOCTYPE html>
<html>
<head>
<title>InvestWise Properties</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link  type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
<link href="styles2.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="css/w3.css">
<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
<script src="js/jquery.js"></script>  
  
	  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 700px;
	  height: 306px;
      margin: auto;
	  
	  

}
 
  </style>
</head>
<body>
<?php

	$name = $_POST['buyer_name'];
	$email = $_POST['buyer_email'];
	$gender = $_POST['buyer_gender'];
	$comment = $_POST['buyer_comment'];

mysql_query($connect "INSERT INTO `buyer`( `buyer_name`, `buyer_email`, `buyer_gender`, `buyer_comment`) VALUES ('$name','$email','$gender','$comment')");

?>
<div class="w3-top">
<ul class="w3-navbar w3-large w3-green w3-left-align">
  <li class="w3-hide-medium w3-hide-large w3-black w3-opennav w3-right">
    <a href="javascript:void(0);" onclick="myFunction()">Menu</a>
  </li>
  <li><a href="index.php">HOME</a></li>
  <li class="w3-hide-small"><a href="resale-properties.php">Resale Properties</a>
  
  </li>
  <li class="w3-hide-small"><a href="acquired-assets.php">Acquired Assets</a></li>
  <li class="w3-hide-small"><a href="about-us.php">About Us</a></li>
</ul>

<div id="demo" class="w3-hide w3-hide-large w3-hide-medium">
  <ul class="w3-navbar w3-left-align w3-large w3-green">
    <li><a href="resale-properties.php">Resale Properties</a></li>
    <li><a href="acquired-assets.php">Acquired Assets</a></li>
    <li><a href="about-us.php">About Us</a></li>
    <li><a href="#">Link 3</a></li>
	
  </ul>
</div>
</div>
<script>
function myFunction() {
    document.getElementById("demo").classList.toggle("w3-show");
}
</script>
<div class="container-fluid">
	

<h2> </h2>
<div class="content">
<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method=post" >
	<fieldset>
	<legend>Your Information </legend>
	<label> Full Name: <br>
	<input type="text" name="fullname"/></label><br>
	<label>Gender:
	<input type="radio" name="gender" Value="female">Female
	<input type="radio" name="gender" Value="male">Male</label><br>
	
	<label>E-mail Address: <br>
	<input type="email" name="email" required="required" /></label><br>
	
	
	
	
	<label> Enter Your comments<br>
	<textarea name="comments" cols="50" rows="10" > </textarea></label><br>
	<input type="submit" name="submit" value="submit">
	</fieldset>
</form>
</div>
</div>
	<div class="footer"> 
	<h6> INVESTWISE PROPERTIES INC. &copy; 2016 </h6>
		</div>
		
		</body>
</html>
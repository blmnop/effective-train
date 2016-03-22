<?php
mysql_connect ("localhost","root","") or die("could not connect");
mysql_select_db("propertyList") or die("could not find db!");
$output = '';
//collect

	if (isset($_POST ['search'])){
		$searchq =$_POST ['search'];
		$searchq = preg_replace ("#[^0-9a-z]#i","", $searchq);
		$query = mysql_query("SELECT * FROM propertyDetails WHERE property_type LIKE '%$searchq%' OR property_amount LIKE '%$searchq%' OR property_location LIKE '%$searchq%'" )or die("could not search");
		$count = mysql_num_rows($query);
		if ($count == 0){
			$output = 'There is no such results!';
			
		}else{
			while ($row = mysql_fetch_array($query)){
				$ptype = $row ['property_type'];
				$pamount = $row ['property_amount'];
				$plocation = $row ['property_location'];
				$id = $row ['property_id'];
				$output .='<div> '.$ptype.' '.$pamount.' '.$plocation.'</div>';
				
			}
			
		}
		
	}
?>

<!DOCTYPE html>
<html>
<title>InvestWise Properties- Acquired Assets</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link  type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
<link href="styles.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="css/w3.css">
<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
<script src="js/jquery.js"></script>  
  
	  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
	  height: 408px;
      margin: auto;
	  
	  

}
 
  </style>
</head>
<body><div class="w3-top">
<ul class="w3-navbar w3-large w3-green w3-left-align">
  <li class="w3-hide-medium w3-hide-large w3-black w3-opennav w3-right">
    <a href="javascript:void(0);" onclick="myFunction()">Menu</a>
  <li><a href="index.php">HOME</a></li>
  <li class="w3-hide-small"><a href="resale-properties.php">Acquired Assets</a>
  
  </li>
  <li class="w3-hide-small"><a href="about-us.php">About Us</a></li>
</ul>

<div id="demo" class="w3-hide w3-hide-large w3-hide-medium">
  <ul class="w3-navbar w3-left-align w3-large w3-green">
   <li><a href="index.php">HOME</a></li>
  <li class="w3-hide-small"><a href="resale-properties.php">Acquired Assets</a> </li>
  <li class="w3-hide-small"><a href="about-us.php">About Us</a></li>
	
  </ul>
</div>
</div>
<script>
function myFunction() {
    document.getElementById("demo").classList.toggle("w3-show");
}
</script>
<div class="container-fluid">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/six.jpg" alt="Chania" width="460" height="345">
      </div>

      <div class="item">
        <img src="images/seven.jpg" alt="Chania" width="460" height="345">
      </div>
    
      <div class="item">
        <img src="images/eight.jpg" alt="Flower" width="460" height="345">
      </div>

      <div class="item">
        <img src="images/nine.jpg" alt="Flower" width="460" height="345">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<div class="form">

<form action="trial.php" method="post">
<h3>
Type Place/Amount/Type of property:</h3>
<input type="text" name="search" placeholder="Your desired property..." />
<input type="submit" value="Search" />


</form>
</div>
<div class="w3-center">
<ul class="w3-pagination w3-small">

  <li><a href="#" class="w3-hover-green" style="background-color:white;">A</a></li>
  <li><a href="#" class="w3-hover-green" style="background-color:white;">B</a></li>
  <li><a href="#" class="w3-hover-green" style="background-color:white;">C</a></li>
  <li><a href="#" class="w3-hover-green" style="background-color:white;">D</a></li>
  <li><a href="#" class="w3-hover-green" style="background-color:white;">E</a></li>
  <li><a href="#" class="w3-hover-green" style="background-color:white;">F</a></li>
  <li><a href="#" class="w3-hover-green" style="background-color:white;">G</a></li>
  <li><a href="#" class="w3-hover-green" style="background-color:white;">H</a></li>
  <li><a href="#" class="w3-hover-green" style="background-color:white;">I</a></li>
  <li><a href="#" class="w3-hover-green" style="background-color:white;">J</a></li>
  <li><a href="#" class="w3-hover-green" style="background-color:white;">K</a></li>
  <li><a href="#" class="w3-hover-green" style="background-color:white;">L</a></li>
  <li><a href="#" class="w3-hover-green" style="background-color:white;">M</a></li>
  <li><a href="#" class="w3-hover-green" style="background-color:white;">N</a></li>
  <li><a href="#" class="w3-hover-green" style="background-color:white;">O</a></li>
  <li><a href="#" class="w3-hover-green" style="background-color:white;">P</a></li>
  <li><a href="#" class="w3-hover-green" style="background-color:white;">Q</a></li>
  <li><a href="#" class="w3-hover-green" style="background-color:white;">R</a></li>
  <li><a href="#" class="w3-hover-green" style="background-color:white;">S</a></li>
  <li><a href="#" class="w3-hover-green" style="background-color:white;">T</a></li>
  <li><a href="#" class="w3-hover-green" style="background-color:white;">U</a></li>
  <li><a href="#" class="w3-hover-green" style="background-color:white;">V</a></li>
  <li><a href="#" class="w3-hover-green" style="background-color:white;">W</a></li>
  <li><a href="#" class="w3-hover-green" style="background-color:white;">X</a></li>
  <li><a href="#" class="w3-hover-green" style="background-color:white;">Y</a></li>
  <li><a href="#" class="w3-hover-green" style="background-color:white;">Z</a></li>
  </ul>
</div>
<div class="type">
<ul>
<li><a href=""> Condomenium</a></i>
<li><a href="">House & Lot </a></li>
<li><a href="">Beach Lot</a></li>
<li><a href=""> Vacant Lot</a></li>
<li><a href=""> Pre-owned</a></li>
<li><a href=""> Bank foreclosed</a></li>
</ul>
</div>
<div class="container">

<img src="images/six.jpg"><br> 
	<h3 style="color:red; font-weight: bold;">PHP: <br><small>20,000,00.00</small> </h3>
	<h3>PROPERTY: <br><small>ALABANG- House and Lot </small> </h3>
	
	
		<a href="#demo1" data-toggle="collapse" style="color:green; font-weight: bold; background-color:;" > Read more...</a>
		<div id="demo1" class="collapse" style="position: relative;">
		<h3>L.A.: <br><small>508sqm</small> </h3>
	<h3>F.A.: <br><small>587sqm</small> </h3>
	<h3>LOCATION: <br><small>San Jose Village, Alabang </small> </h3>
	<h3>VICINITY: <br><small>Near Alabang Town Center, at the back of Don Bosco, Alabang  </small> </h3>
		<!---<h3>SPECIFICATIONS: 
		<br>
		<small>
		6 Bedrooms<br>
		5 Toilet and Bath <br>
		with Indoor Pool <br>
		with Lanai <br>
		with Terrace <br>
		with Garden <br>
		1 Maids room <br>
		4 car Garrage <br>
		</small> </h3>--->
		
		<a href="alabang.php" style="color:blue; font-weight:bold;" > Click to View full Details...</a>
		</div>
		</div>

		


<div class="container">
<a href="alabang.php">
<img src="images/six.jpg">  <br> 
	<h3 style="color:red; font-weight: bold;">PHP: <br><small>20,000,00.00</small> </h3>
	<h3>PROPERTY: <br><small>ALABANG- House and Lot </small> </h3>
	
	
	
		<a href="#demo2" data-toggle="collapse" style="color:green; font-weight: bold;" > Read more...</a>
		<div id="demo2" class="collapse" style="position: relative;">
		<h3>L.A.: <br><small>508sqm</small> </h3>
	<h3>F.A.: <br><small>587sqm</small> </h3>
	<h3>LOCATION: <br><small>San Jose Village, Alabang </small> </h3>
	<h3>VICINITY: <br><small>Near Alabang Town Center, at the back of Don Bosco, Alabang  </small> </h3>
				<!---<h3>SPECIFICATIONS: 
		<br>
		<small>
		6 Bedrooms<br>
		5 Toilet and Bath <br>
		with Indoor Pool <br>
		with Lanai <br>
		with Terrace <br>
		with Garden <br>
		1 Maids room <br>
		4 car Garrage <br>
		</small> </h3>--->
		<a href="alabang.php" style="color:blue; font-weight:bold;" > Click to View full Details...</a>
		</div>
		<a href="alabang.php">
		</div>
		
	
<div class="container">

<img src="images/six.jpg"><br> 
	<h3 style="color:red; font-weight: bold;">PHP: <br><small>20,000,00.00</small> </h3>
	<h3>PROPERTY: <br><small>ALABANG- House and Lot </small> </h3>

	
		<a href="#demo3" data-toggle="collapse" style="color:green; font-weight: bold;" > Read more...</a>
		<div id="demo3" class="collapse" style="position: relative;">
		<h3>L.A.: <br><small>508sqm</small> </h3>
	<h3>F.A.: <br><small>587sqm</small> </h3>
	<h3>LOCATION: <br><small>San Jose Village, Alabang </small> </h3>
	<h3>VICINITY: <br><small>Near Alabang Town Center, at the back of Don Bosco, Alabang  </small> </h3>
				<!---<h3>SPECIFICATIONS: 
		<br>
		<small>
		6 Bedrooms<br>
		5 Toilet and Bath <br>
		with Indoor Pool <br>
		with Lanai <br>
		with Terrace <br>
		with Garden <br>
		1 Maids room <br>
		4 car Garrage <br>
		</small> </h3>--->
		<a href="alabang.php" style="color:blue; font-weight:bold;" > Click to View full Details...</a>
		</div>
	
		</div>
		
	
<div class="container">

 <img src="images/six.jpg"><br> 
	<h3 style="color:red; font-weight: bold;">PHP: <br><small>20,000,00.00</small> </h3>
	<h3>PROPERTY: <br><small>ALABANG- House and Lot </small> </h3>
	
	
	
	
		<a href="#demo4" data-toggle="collapse" style="color:green; font-weight: bold;"> Read more...</a>
		<div id="demo4" class="collapse" style="position: relative;">
		<h3>L.A.: <br><small>508sqm</small> </h3>
	<h3>F.A.: <br><small>587sqm</small> </h3>
	<h3>LOCATION: <br><small>San Jose Village, Alabang </small> </h3>
	<h3>VICINITY: <br><small>Near Alabang Town Center, at the back of Don Bosco, Alabang  </small> </h3>
				<!---<h3>SPECIFICATIONS: 
		<br>
		<small>
		6 Bedrooms<br>
		5 Toilet and Bath <br>
		with Indoor Pool <br>
		with Lanai <br>
		with Terrace <br>
		with Garden <br>
		1 Maids room <br>
		4 car Garrage <br>
		</small> </h3>--->
		<a href="alabang.php" style="color:blue; font-weight:bold;" > Click to View full Details...</a>
		</div>

		</div>
		
	
<div class="container">

 <img src="images/six.jpg"><br> 
	<h3 style="color:red; font-weight: bold;">PHP: <br><small>20,000,00.00</small> </h3>
	<h3>PROPERTY: <br><small>ALABANG- House and Lot </small> </h3>
	
	

		<a href="#demo5" data-toggle="collapse" style="color:green; font-weight: bold;" > Read more...</a>
		<div id="demo5" class="collapse" style="position: relative;">
		<h3>L.A.: <br><small>508sqm</small> </h3>
	<h3>F.A.: <br><small>587sqm</small> </h3>
	<h3>LOCATION: <br><small>San Jose Village, Alabang </small> </h3>
	<h3>VICINITY: <br><small>Near Alabang Town Center, at the back of Don Bosco, Alabang  </small> </h3>
				<!---<h3>SPECIFICATIONS: 
		<br>
		<small>
		6 Bedrooms<br>
		5 Toilet and Bath <br>
		with Indoor Pool <br>
		with Lanai <br>
		with Terrace <br>
		with Garden <br>
		1 Maids room <br>
		4 car Garrage <br>
		</small> </h3>--->
		<a href="alabang.php" style="color:blue; font-weight:bold;" > Click to View full Details...</a>
		</div>
		
		</div>
		

<div class="container">

<img src="images/six.jpg"><br> 
	<h3 style="color:red; font-weight: bold;">PHP: <br><small>20,000,00.00</small> </h3>
	<h3>PROPERTY: <br><small>ALABANG- House and Lot </small> </h3>
	
	

		<a href="#demo6" data-toggle="collapse" style="color:green; font-weight: bold;" > Read more...</a>
		<div id="demo6" class="collapse" style="position: relative;">
		<h3>L.A.: <br><small>508sqm</small> </h3>
	<h3>F.A.: <br><small>587sqm</small> </h3>
	<h3>LOCATION: <br><small>San Jose Village, Alabang </small> </h3>
	<h3>VICINITY: <br><small>Near Alabang Town Center, at the back of Don Bosco, Alabang  </small> </h3>
				<!---<h3>SPECIFICATIONS: 
		<br>
		<small>
		6 Bedrooms<br>
		5 Toilet and Bath <br>
		with Indoor Pool <br>
		with Lanai <br>
		with Terrace <br>
		with Garden <br>
		1 Maids room <br>
		4 car Garrage <br>
		</small> </h3>--->
		<a href="alabang.php" style="color:blue; font-weight:bold;" > Click to View full Details...</a>
		</div>

		</div>
		

<div class="container">

<img src="images/six.jpg"><br> 
	<h3 style="color:red; font-weight: bold;">PHP: <br><small>20,000,00.00</small> </h3>
	<h3>PROPERTY: <br><small>ALABANG- House and Lot </small> </h3>
	

	
	
		<a href="#demo7" data-toggle="collapse" style="color:green; font-weight: bold;"> Read more...</a>
		<div id="demo7" class="collapse" style="position: relative;">
		<h3>L.A.: <br><small>508sqm</small> </h3>
	<h3>F.A.: <br><small>587sqm</small> </h3>
	<h3>LOCATION: <br><small>San Jose Village, Alabang </small> </h3>
	<h3>VICINITY: <br><small>Near Alabang Town Center, at the back of Don Bosco, Alabang  </small> </h3>
				<!---<h3>SPECIFICATIONS: 
		<br>
		<small>
		6 Bedrooms<br>
		5 Toilet and Bath <br>
		with Indoor Pool <br>
		with Lanai <br>
		with Terrace <br>
		with Garden <br>
		1 Maids room <br>
		4 car Garrage <br>
		</small> </h3>--->
		<a href="alabang.php" style="color:blue; font-weight:bold;" > Click to View full Details...</a>
		</div>
		
		</div>
		

<div class="container">

<img src="images/six.jpg"><br> 
	<h3 style="color:red; font-weight: bold;">PHP: <br><small>20,000,00.00</small> </h3>
	<h3>PROPERTY: <br><small>ALABANG- House and Lot </small> </h3>
	
	
	
	
		<a href="#demo8" data-toggle="collapse" style="color:green; font-weight: bold;"> Read more...</a>
		<div id="demo8" class="collapse" style="position: relative;">
		<h3>L.A.: <br><small>508sqm</small> </h3>
	<h3>F.A.: <br><small>587sqm</small> </h3>
	<h3>LOCATION: <br><small>San Jose Village, Alabang </small> </h3>
	<h3>VICINITY: <br><small>Near Alabang Town Center, at the back of Don Bosco, Alabang  </small> </h3>
				<!---<h3>SPECIFICATIONS: 
		<br>
		<small>
		6 Bedrooms<br>
		5 Toilet and Bath <br>
		with Indoor Pool <br>
		with Lanai <br>
		with Terrace <br>
		with Garden <br>
		1 Maids room <br>
		4 car Garrage <br>
		</small> </h3>--->
		<a href="alabang.php"style="color:blue; font-weight:bold;" > Click to View full Details...</a>
		</div>
		
		</div>
<div class="container">

<img src="images/six.jpg"><br> 
	<h3 style="color:red; font-weight: bold;">PHP: <br><small>20,000,00.00</small> </h3>
	<h3>PROPERTY: <br><small>ALABANG- House and Lot </small> </h3>
	
	
	
	
		<a href="#demo9" data-toggle="collapse" style="color:green; font-weight: bold;"> Read more...</a>
		<div id="demo9" class="collapse" style="position: relative; background-color:white;">
		<h3>L.A.: <br><small>508sqm</small> </h3>
	<h3>F.A.: <br><small>587sqm</small> </h3>
	<h3>LOCATION: <br><small>San Jose Village, Alabang </small> </h3>
	<h3>VICINITY: <br><small>Near Alabang Town Center, at the back of Don Bosco, Alabang  </small> </h3>
				<!---<h3>SPECIFICATIONS: 
		<br>
		<small>
		6 Bedrooms<br>
		5 Toilet and Bath <br>
		with Indoor Pool <br>
		with Lanai <br>
		with Terrace <br>
		with Garden <br>
		1 Maids room <br>
		4 car Garrage <br>
		</small> </h3>--->
		<a href="alabang.php" style="color:blue; font-weight:bold;"> Click to View full Details...</a>
		</div>
		
		</div>

<div class="container">

<img src="images/six.jpg"><br> 
	<h3 style="color:red; font-weight: bold;">PHP: <br><small>20,000,00.00</small> </h3>
	<h3>PROPERTY: <br><small>ALABANG- House and Lot </small> </h3>
	
	
	
	
		<a href="#demo10" data-toggle="collapse" style="color:green; font-weight: bold;"> Read more...</a>
		<div id="demo10" class="collapse" style="position: relative;">
		<h3>L.A.: <br><small>508sqm</small> </h3>
	<h3>F.A.: <br><small>587sqm</small> </h3>
	<h3>LOCATION: <br><small>San Jose Village, Alabang </small> </h3>
	<h3>VICINITY: <br><small>Near Alabang Town Center, at the back of Don Bosco, Alabang  </small> </h3>
		<!---<h3>SPECIFICATIONS: 
		<br>
		<small>
		6 Bedrooms<br>
		5 Toilet and Bath <br>
		with Indoor Pool <br>
		with Lanai <br>
		with Terrace <br>
		with Garden <br>
		1 Maids room <br>
		4 car Garrage <br>
		</small> </h3>--->
		<a href="alabang.php" style="color:blue; font-weight:bold;" > Click to View full Details...</a>
		</div>
		
		</div>		
</div>
	<div class="footer"> 
	<h6> INVESTWISE PROPERTIES INC. &copy; 2016 </h6>
		</div>

<?php
		
		print("$output");
		
		?>
</body>
</html> 

<!DOCTYPE html>
<html>
<head>
<title>InvestWise Properties</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link  type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
<link href="styles1.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="css/w3.css">
<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
<script src="js/jquery.js"></script>  
  
	  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
	  height: 306px;
      margin: auto;
	  
	  

}
 
  </style>
</head>
<body>
<div class="w3-top">
<ul class="w3-navbar w3-large w3-green w3-left-align">
  <li class="w3-hide-medium w3-hide-large w3-black w3-opennav w3-right">
    <a href="javascript:void(0);" onclick="myFunction()">Menu</a>
  </li>
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
        <img src="images/six.jpg" alt="property" width="460" height="345">
      </div>

      <div class="item">
        <img src="images/seven.jpg" alt="property" width="460" height="345">
      </div>
    
      <div class="item">
        <img src="images/eight.jpg" alt="property" width="460" height="345">
      </div>

      <div class="item">
        <img src="images/nine.jpg" alt="property" width="460" height="345">
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
<form action="action_page.php"> <h3>What are you looking for?</h3> <br>
<div class="search-option">
<small>
Type of Property:</small>
  <input list="property-type" name="property-type">
  <datalist id="property-type">
 <option value="Condo">
    <option value="House & Lot">
    <option value=" .....">
    <option value=".....">
    <option value=".....">
  </datalist>
  </div>
<div class="search-option">
<small>
Desired Location: </small>
  <input list="places" name="places">
  <datalist id="places">
 <option value="Taguig City">
    <option value="Makati City">
    <option value="Tagaytay City">
    <option value="Baguio City">
    <option value="Pasig City">
  </datalist>
  </div>
  <div class="search-option">
  <small>
	Amount in PHP.  :  </small>
<input list="amount-in-peso" name="amount-in-peso">
  <datalist id="amount-in-peso">
    <option value="500K-1M">
    <option value="1M-2M">
    <option value="2M-3M">
    <option value="3M-4M">
    <option value="4M-5M">
	<option value="5M-6M">
	<option value="6M-7M">
	<option value="7M-8M">
	<option value="8M-9M">
	<option value="9M-10M">
  </datalist>
</div>
<div class="search-option">
<input type="submit">  
  </div>
</form>
</div>
<h2> Resale Properties</h2>
<div class="type">
<a href=""> Condomenium</a>
<a href="">House & Lot </a>
<a href="">Beach Lot</a>
<a href=""> Vacant Lot</a>
<a href=""> Pre-owned</a>
<a href=""> Bank foreclosed</a>
</div>
<div class="container">
<a href="air-residence.php"><img src="images/seven.jpg"><br> 
<h3>Name:<br> <small>Bolactia, Lhourine M.</small> </h3></a>

</div>
<div class="container">
<a href=""><img src="images/six.jpg"><br> 
<h3>Name:<br> <small>Bolactia, Lhourine M.</small> </h3></a>

</div><div class="container">
<a href=""><img src="images/seven.jpg"><br> 
<h3>Name:<br> <small>Bolactia, Lhourine M.</small> </h3></a>

</div><div class="container">
<a href=""><img src="images/seven.jpg"><br> 
<h3>Name:<br> <small>Bolactia, Lhourine M.</small> </h3></a>

</div><div class="container">
<a href=""><img src="images/six.jpg"><br> 
<h3>Name:<br> <small>Bolactia, Lhourine M.</small> </h3></a>

</div>
<div class="container">
<a href=""><img src="images/seven.jpg"><br> 
<h3>Name:<br> <small>Bolactia, Lhourine M.</small></h3></a>

</div>
<div class="container">
<a href=""><img src="images/seven.jpg"><br> 
<h3>Name:<br> <small>Bolactia, Lhourine M.</small></h3></a>

</div>
	<div class="footer"> 
	<h6> INVESTWISE PROPERTIES INC. &copy; 2016 </h6>
		</div>

</div>
</body>
</html> 

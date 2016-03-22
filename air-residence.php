<!DOCTYPE html>
<html>
<title>InvestWise Properties</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link  type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
<link href="styles1.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="w3.css">

 <script src="js\jquery.js"></script>
  <script src="js\bootstrap.min.js"></script>

<body>
<div class="w3-top">
<ul class="w3-navbar w3-large w3-green w3-left-align">
  <li class="w3-hide-medium w3-hide-large w3-black w3-opennav w3-right">
    <a href="javascript:void(0);" onclick="myFunction()">Menu</a>
  </li>
  <li><a href="index.php">HOME</a></li>
  <li class="w3-hide-small"><a href="#">Resale Properties</a>
  
  </li>
  <li class="w3-hide-small"><a href="#">Acquired Assets</a></li>
  <li class="w3-hide-small"><a href="#">About Us</a></li>
</ul>

<div id="demo" class="w3-hide w3-hide-large w3-hide-medium">
  <ul class="w3-navbar w3-left-align w3-large w3-green">
    <li><a href="resale-properties.php">Resale Properties</a></li>
    <li><a href="acquied-assets.php">Acquired Assets</a></li>
    <li><a href="about-us.php">About Us</a></li>
    <li><a href="#">Link 3</a></li>
	
  </ul>
</div>
</div>
<div class="w3-content" style="max-width:100%; max-height:600px; position:relative">

<img class="mySlides" src="image/six.jpg" style="width:100%; ">
<img class="mySlides" src="image/two.jpg" style="width:100%; ">
<img class="mySlides" src="image/seven.jpg" style="width:100%;  ">

<a class="w3-btn-floating" style="position:absolute;top:45%;left:0" onclick="plusDivs(-1)"></a>
<a class="w3-btn-floating" style="position:absolute;top:45%;right:0" onclick="plusDivs(1)"></a>

</div>


<!------- SCRIPT CODE FOR SLIDESHOW ------>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
function myFunction() {
    document.getElementById("demo").classList.toggle("w3-show");
}

</script>
<div class="container-fluid">
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
<h2> Air Residence</h2>
<div class="container">
<img src="image/seven.jpg">
</div>

<div class="content">
<h3> Air Residence</h3>
<p><small>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget dui vel diam volutpat gravida. Vestibulum nibh quam, viverra quis velit efficitur, ornare facilisis ligula. Proin lorem quam, ullamcorper a risus a, vestibulum dapibus risus. Aliquam erat volutpat. Pellentesque quis venenatis dui. Fusce quis sagittis augue. Morbi ex leo, laoreet sed viverra ut, fermentum ac turpis. Aliquam venenatis urna nec euismod vestibulum. Suspendisse accumsan dui non viverra sodales.
</small>

</p><br>
<p><small>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget dui vel diam volutpat gravida. Vestibulum nibh quam, viverra quis velit efficitur, ornare facilisis ligula. Proin lorem quam, ullamcorper a risus a, vestibulum dapibus risus. Aliquam erat volutpat. Pellentesque quis venenatis dui. Fusce quis sagittis augue. Morbi ex leo, laoreet sed viverra ut, fermentum ac turpis. Aliquam venenatis urna nec euismod vestibulum. Suspendisse accumsan dui non viverra sodales.
</small>

</p><br><span><button><a href="reservation.php">Reservation</a></button></span>
</div>

</div>
	<div class="footer"> 
	<h6> INVESTWISE PROPERTIES INC. &copy; 2016 </h6>
		</div>

</div>
</body>
</html> 

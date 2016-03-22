
<!DOCTYPE html>
<html>
<head>
<meta http-equiv ="Content-Type" content="text/html charset=utf-8"/>
<title>InvestWise Properties</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link  type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
<link href="styley.css" type="text/css" rel="stylesheet">

<link rel="stylesheet" href="css/w3.css">
<script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>
	</head>
	<body>
	<div class="w3-top">
<ul class="w3-navbar w3-large w3-green w3-left-align">
  <li class="w3-hide-medium w3-hide-large w3-black w3-opennav w3-right">
    <a href="javascript:void(0);" onclick="myFunction()">Menu</a>
  </li>
  <li><a href="index.php">HOME</a></li>
  <li class="w3-hide-small"><a href="resale-properties.php">Acquired Assets</a> </li>
  <li class="w3-hide-small"><a href="about-us.php">About Us</a></li>
</ul>

<div id="demo" class="w3-hide w3-hide-large w3-hide-medium">
  <ul class="w3-navbar w3-left-align w3-large w3-green">
    <li><a href="resale-properties.php">Acquired Assets</a></li>
    <li><a href="about-us.php">About Us</a></li>

	
  </ul>
</div>

</div>
<script>
function myFunction() {
    document.getElementById("demo").classList.toggle("w3-show");
}
</script>

<div class="form">

<form action="trial.php" method="post">
<h3>
Type Place/Amount/Type of property:</h3>
<input type="text" name="search" placeholder="Your desired property..." />
<input type="submit" value="Search" />

</form>

</div>
	
	<!---
<form action="trial.php" method="post">
<input type="text" name="search" placeholder="Search for property..." />
<input type="submit" value=">>" />

</form>
-->
<div class="container-fluid" margin=0 align=center  >


<?php
$conn = mysql_connect("localhost","root","") or die("could not connect");
mysql_select_db("propertyList") or die("could not find db!");
$output = '';
$outimg = '';
//collect


	if (isset($_POST ['search'])){
		$searchq =$_POST ['search'];
		$search = preg_replace ("#[^0-9a-z]#i","", $searchq);
		$query = mysql_query("SELECT * FROM propertyDetails WHERE property_type LIKE '%$search%' OR property_amount LIKE '%$search%' OR property_location LIKE '%$search' " )or die("could not search");
		$count = mysql_num_rows($query);
		if ($count == 0){
			$output = 'There is no such results!';
			
		}else{
			while ($row = mysql_fetch_assoc($query)){
				$ptype = $row ['property_type'];
				$pamount = $row ['property_amount'];
				$plocation = $row ['property_location'];
				$id = $row ['property_id'];
				$image = $row ['property_image'];
				$fields_num = mysql_num_fields($query);
				$field = mysql_fetch_field($query);
 				$output .='<div>'.$id.'
				'.$ptype.' '.$plocation.'  '.$pamount.' </div>'; 
					
				/*	echo "<h1> Table: </h1><br> ";
					echo "<table border='1'> <tr>";
					for($i=0; $i<$fields_num;$i++){
						
						echo "<td> {$output} </td>";
					}
					echo "</tr>\n";
				//
				while ($row = mysql_fetch_field ($query)){
					echo "<tr>";
				//
				//
				foreach ($row as $cell)
					echo "<td> $cell </td>";
				echo "</tr> \n";
				}
				mysql_free_result($query);
				/*$output .='
				
				<div>
				<table  style="border-bottom:1px solid red;  padding:10px;" >
				
				<tr  style="border-bottom:1px solid red; border-top: 1px solid red; background-color: white; padding: 10px 0px;">
				<th colspan="1" >Property Type</th>
				<th>Property Location</th>
				<th>Property Amount</th>
				
				
				</thead>
				
				<tr>
				<td>'.$ptype.'</td>
				<td>'.$plocation.'</td>
				<td>'.$pamount.'</td>
				</tr>
				
				
				
				</table>
				</div>
				
				
				';
				
				
				
				
			/*	$outimg .='<div> '.$image.' </div>';
				header("content-type: image/jpeg");
					
					echo $image;
					print ($output);

*/


echo '<table class="table table-bordered">
			<thead>
			<tr>
			<th width="50px"> ID </th>
			<th width=""> Property Type </th>
			<th width=""> Property Location </th>
			<th width=""> Property Amount </th>
			
			</tr>
			</thead>
				<tbody>
				</tbody>';
			
				while ($userData = mysql_fetch_assoc($query)){
					echo'<form action="trial.php" method="POST">';
						echo '<tr>';
							echo '<td>'.$userData['property_id'].'</td>';
							echo '<td>'.$userData['property_type'].'</td>';
							echo '<td>'.$userData['property_location'].'</td>';
							echo '<td>'.$userData['property_amount'].'</td>';
						echo '</tr>';
					echo '</form>';
				}
				
				
				echo'</table>';
				

			}
			
		}
		
	}

	//mysql_result($output,$query);

print ($output);

?>

</div>

</body>
</html>
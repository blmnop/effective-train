<?php
mysql_connect ("localhost","root","RWcRqvLEDCv5JDrS") or die("could not connect");
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
<body>
<form action="getimage.php" method="GET">
<p> CLick the button the get an image.
<input type="submit" value="submit" name="submit">

</form>
</body>
</html>

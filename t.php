<!DOCTYPE html>
<html>
<body>
<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
mysql_connect ("localhost","root","RWcRqvLEDCv5JDrS") or die("could not connect");
mysql_select_db("propertyList") or die("could not find db!");


if ($db){
echo mysql_error();
}
$ptype = $_POST['propert_type'];
$plocation = $_POST['propert_location'];
$pamount = $_POST['propert_amount'];
$pphoto = addslashes( file_get_contents ($_FILES['$pphoto'] ['tmp_name']));
$image = getimagesize($_FILES['pphoto'] ['tmp_name']);
$imgtype = $image['mime'];



$q = "INSERT INTO propertyDetails values('','$ptype','$plocation','$pamount','$pphoto ['mime']')";

$r = mysql_query ("$q");
if ($r){
echo "information stored successfully";
}
else{
echo mysql_error("error!");
}

?>

</body>
</html>
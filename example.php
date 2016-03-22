<!DOCTYPE hmtl "-//W3C//DTD XHTML 1.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset = utf-8"/>
</head>
<body>
<form action="example.php" method"POST" enctype="multipart/form-data">
<input type="file" name="image">
<input type="submit" name="submit" value="upload">
</form>



<?php
if (isset ($_POST['submit'])) 
{
	mysql_connect("localhost", "root", "");
	mysql_select_db ("propertyList");
	
	$imageName = mysql_real_escape_string($_FILES["image"] ["name"]);$imageData = mysql_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
	$imageType = mysql_real_escape_string($_FILES["image"]["type"]);
	if (substr($imageType,0,5) == "image")
	{
	mysql_query("INSERT INTO 'propertyDetails' VALUES ('property_image')");
	echo "Image Uploaded";

}
	else {
		echo "Only Images are allowed.";
	}
	
}

?>
</body>
</html>

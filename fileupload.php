
<?php
$tmpname=$_FILES['Upload']['tmp_name'];
$size=$_FILES['Upload']['size'];
$name=$_FILES['Upload']['name'];
$type=$_FILES['Upload']['type'];
$path="../uploads/";
//Use that or .
$fpath=$path.$name;
if(!empty($name))
{
if($type=="image/jpeg" OR $type=="image/jpg" OR $type=="image/png" )
{
if(move_uploaded_file($tmpname,$path.$name))
{
	echo "File Uploaded";
	echo "<img src=$path$name>";
}
else
{
	echo "Something Wrong";
}
}
else
{
	echo "Unknown image type";
}
}
else
{
	echo "Please Choose a file";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>File Upload</title>
</head>
<body>
<form method="POST" name="ImgUpload" action="" enctype="multipart/form-data">
	<input type="file" name="Upload"/>
	<input type="submit" name="submit" value="Upload" />
</form>
</body>
</html>
<!DOCTYPE HTML PUBLIC “-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE> Image Upload to BLOB field </TITLE>
</HEAD>
 
<BODY>
<FORM NAME="f1" METHOD="POST" ACTION="get_upload_img_blob.php" ENCTYPE="multipart/form-data">
File:
<input type="file" name="image"/>
<input type="submit" name="submit" value="Upload"/> 

</FORM>

<?php
//connect to database
include_once('Database_Connect.php');

if(!isset($_FILES['image']))
echo "select image";
else
{
$file = $_FILES['image']['tmp_name'];
 $image =  mysql_real_escape_string(file_get_contents($_FILES['image']['tmp_name']));
 $image_name =  mysql_real_escape_string($_FILES['image']['name']);
 $image_size = getimagesize($_FILES['image']['tmp_name']);
 
 if($image_size == FALSE)
 echo "Not an image";
 else
 {
 $x = "INSERT INTO image_blob VALUES ('','$image_name','$image')";
 $y = mysql_query($x);
 if( !$y)
 echo "problem uploading";
 else
 {
 echo $lastid = mysql_insert_id();
 echo 'Image uploaded.<p /> hhhh </p><img src="get_img_blob.php?id='.$lastid.'" />';
 }
 }
}


?>
</BODY>
</HTML>
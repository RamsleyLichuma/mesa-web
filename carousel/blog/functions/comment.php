<?php

require_once "../admin/functions/db.php";

$blogid = $_POST['blogid'];
$name = $_POST['name'];
$comment = $_POST['comment'];


if(isset($_POST['submit']))
{

    $blogid = $_POST['blogid'];
    $name = $_POST['name'];
    $comment = $_POST['comment'];
if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}
else
{
$imgnewfile=md5($imgfile).$extension;
move_uploaded_file($_FILES["postimage"]["tmp_name"],"postimages/".$imgnewfile);

$status=1;
$query=mysqli_query($con,"insert into comments(name, comment, blogid) values('$name, $comment, $blogid)");
if($query)
{
$msg="Post successfully added ";
}
else{
$error="Something went wrong . Please try again.";    
} 

}
}







?>
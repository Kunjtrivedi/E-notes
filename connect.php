<?php
$conn = mysqli_connect('localhost','root','','e-notes');
if (isset($_POST['save'])) {
//$rating = $_POST['slider'];
$rating =  $_POST['slider'];
$comment = $_POST['comment1'];
$fileId = $_POST['fileId'];
$fileName = $_POST['fileName'];
$userid = $_POST['name'];

$sql ="INSERT INTO documentreview (Points,Comments,UserID,ID,FileName) VALUES ($rating,'$comment','$userid',$fileId,'$fileName')";
$result = mysqli_query($conn, $sql);
if(!$result)
{
	echo $rating;
	echo $comment;
	echo $fileId;
	echo $fileName;
	echo "THE COMMENT IS NOT STORED";
}
else{
	header("Location: http://localhost/sem%20project/homepage.html");
}
}
else
{
  echo "ERROR IN UPLOADING !!";
}
?>

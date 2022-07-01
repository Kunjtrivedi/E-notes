<?php
$link = mysqli_connect('localhost','root','','e-notes');
$Username=$_POST['Username'];
$password=$_POST['password'];

$sql = "INSERT INTO usermaster ( UserID, Username, Password) VALUES (0, '$Username', '$password')";

$result = mysqli_query($link , $sql);

if ($result)
{
// PHP program to pop an alert
// message box on the screen


// Display the alert box
echo '<script>alert("Welcome to Geeks for Geeks")</script>';
header("Location: http://localhost/sem%20project/login.html");

}

?>
     
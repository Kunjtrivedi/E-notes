//<?php 
//$db=mysqli_connect("localhost","root","","e-notes"); 
//$username=mysqli_real_escape_string($db,$_POST['Username']); 
//$password=$_POST['password'];  
//$sql="SELECT * FROM usermaster WHERE Username='$username' AND Password='$password'";  
//$query=mysqli_query($db,$sql); 
//if($query){ 
//successful login  
//	header("Location: http://localhost/sem%20project/homepage.html");
//} else{ 
	// unsuccessful login 
//	echo "PLEASE ENTER A VALID EMAIL OR PASSWORD!!!1";
//}  
$db =mysqli_connect("localhost","root","","e-notes") ;  
 
# Get username and password from the login form  
$username = $_POST['Username']; 
$password = $_POST['password']; 
 
$sql = "SELECT Username, password FROM usermaster WHERE Username = ? and password = ?"; 
 
$query = $db->prepare( $sql ); 
$query->execute( [ $Username, $password ] );  
  
if ( $query ) 
{  
    # Do stuff  
    foreach( $query as $user )  
    { 
        echo "Sup, {$user['Username']}";  
    }  
} 
?>  


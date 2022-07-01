<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e-notes";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, SubjectName="OOP(JAVA)", Filename FROM usersubjectdocument";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - SubjectName: " . $row["SubjectName"]. " " . $row["Filename"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
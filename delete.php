<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user6";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



// sql to delete a record
$sql = "DELETE FROM user6table WHERE id='". $_GET["id"] ."'";

if ($conn->query($sql) === TRUE) {
    header("Location: font.php");
  } else {
    echo "Error deleting record: " . $conn->error;
  }
  
  $conn->close();

  ?>


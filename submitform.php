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
$sql = "SELECT * FROM user6table";
$result = $conn->query($sql);


// prepare and bind
$sql = $conn->prepare("INSERT INTO user6table (fullname, fathername, dob, cnic, address) VALUES (?, ?, ?, ?, ?)");
$sql->bind_param("sssss", $_GET["fname"], $_GET["faname"], $_GET["date1"], $_GET["cnic1"], $_GET["address1"]);



$sql->execute();

$conn->close();
?>
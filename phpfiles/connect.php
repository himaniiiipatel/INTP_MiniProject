<?php
$servername = "localhost";
$username = "id15333090_fitfeelz1";
$password = "iR<0B_wmIf@ervtb";
$dbname = "id15333090_fitfeelz";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//echo "Connecting to db...<br>";

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
   // echo "Connected successfully<br>";
}

?>
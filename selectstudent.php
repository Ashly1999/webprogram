<?php
$servername = "localhost";
$username = "20mca016";
$password = "2404";
$dbname = "20mca016";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, name, branch, mark FROM student";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " Branch: " . $row[branch]. " Mark: " . $row["mark"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
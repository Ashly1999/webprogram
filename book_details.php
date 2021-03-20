<?php
$servername = "localhost";
$username = "20mca016";
$password = "2404";
$dbname = "20mca016";
$Title =$_POST['txt1'];
$Author =$_POST['txt2'];
$Edition = $_POST['txt3'];
$Publisher = $_POST['txt4'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO `book` (`acc_no`, `title`,`author` ,`edition`,`publisher`) VALUES (NULL, '$Title', '$Author','$Edition','$Publisher');";
 

if (mysqli_query($conn, $sql)) {

 echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 


<html>
<head>
<title>display data in table format</title>
</head>
<body><h2>STUDENT DETAILS</h2>
<?php
$servername = "localhost";
$username = "20mca016";
$password = "2404";
$dbname = "20mca016";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM `book`";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  echo "<table border='1'>
<tr>
<th>AccessionNo</th>
<th>Title</th>
<th>Author</th>
<th>Edition</th>
<th>Publisher</th>
</tr>";
  while($row = mysqli_fetch_assoc($result)) {

 echo "<tr>";
 echo "<td>".$row['acc_no']."</td>";
 echo "<td>".$row['title']."</td>";
 echo "<td>".$row['author']."</td>";
 echo "<td>".$row['edition']."</td>";
 echo "<td>".$row['publisher']."</td>";
 echo "</tr>";
  }

} else {
  echo "0 results";
}
echo "</table>";
mysqli_close($conn);
?>
</body>
</html>
<?php
$con=mysqli_connect("localhost","20mca016","2404","20mca016");
$id=$_GET["id"];
if($con)
{

$qry1="delete from student_name where id='$id'";
if(mysqli_query($con, $qry1))
{
echo "Data Removed<br>";
} 
}
?>

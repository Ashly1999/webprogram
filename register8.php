<head>
<title>insert page</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "20mca016";
$password = "2404";
$dbname = "20mca016";
$conn = mysqli_connect($servername ,$username ,$password ,$dbname);
if(!$conn)
{
 die("Connection failed:" . mysqli_connect_error());
}

 $name = $_REQUEST['name'];
 $rollno = $_REQUEST['rollno'];
 $gender =$_REQUEST['gender'];
 $address = $_REQUEST['address'];

 $sql = "INSERT INTO info(name,rollno,gender,address)  VALUES ('$name',  
            '$rollno','$gender','$address')";
 
 if(mysqli_query($conn, $sql)){ 
            
            echo ("\n$name\n $rollno\n "
                   . "$gender\n $address\n"); 
        } else{ 
            echo "ERROR: Sorry $sql. " 
                . mysqli_error($conn); 
        } 
          
        mysqli_close($conn); 
        ?> 
  
</body> 
  
</html> 
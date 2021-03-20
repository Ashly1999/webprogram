<?php

 $servername = "localhost";
$username = "20mca016";
$password = "2404";
$dbname = "20mca016";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

  $output = '';

  if(isset($_POST['search'])) {
    $search = $_POST['search'];
    $search = preg_replace("#[^0-9a-z]i#","", $search);

    $query = mysqli_query("SELECT * FROM book WHERE town LIKE '%$search%'") or die ("Could not search");
    $count = mysqli_num_rows($query);
    
    if($count == 0){
      $output = "There was no search results!";

    }else{

      while ($row = mysqli_fetch_array($query)) {

        $ac_no = $row ['acc_no'];
        $title = $row ['title'];
        $author = $row ['author'];
        $edition= $row ['edition'];
$publisher= $row ['publisher'];

        $output .='<div> '.$ac_no.''.$title.''.$author.''.$edition.'</div>';
}
}
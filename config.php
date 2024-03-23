<?php 
$servername = 'localhost:4306';
$username = 'root';
$password = '';
$dbname = 'webuildadmin';
$conn = mysqli_connect($servername, $username, $password,$dbname);


if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else{
    echo "Connected successfully";
}

// $result = mysqli_query($conn , $sql);
// if 
?>
<?php
$servername = 'localhost:4306';
$username = 'root';
$password = '';
$dbname = 'orderdb';
$conn = mysqli_connect($servername, $username, $password,$dbname);
$_SESSION['delete'] = ' ';// to run if statement which is in main.php and to redirect
$id = $_GET['id'];
$sql = "DELETE FROM orderdetails WHERE id = '$id'";
mysqli_query($conn,$sql);
echo "
<script>
window.location.href='main.php'

</script>
"   

?>
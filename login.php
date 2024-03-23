<?php 
session_start();
$email=$_POST['email'];
$Password=$_POST['password'];
$Con= mysqli_connect('localhost:4306','root','', 'logindetails');
$result =mysqli_query($Con,"SELECT * FROM `logindb` WHERE  email='$email'  AND  password='$Password'");
if(mysqli_num_rows($result)){
    $_SESSION['user']=explode('@',$email)[0];
    
    echo"
    <script>
    window.location.href='index.php';
    alert('login successfully');
    </script>
    ";
}
else{
    echo"
    <script>
    alert('incorrect email/useranme/password');
    window.location.href='index.php';
    </script>
    ";
}

?>
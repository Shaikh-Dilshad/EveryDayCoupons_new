<?php
$Con= mysqli_connect('localhost:4306','root','', 'logindetails');
$email=$_POST['email'];
$phone_num=$_POST['phone_num'];
$password=$_POST['password'];
if(isset($_POST['submit'])){
}


            $dup_email = mysqli_query($Con,"SELECT * FROM `logindb` WHERE email='$email'");
            $dup_number = mysqli_query($Con,"SELECT * FROM `logindb` WHERE phone_num ='$phone_num'");
            if(mysqli_num_rows($dup_email))
            {
                echo"
                <script>
                alert('this email is already taken');
                window.location.href='index.php';
                </script>
                ";
            }
            if(mysqli_num_rows($dup_number))
            {
                echo"
                <script>
                alert('this number is already taken');
                window.location.href='index.php';
                </script>
                ";
            }
            
            else{
                
                mysqli_query($Con,"INSERT INTO `logindb`(`email`, `phone_num`, `password`) VALUES ('$email','$phone_num','$password')");
                 echo"
                 <script>
                 alert('Register successfully');
                 window.location.href='index.php';
                
                 </script>
                 ";
            }
?>
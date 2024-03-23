<?php 
session_start();
$servername = 'localhost:3306';
$username = 'root';
$password = '';
$dbname = 'coupondata';
$conn = mysqli_connect($servername, $username, $password,$dbname);


$firstname=$_POST['name'];
$lastname=$_POST['lastname'];
$number=$_POST['mobile'];
$email=$_POST['email'];
$address=$_POST['address'];
$city=$_POST['city'];
$region=$_POST['region']; 
$zipcode=$_POST['zipcode'];
$item_name = $_POST['coupon_name'];
$price=$_POST['price'];
$total=$_POST['total_price'];

$sql = "INSERT INTO `couponorderdb`(`name`,`lastname`,`mobile`,`email`,`address`,`city`,`region`,`zipcode`,`zipcode`,`coupon_name`,`price`,`total_price`) VALUES('$firstname','$lastname','$number','$email','$address','$city','$region','$zipcode','$item_name','$price','$total')";

mysqli_query($conn , $sql);

require("./instamojo-php-0.4/instamojo-php-0.4/src/Instamojo.php");

$api = new Instamojo\Instamojo('test_cd370730df03b2d8fb402b74fbc', 'test_aa5a72168ba9f74104a785c568a','https://test.instamojo.com/api/1.1/');


// creating payment request
try {
  $response = $api->paymentRequestCreate(array(
      "purpose" => $item_name,
      'phone' => $number,
      "amount" => $price,
      "send_email" => true,
      "email" => "$email",
      "redirect_url" => "https://localhost/a%20we%20build%20project/admin/index.php"
      ));
    $url = $response['longurl'];
    header("location:$url");
    $_SESSION['cart'] = array();
}
catch (Exception $e) {
  print('Error: ' . $e->getMessage());
}

?>
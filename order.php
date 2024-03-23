<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/818fd82820.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="media.css">
    <link rel="stylesheet" href="style.css">
    <title>WE BUILD</title>
</head>

<body>

<div class="container">
    <div class="billingdetails">
  <form action="payment.php" method='post' class='fororderform'>
    <div class="billing">
        <h2>Billing Details</h2>
        <br>
        <div class="customerinfo customername">
            <div class="firstname">
            <p>First Name   <span>*</span> </p>
            <input type="text"  placeholder="Enter First Name" name="name">
            </div>
            <div class="lastname">
           <p>Last name  <span>*</span> </p> 
           <input type="text"  placeholder="Enter First Name" name="lastname">
           </div>

        </div>
        <div class="customerinfo">
            <p>COupon Name</p>
            <input type="text"  name="companyname">

        </div>
        <div class="customerinfo">
            <p>mobile number</p>
            <input type="text"  name="mobile">

        </div>
        <div class="customerinfo">
            <p>Email</p>
            <input type="text"  name="email">

        </div>
        <div class="customerinfo countryselect">
            <p>Country  <span>*</span> </p>
             <Select name='country'>
                <option value="india">india</option>
             </Select>

        </div>
        <div class="customerinfo">
            <p>Address  <span>*</span> </p>
            <input type="text"  placeholder="Enter First Name" name="address">`

        </div>
        <div class="customerinfo citydetails">
        <div class="city">
            <p>City  <span>*</span> </p>
            <input type="text"  name="city">
         </div>

        <div class="state">
            <p>State/Region  <span>*</span> </p>
            <select name="region" id="">
                <option value="">Maharastra</option>
            </select>
        </div>

        <div class="zipcode">
            <p>Zip/Postal Code  <span>*</span> </p>
            <input type="text"  placeholder="Enter Area Code" name="zipcode">
         </div>
        </div>
        <div >
            <button class='submitbtn' type='submit'>Submit and Continue</button>
        </div>        
    </div>
    <div class="totalprice ordersummary">
        <?php
    $item_name = '';
    $price = ' ';
    
    $total = 0;
    
    foreach($_SESSION['cart'] as $key => $value)
    {
        
        $total = $total + $value['price'];
        $item_name = $value['item_name'];
        $price = $value['price'];
        
        
        $sr=$key+1;
        echo " 
        <input type='hidden' name='coupon_name' value='$value[item_name]'>
        <input type='hidden' value='$value[price]' name='price'>
        <div class='toflex'>
        <p>$value[item_name]</p>
        <p>$value[price]</p>
        </div>
        
        
        ";
    }
    
    
    ?>

<div class="totalpay">
    <h2>Total:</h2>
    <input type='hidden' name='total_price' value='<?php $total ?>'>
    <h2><?= $total ?></h2>
 
    </div>
    </div>


</form>


 </div>
   

</div>


</body>
</html>
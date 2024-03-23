<?php
session_start();
// session_destroy(); to clear the session
if($_SERVER["REQUEST_METHOD"]=="POST")  
{
    if(isset($_POST["Add_to_cart"]))
    {
     if(isset($_SESSION["cart"]))   // if season has some value it will run if not then else value will run which set the seson//seaspn is like localstorage which store the data permentaly
     {
        $anyitems = array_column($_SESSION['cart'],'item_name'); //array column is a function which take column from session column name item_name 
       if(in_array($_POST['item_name'],$anyitems)){   //if condition is if inarray posted item name jo hai osme anyitem aya to niche ka code chalao
        echo "<script>
        alert('already added')
        window.location.href = 'ecommerce.php'
        </script>";
       }
       else{
        $count = count($_SESSION['cart']);
       $_SESSION['cart'][$count]=array('item_name'=>$_POST['item_name'],'item_img'=>$_POST['item_img'],'price'=>$_POST['price'],'product_id'=>$_POST['product_id'],'Quantity'=>1);
       echo "<script>
       alert('Item added')
       window.location.href = 'ecommerce.php'
       </script>";
    }

     }
     else
     {
        // -----thi is key----//        // -----thi is value----//
            //  |                            //  |
            //  |                            //  |
        $_SESSION['cart'][0]=array('item_name'=>$_POST['item_name'],'item_img'=>$_POST['item_img'],'price'=>$_POST['price'],'product_id'=>$_POST['product_id'],'Quantity'=>1); //here we arre setting the season name is cart with values
        echo "<script>
        alert('Item added')
        window.location.href = 'ecommerce.php'
        </script>";
       }
     }
      if(isset($_POST['remove_item']))
      {
        foreach($_SESSION['cart'] as $key => $value)
        {
         if($value['item_name']==$_POST['item_name'])
         {
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart']==array_values($_SESSION['cart']);
            echo "<script>
            alert('Item is removed')
            window.location.href = 'cart.php'
            </script>";
         }
        }
      }
      if (isset($_POST["view_details"])) {
        $_SESSION['details'][0]=array('item_name'=>$_POST['item_name'],'item_img'=>$_POST['item_img'],'price'=>$_POST['price'],'Quantity'=>1); //here we arre setting the season name with values
      //   print_r($_SESSION['details']);
        echo "<script>
        
        window.location.href = 'sproduct.php'
        </script>";
      }
    
    }

?>
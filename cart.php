


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/818fd82820.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="media.css">
    <link rel="stylesheet" href="style.css">
    <title>WE BUILD</title>
</head>

<body>

    <?php include 'nav.php' ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>MY CART</h1>
            </div>
            <div class="col-lg-8">
                <table class="table">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">img</th>

                            <th scope="col">First</th>
                            <th scope="col">Price</th>
                          

                            <th scope="col">remove</th>


                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
    $total = 0;
    
    if(isset($_SESSION['cart']))
    {
    foreach($_SESSION['cart'] as $key => $value)
    {
     $total = $total + $value['price'];

     $sr=$key+1;
     echo " 
        <tr>
        <td>$sr</td>
        <td style='width:100px'><div class='item_img'> <img style='width:100%' src=$value[item_img]></div></td>
        <td>$value[item_name]</td>
        <td>$value[price]</td>
        <td>
        <form action='manage_cart.php' method='POST'>
        <button name='remove_item'class='btn btn-sm btn-outline-danger'>REMOVE</button>
        <input type='hidden' name='item_name' value='$value[item_name]'>
        </form>
        </td>
        <td>
        
        </td>
         </tr>";
    }
    }
    ?>


                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <div class="border rounded bg-light p-4">
                    <h3>Total:</h3>
                    <h5 class="text-right"><?php echo $total ?></h5>
                    <br>
                    <a href="order.php?id=<?= implode(',', array_column($_SESSION['cart'], 'product_id'))  ?>"> <button
                            class='btn btn-md btn-danger'> Make Purchase</button></a>
                </div>
                <!-- array_column($_SESSION['cart'], 'product_id')) means session cart jo hai oske andar jo product_id ka column hai -->
                <!-- implode(separetes,array) -->
                <!-- The implode() function returns a string from the elements of an array. -->
            </div>

        </div>
    </div>
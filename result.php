<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/818fd82820.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="media.css">
    <link rel="stylesheet" href="style.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <title>WE BUILD</title>
</head>

<body>

    <?php include 'nav.php' ?>
    <div class="container2">
    <section class="section3" >
        <div class="content">

            <?php
include 'insert.php';

$str = $_POST['str'];
$sql = "SELECT product_name, product_image, product_price
        FROM (
            SELECT product_name, product_image, product_price FROM ecommerce WHERE MATCH (product_name) against ('$str')
            UNION
            SELECT product_name, product_image, product_price FROM education WHERE MATCH (product_name) against ('$str')
            UNION
            SELECT product_name, product_image, product_price FROM bestsellerdb WHERE MATCH (product_name) against ('$str')
            UNION
            SELECT product_name, product_image, product_price FROM productdata WHERE MATCH (product_name) against ('$str')
        ) AS t1
        GROUP BY product_name";


$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {
    // Do something with each row

?>

            <div class="content1 f1">
                <form action="manage_cart.php" class='clickerchange' method="POST">
                    <div class="subf1">
                        <div class="imgg">
                            <a href=""><i class="fa-solid fa-heart"> </i></a>

                            <img src="<?= $row['product_image'] ?>" alt="" class="img12" data-product-id="product1">
                        </div>
                        <div class="details">
                            <h4><?= $row['product_name'] ?></h4>
                            <p>by DilshadThemes in Technology</p>
                            <h3><?= $row['product_price'] ?></h3>
                            <div class="rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>

                            </div>
                        </div>
                    </div>
                    <div class="corner">

                        <button class="checks" type="submit" name="Add_to_cart"> Add to Card</button>
                        <button class="checks1" type="submit" name="view_details">view details</button>
                        <input type="hidden" name="item_name" value="<?= $row['product_name'] ?>">
                        <input type="hidden" name="item_img" value="<?= $row['product_image'] ?>">
                        <input type="hidden" name="price" value="<?= $row['product_price'] ?>">
                     
                    </div>
                </form>
            </div>







            <?php        } ?>

        </div>
        </section>

    </div>
    <div class="newsletter section-p1 section-m1 ">
                <div class="newtext">
                    <h4>Sign up For Updates</h4>
                    <p>Get E-mail about our latest website and <span>special offer</span></p>
                </div>
                <div class="form">
                    <input type="text" placeholder="Your Email address">
                    <button>Sign up</button>
                </div>
            </div>
            <footer class="section-p1 footer">
                <div class="col">
                    <img src="/img/logo.webp" alt="">
                    <h5>Contact</h5>
                    <p><span>Address:</span> New Gautam nagar govandi 400043</p>
                    <p><span>phone:</span> 9372624008</p>
                    <p><span>Hours:</span> 10.00AM - 6.00PM . Mon-Sat</p>

                    <h5 class="bbb">Follow Us</h5>

                    <div class="logo">
                        <i class="fa fa-youtube-play"></i>
                        <i class="fa fa-facebook"></i>
                        <i class="fa fa-twitter"></i>
                        <i class="fa fa-pinterest-p"></i>
                        <i class="fa fa-instagram"></i>
                    </div>

                </div>
                <div class="col col2">
                    <h5>About</h5>
                    <a href="#">About Us</a>
                    <a href="#">Delivery information</a>
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms & conditon</a>
                    <a href="#">Contact Us</a>
                </div>
                <div class="col col2">
                    <h5>My Account</h5>
                    <a href="#">Sign in</a>
                    <a href="#">View Cart</a>
                    <a href="#">My Wishlist</a>
                    <a href="#">Track My Order</a>
                    <a href="#">Help</a>
                </div>

            </footer>
        </div>
    <script src="script.js"></script>

</body>

</html>
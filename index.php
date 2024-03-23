<?php
// -------------------forpayment id------------------

    ?>

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

    <?php include 'nav.php'  ?>                    
    <div class="">
        <div class="container3">
            <section id="banner">
                <div class="container-fluid new88 bg-dark">
                    <div class="row new99">
                        <div class="col-md-6 col-6  search">

                            <h1 data-text="WELCOME TO WE BUILD">WELCOME TO WE BUILD</h1>
                            <h2>Explorer the best website for your purpose</h2>
                            <h3>Millions of designers and agencies around the world showcase their portfolio work on
                                WEBUILD  - the
                                home
                                to the world’s best design and creative professionals</h3>
                            <form action="result.php" class="searching" method='post'>
                                <button><i class="fa-solid fa-magnifying-glass"></i></button>
                                <input type="text" name='str' id="search1" placeholder="Search... ">
                                <button class='searchforresult' type='submit' name='search'>Search</button>
                            </form>

                        </div>
                        <div class="col-md-6 col-6 ms-auto img1">
                            <img src="images/home2.png" alt="">
                        </div>

                    </div>

                </div>



            </section>
            <?php 
                    $servername = 'localhost:3306';
                    $username = 'root';
                    $password = '';
                    $dbname = 'coupondata';
                    $conn = mysqli_connect($servername, $username, $password,$dbname);
            
                     $sql = "SELECT * FROM coupons";
                     $result=mysqli_query($conn,$sql);
                    ?>
            <section class="section3" >
                <h2>Recently Added</h2>

                <div class="heading">
                    </div>
                <div class="content">
                    <?php
                    while ($row=mysqli_fetch_array($result)){
                    
                    ?>
                    <div class="content1 f1">
                        <form action="manage_cart.php" class='clickerchange' method="POST">
                            <div class="subf1">
                                <div class="imgg">
                                    <a href=""><i class="fa-solid fa-heart"> </i></a>

                                    <img src="<?= $row['coupon_image'] ?>" alt="" class="img12"
                                        data-product-id="product1">
                                </div>
                                <div class="details">
                                    <h4><?= $row['coupon_name'] ?></h4>
                                    <p>by DilshadThemes in Technology</p>
                                    <h3><?= $row['coupon_price'] ?></h3>
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
                                <input type="hidden" name="item_name" value="<?= $row['coupon_name'] ?>">
                                <input type="hidden" name="item_img" value="<?= $row['coupon_image'] ?>">
                                <input type="hidden" name="price" value="<?= $row['coupon_price'] ?>">
                                <input type="hidden" name="product_id" value="<?= $row['id'] ?>">

                            </div>
                        </form>
                    </div>
                    <?php } ?>


                </div>

            </section>
            <section class="section4">
                <div class="content">
                    <div class="another">
                        <h1>BestSellers of website templates and themes</h1>
                        <h4>Get better projects faster with unlimited service of WordPress Themes, database, video
                            templates
                            &
                            more. Millions of creative assets all for one low cost.</h4>
                        <button>Go to BestSellers</button>
                    </div>
                    <?php
                    
                    $sql = "SELECT * FROM bestsellerdb";
                    $result=mysqli_query($conn,$sql);
                    while ($row=mysqli_fetch_array($result)){
                    
                    ?>
                    <div class="content1 f1">
                        <form action="manage_cart.php" class='clickerchange' method="POST">
                            <div class="subf1">
                                <div class="imgg">
                                    <a href=""><i class="fa-solid fa-heart"> </i></a>

                                    <img src="<?= $row['coupon_image'] ?>" alt="" class="img12"
                                        data-product-id="product1">
                                </div>
                                <div class="details">
                                    <h4><?= $row['coupon_name'] ?></h4>
                                    <p>by DilshadThemes in Technology</p>
                                    <h3><?= $row['coupon_price'] ?></h3>
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
                                <input type="hidden" name="item_name" value="<?= $row['coupon_name'] ?>">
                                <input type="hidden" name="item_img" value="<?= $row['coupon_image'] ?>">
                                <input type="hidden" name="price" value="<?= $row['coupon_price'] ?>">
                            </div>
                        </form>
                    </div>
                    <?php } ?>

                </div>
            </section>
            <section class="section5 section3">
                <div class="heading">
                    <h2>Under 500RS only</h2>
                </div>

                <div class="content">

                    <?php
                    
                    $sql = "SELECT * FROM under500db";
                    $result=mysqli_query($conn,$sql);
                    while ($row=mysqli_fetch_array($result)){
                    
                    ?>
                    <div class="content1 f1">
                        <form action="manage_cart.php" class='clickerchange' method="POST">
                            <div class="subf1">
                                <div class="imgg">
                                    <a href=""><i class="fa-solid fa-heart"> </i></a>

                                    <img src="<?= $row['coupon_image'] ?>" alt="" class="img12"
                                        data-product-id="product1">
                                </div>
                                <div class="details">
                                    <h4><?= $row['product_name'] ?></h4>
                                    <p>by DilshadThemes in Technology</p>
                                    <h3><?= $row['coupon_price'] ?></h3>
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
                                <input type="hidden" name="item_img" value="<?= $row['coupon_image'] ?>">
                                <input type="hidden" name="price" value="<?= $row['coupon_price'] ?>">
                            </div>
                        </form>
                    </div>
                    <?php } ?>


                </div>

            </section>
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
    </div>
    <script src="script.js"></script>
 
</body>

</html>
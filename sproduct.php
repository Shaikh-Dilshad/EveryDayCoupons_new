

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop/new clothes</title>
    <script src="https://kit.fontawesome.com/818fd82820.js" crossorigin="anonymous"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="media.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container1">
        <section>
        <?php include('nav.php') ?>
        </section>

        <section class="section-p2 sec1">
            <?php 
                if(isset($_SESSION['details']))
                {
                    foreach($_SESSION['details'] as $key => $value)
                    {
                        
                        echo "
                <div class='sec-img'>
                        <div>

                        <img src= $value[item_img] alt='' id='mainimg' class='mainImg'>
                    </div>
                    <div class='getcolumn'>

                        <div class='sec3'>
                            <div class='subfirst'>
                                <h3>$value[item_name]</h3>
                                <h3>$value[price]</h3>
                                <button class='btn1 btn2'>Add To Cart</button>
                            </div>
                            <div class='subsecond'>
                                <h3>product Details</h3>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor minima accusantium
                                    cupiditate
                                    soluta.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
        
                    
                ";
                }
            }
                ?>
                
                

        </section>
        <hr>
        <section class="singlecontentpage">
            <div class="ullu content ">
                <div class="content1 f1">
                <form action="manage_cart.php" class='clickerchange' method="POST">

                    <div class="subf1">
                        <div class="imgg">
                            <a href=''><i class="fa-solid fa-heart"> </i></a>

                            <img src="images/img1.webp" alt=''>
                        </div>
                        <div class="details">
                            <h4>Devon | Digital Product Design Agency El...</h4>
                            <p>by DilshadThemes in Technology</p>
                            <h3>500rs</h3>
                            <div class="rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            <div class="corner">

                                <button class="checks" type="submit" name="Add_to_cart"> Add to Card</button>
                                <button class="checks1" type="submit" name="view_details">view details</button>
                                <input type="hidden" name="item_name" value="Cowboy Website - App Page">
                                <input type="hidden" name="item_img" value="images/img1.webp">


                                
                                <input type="hidden" name="price" value="500">
                            </div>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            <div class="content1 f1">
                <form action="manage_cart.php" class='clickerchange' method="POST">
                  <div class="subf1">
                        <div class="imgg">
                            <a href=''><i class="fa-solid fa-heart"></i></a>

                            <img src="images/img2.webp" alt=''>
                        </div>
                        <div class="details">
                            <h4>Devon | Digital Product Design Agency El...</h4>
                            <p>by DilshadThemes in Technology</p>
                            <h3>500rs</h3>
                            <div class="rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                             <div class="corner">

                                <button class="checks" type="submit" name="Add_to_cart"> Add to Card</button>
                                <button class="checks1" type="submit" name="view_details">view details</button>
                                <input type="hidden" name="item_name" value="Sunbelt Solomon - Web Design - Branding">
                                <input type="hidden" name="item_img" value="images/img2.webp">
                                <input type="hidden" name="price" value="500">

                            </div>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
                <div class="content1 f1">
                <form action="manage_cart.php" class='clickerchange' method="POST">
                
                <div class="subf1">
                        <div class="imgg">
                            <a href=''><i class="fa-solid fa-heart"></i></a>

                            <img src="images/img3.webp" alt=''>
                        </div>
                        <div class="details">
                            <h4>Devon | Digital Product Design Agency El...</h4>
                            <p>by DilshadThemes in Technology</p>
                            <h3>500rs</h3>
                            <div class="rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            <div class="corner">
                            <button class="checks" type="submit" name="Add_to_cart"> Add to Card</button>
                                <button class="checks1" type="submit" name="view_details">view details</button>
                                <input type="hidden" name="item_name" value="Sunbelt Solomon 2 - Web Design - Branding">
                                <input type="hidden" name="item_img" value="images/img3.webp">
                                <input type="hidden" name="price" value="500">


                            </div>
                            </div>
                        </div>
                    </div>
                 </form>
                </div>
                <div class="content1 f1">
                <form action="manage_cart.php" class='clickerchange' method="POST">                 
                <div class="subf1">
                        <div class="imgg">
                            <a href=''><i class="fa-solid fa-heart"></i></a>

                            <img src="images/img4.webp" alt=''>
                        </div>
                        <div class="details">
                            <h4>Devon | Digital Product Design Agency El...</h4>
                            <p>by DilshadThemes in Technology</p>
                            <h3>500rs</h3>
                            <div class="rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            <div class="corner">

                                <button class="checks" type="submit" name="Add_to_cart"> Add to Card</button>
                                <button class="checks1" type="submit" name="view_details">view details</button>
                                <input type="hidden" name="item_name" value="Digital Transform website">
                                <input type="hidden" name="item_img" value="images/img4.webp">
                                <input type="hidden" name="price" value="500">

                            </div>
                            </div>
                        </div>
                    </div>
               </form>
                </div>
            </div>
        </section>

        <footer class="section-p1 footer">
            <div class="col">
                <img src="/img/logo.webimg1.webp" alt=''>
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
    <script src="script.js">


    </script>
</body>

</html>
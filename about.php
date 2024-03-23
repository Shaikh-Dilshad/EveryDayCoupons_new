<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="media.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://kit.fontawesome.com/818fd82820.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

    <title>About WE BUILD</title>
</head>
<style>
body {
    background: #e6e6e6;
    ;
}

.container {
    position: relative;

}

.aboutwebuild {
    margin-top: 70px;
    width: 47%;
}


.headerwebuild {
    margin-top: 20px;

    text-align: center
}

.admin1 {
    width: 47%;
    display: flex;

}

.makers {
    display: flex;
    justify-content: space-between;
    margin-top: 90px;

}

.makers img {
    width: 200px;

}

.secondmaker {
    margin-top: 70px;
    display: flex;
    width: 47%;


}

.adminimg p {
    text-align: center;
}

.secondmaker img {
    width: 200px;
    margin-left: 10px;
}

.forright {
    position: absolute;
    right: 0;
}

.fortop {
    margin-top: 360px
}

@media (max-width:810px) and (min-width:300px) {
    .aboutwebuild {
        width: 100%;
    }

    .forright {
        padding: 10px;

    }

    .makers {
        display: block;
    }

    .admin1 {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 111px;
    }
    .secondmaker {
  margin-top: 70px;
  display: flex;
  
  flex-direction: column;
  width: 100%;
  align-items: center;
}
}

</style>

<body>

    <?php include 'nav.php' ?>
    <div class="container">
        <h1 class='headerwebuild'>Welcome To We Build</h1>
        <div class="aboutwebuild" data-aos="fade-up">
            <h1>What is We build ?</h1>
            <p>A we build is a website maker platform where we are make website for our clients according to there
                perspective we provide multiple templates in our website for clients if they are interested in any
                website they can select them and fill the form our team will contact him for further assisment like how
                they want there website what heading they want what web name they want according client perspective we
                build the website with reasonable price </p>
        </div>
        <hr>

        <div class="aboutwebuild forright" data-aos="fade-up">
            <h1>Our Vision ?</h1>
            <p>We build platform vision is achieve multiple achievements and get in ,in industry our vision is to makes
                websites to affortable for evveryone with tis they can grow there business </p>
        </div>




        <div class="aboutwebuild fortop" data-aos="fade-up">
            <h1>When did We build establish ?</h1>
            <p>A we build is establish in 2023 by the students of NG Acharya Collage by 2 students
            <ul>
                <li>
                    dilshad shaikh
                </li>
                <li>
                    Faizan shaikh
                </li>
            </ul>

            </p>
        </div>
        <hr>
        <div class="makers1">


        </div>
        <div class="makers" data-aos="fade-up">
            <div class="title">
                <h1>What we do ? </h1>
                <ul>
                    <li>We develop the Website</li>
                    <li>Provide Service to our client</li>
                    <li>We build we the assist of clien</li>
                    <li>We build website according to client</li>


                </ul>
            </div>
            <div class="admin1">
                <div class="title">
                    <h1>Who is Creator ?</h1>
                    <p>a we build website is build and developed by dilshad shaikh the idea and concept website build by
                        dilshad shaikh who is
                        student in ng acharya collage in Bscit third year </p>
                </div>
                <div class="adminimg">
                    <img src="images/admin.webp" alt="">
                    <p>dilshad shaikh</p>
                </div>
            </div>
        </div>
        <hr>

        <div class=" secondmaker">
            <div class="title">
                <h1>Who is Creator ?</h1>
                <p>a we build website is manage and content collecting by Faizan shaikh who is
                    student in ng acharya collage in Bscit third year </p>
            </div>
            <div class="adminimg">
                <img src="images/no-img.webp" alt="">
                <p>Faizan shaikh</p>

            </div>
        </div>
    </div>


    <!-- ------------------------------------------------------------------------------------------------------ -->
    <div class="newsletter section-p1 section-m1 " data-aos="fade-up">
                <div class="newtext">
                    <h4>Sign up For Updates</h4>
                    <p>Get E-mail about our latest website and <span>special offer</span></p>
                </div>
                <div class="form">
                    <input type="text" placeholder="Your Email address">
                    <button>Sign up</button>
                </div>
            </div>
            <footer class="section-p1 footer" data-aos="fade-up">
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
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init({
        offset: 120
    });
    </script>
</body>

</html>
    <?php session_start();
  
    ?>



        <section class="firstsection">
            <?php
      if(isset($_SESSION['user']))
      {
    ?>


            <nav class='navbar navbar-expand-lg  header nav1'>
                <div class='container-fluid '>
                    <div class='fir'>
                        <a href='' class='LOGO'><i class='fa-solid fa-feather-pointed'></i>| WE BUILD</a>
                    </div>
                    <div class='secend'>

                        <a href='#' id='signinlogo'><i class='fa fa-sign-i'></i></a>


                        <button class='navbar-toggler' type='button' data-bs-toggle='collapse'
                            data-bs-target='#navbarSupportedContent' aria-controls='navbarSupportedContent'
                            aria-expanded='false' aria-label='Toggle navigation'>
                            <span class='navbar-toggler-icon' style='color: white;'>
                            </span>

                        </button>
                        <div class='bag1 bagg'>

                            <?php 
                                $count=0;
                                if(isset($_SESSION['cart']))
                                {
                                    $count=count($_SESSION['cart']);
                                }
                                ?>
                            <a href='cart.php'><i class='fa-solid fa-bag-shopping bagformob'><span
                                        id='numformob'><?php echo $count; ?></span></i></a>

                        </div>
                        <form action="logout.php" method='post' class='logout  logoutformob'>
                            <button type='submit' name='logout'>Logout</button>
                            <i class="fa-solid fa-user"></i>
                           

                        </form>
                    </div>
                    <div class='collapse navbar-collapse' id='navbarSupportedContent'>
                        <ul class='navbar-nav me-auto mb-2 mb-lg-0'>
                            <li class='nav-item'>
                                <a class='nav-link  active' aria-current='page' href='index.php'>Home</a>
                            </li>
                            <li class='nav-item'>
                                <a   class='nav-link' href='education.php'>Education</a>
                            </li>

                            </li>

                            <li class='nav-item'>
                                <a class='nav-link' href='about.php'>About</a>
                            </li>
                            <li class='nav-item'>
                                <a class='nav-link' href='ecommerce.php'>eCommerce</a>
                            </li>
                        </ul>
                    </div>  
                </div>
               
                <form action="logout.php" method='post' class='logout bagforpc bag1'>
                    <button type='submit' name='logout'>Logout</button>
                    <i class="fa-solid fa-user"></i>
                  
                </form>
               
                <div class='signin signin1'>
                <form action="payment.php" method='POST'>
                <div class="user">
                <p><?php  echo  $_SESSION['user'];
                ?></p> 
                
                </div>
                </form>
                    <div class='bag2 bagg'>
                        <a href='cart.php'><i class='fa-solid fa-bag-shopping bagforpc'><span
                                    id='numberr'><?php echo $count; ?></span></i></a>

                    </div>

                </div>
            </nav>
            <?php
      }else{
         ?>


            <nav class='navbar navbar-expand-lg  header nav1'>
                <div class='container-fluid'>
                    <div class='fir'>
                        <a href='' class='LOGO'><i class='fa-solid fa-feather-pointed'></i>| WE BUILD</a>
                    </div>
                    <div class='secend'>

                        <a href='#' id='signinlogo'><i class='fa fa-sign-i'></i></a>


                        <button class='navbar-toggler' type='button' data-bs-toggle='collapse'
                            data-bs-target='#navbarSupportedContent' aria-controls='navbarSupportedContent'
                            aria-expanded='false' aria-label='Toggle navigation'>
                            <span class='navbar-toggler-icon' style='color: white;'>
                            </span>

                        </button>
                        <div class='bag1 bagg'>
                            <?php 
                                $count=0;
                                if(isset($_SESSION['cart']))
                                {
                                    $count=count($_SESSION['cart']);
                                }
                                ?>
                            <a href='cart.php'><i class='fa-solid fa-bag-shopping bagformob'><span
                                        id='numformob'><?php echo $count; ?></span></i></a>
                        </div>
                    </div>
                    <div class='collapse navbar-collapse' id='navbarSupportedContent'>
                        <ul class='navbar-nav me-auto mb-2 mb-lg-0'>
                            <li class='nav-item'>
                                <a class='nav-link  active' aria-current='page' href='index.php'>Home</a>
                            </li>
                            <li class='nav-item'>
                                <a  class='nav-link' href='education.php'>Education</a>
                            </li>

                            </li>

                            <li class='nav-item'>
                                <a class='nav-link' href='about.php'>About</a>
                            </li>
                            <li class='nav-item'>
                                <a class='nav-link' href='ecommerce.php'>eCommerce</a>
                            </li>
                    </div>
                    <div class='signin signin1'>

                        <a href='#' id='signin2' class='signin'>Sign in</a>

                        <form action='login.php' method='post'>
                            <div id='form1'>
                                <div id='cross'><i class='fa-solid fa-xmark'></i></div>
                                <h2>Login Page</h2>
                                <div class='form-element'>
                                    <label for='email'>Email</label>
                                    <input type='text' id='email' placeholder='Enter email' name='email'>
                                </div>
                                <div class='form-element'>
                                    <label for='email'>password</label>
                                    <input type='password' id='password' placeholder='Enter password' name='password'>
                                </div>
                                <div class='form-element'>
                                    <input type='checkbox' id='remember'>
                                    <label for='email'>Remembered</label>
                                </div>
                                <div class='form-element another'>
                                    <button type='submit'>Sign in</button>
                                </div>

                                <div class='form-element'>
                                    <a href='#'>Forget password</a>
                                </div>
                                <div class='form-element'>
                                    <a href='#' id='sin2'>Sign up</a>
                                </div>
                            </div>
                        </form>
                        <a href='#' id='signup'>Sign Up</a>
                        <form action='signup.php' method='post'>
                            <div id='form2'>
                                <div id='cross2'><i class='fa-solid fa-xmark'></i></div>
                                <h2>SignUp Page</h2>
                                <div class='form-element'>
                                    <label for='email'>Email</label>
                                    <input type='text' id='email' placeholder='Enter email' name='email'>
                                </div>
                                <div class='form-element'>
                                    <label for='email'>Number</label>
                                    <input type='text' id='password' placeholder='Enter password' name='phone_num'>
                                </div>
                                <div class='form-element'>
                                    <label for='email'>password</label>
                                    <input type='password' id='password' placeholder='Enter password' name='password'>
                                </div>
                                <div class='form-element'>
                                    <input type='checkbox' id='remember'>
                                    <label for='email'>Remembered</label>
                                </div>
                                <div class='form-element another'>
                                    <button type='submit'>Sign Up</button>
                                </div>


                                <div class='form-element'>
                                    <a href='#' id='sin'>Sign in</a>
                                </div>
                            </div>
                        </form>
                        <div cla~s='bag2 bagg'>
                            <a href='cart.php'><i class='fa-solid fa-bag-shopping bagforpc'><span
                                        id='numberr'><?php echo $count; ?></span></i></a>

                        </div>

                    </div>
                </div>

            </nav>

            <?php }  ?>

        </section>
                                    



<?php
//session_save_path('C:\wamp64\www\servers\ESHOP\sess.txt');
//ini_set('session.save_path',realpath(dirname($_SERVER['DOCUMENT_ROOT']).'/session'));

global $COUNT;
                 $COUNT = 0;

if(!isset($_SESSION))
{

session_start();
//$usercs = $_SESSION['cus'];


 }
     // echo " $userad ";
   ?>


<?php
//session_start();
$con=mysqli_connect("localhost","root","","eshop") or die(mysqli_error($con));
?>

<!DOCTYPE html>
<html lang="zxx">

<head>

<style>

    #bb{

    display: none;


    background: none;




    }

    #non{

    display: none;

    }

    #b:hover #bb{

    display: block;
    background-color:  #5A9FCC;
    border-radius: 150px 150px;
    }

#w{

   width: 500px;

}


</style>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, php">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                 <!--                    السله                                      -->
                <li><a href="shoping-cart.php"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>


        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="login/index-cu.php"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.php">Home</a></li>
                <li><a href="./shop-grid.php">Shop</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                         <!--  تفاصيل موقع  -->
                        <li><a href="./shop-details.php">Shop Details</a></li>
                        <li><a href="./shoping-cart.php">Shoping Cart</a></li>
                        <li><a href="./checkout.php">Check Out</a></li>
                        <li><a href="./blog-details.php">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="./blog.php">Blog</a></li>
                <li><a href="./contact.php">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                  <li><i class="fa fa-envelope"></i> Eng-hakeem@gmail.com</li>
                <li>Free Shipping for all Order of $99</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i>Eng-hakeem@gmail.com</li>
                                <li>Free Shipping for all Order of $99</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                           <!-- <div class="header__top__right__language">
                                <img src="img/language.png" alt="">
                                <div>English</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Spanis</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div> -->
                            <div class="header__top__right__auth">
                               <a href="login/index-cu.php"><i class="fa fa-user"></i> Login</a>
                                <a href="logout.php"><i class="fa fa-user"></i> Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./index.php">Home</a></li>
                            <li><a href="./shop-grid.php">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./shop-details.php">Shop Details</a></li>
                                    <li><a href="./shoping-cart.php">Shoping Cart</a></li>
                                    <li><a href="./checkout.php">Check Out</a></li>
                                    <li><a href="./blog-details.php">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.php">Blog</a></li>
                            <li><a href="./contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-user"></i> <span><?php if(empty($_SESSION['cus'])){echo "!"; }else{echo $_SESSION['cus'];}?></span></a></li>
                            <li><a href="./shoping-cart.php"><i class="fa fa-shopping-bag"></i> <span><?php echo $COUNT; ?></span></a></li>
                        </ul>
                       <div class="header__cart__price"><span> </span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>

    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                            <li><a href="#">Desktop Computers</a></li>
                            <li><a href="#">Laptops</a></li>
                            <li><a href="#">Mobiles</a></li>
                            <li><a href="#">Cameras</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">


                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>


                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+967 773 123 263 </h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="img/laptop/dell.jpg" >
                        <div class="hero__text">
                            <span> NEW LAPTOP </span>
                            <h2> Laptops <br />100% Exclusive</h2>
                            <p>Free Pickup and Delivery Available</p>
                            <a href="#" class="primary-btn">SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/laptop/dell.jpg">
                            <h5><a href="#">Laptops</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/camera/cannon_eos.jpg">
                            <h5><a href="#">Camera</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="m.jpg">
                            <h5><a href="#">Mobiles</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="d1.jpg">
                            <h5><a href="#">PC Desktop </a></h5>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Featured Product</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".la">Laptops</li>
                            <li data-filter=".ma">Mobiles</li>
                            <li data-filter=".ca">Camera</li>
                            <li data-filter=".fa">PC Desktop</li>
                        </ul>
                    </div>
                </div>
            </div>

              <div class="row featured__filter">
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="d1.jpg">
                            <ul class="featured__item__pic__hover">

                                <li><a href="#"><i class="fa fa-heart"></i></a></li>

                                <li><a href="#">   <i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                                <h6><a href="#">PC</a></h6>
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$300.00</h5>
                        </div>
                    </div>
                </div>


                     <?php


                   //if(isset($_POST['read'])){
                     //  $result = getData();

                      $sql = "select PRO_ID, PRO_NAME ,PRO_IMAGE,PRO_PRICE,PRO_DESCRIPTION,CATE_ID from products where CATE_ID = 1 ";
                            $result = mysqli_query($con,$sql);
                             if(mysqli_num_rows($result) > 0){
                       if($result){

                           while ($row = mysqli_fetch_assoc($result)){


                            ?>





                <div  id="b" class="col-lg-3 col-md-4 col-sm-6 mix oranges la">
                    <div class="featured__item">
                        <div    class="featured__item__pic set-bg" data-setbg="<?php echo "img/laptop/".$row['PRO_IMAGE']; ?>">

                          <ul class="featured__item__pic__hover">
                                   <form   action="shop-details.php" method="post">
                                                                <input type="text" name="pid" value="<?php echo $row['PRO_ID']; ?>" id="non" />
                                <li><button name="des" class="fa fa-heart" id="bb">        </button> </li>
                                          </form>

                                          <form action="shoping-cart.php"  method="post">
                                                    <input type="text" name="ID" value="<?php echo $row['PRO_ID']; ?>" id="non" />
                                <li> <button  class="fa fa-shopping-cart" name="cart" id="bb" >         </button>   </li>
                                                      </form>
                            </ul>

                        </div>
                        <div class="featured__item__text">
                                 <h5  id="b"><?php echo $row['PRO_NAME']; ?></h5>
                            <h6><a href="#"> <?php echo $row['PRO_DESCRIPTION']; ?></a></h6>
                            <h5> <?php echo '$' . $row['PRO_PRICE']; ?>  </h5>
                        </div>
                    </div>
                </div>


                <?php   }}} ?>



                 <?php


                   //if(isset($_POST['read'])){
                     //  $result = getData();

                      $sql = "select PRO_ID, PRO_NAME ,PRO_IMAGE,PRO_PRICE,PRO_DESCRIPTION,CATE_ID from products where CATE_ID = 2 ";
                            $result = mysqli_query($con,$sql);
                             if(mysqli_num_rows($result) > 0){
                       if($result){

                           while ($row = mysqli_fetch_assoc($result)){ ?>




                <div id="b" class="col-lg-3 col-md-4 col-sm-6 mix vegetables ma" >
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="<?php echo "img/laptop/".$row['PRO_IMAGE']; ?>">
                            <ul class="featured__item__pic__hover">
                                <form   action="shop-details.php" method="post">
                                                                <input type="text" name="pid" value="<?php echo $row['PRO_ID']; ?>" id="non" />
                                <li><button name="des" class="fa fa-heart" id="bb">        </button> </li>
                                          </form>
                                         <form action="shoping-cart.php"  method="post">
                                                    <input type="text" name="ID" value="<?php echo $row['PRO_ID']; ?>" id="non" />
                                <li> <button  class="fa fa-shopping-cart" name="cart" id="bb" >         </button>   </li>
                                                      </form>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h5 ><?php echo $row['PRO_NAME']; ?></h5>
                            <h6><a href="#"> <?php echo $row['PRO_DESCRIPTION']; ?></a></h6>
                            <h5> <?php echo '$' . $row['PRO_PRICE']; ?>  </h5>
                        </div>
                    </div>
                </div>

                           <?php   }}} ?>





   <?php


                   //if(isset($_POST['read'])){
                     //  $result = getData();

                      $sql = "select PRO_ID, PRO_NAME ,PRO_IMAGE,PRO_PRICE,PRO_DESCRIPTION,CATE_ID from products where CATE_ID = 3 ";
                            $result = mysqli_query($con,$sql);
                             if(mysqli_num_rows($result) > 0){
                       if($result){

                           while ($row = mysqli_fetch_assoc($result)){ ?>




                <div  id="b" class="col-lg-3 col-md-4 col-sm-6 mix vegetables ca">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="<?php echo "img/laptop/".$row['PRO_IMAGE']; ?>">
                            <ul class="featured__item__pic__hover">
                               <form   action="shop-details.php" method="post">
                                                                <input type="text" name="pid" value="<?php echo $row['PRO_ID']; ?>" id="non" />
                                <li><button name="des" class="fa fa-heart" id="bb">        </button> </li>
                                          </form>

                                         <form action="shoping-cart.php"  method="post">
                                                    <input type="text" name="ID" value="<?php echo $row['PRO_ID']; ?>" id="non" />
                                <li> <button  class="fa fa-shopping-cart" name="cart" id="bb" >         </button>   </li>
                                                      </form>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h5 ><?php echo $row['PRO_NAME']; ?></h5>
                            <h6><a href="#"> <?php echo $row['PRO_DESCRIPTION']; ?></a></h6>
                            <h5> <?php echo '$' . $row['PRO_PRICE']; ?>  </h5>
                        </div>
                    </div>
                </div>

                           <?php   }}} ?>

                        <?php


                   //if(isset($_POST['read'])){
                     //  $result = getData();

                      $sql = "select PRO_ID, PRO_NAME ,PRO_IMAGE,PRO_PRICE,PRO_DESCRIPTION,CATE_ID from products where CATE_ID = 4 ";
                            $result = mysqli_query($con,$sql);
                             if(mysqli_num_rows($result) > 0){
                       if($result){

                           while ($row = mysqli_fetch_assoc($result)){ ?>




                <div  id="b" class="col-lg-3 col-md-4 col-sm-6 mix vegetables fa">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="<?php echo "img/laptop/".$row['PRO_IMAGE']; ?>">
                            <ul class="featured__item__pic__hover">
                              <form   action="shop-details.php" method="post">
                                                                <input type="text" name="pid" value="<?php echo $row['PRO_ID']; ?>" id="non" />
                                <li><button name="des" class="fa fa-heart" id="bb">        </button> </li>
                                          </form>

                                          <form action="shoping-cart.php"  method="post">
                                                    <input type="text" name="ID" value="<?php echo $row['PRO_ID']; ?>" id="non" />
                                <li> <button  class="fa fa-shopping-cart" name="cart" id="bb" >         </button>   </li>
                                                      </form>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h5 ><?php echo $row['PRO_NAME']; ?></h5>
                            <h6><a href="#"> <?php echo $row['PRO_DESCRIPTION']; ?></a></h6>
                            <h5> <?php echo '$' . $row['PRO_PRICE']; ?>  </h5>
                        </div>
                    </div>
                </div>

                           <?php   }}} ?>




            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Blog Section Begin -->
    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>From The Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/laptop/hero.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Cooking tips make cooking simple</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/laptop/22.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">6 ways to prepare breakfast for 30</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/laptop/33.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Visit the clean farm in the US</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="img/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 New York</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: hello@colorlib.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Our Shop</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">Delivery infomation</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Innovation</a></li>
                            <li><a href="#">Testimonials</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>



</body>

</html>
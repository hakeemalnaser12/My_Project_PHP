
<?php

$con=mysqli_connect("localhost","root","","eshop") or die(mysqli_error($con));

    if($con){ }else {echo "<script> alert('error conected');</script>";}
                   if(!isset($_SESSION)){

                   session_start();

                   }


              if(empty($_SESSION['cus'])){


                      echo "<script> alert('ERORR NOT SHOPING FRIST LOGIN AFTER SHOPING');  </script>";
                         echo " <script> window.location ='login/index-cu.php';</script> ";

              }else{
              if(isset($_POST['ID']))
              {
       $uid =$_POST['ID'];
       $CC_ID =  $_SESSION['cus'];
       $sql_p = " select * from products where PRO_ID = '$uid'";
        $sql_c = " select * from custemer where CUS_ID = '$CC_ID'";
       $rs_p = mysqli_query($con,$sql_p);
         $rs_c = mysqli_query($con,$sql_c);

                 if(mysqli_num_rows($rs_p) > 0 && mysqli_num_rows($rs_c) > 0){
        $rowp = mysqli_fetch_array($rs_p);
        $PID = $rowp['PRO_ID'];
        $PN =  $rowp['PRO_NAME'];
         $PIM = $rowp['PRO_IMAGE'];
          $PRS = $rowp['PRO_PRICE'];
        $rowc = mysqli_fetch_array($rs_c);
             $CID = $rowc['CUS_ID'];
                   $CCO = $rowc['CUS_CODE'];
                    $CB = $rowc['CUS_BALANCE'];

                    $sql = " INSERT INTO cart (P_ID,P_N,P_IM,P_PR,Q,CU_ID,CU_CO,C_B,TOT) values ('$PID','$PN','$PIM','$PRS',1,'$CID','$CCO','$CB','$PRS')";
                           $rcart = mysqli_query($con,$sql);
          if($rcart){

                 echo "<script> alert(' Successfully  add CART');</script>";
                 global $COUNT;
                 $COUNT = $COUNT+1;
                  echo " <script> window.location ='index.php';</script> ";

          }else{ echo "<script> alert('failed add CART  CHOOSE PRODUCT OR LOGIN');</script>";}

                        }

                    }



             // $cid =$roww['CUS_ID'];






               }

?>

   <?php

   if(isset($_POST['del']))
   {
   $did = $_POST['cartid'];
   $dele =" delete from cart where C_ID = '$did'";
   $drs = mysqli_query($con,$dele) or die(mysqli_error($con));
    echo "<script> alert('Successfully Deleted CART');</script>";




   }



   if(isset($_POST['up'])){
   $q = (int)$_POST['QUAN'];
   $upd = $_POST['ctd'];
   $upsql = "select * from cart where C_ID = '$upd'";
   $rup = mysqli_query($con,$upsql)  or die(mysqli_error($rup));
   if(mysqli_num_rows($rup) > 0)
   {
       $rowup = mysqli_fetch_assoc($rup);
        $ctid = $rowup['C_ID'];
        $ctpi = $rowup['P_ID'];
        $ctpn = $rowup['P_N'];
        $ctpm = $rowup['P_IM'];
        $ctps = $rowup['P_PR'];

        $QUN = $q;

        $ctci = $rowup['CU_ID'];
        $ctco = $rowup['CU_CO'];
        $ctcb = $rowup['C_B'];
         $ctTO = $rowup['P_PR']*$QUN;


         $usql = "update cart set P_ID = '$ctpi' , P_N = '$ctpn' , P_IM = '$ctpm' , P_PR = '$ctps' , Q = '$QUN', CU_ID = '$ctci' , CU_CO = '$ctco' , C_B = '$ctcb' , TOT = '$ctTO' where C_ID = '$ctid'";
           $rupp = mysqli_query($con,$usql)  or die(mysqli_error($con));
           if($rupp){

           echo "<script> alert('Successfully UPDATE CART');</script>";


          }else{ echo "<script> alert('failed UPDATE CART');</script>";}









   }





   }












     ?>

<!DOCTYPE html>
<html lang="zxx">

<head>
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
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price"><span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>

                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Home</a></li>
                <li><a href="./shop-grid.html">Shop</a></li>
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
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> Eng-hakeem@colorlib.com</li>
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
                    <div class="col-lg-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> Eng-hakeem@colorlib.com</li>
                                <li>Free Shipping for all Order of $99</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
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
                                <a href="#"><i class="fa fa-user"></i> Login</a>
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
                        <a href="./index.php"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="./index.php">Home</a></li>
                            <li class="active"><a href="./shop-grid.php">Shop</a></li>
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
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span><?php  global $COUNT; echo $COUNT; ?></span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>$150.00</span></div>
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
    <section class="hero hero-normal">
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
                                <h5>+967 770 591 960</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/port.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>shoping-cart</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Home</a>
                            <span>shoping-cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

     <style type="text/css">

                                     #NO{

                                     display: none;

                                     }

                                     #BU{


                                     background: none;


                                     }


                                     </style>

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php


                            if(empty($_SESSION['cus'])){







                            }else{

                            $cart_s =  $_SESSION['cus'];
                            $sql_cart = " select * from cart  where CU_ID = '$cart_s' ";
                            $rs_cart = mysqli_query($con,$sql_cart);
                             if(mysqli_num_rows($rs_cart) > 0){
                             if($rs_cart){
                                 $totel = 0;

                             while($rowcart = mysqli_fetch_assoc($rs_cart)){

                                 $totel = $totel+($rowcart['P_PR']*$rowcart['Q']);
                                    $bl = $rowcart['C_B'];
                                    $CODD =  $rowcart['CU_CO'];

                                   ?>










                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="<?php echo "img/laptop/".$rowcart['P_IM']; ?>" alt="" width="200px" height="100px">
                                        <h5><?php echo $rowcart['P_N']; ?></h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                      <?php echo $rowcart['P_PR']; ?>
                                    </td>
                                      <form action="" method="post">
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">



                                                 <input type="txet" name="ctd" value=" <?php echo $rowcart['C_ID']; ?>" id="NO" />
                                                <input type="number" value=" <?php echo $rowcart['Q']; ?>"  name="QUAN">

                                            </div>
                                        </div>
                                    </td>
                                         <td class="shoping__cart__total">
                                       <?php echo $rowcart['P_PR']*$rowcart['Q']; ?>
                                    </td>
                                    <td class="shoping__cart__item__close">

                                        <button class="icon_loading"  id="BU" name="up" ></button>

                                    </td>
                                     </form>
                                    <td class="shoping__cart__item__close">
                                            <form action="" method="post">
                                               <input type="txet" name="cartid" value=" <?php echo $rowcart['C_ID']; ?>" id="NO" />
                                        <button  class="icon_close"  id="BU" name="del" ></button>
                                          </form>
                                    </td>

                                </tr>


                              <?php
                             }

                            ?>



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="index.php" class="primary-btn cart-btn">CONTINUE SHOPPING</a>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__continue">

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Cart Total  <span> <?php if(empty($_SESSION['cus'])){echo "!"; }else{echo $_SESSION['cus'];}?></span></h5>
                        <ul>
                                <li>CUS_CODE <span> <?php echo $CODD; ?></span></li>
                            <li>CUS_BALANCE <span> <?php echo $bl; ?></span></li>
                            <li>Total <span> <?php echo $totel ?></span></li>
                        </ul>
                        <form action="cheekout.php" method="post">

                        <input type="text" name="cusid" value="<?php echo $_SESSION['cus'];?>"  id="NO"/>
                          <input type="text" name="blns" value="<?php echo $bl; ?>"  id="NO"/>
                           <input type="text" name="totel" value=" <?php echo $totel ?>"  id="NO"/>
                               <button class="primary-btn" name="c">  PROCEED TO CHECKOUT   </button>

                           </form>

                       
                    </div>
                </div>
            </div>
        </div>
    </section>




                              <?php
                             }


                             }


                            }




                              ?>











    <!-- Shoping Cart Section End -->

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
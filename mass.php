 <?php

$con=mysqli_connect("localhost","root","","eshop") or die(mysqli_error($con));

    if($con){ }else {echo "<script> alert('error conected');</script>";}




     if(isset($_POST['del']))
    {


    $d = $_POST['id'];

    $sdel =" delete from massege where MASS_ID =$d";
    $rsd = mysqli_query($con,$sdel);
       echo "<script> alert('Successfully Deleted masseges');</script>";
    }
?>


<!DOCTYPE html>

<html>



<head>
                                                                      <style>
                                                                      #dd{
                                                                              display: none;
                                                                      }

                                                                       #d{
                                                                               color:  #FFFFFF;
                                                                               background: transparent;
                                                                       }

                                                                      #C
                                                                      {
                                                                          color: #FFFFFF;

                                                                      }
                                                                      #m{
                                                                              background-color: #202020;

                                                                              border: solid #FFFFFF 3px;
                                                                                color: #FFFFFF;

                                                                      }



                                                                       </style>

                                                                      <style>

                                                                      #C
                                                                      {
                                                                          color: #FFFFFF;

                                                                      }
                                                                      #m{
                                                                              background-color: #202020;

                                                                              border: solid #FFFFFF 3px;
                                                                                color: #FFFFFF;

                                                                      }



                                                                       </style>


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" href="style.css">
          <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">



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
  <title>add cate!</title>
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

            </ul>
            <div class="header__cart__price"><span></span></div>
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
                <a href="#"><i class="fa fa-user"></i> </a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="admin.php">Home</a></li>
                <li><a href="sh-cart.php">Shoping cart</a></li>
                <li><a href="#">product</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="add_prodect.php">add product</a></li>
                        <li><a href="add_cus.php">add custemar</a></li>
                         <li><a href="add_cate.php">add cate</a></li>

                        <li><a href="sh-cus.php">show-custemar </a></li>
                    </ul>
                </li>

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
                <li></li>
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
                                <li></li>
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

                                </ul>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="login/index-ad.php"><i class="fa fa-user"></i> Login</a>
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
                             <li class="active"><a href="admin.php">Home</a></li>
                <li><a href="sh-cart.php">Shoping</a></li>
                <li><a href="#">product</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="add_prodect.php">add product</a></li>
                        <li><a href="add_cus.php">add custemar</a></li>
                         <li><a href="add_cate.php">add cate</a></li>

                        <li><a href="sh-cus.php">show-custemar </a></li>
                    </ul>
                </li>
                            <li><a href="mass.php">Messg</a></li>
                            <li><a href="sub.php">Sub</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>

                        </ul>
                        <div class="header__cart__price"> <span></span></div>
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

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/port.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2> Show Messeges</h2>
                        <div class="breadcrumb__option">
                            <a href="./admin.php">Home</a>
                            <span> Show Messeges</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->



      <section class="shoping-cart spad" class="d-flex table-data">

        <!-- Bootstrap table  -->

        <div  class="container"class="d-flex table-data">

            <table  class="table table-striped table-dark">
                      <thead class="thead-dark" ><center><tr> <th> </th> <th> </th><th> </th><th>______________  MESSAGE ___________</th> </tr> </center></thead>
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th> Name</th>
                        <th>USER Name</th>
                        <th>MESSAGE</th>


                    </tr>
                </thead>
                <tbody id="tbody">
                          <?php


                   //if(isset($_POST['read'])){
                     //  $result = getData();

                      $sql = "select * from massege";
                            $result = mysqli_query($con,$sql);
                             if(mysqli_num_rows($result) > 0){
                       if($result){

                           while ($row = mysqli_fetch_assoc($result)){ ?>

                               <tr>
                                   <td data-id="<?php echo $row['MASS_ID']; ?>"> <?php echo $row['MASS_ID']; ?></td>
                                   <td data-id="<?php echo $row['MASS_ID']; ?>"><?php echo $row['NAME']; ?></td>
                                    <td data-id="<?php echo $row['MASS_ID']; ?>"><?php echo $row['CUS_EMAIL']; ?></td>
                                      <td data-id="<?php echo $row['MASS_ID']; ?>"><?php echo $row['MESSAGE']; ?></td>

                                             <td class="shoping__cart__item__close">
                                        <form  action=""  method="post">
                                                    <input type="text" name="id"  id="dd" value="<?php echo $row['MASS_ID']; ?>" width="0px" />

                                      <input type="submit" value="S"  id="d" name="del" class="icon_close"/>

                                        </form>
                                    </td>

                               </tr>

                   <?php
                           }

                       }

                                        }

                   ?>
                </tbody>
            </table>
        </div>


              </section>


    <!-- Hero Section End -->









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
<?php

$con=mysqli_connect("localhost","root","","eshop") or die(mysqli_error($con));

                if($con){ }else {echo "<script> alert('error conected');</script>";}

 ?>
       <?php


              if(isset($_POST['id']))
              {
       $uid =$_POST['id'];
       $updat = " select * from custemer where CUS_ID = '$uid'";
       $rss = mysqli_query($con,$updat);
           $roww = mysqli_fetch_assoc($rss);







             // $cid =$roww['CUS_ID'];






               }


    if(isset($_POST['add'])){
      $cc = $_POST['cuid'];
    $fname = $_POST['fn'];
    $lname = $_POST['ln'];
     $cont = $_POST['cont'];
      $city = $_POST['city'];
       $addr = $_POST['address'];
        $code = $_POST['code'];
             $blns = $_POST['blns'];
             $ph = $_POST['phone'];
             $em = $_POST['em'];
             $pass = $_POST['pass'];
        $add = "update custemer  set CUS_FNAME = '$fname',  CUS_LNAME = '$lname' , COUNTRY = '$cont' , CITY = '$city', ADDRESS = '$addr', CUS_CODE= '$code',CUS_BALANCE = '$blns', CUS_PHONE = '$ph', CUS_EMAIL = '$em' , AD_PASS = '$pass'  where CUS_ID = '$cc' ";

         // values ('$fname','$lname','$cont','$city','$addr','$code','$blns','$ph','$em','$pass')  where CUS_ID = $cid ";
          $rs = mysqli_query($con,$add)or die(mysqli_error($con));
          if($rs){

                 echo "<script> alert(' Successfully  UPDATE custemer');</script>";

                 ?>
                    <meta http-equiv="refresh" content="2;url=sh-cus.php" />     

                 <?php

          }else{ echo "<script> alert('failed UPDATE custemer');</script>";}






    }




     ?>
    <!-- Checkout Section End -->


<!DOCTYPE html>

<html>

<head>
                                        <meta charset="UTF-8">
                <meta name="description" content="Ogani Template">
                <meta name="keywords" content="Ogani, unica, creative, html">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>admin</title>


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

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <!--   <td data-id="<?php echo $row['CUS_ID']; ?>"> <?php echo $row['CUS_ID']; ?></td>
                                   <td data-id="<?php echo $row['CUS_ID']; ?>"><?php echo $row['CUS_FNAME']; ?></td>
                                    <td data-id="<?php echo $row['CUS_ID']; ?>"><?php echo $row['CUS_LNAME']; ?></td>
                                      <td data-id="<?php echo $row['CUS_ID']; ?>"><?php echo $row['COUNTRY']; ?></td>
                                       <td data-id="<?php echo $row['CUS_ID']; ?>"><?php echo $row['CITY']; ?></td>
                                        <td data-id="<?php echo $row['CUS_ID']; ?>"><?php echo $row['ADDRESS']; ?></td>
                                         <td data-id="<?php echo $row['CUS_ID']; ?>"><?php echo $row['CUS_PHONE']; ?></td>
                                          <td data-id="<?php echo $row['CUS_ID']; ?>"><?php echo $row['CUS_CODE']; ?></td>
                                           <td data-id="<?php echo $row['CUS_ID']; ?>"><?php echo $row['CUS_BALANCE']; ?></td>
                                            <td data-id="<?php echo $row['CUS_ID']; ?>"><?php echo $row['CUS_EMAIL']; ?></td>
                                             <td data-id="<?php echo $row['CUS_ID']; ?>"><?php echo $row['AD_PASS']; ?></td>


                                             -->


                </div>
            </div>
            <div class="checkout__form">
                <h4> update custemar</h4>
                <form action="" method="post">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>frist Name<span>*</span></p>
                                        <input type="text" name="fn"  value="<?php echo $roww['CUS_FNAME']; ?>">
                                    </div>
                                </div>
                                 <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Last Name<span>*</span></p>
                                        <input type="text" name="ln" value="<?php echo $roww['CUS_LNAME']; ?>">
                                    </div>
                                </div>
                                    <div class="checkout__input">
                                <p>Country<span>*</span></p>
                                <input type="text"  name="cont" value="<?php echo $roww['COUNTRY']; ?>">
                            </div>

                            <div class="checkout__input">
                                <p>City<span>*</span></p>
                                <input type="text" name="city" value="<?php echo $roww['CITY']; ?>">
                            </div>
                               <div class="checkout__input">
                                <p>Address<span>*</span></p>
                                <input type="text" name="address" placeholder="Street Address" value="<?php echo $roww['ADDRESS']; ?>" class="checkout__input__add">

                            </div>



                            </div>
                            <div class="checkout__input">
                                <p> custemar code  <span>*</span></p>
                                <input type="text"  placeholder="code"  name="code"  value="<?php echo $roww['CUS_CODE']; ?>">
                            </div>
                            <div class="checkout__input">
                                <p> Balance<span>*</span></p>
                                <input type="text"  name="blns" placeholder=" Price" class="checkout__input__add" value="<?php echo $roww['CUS_BALANCE']; ?>">

                            </div>
                            <div class="checkout__input">
                                <p> phone<span>*</span></p>
                                <input type="text" name="phone" value="<?php echo $roww['CUS_PHONE']; ?>">
                            </div>
                                      <div class="checkout__input">
                                <p> Email<span>*</span></p>
                                <input type="text" name="em" placeholder="Email" value="<?php echo $roww['CUS_EMAIL']; ?>">
                            </div>


                                <div class="checkout__input">
                                <p>Password<span>*</span></p>
                                <input type="text" name="pass"  value="<?php echo $roww['AD_PASS']; ?>">
                            </div>
                                        <div class="checkout__input">

                                <input type="text" name="cuid"   id="no" value="<?php echo $roww['CUS_ID']; ?>">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Admins</h4>
                                <div class="checkout__order__products"> name  <span> ID</span></div>
                                <ul>
                                    <li>Admin <span>1</span></li>
                                    <li>hakeem <span>2</span></li>
                                   

                                </ul>




                            </div>
                        </div>
                    </div>
                       <button type="submit" class="site-btn"  name="add"> update custemar</button>
                </form>
            </div>
        </div>
    </section>



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
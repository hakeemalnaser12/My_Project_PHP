<?php

$con=mysqli_connect("localhost","root","","eshop") or die(mysqli_error($con));

    if($con){ }else {echo "<script> alert('error conected');</script>";}


              if(isset($_POST['id']))
              {
       $uid =$_POST['id'];
       $updat = " select * from products where PRO_ID = '$uid'";
       $rss = mysqli_query($con,$updat);


        $roww = mysqli_fetch_array($rss);







             // $cid =$roww['CUS_ID'];






               }


    if(isset($_POST['add'])){
       $ID = $_POST['Pid'];
    $pname = $_POST['pron'];
     $pimg = $_POST['proim'];
      $pdd = $_POST['prodd'];
       $pic = $_POST['pro_pc'];
        $cat = $_POST['cid'];

        $add = "update  products set  pro_name = '$pname' ,pro_image = '$pimg' ,PRO_PRICE = '$pic' ,PRO_DESCRIPTION = '$pdd',CATE_ID ='$cat' where PRO_ID = '$ID' ";
        // values ('$pname','$pimg','$pic','$pdd','$cat') ";
          $rs = mysqli_query($con,$add);
          if($rs){

                 echo "<script> alert(' Successfully  update prodect');</script>";
                 ?>

                        <meta http-equiv="refresh" content="2;url=admin.php" />
                 <?php

          }else{ echo "<script> alert('failed update prodect');</script>";}




    }






     ?>











<!DOCTYPE html>

<html>

<head>
          <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>admin</title>

          <style type="text/css">  #no{
                  display: none;
          }
 </style>
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
  <title>Hello!</title>
</head>

<body>

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                </div>
            </div>
            <div class="checkout__form">
                <h4> Add Product</h4>
                <form action="" method="post">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>product Name<span>*</span></p>
                                        <input type="text" name="pron"  value="<?php echo $roww['PRO_NAME'];  ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>product image<span>*</span></p>
                                        <input type="text" name="proim"  value="<?php echo $roww['PRO_IMAGE'];  ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p> DESCRIPTION <span>*</span></p>
                                <input type="text"  placeholder="DESCRIPTION"  name="prodd"   value="<?php echo $roww['PRO_DESCRIPTION'];  ?>">
                            </div>
                            <div class="checkout__input">
                                <p>Price<span>*</span></p>
                                <input type="text"  name="pro_pc" placeholder=" Price" value="<?php echo $roww['PRO_PRICE'];  ?>" class="checkout__input__add">

                            </div>
                            <div class="checkout__input">
                                <p> cate id<span>*</span></p>
                                <input type="text"  value="<?php echo $roww['CATE_ID'];  ?>" name="cid">
                            </div>
                                <div class="checkout__input">

                                <input type="text"  id="no"  value="<?php echo $roww['PRO_ID'];  ?>" name="Pid">
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Categories</h4>
                                <div class="checkout__order__products"> name  <span> ID</span></div>
                                <ul>
                                    <li>Laptops <span>1</span></li>
                                    <li>Mobiles <span>2</span></li>
                                    <li>Cameras <span>3</span></li>
                                     <li>Desktop Computers<span>4</span></li>
                                </ul>




                            </div>
                        </div>
                    </div>
                       <button type="submit" class="site-btn"  name="add"> Add product</button>
                </form>
            </div>
        </div>
    </section>

</body>
</html>
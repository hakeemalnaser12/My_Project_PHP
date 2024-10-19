
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
              if(isset($_POST['cusid']))
              {
       $uid =$_POST['cusid'];
       $bl =  $_POST['blns'];
       $tto = $_POST['totel'];

       if($bl >= $tto)
       {

       $sqlch = " insert into cart_sh (PRO_ID,PRO_N,PRO_IMAGE,PRO_PRICE,Quantity,CUS_ID,CUS_CODE,CUS_B,Total) select P_ID,P_N,P_IM,P_PR,Q,CU_ID,CU_CO,C_B,TOT from cart where CU_ID = '$uid'";
        $result = mysqli_query($con,$sqlch);


          $sqlde = " delete from cart where CU_ID = '$uid'";
          $RS = mysqli_query($con,$sqlde);
                 echo "<script> alert('TRUE SHOPING CART ');  </script>";
                   echo " <script> window.location ='index.php';</script> ";






       }else{ echo "<script> alert('SORRY YOUR BALANCE IS NOT ALLOWED !!');  </script>";
                         echo " <script> window.location ='shoping-cart.php';</script> ";}



       }}


?>

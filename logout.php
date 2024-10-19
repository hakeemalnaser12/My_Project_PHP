<?php
$con=mysqli_connect("localhost","root","","eshop") or die(mysqli_error($con));

    if($con){ }else {echo "<script> alert('error conected');</script>";}
  session_start();
  $uid = $_SESSION['cus'];
  if(session_destroy())
  {
           $sqlde = " delete from cart where CU_ID = '$uid'";
          $RS = mysqli_query($con,$sqlde);
                 echo "<script> alert('TRUE SHOPING CART ');  </script>";
                   echo " <script> window.location ='login/index-cu.php';</script> ";
 // header("location:login/index-cu.php");


  }


?>
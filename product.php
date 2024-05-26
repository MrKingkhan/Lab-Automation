<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Products</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<style>
    @media (max-width: 767.98px) {
        .border-sm-start-none {
            border-left: none !important;
        }
    }
</style>
<!-- body -->

<body class="main-layout product_page">
   <!-- loader  -->
   <div class="loader_bg">
      <div class="loader"><img src="images/loading.gif" alt="#" /></div>
   </div>
   <!-- end loader -->
   <!-- header -->
   <?php
   include "./navbar/navbar.php";
   ?>
   <!-- end header -->

   <div class="product">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="title">

                  <span>We package the products with best services to make you a happy customer.</span>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div style="background-color: #fff;">
      <!-- <div class="product-bg-white">
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <i><img src="images\switch.jpg" /></i>
                     <h3>Switch</h3>
                     <span>$25.00</span>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box" style="height: 270px;">
                     <i><img src="images\resistor.jpg" style="height: 160px;" /></i>
                     <br>
                     <h3>Resistor</h3>
                     <span>$25.00</span>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <i><img src="images\fuse.jpg" /></i>
                     <h3>Fuse</h3>
                     <span>$25.00</span>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <i><img src="images\capacitor.jpg" /></i>
                     <h3>Capacitor</h3>
                     <span>$25.00</span>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <i><img src="images\Ceramic Capacitor.jpg" /></i>
                     <h3>Ceramic Capacitor</h3>
                     <span>$25.00</span>
                  </div>
               </div>

            </div>
         </div>
      </div> -->

      <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "lab_automation";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM published";
  $result = mysqli_query($conn, $sql);

  while ($row = mysqli_fetch_assoc($result)) {
  ?>



    <div class="row justify-content-center mb-3">
                <div class="col-md-12 col-xl-10">
                    <div class="card shadow-0 border rounded-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                    <div class="bg-image hover-zoom ripple rounded ripple-surface">
                                        <img src="admin_panel/admin_pages/<?php echo $row['product_img'] ?>" class="w-100" />
                                        <a href="#!">
                                            <div class="hover-overlay">
                                                <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-6">
                                    <h5><?php echo $row['product_name'] ?></h5>
                                    <div class="d-flex flex-row">
                                        <div class="text-danger mb-1 me-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <span>310</span>
                                    </div>
                                    <div class="mt-1 mb-0 text-muted small">
                                        <span><?php echo $row['product_info'] ?></span>
                                        <span class="text-primary"> • </span>
                                        
                                    </div>
                                    <p class="text-truncate mb-4 mb-md-0">
                                        There are many variations of passages of Lorem Ipsum available, but the
                                        majority have suffered alteration in some form, by injected humour, or
                                        randomised words which don't look even slightly believable.
                                    </p>
                                </div>
                                <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                                    <div class="d-flex flex-row align-items-center mb-1">
                                        <h4 class="mb-1 me-1">$<?php echo $row['product_price'] ?></h4>
                                    </div>
                                    <h6 class="text-success">Free shipping</h6>
                                    <div class="d-flex flex-column mt-4">
                                        <button class="btn btn-primary btn-sm" type="button">Details</button>
                                        <button class="btn btn-outline-primary btn-sm mt-2" type="button">
                                            Add to wishlist
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


  <?php } ?>







      <!--  footer -->
      <footr>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                     <div class="contact">
                        <h3>conatct us</h3>
                        <span>123 Second Street Fifth Avenue,<br>
                           Manhattan, New York
                           +987 654 3210</span>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                     <div class="contact">
                        <h3>ADDITIONAL LINKS</h3>
                        <ul class="lik">
                           <li> <a href="#">About us</a></li>
                           <li> <a href="#">Terms and conditions</a></li>
                           <li> <a href="#">Privacy policy</a></li>
                           <li> <a href="#">News</a></li>
                           <li> <a href="#">Contact us</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                     <div class="contact">
                        <h3>service</h3>
                        <ul class="lik">
                           <li> <a href="#"> Data recovery</a></li>
                           <li> <a href="#">Computer repair</a></li>
                           <li> <a href="#">Mobile service</a></li>
                           <li> <a href="#">Network solutions</a></li>
                           <li> <a href="#">Technical support</a></li>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                     <div class="contact">
                        <h3>IT NEXT THEME</h3>
                        <span>Tincidunt elit magnis <br>
                           nulla facilisis. Dolor <br>
                           sagittis maecenas. <br>
                           Sapien nunc amet <br>
                           ultrices, </span>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6 offset-md-3">
                     <ul class="sociel">
                        <li> <a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li> <a href="#"><i class="fa fa-google-plus"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>


         </div>
      </footr>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function() {
            $(".fancybox").fancybox({
               openEffect: "none",
               closeEffect: "none"
            });

            $(".zoom").hover(function() {

               $(this).addClass('transition');
            }, function() {

               $(this).removeClass('transition');
            });
         });
      </script>
   </div>
</body>

</html>
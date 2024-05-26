<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>


<body>
  <?php
  include "./lighten/index.html";
  ?>


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

    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="card" style="width: 18rem;">
            <img src="admin_panel/admin_pages/<?php echo $row['product_img'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h3 class="card-title"><?php echo $row['product_name'] ?></h3>
              <h5 class="card-title"><?php echo $row['product_info'] ?></h5>
              <p class="card-text">$<?php echo $row['product_price'] ?></p>
              <button><a href="#" class="btn btn-primary">Add To Card</a></button>
            </div>
          </div>
        </div>
        <div class="col-lg-4"></div>
        <div class="col-lg-4"></div>
      </div>

    </div>


  <?php } ?>
  <script>
    function alert() {
      Swal.fire({
        title: "Good job!",
        text: "You clicked the button!",
        icon: "success"
      });
    }
  </script>
</body>


</html>
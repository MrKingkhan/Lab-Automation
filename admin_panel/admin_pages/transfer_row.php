<?php session_start(); ?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "lab_automation";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_button'])) {
  $row_id = $_POST['row_id'];

  // Fetch data based on the $row_id from the table you're displaying
  $sqlSelect = "SELECT product.id, product.product_id, product.product_name, product.comp_name , product.p_info , testing_service.testing_name , testing_service.testing_id
   FROM product INNER JOIN testing_service ON product.id = testing_service.id WHERE product.id = $row_id"; // Replace Table1 with your table name
  $resultSelect = mysqli_query($conn, $sqlSelect);

  if ($resultSelect) {
    $rowToTransfer = mysqli_fetch_assoc($resultSelect);

    // Insert the fetched data into another table in your database
    $g_p_id = $rowToTransfer['product_id'];
    $g_t_id = $rowToTransfer['testing_id'];
    $pname = $rowToTransfer['product_name'];
    $comp_name = $rowToTransfer['comp_name'];
    $t_type = $rowToTransfer['testing_name'];
    $p_info = $rowToTransfer['p_info'];
    // Adjust fields as per your table structure

    $sqlInsert = "INSERT INTO transfer_row (product_id , testing_id , product_name, comp_name , testing_type , p_info) VALUES ( '$g_p_id', '$g_t_id', '$pname', '$comp_name' , '$t_type' , '$p_info')"; // Replace Table2 with your other table name
    $resultInsert = mysqli_query($conn, $sqlInsert);

    if ($resultInsert) {
      $_SESSION['sent'] = "sent";
      header("location: owntable.php");
    } else {
      echo "Error inserting data: " . mysqli_error($conn);
    }
  } else {
    echo "Error fetching row data: " . mysqli_error($conn);
  }
}
?>
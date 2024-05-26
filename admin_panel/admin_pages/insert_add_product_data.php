<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "product_testing_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        // Form for adding product data submitted
        $product_name = $_POST['pname'];
        $comp_name = $_POST['comp_name'];
        $p_info = $_POST['p_discription'];
        $product_id = str_pad(mt_rand(1, 999999999999), 12, '0', STR_PAD_LEFT); // Generating 12-digit ID
        
        // Insert product data into the product table
        $insert_product_query = "INSERT INTO product (product_id, product_name , comp_name , p_info) VALUES ('$product_id', '$product_name' , '$comp_name' , '$p_info')";
        
        // Form for adding testing service data submitted
        $testing_name = $_POST['t_type'];
        $testing_id = str_pad(mt_rand(1, 999999999999), 12, '0', STR_PAD_LEFT); // Generating 12-digit ID
        
        // Insert testing service data into the testing_service table
        $insert_testing_query = "INSERT INTO testing_service (testing_id, testing_name) VALUES ('$testing_id', '$testing_name')";
        
        
        if ($conn->query($insert_product_query) === TRUE && $conn->query($insert_testing_query) === TRUE) {
            echo "New product and testing service record created successfully";
        } else {
            echo "Error: " . $insert_product_query . "<br>" . $conn->error;
        }
    } 
    // elseif (isset($_POST['testing_name'])) {
    //     // Form for adding testing service data submitted
    //     $testing_name = $_POST['testing_name'];
    //     $testing_id = str_pad(mt_rand(1, 999999999999), 12, '0', STR_PAD_LEFT); // Generating 12-digit ID
        
    //     // Insert testing service data into the testing_service table
    //     $insert_testing_query = "INSERT INTO testing_service (testing_id, testing_name) VALUES ('$testing_id', '$testing_name')";
        
    //     if ($conn->query($insert_testing_query) === TRUE) {
    //         echo "New testing service record created successfully";
    //     } else {
    //         echo "Error: " . $insert_testing_query . "<br>" . $conn->error;
    //     }
    // }
}

// Close connection
$conn->close();
?>

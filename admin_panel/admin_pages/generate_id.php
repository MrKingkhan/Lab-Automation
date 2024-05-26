<?php session_start(); ?>
<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lab_automation";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieving form data
$product_id = $_POST['product'];
$testing_id = $_POST['testing'];
$testingProductId = $_POST['testing_product_id'];

// $t_comp= $_POST['t_comp'];
// $p_info= $_POST['p_detail'];



$comp_query = "SELECT comp_name FROM transfer_row";
$comp_result = $conn->query($comp_query);
$comp = ($comp_result->num_rows > 0) ? $comp_result->fetch_assoc()['comp_name'] : '';

$info_query = "SELECT p_info FROM transfer_row";
$info_result = $conn->query($info_query);
$info = ($info_result->num_rows > 0) ? $info_result->fetch_assoc()['p_info'] : '';






// Fetching product name based on product ID
$product_query = "SELECT product_name FROM transfer_row WHERE product_id = '$product_id'";
$product_result = $conn->query($product_query);
$product_name = ($product_result->num_rows > 0) ? $product_result->fetch_assoc()['product_name'] : '';

// Fetching testing name based on testing ID
$testing_query = "SELECT testing_type FROM transfer_row WHERE testing_id = '$testing_id'";
$testing_result = $conn->query($testing_query);
$testing_name = ($testing_result->num_rows > 0) ? $testing_result->fetch_assoc()['testing_type'] : '';

// Check if Testing_product_id exists in testing_request table
$check_query = "SELECT Testing_product_id FROM testing_request WHERE Testing_product_id LIKE '$testingProductId%'";
$check_result = $conn->query($check_query);

if ($check_result->num_rows > 0) {
    // ID exists, fetch similar IDs count
    $existing_count = $check_result->num_rows;
    $nextAlphabet = chr(65 + $existing_count); // 'A' + count

    // Update the Testing_product_id
    $newTestingProductId = $testingProductId . $nextAlphabet;
} else {
    // ID doesn't exist, insert with 'A'
    $newTestingProductId = $testingProductId . 'A';
}


// Inserting data into testing_request table
$insert_query = "INSERT INTO testing_request (testing_product_id, product_name, testing_type, testing_comp, p_info) 
VALUES ('$newTestingProductId', '$product_name', '$testing_name', '$comp', '$info')";


if ($conn->query($insert_query) === TRUE) {
    $_SESSION['sent_for_testing'] = "sent_for_testing";
    header("location: testing_request_form.php");
} else {
    echo "Error: " . $insert_query . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
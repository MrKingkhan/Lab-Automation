<?php  session_start(); ?>
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

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['sent'])) {
    $row_id = $_POST['row_id'];

    // Fetch data based on the $row_id from the table you're displaying
    $sqlSelect = "SELECT approval_by_company.id, approval_by_company.testing_product_id, approval_by_company.product_name, approval_by_company.testing_type , approval_by_company.testing_comp , approval_by_company.p_info , approval_by_company.message
   FROM approval_by_company  WHERE approval_by_company.id = $row_id"; // Replace Table1 with your table name
    $resultSelect = mysqli_query($conn, $sqlSelect);

    if ($resultSelect) {
        $rowToTransfer = mysqli_fetch_assoc($resultSelect);

        // Insert the fetched data into another table in your database
        $g_t_p_id = $rowToTransfer['testing_product_id'];
        $p_name = $rowToTransfer['product_name'];
        $t_type = $rowToTransfer['testing_type'];
        $t_comp = $rowToTransfer['testing_comp'];
        $p_info = $rowToTransfer['p_info'];
        $message = $rowToTransfer['message'];
        // Adjust fields as per your table structure

        $sqlInsert = "INSERT INTO transfer_row_to_cpri (testing_product_id , product_name, testing_type , testing_comp , p_info , message) VALUES
        ( '$g_t_p_id', '$p_name', '$t_type', '$t_comp' , '$p_info' , '$message')"; // Replace Table2 with your other table name
        $resultInsert = mysqli_query($conn, $sqlInsert);

        if ($resultInsert) {
            $_SESSION['transfertocpri'] = "transfertocpri";
            header("location: tables.php");
        } else {
            echo "Error inserting data: " . mysqli_error($conn);
        }
    } else {
        echo "Error fetching row data: " . mysqli_error($conn);
    }
}

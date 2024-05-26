<?php session_start();  ?>
<?php
if (isset($_POST['delete'])) {
    $row_id = $_POST['row_id'];
    
    // Perform the database delete
    // Replace this with your database connection code
$conn = new mysqli("localhost", "root", "", "lab_automation");    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "DELETE FROM published WHERE id='$row_id'";

    if ($conn->query($sql) === true) {
        $_SESSION['delete'] = "delete";
        header("location: published_product_details.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

<?php  session_start(); ?>
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

// Check if a file was uploaded
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['published'])) {


        $filename = $_FILES["fileToUpload"]["name"];
        $tempname = $_FILES["fileToUpload"]["tmp_name"];
        $folder = 'uploads/' .$filename;
        move_uploaded_file($tempname , $folder);

        $pname = $_POST['pname'];
        $pinfo = $_POST['pinfo'];
        $pprice = $_POST['pprice'];

        $sql = "INSERT INTO published (product_name , product_info , product_price , product_img) VALUES ('$pname', '$pinfo' , '$pprice' , '$folder')";

        $resultInsert = mysqli_query($conn , $sql);

        if ($resultInsert) {
            $_SESSION['published'] = "published";
            header("location: finalize_product.php");
          } else {
            echo "Error inserting data: " . mysqli_error($conn);
          }



        mysqli_close($conn);

         
    }
}

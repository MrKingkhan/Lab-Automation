<?php 
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lab_automation";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['reject'])) {

        
        $p_name = $_POST['pname'];
        $t_type = $_POST['ttype'];
        $t_comp = $_POST['tcomp'];
        $p_info = $_POST['pinfo'];
        $message = $_POST['message'];
        $testing_product_id =$_POST['testing_product_id'];


        $sql = "INSERT INTO rejected_by_company (testing_product_id , product_name , testing_type 
        , testing_comp , p_info , message ) value (' $testing_product_id' , '$p_name' , '$t_type' , '$t_comp' , '$p_info' , '$message')";

        $result = mysqli_query($conn, $sql);

        if($result){
            $_SESSION['rejected'] = "rejected";
            header("location: product_form.php");
        }


        mysqli_close($conn);
    }

    if (isset($_POST['Approval'])) {

        
        $p_name = $_POST['pname'];
        $t_type = $_POST['ttype'];
        $t_comp = $_POST['tcomp'];
        $p_info = $_POST['pinfo'];
        $message = $_POST['message'];
        $testing_product_id =$_POST['testing_product_id'];


        $sql = "INSERT INTO approval_by_company (testing_product_id , product_name , testing_type 
        , testing_comp , p_info , message ) value (' $testing_product_id' , '$p_name' , '$t_type' , '$t_comp' , '$p_info' , '$message')";

        $result = mysqli_query($conn, $sql);

        if($result){
            $_SESSION['Approval'] = "Approval";
            header("location: product_form.php");
        }
        

        mysqli_close($conn);
    }
}



?>
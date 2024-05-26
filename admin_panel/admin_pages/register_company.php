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



if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['submit'])) {
        $_SESSION['testing_com_user_name'] = $_POST['comp_name'];
        $_SESSION['testing_com_user_pwd'] = $_POST['comp_pwd'];
        $comp_name = $_POST['comp_name'];
        $comp_email = $_POST['comp_email'];

        $city = $_POST['city'];
        $comp_adds = $_POST['comp_adds'];
        $pwd = $_POST['comp_pwd'];


        $sql = "INSERT INTO company_registrations (comp_name , comp_address , comp_pwd 
        , comp_city , comp_email ) value ('$comp_name' , '$comp_adds' , '$pwd' , '$city' , '$comp_email')";

        $result = mysqli_query($conn, $sql);




        if ($_SESSION['testing_com_user_name'] == true && $_SESSION['testing_com_user_pwd'] == true) {

            $_SESSION['registered'] = "registered";
            header("location: registration.php");
            
        } else {
            echo "session unset";
        }

        mysqli_close($conn);
    }
}

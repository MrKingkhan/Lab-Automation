<?php
session_start();
$servername = "localhost";
$username1 = "root";
$password1 = "";
$db = "lab_automation";
// $tester_name = $_SESSION['testing_com_user_name'] ;
// $tester_pwd = $_SESSION['testing_com_user_pwd'] ;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $conn = new mysqli($servername, $username1, $password1, $db);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM company_registrations WHERE comp_name = '$username' AND comp_pwd = '$password'";

    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){

        $_SESSION['t_comp'] = $username;

        header("location: admin_panel/testing_pages/dashboard.php");

    }



    // Check if the provided credentials match the Super Admin
    if ($username === "admin" && $password === "123") {
      

        $_SESSION['user_name'] = $username ;

        // Redirect to the index.php page upon successful login
        header("location: admin_panel/admin_pages/dashboard.php");
        
    }else if($username === "CPRI" && $password === "321"){
       

        $_SESSION['user_name2'] = $username ;

        // Redirect to the index.php page upon successful login
        header("location: admin_panel/CPRI/dashboard.php");

    }else{
        echo '<script>alert("Invalid Credentials")</script>';
          
    }
}


?>

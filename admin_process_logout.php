<?php

session_start();
session_unset();
session_destroy(); // Destroy the session and log out the Super Admin

// Redirect to the login page
header("location: index.php");

?>
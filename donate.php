<?php
    // Start a PHP session (if not already started)
    session_start();
    
    // Check if the user is not logged in; if not, redirect to the login page
    if (!isset($_SESSION['user_id'])) {
        header("Location: login.html");
        exit();
    }
    ?>
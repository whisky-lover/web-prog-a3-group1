<?php 
if (file_exists("install.php")) {
    exit("The install.php file is exit");
} else {
    session_start();
    
    // Check if users submit the form
    if (isset($_POST["submit-btn"]) && $_POST["submit-btn"] !== "") {

        // Create an array to store admin data from data.txt
        $admin_array = [];
        $admin_file = fopen('../data.txt', "r"); // Open the data.txt file
        flock($admin_file, LOCK_SH); // Set the file in shared mode (reader)
        
        $data = explode(",", fgets($admin_file));
        foreach($data as $info) {
            array_push($admin_array, $info);
        }

        print_r($admin_array);

        $data_username = $admin_array[0];
        $data_hashed_password = $admin_array[1];
        
        // Store the email or phone submitted in a variable
        $admin_username = $_POST["admin-username"];

        // Store the password submitted in a variable
        $admin_password = $_POST["admin-password"];

        // A variable to check if the username is in data.txt
        $valid_admin = false;

        // A variable to check if the password is in data.txt
        $valid_password = false;

        // A variable to store the error message
        $error_message = base64_encode("Incorrect username or password. Try again");
        
        // Verify admin username
        if ($admin_username == $data_username) {
            $valid_admin = true;
        } else {
            $valid_admin = false;
        }

        // Verify admin password
        if (password_verify($admin_password, $data_hashed_password)) {
            $valid_password = true;
        } else {
            $valid_password = false;
        }

        // Check if the admin is valid with the right username and password
        if ($valid_admin && $valid_password) {
            // Create a session to validate and use admin info in cms.php
            $_SESSION["admin-login"] = true;
            $_SESSION["admin-username"] = $_POST["admin-username"];
            // If valid, redirect to CMS page
            header("Location: ./cms.php");
        } else {
            // If invalid, send an error message and redirect back to admin-login.php page
            header("Location: ../code/admin-login.php?error_message=$error_message");        
        }

        
        // Release the lock of the admin file
        flock($admin_file, LOCK_UN);

        // Close the admin file
        fclose($admin_file);
    }
}

?>
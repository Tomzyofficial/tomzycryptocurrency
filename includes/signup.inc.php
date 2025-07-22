<?php
include 'dbh.inc.php';
include 'sessions.inc.php';

if(isset($_POST['submit'])){

    $user_name = mysqli_real_escape_string($conn, $_POST['user_name']);
    $user_email = mysqli_real_escape_string($conn, $_POST['user_email']);
    $user_pwd = mysqli_real_escape_string($conn, $_POST['user_pwd']);

    //error handlers
    //check for empty fields
    if(empty($user_name) || empty($user_email) || empty($user_pwd)){
        $_SESSION["errorMessage"] = "All input field must be filled!";
        header("Location: ../signup.php");
        exit();
    } else {
        //check if input characters are valid
        if (!preg_match("/^[a-zA-Z0-9 ]*$/", $user_name)) {
            $_SESSION["errorMessage"] = "Username must contain only alphabets and numbers!";
            header("Location: ../signup.php");
            exit();
        } else {
            //check if user_email is valid
            if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
                $_SESSION["errorMessage"] = "Invalid email address!";
                header("Location: ../signup.php");
                exit();
            } else {
                $sql = "SELECT * FROM users WHERE user_name = '$user_name'";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if ($resultCheck > 0) {
                    $_SESSION["errorMessage"] = "Username already taken choose another!";
                    header("Location: ../signup.php");
                    exit(); 
                } else {
                    //hashing the password
                    $hashedPwd = password_hash($user_pwd, PASSWORD_DEFAULT);
                    //insert the user into the database
                    $sql = "INSERT INTO users (user_name, user_email, user_pwd) VALUES ('$user_name', '$user_email', '$hashedPwd');";
                    mysqli_query($conn, $sql);    
                    
                    if ($sql) {
                      $_SESSION["successMessage"] = "Account created. Process to login.";
                      header("Location: ../sell.php");
                      exit();
                    } else {
                      return;
                    }
                }
            }
        }
    }

} else {
    header("Location: ../signup.php");
    exit();
}
<?php
include 'dbh.inc.php';
include 'sessions.inc.php';

if(isset($_POST['submit'])){

    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

    //error handlers
    //check for empty fields
    if(empty($uid) || empty($email) || empty($pwd)){
        $_SESSION["errorMessage"] = "All input field must be filled!";
        header("Location: ../signup.php");
        exit();
    } else {
        //check if input characters are valid
        if (!preg_match("/^[a-zA-Z0-9 ]*$/", $uid)) {
            $_SESSION["errorMessage"] = "Username must contain only alphabets and numbers!";
            header("Location: ../signup.php");
            exit();
        } else {
            //check if email is valid
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $_SESSION["errorMessage"] = "Invalid email address!";
                header("Location: ../signup.php");
                exit();
            } else {
                $sql = "SELECT * FROM users WHERE user_uid = '$uid'";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if ($resultCheck > 0) {
                    $_SESSION["errorMessage"] = "Username already taken choose another!";
                    header("Location: ../signup.php");
                    exit(); 
                } else {
                    //hashing the password
                    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                    //insert the user into the database
                    $sql = "INSERT INTO users (user_uid, user_email, user_pwd) VALUES ('$uid', '$email', '$hashedPwd');";
                    mysqli_query($conn, $sql);    
                    header("Location: ../sell.php");
                    exit();
                }
            }
        }
    }

} else {
    header("Location: ../signup.php");
    exit();
}
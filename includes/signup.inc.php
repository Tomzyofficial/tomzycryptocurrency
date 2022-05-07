<?php
include 'dbh.inc.php';

if(isset($_POST['submit'])){

    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

    //error handlers
    //check for empty fields
    if(empty($uid) || empty($email) || empty($pwd)){
        header("Location: ../signup.php?signup=emptyfields");
        exit();
    } else {
        //check if input characters are valid
        if (!preg_match("/^[a-zA-Z0-9]*$/", $uid)) {
            header("Location: ../signup.php?signup=invalid");
            exit();
        } else {
            //check if email is valid
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header("Location: ../signup.php?signup=invalidemail");
                exit();
            } else {
                $sql = "SELECT * FROM users WHERE user_uid = '$uid'";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if ($resultCheck > 0) {
                    header("Location: ../signup.php?signup=usernametaken");
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
    header("Location: ../tip.php");
    exit();
}
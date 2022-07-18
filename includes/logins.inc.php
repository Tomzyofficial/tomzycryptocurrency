<?php

include 'dbh.inc.php';
include 'sessions.inc.php';

if (isset($_POST['submit'])) {

    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
   
    //error handler 
    //check if inputs are empty
    if (empty($uid) || empty($pwd)) {
        $_SESSION["errorMessage"] = "All input field must be filled!";
        header("Location: ../login.php");
        exit(); 
    } else {
        $sql = "SELECT * FROM users WHERE user_uid = '$uid' OR user_email = '$uid'";
        $result = mysqli_query($conn, $sql); 
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck < 1) {
            $_SESSION["errorMessage"] = "No data of such was found on our record!";
            header("Location: ../login.php");
            exit();
        } else {
            if ($row = mysqli_fetch_assoc($result)) {
                //dehashing password
                $hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
                if ($hashedPwdCheck == false) {
                    $_SESSION["errorMessage"] = "Invalid username or password!";
                    header("Location: ../login.php");
                    exit(); 
                } elseif ($hashedPwdCheck == true) {
                    $_SESSION['u_id'] = $row['user_id'];
                    $_SESSION['u_uid'] = $row['user_uid'];
                    $_SESSION['u_email'] = $row['user_email'];                    
                    header("Location: ../sell.php?loggedIn=$_SESSION[u_uid]");
                    exit(); 
                }
            }
        }
    }
} else {
    header("Location: ../login.php");
    exit();
}
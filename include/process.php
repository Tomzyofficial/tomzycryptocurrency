<?php
include 'sessions.inc.php';
include   'connection.php';
if(isset($_POST["submit"])) {
   

    $firstname = mysqli_real_escape_string ($conn, $_POST["firstname"]);
    $lastname = mysqli_real_escape_string ($conn, $_POST["lastname"]);
    $email = mysqli_real_escape_string ($conn, $_POST["email"]);
    $phoneNumber = mysqli_real_escape_string ($conn, $_POST["phoneNumber"]);
    $country = mysqli_real_escape_string ($conn, $_POST["country"]);
    $state = mysqli_real_escape_string ($conn, $_POST["state"]);
    $bankNumber = mysqli_real_escape_string ($conn, $_POST["bankNumber"]);
    $bankName = mysqli_real_escape_string ($conn, $_POST["bankName"]);
    $amount = mysqli_real_escape_string ($conn, $_POST["amount"]);
    $fileUpload = mysqli_real_escape_string ($conn, $_POST["file"]);
    $checkBoxExample = mysqli_real_escape_string ($conn, $_POST["checkBoxExample"]);

    //error handlers
    
    //if input are empty
    if(empty($firstname) || empty($lastname) || empty($email) || empty($phoneNumber) || empty($country) 
    || empty($state) || empty($bankNumber) || empty($bankName) || empty($amount) || empty($fileUpload) 
    || empty($checkBoxExample)) {
        $_SESSION["errorMessage"] = "All input field must be filled!";
        header("Location: ../sell.php?sell=emptyfields");
        exit();
    } else {
        if(!preg_match("/^[a-zA-Z ]*$/", $firstname) || !preg_match("/^[a-zA-Z ]*$/", $lastname)) {
            $_SESSION["errorMessage"] = "Please give a valid name!";
            header("Location: ../sell.php?sell=invalidname");
            exit();
        } else {
            $sql = "INSERT INTO intakes (user_firstName, 
                    user_lastName, user_email, user_phoneNumber,
                    user_country, user_states, user_bankNumber, 
                    user_bankName, user_amount, user_fileUpload, 
                    user_checkBoxExample) VALUES ('$firstname', '$lastname', '$email', 
                    '$phoneNumber', '$country', '$state', '$bankNumber', '$bankName', '$amount', '$fileUpload', '$checkBoxExample')";
                    mysqli_query($conn, $sql);
                    $_SESSION['successMessage'] = "Your sell was successful!";
                 
                    header("Location: ../sell.php?sell=successful");
                    exit();
                        
        }
    }
} else {
    header("Location: ../login.php?" );
    exit();
}






<?php
session_start();
include "db_conn.php";

if (isset($_POST['new_password']) && isset($_POST['confirm_password'])) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $new_password = validate($_POST['new_password']);
    $confirm_password = validate($_POST['confirm_password']);
    if (empty($new_password)) {
        header("Location: reset-password.php?error=Password is required");
        exit();
    }else if(empty($confirm_password)){
        header("Location: reset-password.php?error=Confirm your password");
        exit();
    }else if($new_password != $confirm_password){
        header("Location: reset-password.php?error=Your passwords do not match!");
        exit();
    }else{

        $email = "";
        $sql = "UPDATE users SET password='$new_password' WHERE email='$email'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            header("Location: reset-password.php");
        }else{
            header("Location: reset-password.php?error=System failed to update database");
            exit();
        }
    }
}else{
    header("Location: reset-password.php");
    exit();
}
?>
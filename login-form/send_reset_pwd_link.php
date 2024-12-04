<?php
session_start();
include "db_conn.php";

if (isset($_POST['email'])) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $email = validate($_POST['email']);
    if (empty($email)) {
        header("Location: forgot-password.php?error=Email is required");
        exit();
    }else{

        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
                header("Location: reset-password.php");
                exit();
        }else{
            header("Location: forgot-password.php?error=Email does not exist");
            exit();
        }
    }
}else{
    header("Location: forgot-password.php");
    exit();
}
?>
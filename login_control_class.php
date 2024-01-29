<?php
require './conn.php';

if (isset($_POST)) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM login_table WHERE username = ?";

    $stmt = mysqli_stmt_init($conn);

    if (mysqli_stmt_prepare($stmt, $query)) {

        mysqli_stmt_bind_param($stmt, 's', $username);

        if (mysqli_stmt_execute($stmt)) {

            $result = mysqli_stmt_get_result($stmt);

            $row = mysqli_fetch_assoc($result);
            //make passwords hash user " password_verify($password, $row['password'])" to verify that here bro 
            //for now i am not using that
            if ($row && ($password == $row['password'])) {

                echo "valid";
            } else {

                echo "invalid";
            }
        }
    }
}

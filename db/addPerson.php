<?php
    session_start();
    require_once('connect.php');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $queryCheck = "SELECT email FROM users WHERE email = '{$_POST['email']}'";
    $resultCheck = mysqli_query($conn, $queryCheck);
    $count = mysqli_num_rows($resultCheck);

    if($count > 0){
        header("Location: ../registration.php");
    }else{
        $queryInsert = "INSERT INTO users (first_name, last_name, email, password, role_id) VALUES ('{$_POST['first_name']}', '{$_POST['last_name']}', '{$_POST['email']}', '{$_POST['password']}', '{$_POST['role_id']}')";
        mysqli_query($conn, $queryInsert);
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['role_id'] = $_POST['role_id'];

        header("Location: ../index.php");
    }
?>

<?php
    session_start();
    require_once('db/connect.php');


if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $query = "SELECT email, role_id FROM users WHERE email='{$_POST['email']}' AND password='{$_POST['password']}'";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);

    if($count > 0){
        $row = mysqli_fetch_array($result);
        $_SESSION['email'] = $row['email'];
        $_SESSION['role_id'] = $row['role_id'];
    }

    header("Location: index.php");
?>
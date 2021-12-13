<?php
    session_start();
    require_once('connect.php');
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $queryCheck = "SELECT id FROM users WHERE email = '{$_SESSION['email']}'";
    $resultCheck = mysqli_query($conn, $queryCheck);
    $rowCheck = mysqli_fetch_array($resultCheck);

    if($rowCheck['id'] == $_POST['id']){
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['role_id'] = $_POST['role_id'];
    }
    $queryUpdate = "UPDATE users SET first_name = '{$_POST['first_name']}', last_name = '{$_POST['last_name']}', email = '{$_POST['email']}', role_id = '{$_POST['role_id']}', password = '{$_POST['password']}' WHERE id = '{$_POST['id']}'";
    mysqli_query($conn, $queryUpdate);

    header("Location: ../index.php");
?>

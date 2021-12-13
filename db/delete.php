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
        unset($_SESSION['email']);
        unset($_SESSION['role_id']);
    }
    $queryDelete = "DELETE FROM users WHERE id = '{$_POST['id']}'";
    mysqli_query($conn, $queryDelete);

    header("Location: ../index.php");

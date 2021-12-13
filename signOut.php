<?php
    session_start();
    $_SESSION['auth'] = false;
    unset($_SESSION['email']);
    unset($_SESSION['role_id']);
    header("Location: index.php");
?>
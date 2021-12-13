<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../../assets/css/stl.css">
    <div class="header">
    <div class="container">
        <a href="index.php" class="logo">
            <img src="../../assets/img/logo.png" width="220" height="220"
            alt="" style="position:absolute;top:0px;left:50px"/>
          </a>
        </div>
   </div>
</head>

<body>
    <?php
        session_start();
        if(array_key_exists("email", $_SESSION) && array_key_exists("role_id", $_SESSION)){
            if($_SESSION['role_id'] == 0){
                require_once('profileAdmin.php');
            }else if($_SESSION['role_id'] == 1){

                require_once('C:\xampp\htdocs\db\connect.php');

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $query = "SELECT id FROM users WHERE email = '{$_SESSION['email']}'";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_array($result);
                
                if($_GET['id'] == $row['id']){
                    require_once('profileUser.php');
                }else{
                    require_once('UnProfile.php');
                }

            }
        }else{
            require_once('UnProfile.php');
        }
    ?>
</body>

<script src="../../assets/js/script.js"></script>

</html>

<link rel="stylesheet" href="../../assets/css/stl.css">
<div class="buttons" style="margin: 10px 0;"class="text-center">
        <form action="profiles/profile.php" method="get">
            <?php
            require_once('db/connect.php');
            if ($conn->connect_error) {
                     die("Connection failed: " . $conn->connect_error);
                    }
                
                $query = "SELECT id, first_name FROM users WHERE email = '{$_SESSION['email']}'";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_array($result);
                echo '<button type="submit" class="btn btn-success" style="position:absolute;top:70px;right:330px" name="id" value="' .$row['id']. '">' .$row['first_name']. '</button>';
            ?>
        </form>
        <h1><a  href="signOut.php" style="position:absolute;top:70px;right:120px">SIGN OUT</a></h1>     
    </div>
    
    <?php
        require_once('tableOfUsers.php');
    ?>

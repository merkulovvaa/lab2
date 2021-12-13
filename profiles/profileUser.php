<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link rel="stylesheet" href="../assets/css/stl.css">
<?php
    require_once('C:\xampp\htdocs\db\connect.php');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $queryUser = "SELECT * FROM users WHERE id = '{$_GET['id']}'";
    $resultUser = mysqli_query($conn, $queryUser);
    if($resultUser) {
        $user = mysqli_fetch_array($resultUser);
    } else {
       echo "<p>Error</p>";
    }
    if($user['role_id'] == 0){
        $role = "Admin";
    } else if($user['role_id'] == 1){
        $role = "User";
    }
//    $queryRole = "SELECT `title` FROM roles WHERE `id` = '{$user['role_id']}'";
//    $resultRole = mysqli_query($conn, $queryRole);
//    $role = mysqli_fetch_array($resultRole);

?>

<div class="text-center">
    <div class="Center">
        <div class="img-group">
            <?php
                if($user['photo'] == ''){
                    echo '<img src="../../assets/img/default-user-icon.jpg" alt="" width="170" height="170">';
                }else{
                    if(file_exists("../images/{$user['photo']}")){
                        echo '<img src="../images/' .$user['photo']. '" alt="" width="170" height="170">';
                    }else{
                        echo '<img src="../../assets/img/default-user-icon.jpg" alt="" width="170" height="170">';
                    }
                }
            ?>

            <form action="../db/updatePhoto.php" method="post" enctype="multipart/form-data">
                <div class="input-group mb-3">
                    <div class="custom-file">
                        <label for="inputGroupFile">Choose image to upload</label>
                        <p><input type="file" class="custom-file-input" id="inputGroupFile" name="fileToUpload"></p>
                    </div>
                </div>
                <?php
                    echo '<button type="submit" class="btn btn-primary" style="width: 50%;" name="id" value="' .$_GET['id']. '">UPDATE PHOTO</button>';
                ?>
            </form>
        </div>



    <form action="../db/updateInfo.php" method="post">
        <div class="form-group">
            <?php
                echo '<input type="text" class="form-control" name="first_name" value="' .$user['first_name']. '" required>';
            ?>
        </div>
        <div class="form-group">
            <?php
                echo '<input type="text" class="form-control" name="last_name" value="' .$user['last_name']. '" required>';
            ?>
        </div>
        <div class="form-group">
            <?php
                echo '<input type="email" class="form-control" name="email" value="' .$user['email']. '" required>';
            ?>
        </div>
        <div class="form-group">
            <select class="select-css" name="role_id" id="roleControll">
                <option selected value="2">User</option>
            </select>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" id="password" minlength="6" placeholder="Password" required>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" minlength="6" id="confirm_password" minlength="6" placeholder="Confirm password" required>
        </div>
        <div class="buttons">
            <?php
                echo '<button type="submit" class="btn btn-secondary" name="id" value="' .$_GET['id']. '">EDIT</button>';
            ?>
        </div>
    </form>

    <form action="../db/delete.php" method="post">
        <div class="buttons">
<!--            --><?php
                echo '<button type="submit" class="btn btn-danger" name="id" value="' .$_GET['id']. '">DELETE</button>';
            ?>
        </div>
    </form>
    <button class="btn btn-secondary" onClick = "document.location='../index.php'">TO MAIN PAGE</button>
</div>
</div>

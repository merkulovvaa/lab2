<table class="table" >
    <thead>
        <th>#</th>
        <th>First Name</th> 
        <th>Last Name</th>
        <th>Login</th>
        <th>Role</th>
    </thead>
    <tbody>
        <?php
            require_once('db/connect.php');

            $queryUser = "SELECT * FROM users";
            $resultUser = mysqli_query($conn, $queryUser);

            if($resultUser){
                while($rowUser = mysqli_fetch_array($resultUser)){
                    $url = "profiles/profile.php?id=".$rowUser['id'];
                    echo "<tr>";
                        echo "<td><a href='$url'>".$rowUser['id']."</a></td>";
                        echo "<td>".$rowUser['first_name']."</td>";
                        echo "<td>".$rowUser['last_name']."</td>";
                        echo "<td>".$rowUser['email']."</td>";

                        if($rowUser['role_id'] == 1){
                            echo "<td>"."User"."</td>";
                        }else{
                                echo "<td>"."Admin"."</td>";
                             }
                    echo "</tr>";
                }
            }
        ?>
    </tbody> 
</table>

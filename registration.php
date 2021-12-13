<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link rel="stylesheet" href="../assets/css/stl.css">

<!doctype html>
<html lang="en">

<head> 
<meta charset="utf-8">
<div class="header">
			<div class="container">
				<a href="index.php" class="logo">
                    <img src="../assets/img/logo.png" width="190" height="220"
            alt="" style="position:absolute;top:0px;left:0px"/>

                </a>
            </div>
</div>
<h1><a  href="login_page.php" style="position:absolute;top:30px;right:100px">SIGN IN</a></h1>

<h1><a  href="registration.php" style="position:absolute;top:70px;right:100px">SIGN UP</a></h1>
</head>

<body>
<form action="db/addPerson.php" method="post" class="justify-content-center">
    <div class="text-center">
    <p><input type="text" placeholder="Enter First Name" name="first_name" required></p>
    <p><input type="text" placeholder="Enter Last Name" name="last_name" required></p>
    <p><input type="email" placeholder="Enter Login" name="email" required></p>
    <p><select placeholder="Select role"  class="select-css" name="role_id" required>
        <option selected disabled>Select role</option>
        <option value="1">User</option>
        <option value="2">Admin</option>
        </select></p>
    <p><input type="password" placeholder="Enter Password" name="password" required></p>
    <p><input type="password" placeholder="Confirm Password" minlength="6" required></p>
    <input type="submit" value="SIGN UP">
    <button type="button" class="btn" onClick = "document.location='index.php'">TO MAIN PAGE</button>
    </div>
</form>
</body>
<script src="../assets/js/script.js"></script>
</html>

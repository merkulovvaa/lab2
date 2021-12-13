<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link rel="stylesheet" href="/assets/css/stl.css">
<link rel="stylesheet" href="/assets/css/tbl.css">


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

<?php require_once('tableOfUsers.php');?>

<div id="popUp">
    <div id="loginPopUp">
      <div id="closePopUp">
        <button class="btn btn-danger" style="position:absolute;top:230px;right:485px" 
        onClick="PopUpHide()">X</button>
      </div>
        <form action="Session.php" method="post" class="justify-content-center ">
          <div class="text-center">
            <input type="email" placeholder="Enter Login" name="email" required>
            <p><input type="password" placeholder="Enter Password"name="password" required></p>
            <input type="submit" value="SIGN IN">
            <button type="button" class="btn" onClick = "document.location='index.php'">TO MAIN PAGE</button>
          </div>
        </form>
    </div>
  </div>
  
<script src="http://code.jquery.com/jquery-2.0.2.min.js"></script>
<script>
    function PopUpShow(){
        $("#popUp").show();
    }
    function PopUpHide(){
        $("#popUp").hide();
    }
</script>
</html>

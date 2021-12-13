<!doctype html>
<html lang="en">
<head>
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
</head>
<body>
<?php session_start(); ?>
<?php
    require_once('login_page.php');
?>
</body>

<script src="http://code.jquery.com/jquery-2.0.2.min.js"></script>
<script>
    $(document).ready(function(){   
        PopUpHide();
    });
    function PopUpShow(){
        $("#popUp").show();
    }
    function PopUpHide(){
        $("#popUp").hide();
    }
</script>
</html>

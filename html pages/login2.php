<?php
//including the database connection file
include_once("connect.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Retail Property</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <div style="background-color: rgb(211, 206, 206); padding-bottom: 10%;"> 
  <?php require_once('navbar.php'); ?>



<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<div class="container" style="padding-top: 9%; padding-left: 20%;  text-align: center;  height: 800px; ;" >

    <!--row 1-->
    <div class="row size" style=" background-color: cadetblue; border-top-left-radius: 15px; border-top-right-radius: 15px;  ">   
    <button onclick="window.location.href='login.php'"  class="col-sm btn btn-dark" style="border-radius: 15px; margin: 1px;background-color: rgb(40, 122, 122); border-top-left-radius: 15px; color: white; letter-spacing: 5px;">User</button>
    <button onclick="window.location.href='login2.php'" class="col-sm btn btn-dark"  style=" border-radius: 15px; margin: 1px;background-color: rgb(28, 68, 70);border-top-right-radius: 15px;letter-spacing: 5px; color: white;">Admin</button>
    </a></div>

    <form action="login2.php" method="post" name="form">
    <!--row 2-->
  <div class="row size" style="  padding-top: 4%;background-color: cadetblue;">
    <div class="input-group mb-3" style="width: 60%; margin: auto;">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1"><i class="fa fa-user icon"></i></span>
        </div>
        <input type="text" class="form-control" placeholder="Username" name = "user_name" aria-label="Username" aria-describedby="basic-addon1">
      </div>
  </div>

  <div class="row size" style=" background-color: cadetblue;">
    <div class="input-group mb-3" style="width: 60%; margin: auto;">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1"><i class="fa fa-key icon"></i></span>
        </div>
        <input type="password" class="form-control" placeholder="Password" name = "password" aria-label="Password" aria-describedby="basic-addon1">
    </div>
  </div>

  <div class="row size" style=" background-color: cadetblue; border-bottom-right-radius: 20px; border-bottom-left-radius: 20px; ">
    <div class="input-group mb-3" style="width: 60%; margin-left: 35%;">
        <button type = "submit" name = "login" class="btn btn-success" style="width: 50%;">Login</button>
    </div>
  </div>
</form>
<?php

$result = mysqli_query($mysqli, "SELECT * FROM admin_info "); 
$error=1;

if(isset($_POST['login']) && $_SESSION['logIn'] == 0) {	
  $user_name = mysqli_real_escape_string($mysqli, $_POST['user_name']);
  $password = mysqli_real_escape_string($mysqli, $_POST['password']);

    while($res = mysqli_fetch_array($result)) { 
      if($res['admin_name'] == $user_name ){
        if($res['password'] == $password){
          echo "user logged in";
          $_SESSION['logIn'] = 1;
          $_SESSION['login_user'] = $user_name;
          $error = 0;
        }
      break;
      }
    }
        
  if($error == 1 && $_SESSION['logIn'] == 0 ){
        echo "User incorrect";
  } 
      $mysqli->close();
}
?>
</div>

    <!--main div ends-->
</div>

</body>
</html>
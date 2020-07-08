<!DOCTYPE html>
<html>

<head>
    <title>Retail Property</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
  <div style="background-color: rgb(240, 238, 238); padding-bottom: 10%;"> 
<?php
require_once('navbar.php');
?>


<div class="beech size2 shadow" style="margin-top: 7%; border-radius:25px ; border: 2px solid black; background-color: cadetblue;">
   <h3 style="text-align: left;"><i class="fa fa-globe" style="font-size:36px"></i> SIGN UP!</h3>
    <div style="border: .5px solid black;"></div>
<div>
<div class="hide-m hide-t" style="float: right; width: 35%; border-left: .5px solid black; color: rgb(204, 204, 212); text-align: left; padding-left: 2%;">
    <br><h6 style="color: white;">Why join Retail Property?</h6>

    <i class='fas fa-angle-right'></i> This is project by Sartaj<br>
    <i class='fas fa-angle-right'></i> This website tell you about the latest offers<br>
    <i class='fas fa-angle-right'></i> This tell about the latest trends<br>
    <i class='fas fa-angle-right'></i> This is project by Sartaj<br>
    <i class='fas fa-angle-right'></i> This is project by Sartaj<br>
    <i class='fas fa-angle-right'></i> This is project by Sartaj<br>
    <i class='fas fa-angle-right'></i> This is project by Sartaj<br>
    <i class='fas fa-angle-right'></i> This is project by Sartaj<br>
    <i class='fas fa-angle-right'></i> This is project by Sartaj<br>

    
   </div>
<br>
<form action="signup.php" method="post" name="form1">
        <div class="row size">
            <div class="input-group mb-3" style=" padding-left: 7%;">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1"><i class="fa fa-user icon"></i></span>
                </div>
                
                <input type="text" class="form-control" placeholder="Username" name = "user_name" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>
        </div>

                    
        <?php
$result = mysqli_query($mysqli, "SELECT * FROM user_info "); 

if(isset($_POST['signup'])) {	
	$user_name = mysqli_real_escape_string($mysqli, $_POST['user_name']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);

    //checking if user exist
    $flag1 = 0;

    if ($user_name && $email){
        while($res = mysqli_fetch_array($result)) { 
            if($res['user_name'] == $user_name ){
                $flag1=1;
                echo '      <div class="row size" style="padding-left:8% ; color: red;">
                                *User Exist 
                            </div><br>';
        }}}
}
?>
        <div class="row size">
            <div class="input-group mb-3" style=" padding-left: 7%;">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"> <i class="fa fa-envelope" ></i></span>
                </div>
                <input type="email" class="form-control" placeholder="Email" name = "email" aria-label="Email" aria-describedby="basic-addon1" required>
            </div>
        </div>

        <div class="row size">
            <div class="input-group mb-3" style=" padding-left: 7%;">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-key icon"></i></span>
                </div>
                <input type="password" class="form-control" placeholder="Password" name = "password" aria-label="Password" aria-describedby="basic-addon1" required>
            </div>
        </div>

        <div class="row size">
            <div class="input-group mb-3" style=" padding-left: 7%;">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-key icon"></i></span>
                </div>
                <input type="password" class="form-control" placeholder="Confirm Password" name = "c_password" aria-label="Password" aria-describedby="basic-addon1" required>
            </div>
        </div>

        
<?php
$result = mysqli_query($mysqli, "SELECT * FROM user_info "); 

if(isset($_POST['signup'])) {   
    $password = mysqli_real_escape_string($mysqli, $_POST['password']);
    $c_password = mysqli_real_escape_string($mysqli, $_POST['c_password']);
    
$flag2 =0;
    if($password != $c_password){
        $flag2 =1;
        echo '  <div class="row size">
                    <div class="input-group mb-3" style=" padding-left: 15%; color:red">
                         *Password not match 
                    </div>
                </div>';          
    }
}
?>
<br>
       <div class="row size">
            <div class="input-group mb-3" style=" padding-left: 10%;">
                <button type="submit" name = "signup" class="btn btn-success size btn-lg btn-block"  >Sign Up</button>
       </form>
    <br>
    </div>
</div>
</div>

<?php
$result = mysqli_query($mysqli, "SELECT * FROM user_info "); 

if(isset($_POST['signup'])) {   
    $user_name = mysqli_real_escape_string($mysqli, $_POST['user_name']);
    $password = mysqli_real_escape_string($mysqli, $_POST['password']);
    $c_password = mysqli_real_escape_string($mysqli, $_POST['c_password']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    
    // all things satisfied profile signed up
    if ($flag1==0 && $flag2 ==0){
        $result = mysqli_query($mysqli, "INSERT INTO `user_info` ( `user_name`, `email`, `password`) VALUES ('$user_name','$email','$password');");
        echo '  <div class="row size" style= "text-align:center">
                    <div class="input-group mb-3" style=" padding-left: 7%; text-align:center">
                        <p>Account registered</p> 
                    </div>
                </div>';
    }
 $mysqli->close();
}
?>


<!--main div ends-->
</div>
</body>
</html>
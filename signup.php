<?php
session_start();
//including the database connection file
include_once("connect.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Retail Property</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="main.js"></script>
</head>
<body>
  <div style="background-color: rgb(240, 238, 238); padding-bottom: 10%;"> 
<?php
require_once('navbar.html');
?>


<div class="beech size2" style="margin-top: 7%; border: 2px solid black; background-color: cadetblue;">
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

    
   </div>
<br>
<form action="signup.php" method="post" name="form1">
        <div class="row size">
            <div class="input-group mb-3" style=" padding-left: 7%;">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1"><i class="fa fa-user icon"></i></span>
                </div>
                
                <input type="text" class="form-control" placeholder="Username" name = "user_name" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>

        <div class="row size">
            <div class="input-group mb-3" style=" padding-left: 7%;">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"> <i class="fa fa-envelope" ></i></span>
                </div>
                <input type="email" class="form-control" placeholder="Email" name = "email" aria-label="Email" aria-describedby="basic-addon1">
            </div>
        </div>

        <div class="row size">
            <div class="input-group mb-3" style=" padding-left: 7%;">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-key icon"></i></span>
                </div>
                <input type="password" class="form-control" placeholder="Password" name = "password" aria-label="Password" aria-describedby="basic-addon1">
            </div>
        </div>

        <div class="row size">
            <div class="input-group mb-3" style=" padding-left: 7%;">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-key icon"></i></span>
                </div>
                <input type="password" class="form-control" placeholder="Confirm Password" name = "c_password" aria-label="Password" aria-describedby="basic-addon1">
                <span id='message'></span>
            </div>
        </div>


        <div class="row size">
            <div class="input-group mb-3" style=" padding-left: 7%;">
                <b>Date of Birth</b> 
            </div>
        </div>

        <div class="row size">
            <div class="input-group mb-3" style=" padding-left: 14%;">
                <div class="input-group-prepend">
                    
                    <div class="row">
                        <div class="col-xs-4 col-md-4.5" style="padding: 1%;">
                            <select name="month" class = "form-control input-lg">
                            <option value="01">Jan</option>
                            <option value="02">Feb</option>
                            <option value="03">Mar</option>
                            <option value="04">Apr</option>
                            <option value="05">May</option>
                            <option value="06">Jun</option>
                            <option value="07">Jul</option>
                            <option value="08">Aug</option>
                            <option value="09">Sep</option>
                            <option value="10">Oct</option>
                            <option value="11">Nov</option>
                            <option value="12">Dec</option>
                            </select>                        </div>
            <div class="col-xs-4 col-md-4.5" style="padding: 1%;">
                <select name="day" class = "form-control input-lg">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
</select>                        </div>
            <div class="col-xs-4 col-md-4.5" style="padding-top: 1%;">
                <select name="year" class = "form-control input-lg">
                            <option value="1935">1935</option>
                            <option value="1936">1936</option>
                            <option value="1937">1937</option>
                            <option value="1938">1938</option>
                            <option value="1939">1939</option>
                            <option value="1940">1940</option>
                            <option value="1941">1941</option>
                            <option value="1942">1942</option>
                            <option value="1943">1943</option>
                            <option value="1944">1944</option>
                            <option value="1945">1945</option>
                            <option value="1946">1946</option>
                            <option value="1947">1947</option>
                            <option value="1948">1948</option>
                            <option value="1949">1949</option>
                            <option value="1950">1950</option>
                            <option value="1951">1951</option>
                            <option value="1952">1952</option>
                            <option value="1953">1953</option>
                            <option value="1954">1954</option>
                            <option value="1955">1955</option>
                            <option value="1956">1956</option>
                            <option value="1957">1957</option>
                            <option value="1958">1958</option>
                            <option value="1959">1959</option>
                            <option value="1960">1960</option>
                            <option value="1961">1961</option>
                            <option value="1962">1962</option>
                            <option value="1963">1963</option>
                            <option value="1964">1964</option>
                            <option value="1965">1965</option>
                            <option value="1966">1966</option>
                            <option value="1967">1967</option>
                            <option value="1968">1968</option>
                            <option value="1969">1969</option>
                            <option value="1970">1970</option>
                            <option value="1971">1971</option>
                            <option value="1972">1972</option>
                            <option value="1973">1973</option>
                            <option value="1974">1974</option>
                            <option value="1975">1975</option>
                            <option value="1976">1976</option>
                            <option value="1977">1977</option>
                            <option value="1978">1978</option>
                            <option value="1979">1979</option>
                            <option value="1980">1980</option>
                            <option value="1981">1981</option>
                            <option value="1982">1982</option>
                            <option value="1983">1983</option>
                            <option value="1984">1984</option>
                            <option value="1985">1985</option>
                            <option value="1986">1986</option>
                            <option value="1987">1987</option>
                            <option value="1988">1988</option>
                            <option value="1989">1989</option>
                            <option value="1990">1990</option>
                            <option value="1991">1991</option>
                            <option value="1992">1992</option>
                            <option value="1993">1993</option>
                            <option value="1994">1994</option>
                            <option value="1995">1995</option>
                            <option value="1996">1996</option>
                            <option value="1997">1997</option>
                            <option value="1998">1998</option>
                            <option value="1999">1999</option>
                            <option value="2000">2000</option>
                            <option value="2001">2001</option>
                            <option value="2002">2002</option>
                            <option value="2003">2003</option>
                            <option value="2004">2004</option>
                            <option value="2005">2005</option>
                            <option value="2006">2006</option>
                            <option value="2007">2007</option>
                            <option value="2008">2008</option>
                            <option value="2009">2009</option>
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
</select>                        
            </div>
        </div>
    </div>
</div>
</div>
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
    
    // checking emoty field
    $flag1 = 0; 

    //checking if user exist
    $flag2 = 0;

    //checking if the password and confirm password matches
    $flag3 = 0;

    if($user_name == "" || $password == "" || $c_password == "" || $email == "") 
        { // empty field
            $flag1 = 1;   
        }
    else{
        while($res = mysqli_fetch_array($result)) { 
            //user exist
            if($res['user_name'] == $user_name || $res['email'] == $email ){
                $flag2=1;
        }}}
    if($password != $c_password){
        $flag3 =1;
    }

    // all things satisfied profile signed up
    if ($flag1==0 && $flag2 ==0 && $flag3==0){
        $result = mysqli_query($mysqli, "INSERT INTO `user_info` ( `user_name`, `email`, `password`) VALUES ('$user_name','$email','$password');");
    }
 $mysqli->close();
}
?>


<!--main div ends-->
</div>
</body>
</html>
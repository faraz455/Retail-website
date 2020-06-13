<!DOCTYPE html>
<html>

<head>
    <title>Retail Property</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="main.js"></script>
    
</head>
<body>
  <div style="background-color: rgb(211, 206, 206); padding-bottom: 10%;"> 


  <?php
require_once('navbar.html');
  ?>
<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<div class="container" style="padding-top: 9%; padding-left: 20%;  text-align: center;  height: 800px; ;" >

    <!--row 1-->
    <div class="row size" style=" background-color: cadetblue; border-top-left-radius: 15px; border-top-right-radius: 15px;  ">   
        <button type="button" id="btn1" onclick="this.style.backgroundColor = 'rgb(28, 68, 70)'; document.getElementById('btn2').style.backgroundColor = 'rgb(40, 122, 122)'" class="col-sm btn btn-dark" style=" margin: 1px;background-color: rgb(28, 68, 70); border-top-left-radius: 15px;">User</button>
        <button type="button" id="btn2" onclick="this.style.backgroundColor = 'rgb(28, 68, 70)'; document.getElementById('btn1').style.backgroundColor = 'rgb(40, 122, 122)'" class="col-sm btn btn-dark" class="col-sm btn btn-primary" style=" margin: 1px;background-color: rgb(40, 122, 122);border-top-right-radius: 15px;">Admin</button>
    </div>
  
    <!--row 2-->
  <div class="row size" style="  padding-top: 4%;background-color: cadetblue;">
    <div class="input-group mb-3" style="width: 60%; margin: auto;">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1"><i class="fa fa-user icon"></i></span>
        </div>
        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
      </div>
  </div>

  <div class="row size" style=" background-color: cadetblue;">
    <div class="input-group mb-3" style="width: 60%; margin: auto;">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1"><i class="fa fa-key icon"></i></span>
        </div>
        <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
    </div>
  </div>

  <div class="row size" style=" background-color: cadetblue; border-bottom-right-radius: 20px; border-bottom-left-radius: 20px; ">
    <div class="input-group mb-3" style="width: 60%; margin-left: 35%;">
        <button type="button" class="btn btn-success" style="width: 50%;">Login</button>
    </div>
  </div>

</div>
    <!--main div ends-->
</div>

</body>
</html>
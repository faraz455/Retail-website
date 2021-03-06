<?php
session_start();
//including the database connection file
include_once("connect.php");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Retail Property</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../CSS/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>
<div style="background-color: rgb(211, 206, 206); padding-bottom: 10%;"> 
  <nav class="navbar navbar-expand-lg navbar-dark  bg-dark">

        <a class="navbar-brand" href="main.php" style="color: rgb(71, 160, 160); font-family: Bahnschrift;letter-spacing: 2.5px;">Retail Property</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active left1">
              <a class="nav-link" href="main.php" >Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item left2">
              <a class="nav-link" href="#">Offers</a>
            </li>
            <li class="nav-item dropdown left2" >
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Categories
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Category1</a>
                <a class="dropdown-item" href="#">Category2</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Category3</a>
              </div>
            </li>
            <?php 
            if ($_SESSION['logIn'] == 0)
            {echo'<li class="nav-item left3">
                    <a class="nav-link" href="signup.php">Sign up</a>
                </li>
                <li class="nav-item left4">
                    <a class="nav-link" href="login.php">Login</a>
                </li>';}
            else{echo'<form action="navbar.php" method="post" name="form">
                <li class="nav-item left3">
                     <input class="form-control" style = "border: none ;background-color:rgb(39, 33, 77); color:rgb(71, 160, 160);" name = "logout" type = "submit" value = "logout">
                  </li>
                  <li class="nav-item left4">
                     <a class="nav-link"></a>
                 </li></form>';}


                if (isset($_POST['logout']))
                { $_SESSION['logIn'] = 0;
                 $_SESSION['login_User'] = "";
                 header("Location: login.php");
                $mysqli->close();}
            ?>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn  my-2 my-sm-0 btn-outline-info" type="submit">Search</button>
          </form>
        </div>
    </nav>
<!--main div ends-->
</body>
</html>
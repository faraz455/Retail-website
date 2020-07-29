<!DOCTYPE html>
<html>

<head>
    <title>Retail Property</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../CSS/main.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
<?php
require_once('navbar.php');
?>
<div> 


<div class="beech2">
    <h3 style = "color: rgb(71, 160, 160);"> Trending Section </h3>

<?php

$result = mysqli_query($mysqli, "SELECT * FROM trending_section"); 

$price = array();
$location = array();
$texts = array();

      for($count_trend = 0; $res = mysqli_fetch_array($result); $count_trend++){  
            $price[$count_trend]= $res['item_price'];
            $location[$count_trend] = $res['item_loc'];
            $texts[$count_trend]= $res['item_text'];
      }

echo ' <table style="width:120%">
  <tr>
    <th>Serial no.</th>
    <th>PRICE (RS)</th>
    <th>PICTURE</th>
    <th>DISCRIPTION</th>
  </tr>';


//deleting pictures

for($z = 0; $z < $count_trend;$z++){
    if(isset($_POST["cancel'.$z.'"])){
        $result = mysqli_query($mysqli, "SELECT * FROM trend_section"); 
        for($count_trend = 0; $res = mysqli_fetch_array($result); $count_trend++){  
            if($count_trend != $z)
            {
                $res['item_loc'] ="";
                echo "delete ho gaya";
            }
      }
    }
}
for($x=0;$x<$count_trend;$x++){
    $y = $x + 1;
    echo '<form action= "uploading.php" method="post">  <tr>
    <td>'.$y.'</td>
    <td style = "width: 22%"><input name = "change_price'.$x.'" type = "number"  class="form-control form-control-lg" style = "background-color: rgb(194, 189, 189);" value = "'.$price[$x].'"></td>
    <td>
    <div>
        <div  style="position: relative;">
            <p  style="position: absolute; left: 90%;">
            <button name = "cancel'.$x.'" type = "submit" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </p>
        </div>
        <img class="card-img-top" src="'.$location[$x].'">
    </div>
    </td>
    
    <td>'.$texts[$x].'</td>
  </tr>
  </form>';
}


?>


</table>
<br><br><br>
<h3 style = "color: rgb(71, 160, 160);">New Section</h3>
<?php

$result2 = mysqli_query($mysqli, "SELECT * FROM new_section"); 

$n_price = array();
$n_location = array();
$n_texts = array();

      for($count_new = 0; $res = mysqli_fetch_array($result2); $count_new++){  
            $n_price[$count_new]= $res['item_price'];
            $n_location[$count_new] = $res['item_loc'];
            $n_texts[$count_new]= $res['item_text'];

      }

?>
 <table style="width:120%">
  <tr>
    <th>Serial no.</th>
    <th>PRICE (RS)</th>
    <th>PICTURE</th>
    <th>DISCRIPTION</th>
  </tr>

<?php

for($x=0;$x<$count_trend;$x++){
    $y = $x + 1;
    echo '  <tr>
    <td>'.$y.'</td>
    <td style = "width: 22%"><input name = "change_price'.$x.'" type = "number"  class="form-control form-control-lg" style = "background-color:rgb(194, 189, 189);" value = "'.$n_price[$x].'"></td>
    <td>
        <div>
            <div style="position: relative;">
                <p name = "n_cancel'.$x.'" type = "submit" style="position: absolute; left: 90%; ">
                <button type="button" class="close" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </p>
            </div>
            <img class="card-img-top" src="'.$n_location[$x].'">
        </div>
    </td>
    <td>'.$n_texts[$x].'</td>
  </tr>';
}
?>
</div>

<!--main div ends-->
</div>
</body>
</html>

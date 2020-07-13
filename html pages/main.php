<!DOCTYPE html>
<html>

<head>
    <title>Retail Property</title>
</head>
<body>
<?php
require_once('navbar.php');

$result = mysqli_query($mysqli, "SELECT * FROM trending_section"); 

$price = array(" "," "," ");
$location = array(" "," "," ");
$texts = array(" "," "," ");


      for($x = 0; $res = mysqli_fetch_array($result) and $x < 3; $x++){  
            $price[$x]= $res['item_price'];
            $location[$x] = $res['item_loc'];
            $texts[$x]= $res['item_text'];

      }


$result = mysqli_query($mysqli, "SELECT * FROM new_section"); 

$n_price = array(" "," "," ");
$n_location = array(" "," "," ");
$n_texts = array(" "," "," ");


      for($x = 0; $res = mysqli_fetch_array($result) and $x < 3; $x++){  
            $n_price[$x]= $res['item_price'];
            $n_location[$x] = $res['item_loc'];
            $n_texts[$x]= $res['item_text'];

      }

?>

<!--row 1-->
    <div class="container" style= "text-align: center; margin-top: 6%;">
    <h2 style="font-family: Arial Nova Light;">Shop Today's Trending Deals and Save Big</h2>
    <div class="card-deck" style="padding-top: 3%;">
        <div class="card shadow" style="padding: 2%;">

     <?php    echo '<img class="card-img-top" src="'.$location[0].'" alt="Card image cap">' ;  ?>

          <div class="card-body">
            <h5 class="card-title">Offer 1</h5>
     <?php echo ' <p class="card-text" style="text-align: justify">'.$texts[0].'</p>'; ?>
          </div>
          <div class="card-footer">
          <?php echo '<small class="text-muted">Rs '.$price[0].'</small>' ?>
          </div>
        </div>
        <div class="card shadow" style="padding: 2%;">

        <?php  echo '<img class="card-img-top" src="'.$location[1].'" alt="Card image cap">' ;  ?>

          <div class="card-body">
            <h5 class="card-title">Offer 2</h5>

            <?php echo ' <p class="card-text" style="text-align: justify">'.$texts[1].'</p>'; ?>
  
          </div>
          <div class="card-footer">

          <?php echo '<small class="text-muted">Rs '.$price[1].'</small>' ?>
            
          </div>
        </div>
        <div class="card shadow" style="padding: 2%;">

        <?php    echo '<img class="card-img-top" src="'.$location[2].'" alt="Card image cap">' ;  ?>

          <div class="card-body">
            <h5 class="card-title">Offer 3</h5>

            <?php echo ' <p class="card-text" style="text-align: justify">'.$texts[2].'</p>'; ?>
            
          </div>
          <div class="card-footer">

          <?php echo '<small class="text-muted">Rs '.$price[2].'</small>' ?>
            
          </div>
        </div>
      </div>
</div>

<!--row 2-->
<div class="container" style= "text-align: center; margin-top: 6%;">
  <h2 style="font-family: Arial Nova Light;"> Trending Deals</h2>
  <div class="card-deck" style="padding-top: 3%;">
      <div class="card shadow" style="padding: 2%;">

   <?php    echo '<img class="card-img-top" src="'.$n_location[0].'" alt="Card image cap">' ;  ?>

        <div class="card-body">
          <h5 class="card-title">Trend 1</h5>
   <?php echo ' <p class="card-text" style="text-align: justify">'.$n_texts[0].'</p>'; ?>
        </div>
        <div class="card-footer">
        <?php echo '<small class="text-muted">Rs '.$n_price[0].'</small>' ?>
        </div>
      </div>
      <div class="card shadow" style="padding: 2%;">

      <?php  echo '<img class="card-img-top" src="'.$n_location[1].'" alt="Card image cap">' ;  ?>

        <div class="card-body">
          <h5 class="card-title">Trend 2</h5>

          <?php echo ' <p class="card-text" style="text-align: justify">'.$n_texts[1].'</p>'; ?>

        </div>
        <div class="card-footer">

        <?php echo '<small class="text-muted">Rs '.$n_price[1].'</small>' ?>
          
        </div>
      </div>
      <div class="card shadow" style="padding: 2%;">

      <?php    echo '<img class="card-img-top" src="'.$n_location[2].'" alt="Card image cap">' ;  ?>

        <div class="card-body">
          <h5 class="card-title">Trend 3</h5>

          <?php echo ' <p class="card-text" style="text-align: justify">'.$n_texts[2].'</p>'; ?>
          
        </div>
        <div class="card-footer">

        <?php echo '<small class="text-muted">Rs '.$n_price[2].'</small>' ?>
          
        </div>
      </div>
    </div>
</div>

</div>


<!--main div ends-->
</div>
</body>
</html>
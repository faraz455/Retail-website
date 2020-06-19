<?php
//including the database connection file
include_once("connect.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Retail Property</title>
</head>
<body>
  <div style="background-color: rgb(240, 238, 238); padding-bottom: 10%;"> 
<?php
require_once('navbar.php');
?>

<!--row 1-->
    <div class="container" style= "text-align: center; margin-top: 6%;">
    <h2 style="font-family: Arial Nova Light;">Shop Today's Trending Deals and Save Big</h2>
    <div class="card-deck" style="padding-top: 3%;">
        <div class="card shadow" style="padding: 2%;">
          <img class="card-img-top" src="../Images/pic1.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Offer 1</h5>
            <p class="card-text" style="text-align: justify">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">More Details</small>
          </div>
        </div>
        <div class="card shadow" style="padding: 2%;">
          <img class="card-img-top" src="../Images/pic2.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Offer 2</h5>
            <p class="card-text" style="text-align:justify">This card has supporting text below as a natural lead-in to additional content.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">More Details</small>
          </div>
        </div>
        <div class="card shadow" style="padding: 2%;">
          <img class="card-img-top" src="../Images/pic3.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Offer 3</h5>
            <p class="card-text" style="text-align:justify">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">More Details</small>
          </div>
        </div>
      </div>
</div>

<!--row 2-->
<div class="container" style= "text-align: center; margin-top: 6%;">
    <h2 style="font-family: Arial Nova Light;">TRENDING</h2>
    <div class="card-deck" style="padding-top: 3%;">
        <div class="card shadow" style="padding: 2%;">
          <img class="card-img-top" src="../Images/pic1.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Trend 1</h5>
            <p class="card-text" style="text-align:justify">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">More Details</small>
          </div>
        </div>
        <div class="card shadow" style="padding: 2%;">
          <img class="card-img-top" src="../Images/pic2.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Trend 2</h5>
            <p class="card-text" style="text-align:justify">This card has supporting text below as a natural lead-in to additional content.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">More Details</small>
          </div>
        </div>
        <div class="card shadow" style="padding: 2%;">
          <img class="card-img-top" src="../Images/pic3.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Trend 3</h5>
            <p class="card-text" style="text-align:justify">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">More Details</small>
          </div>
        </div>
      </div>
</div>
</div>


<!--main div ends-->
</div>
</body>
</html>
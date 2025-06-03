<?php
require 'conn.php';
$userID=$_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/luuk.css" >
</head>
<?php

        $stmt = $connection->query("SELECT * FROM products  WHERE products.id = $userID");
        while ($row = $stmt->fetch()) {
            ?>
        <header>
    <div class="nav">
        <div class="left-75">
            <div class="name">
                <img src="/assets/north travel logo.png" class="kook">
            </div>
        </div>
        <div class="right-20">
            <div class="buttons">
            <a href="../index.php" class="Items">Home</a>     
            <a href="/pages/overons.php" class= "Items">Over ons</a>
            <a href="/pages/reizen.php" class= "Items">Reizen</a>     
            <a href="/pages/contact.php" class="Items">Contact</a>     
        </div>
    </div>
    <div class="right-5">
        <div class="buttons">
            <a href="/pages/login.php" class="Items">Login</a>   
        </div>
    </div>
    </div>
</header>
<div class="row112">

</div>
    <div class="row">
      <div class="col-75">
        <div class="container">

        <div class="row">
          <div class="col-50">
            <h3>Betaling</h3>
            <label for="fname"><i class="fa fa-user"></i> Naam</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Addres</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="ccnum">Credit card nummer</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">

          
            <div class="row">
              <div class="col-50">
                <!-- <label for="land">Aantal personen</label>
                <input type="text" id="land" name="land" placeholder="0">
                <label for="land">Aantal nachten</label>
                <input type="text" id="land" name="land" placeholder="0"> -->
              </div>
          </div>

          <div class="col-50">
            <h3>Betaling</h3>
            <label for="fname">Kaart keuze</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:rgb(198, 10, 10);"></i>
              <i class="fa fa-cc-discover" style="color:rgb(230, 0, 255);"></i>
            </div>

        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Algemene voorwaarden geaccepteerd
        </label>
        <input type="submit" value="Betalen" class="btn">
        <a href="/pages/voltooid.php">Betalen</a>
        
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container">
      <h4>wagentje
        <span class="price" style="color:rgb(0, 0, 0)">
          <i class="fa fa-shopping-cart"></i>
          <b>1</b>
        </span>
      </h4>
      <?php
      echo  $row['price'] ."<br />\n";
      ?>
      <hr>
      <!-- <p>Total <span class="price" style="color:rgb(0, 0, 0)"><b></b></span></p> -->
    </div>
  </div>
</div>
          <?php } ?>
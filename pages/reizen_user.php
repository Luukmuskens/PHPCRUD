<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/jop.css">
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
<div class="nav">
        <div class="left-75">
            <div class="name">
                <img src="/assets/ASCR" class="kook">
            </div>
        </div>
        <div class="right-20">
            <div class="buttons">
            <a href="/pages/user_home_page.php" class="Items">Home</a>     
            <a href="/pages/over_ons_user.php" class= "Items">Over ons</a>
            <a href="#" class= "Items">Reizen</a>     
            <a href="/pages/user_page.php" class="Items">User</a>     
        </div>
    </div>
    <div class="right-5">
        <div class="buttons">
        <a href="logout.php"class="logoutt">Loguit</a>              
        </div>
    </div>
    </div>
    <div class="tussen-stuk"></div>

        <?php
     include 'conn.php';
     
     ?> 
     <div class="container-reizen-page">

        <?php

          $stmt = $connection->query("SELECT products.name, products.id, products_Info.omschrijving,  products_Info.omschrijving_2,  products_Info.omschrijving_3
          FROM products
          INNER JOIN products_Info
          ON products.id=products_Info.id");
          while ($row = $stmt->fetch()) {
            
             
            echo '<a class="container-reizen" href="user_product-info.php?id=' . $row['id'] . '">';

        
            //  echo '<a href="product-info.php?id=' . $row['id'] . '">';
             echo '<div class="blah-box">';
             echo '<img class="rijzen-fotos" src="../assets/chinatown1.jpeg" alt="">';
                  echo '<div class="text-menu">';
                  echo '<div class="container-name">';
                //    echo '<a href="product-info.php?id=' . $row['id'] . '">';
                  echo '<h2>';
                  echo $row['name'] ."<br />\n";
                  echo '</h2>';
                  echo '</div>';
                  echo '<div class="container-info">';
                  echo '<h4>';
                   echo $row['omschrijving'] ."<br/>\n";
                   echo $row['omschrijving_2'] ."<br/>\n";
                   echo $row['omschrijving_3'] ."<br/>\n";
                   echo '</h4>';
                   echo '</div>';
                echo '<div class="container-button">';
                //    echo ' <input class="buton-reizen" <a href="product-info.php?id=echo[id] $GET</a> type="submit" name="submit" value="Submit">';
                   echo '</div>';
     
                   echo '</div>';
                   echo '</div>';
                   echo '</a>';

          }          

        ?>
        </div>
 </div>
 <div class="tussen-stuk"></div>
 <div class="feet">
        <h1>Wil je op de hoogte blijven?</h1>
        <h4>Vul dan hier je email in voor weekelijkse updates</h4>
        <div class="hoogte">
        <input type="text" placeholder=" vul hier je mail in" class="mail">
        </div>
    </div>
    <div class="feet1">
        <div class="column">
            <div class="info-text">
                <h1>Opleiding</h1>
                <p>Roc-Nijmegen</p>
                <p>Technovium</p>
                <p>Software Development</p>
                <p>Heyendaalseweg 98</p>
            </div>
        </div>
        <div class="column">
            <div class="info-text">
                <h1>Website</h1>
                <p>nieuws</p>
                <a href="/pages/login.php">Login</a>
                <a href="/pages/register.php">Register</a>
                <p1>Terms Of Service</p1>
            </div>
        </div>
        <div class="column">
            <div class="info-text">
                <h1>Developers</h1>
                <p>Joey</p>
                <p>Mate</p>
                <p>Luuk Müskens</p>
                <p>Internet</p>
            </div>
        </div>
    </div>
</body>
</html>
    <script src="js/main.jsx"></script>
    </body>
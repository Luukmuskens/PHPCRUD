<?php
require 'conn.php';
$userID=$_GET['id'];
?>
<div class="nav">
        <div class="left-75">
            <div class="name">
                <img src="/assets/ASCR" class="kook">
            </div>
        </div>
        <div class="right-20">
            <div class="buttons">
            <a href="/pages/user_home_page.php" class="Items">Home</a>     
            <a href="/pages/overons.php" class= "Items">Over ons</a>
            <a href="/pages/reizen_user.php" class= "Items">Reizen</a>     
            <a href="/pages/user_page.php" class="Items">User</a>     
            </div>
    </div>
    <div class="right-5">
        <div class="buttons">
            <a href="/pages/logout.php" class="Items">logout</a>   
        </div>
    </div>
    </div>
    <div class="tussen-stuk"></div>
    <link rel="stylesheet" href="/css/main.css">
<?php
    $stmt = $connection->query("SELECT *
    FROM products
    INNER JOIN products_Info    
    ON products.id=products_Info.id 

    WHERE products.id = $userID");
    while ($row = $stmt->fetch()) {
        echo '<div class="conatainer-product-info">';
        echo '<div class="hotel">';
        echo '</div>';  

      

        echo '<div class="bar-product-info">';
        echo '<div class="row-bar-info-40">';
        echo '<div class="center">';
        echo '<div class="center-detail">';
        echo '<p>Aantal Kamers:</p>';
        echo  $row['kamers'] ."<br />\n";
        echo '</div>';
        echo '</div>';
        echo '</div>';

        echo '<div class="row-bar-info-40">';
        echo '<div class="center">';
        echo '<div class="center-detail">';
        echo '<p>Aantal nachten:</p>';
        echo $row['nachten'] ."<br />\n";
        echo '</div>';
        echo '</div>';
        echo '</div>';

        echo '<div class="row-bar-info-20">';
        echo '<div class="center">';
        echo '<div class="center-detail">';
        ?>
        <!-- echo ' <a href="product-info.php?id=echo[id] $GET> submit</a> ';  -->
        <td><a class="button-products" href='../pages/order_user.php?id=<?php echo $row['id'];?>'>Bestel</a><td>
        <?php
         echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '<div class="container-col">';
        echo '<div class="col-50">';
        echo '<div class="foto-klein">';
        echo '<img class="hotel2" src="../assets/hotel.png" alt="">';
        echo '<div class="prouduct-info-info">';
        echo '<br>';
        echo '<h3>';
        echo $row['omschrijving'] ."<br/>\n";
        echo '<br>';
        echo $row['omschrijving_2'] ."<br/>\n";
        echo '<br>';
        echo $row['omschrijving_3'] ."<br/>\n";
        echo '<br>';
        echo $row['rating'] ."<br/>\n";
        echo '<br>';
        echo $row['hasPool'] ."<br/>\n";
        echo '<br>';
        echo $row['hasFitness'] ."<br/>\n";
        echo '<br>';
        echo $row['price'] ."<br/>\n";
        echo '</h3>';
        echo '</div>';
        echo '<div class="tussen-vlak-product">';
        echo '</div>';
        echo '<div class="text-vlak-klm">';
        echo '</div>';
        echo '<div class="full-logiin">
            <form class="regiister_form" action="recensie_logic.php" name="login_logic"method="POST">
            <div class="mid">
            <h3>Laat hier je recensie achter</h3>
            </div>
            <div class="row55">
            <p>Usernaam</p>
            <input type="text" name="username" placeholder="   Vul hier een usernaam in"/>
            </div>
            <br>
            <div class="row55">
            <p>recensie</p>
            <input type="text" name="recensie" placeholder="   Vul hier je recensie in"/>
            </div>
            <br>
            <div class="row55">
            <input type="submit" name="submit" value="verstuur" class="button-lag"/>
            </div>
            </form>';
        echo '</div>';


        echo '</div>';
        echo '</div>';
        echo '<div class="col-501">';
        echo '<div class="container-text-vlak-product-info">';
        echo '<div class="text-vlak-product-info">';
        echo  $row['name'] ."<br />\n";
        echo '<div class="tussen-vlak-product">';
        echo '</div>';


        echo '<div class="font-size">';
        echo '<a> De voorbereiding is vaak al een avontuur op zich. Het uitzoeken van bestemmingen, plannen van routes en boeken van accommodaties dragen bij aan de voorpret. Sommigen kiezen voor spontane trips zonder uitgebreide planning, terwijl anderen elk detail zorgvuldig uitstippelen.
        Wanneer de reis begint, start ook de ontdekkingstocht. De eerste indrukken van een nieuwe plaats, de geuren, geluiden en kleuren, zijn onvergetelijk. Het ontmoeten van lokale mensen en het proeven van de lokale keuken geven een diepere verbinding met de bestemming. Kleine obstakels en verrassingen, zoals verdwalen of communiceren in een onbekende taal, voegen charme toe aan het avontuur.
        Reizen biedt ook ruimte voor reflectie en groei. Weg zijn van de
        </>';
        echo '<div class="tussen-vlak-product">';
        echo '</div>';
        echo '<a> dagelijkse routine geeft nieuwe inzichten en perspectieven. Historische plaatsen kunnen diepe indrukken achterlaten, en de natuur kan rust en verwondering brengen die moeilijk in woorden te vatten is.
        Bovenal creëert reizen onvergetelijke herinneringen. Foto’s, souvenirs en verhalen worden gekoesterd en gedeeld met vrienden en familie. Elke reis, dichtbij of ver weg, verandert de reiziger. Het laat sporen achter in ons hart en verrijkt ons met ervaringen die onze kijk op de wereld verbreden. </>';
        echo '</div>';
        echo '<div class="tussen-vlak-product">';
        echo '</div>';
        echo '<div class="tussen-vlak-product">';
        echo '</div>';
        
        


    }
    echo '<div class="container-recensties">';
        echo '<br>';
        echo '<h3 > recensies</h3>';
        echo '</div>';
        $stmt = $connection->query("SELECT * FROM recensies");
          while ($row = $stmt->fetch()) {
            echo '<div class="container-recensties">';
            echo '<h7>';
            echo  $row['username'] ."<br />\n";
            echo  $row['recensie'] ."<br />\n";
            echo '</h7>';
            echo '</div>';
          }

?>
<?php
include 'conn.php';

// Welkom tekst
$welkom_tekst = "Welkom op onze reispagina! Hier vind je allerlei mooie reizen gebaseerd op onze database.";
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onze Reizen</title>
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
     <style>
        body { font-family: Arial, sans-serif; background: ##1d3557; text-align: center; padding-top: 50px; }
        .container { background: #fff; padding: 30px; border-radius: 8px; display: inline-block; box-shadow: 0 2px 8px rgba(0,0,0,0.1);}
        a { color: #3498db; text-decoration: none; font-weight: bold; }
        a:hover { text-decoration: underline; }
    </style>
    <body>
       <header>
        <div class="nav">
            <div class="left-75">
                <div class="name">
                    <div class="center-content">
                        <img src="images/header-image.png" class="kook" width="100%">
                    </div>
                </div>
            </div>
            <div class="right-20">
                <div class="buttons">
                    <a href="/index.php" class="Items">Home</a>     
                    <a href="/overons.php" class= "Items">Over ons</a>
                    <a href="/reizen.php" class= "Items">Reizen</a>     
                    <a href="/contact.php" class="Items">Contact</a>     
                </div>
            </div>
            <div class="right-5">
                <div class="buttons">
                    <a href="/login.php" class="Items">Login</a>   
                </div>
            </div>
        </div>
    </header>

<div class="tussen-stuk"></div>

<h1>Onze Reizen</h1>
<p><?php echo $welkom_tekst; ?></p>

<div class="container-reizen-page">
<?php
$stmt = $connection->query("SELECT products.naam, products.id, products.omschrijving, products.bedrag
    FROM products
    INNER JOIN products
    ON products.id=products.id");
while ($row = $stmt->fetch()) {
    echo '<a class="container-reizen" href="products.php?id=' . $row['id'] . '">';
    echo '<div class="blah-box">';
    echo '<img class="rijzen-fotos" src="../assets/chinatown1.jpeg" alt="">';
    echo '<div class="text-menu">';
    echo '<div class="container-name">';
    echo '<h2>' . htmlspecialchars($row['naam']) . "</h2>";
    echo '</div>';
    echo '<div class="container-info">';
    echo '<h4>';
    echo htmlspecialchars($row['naam']) . "<br/>\n";
    echo htmlspecialchars($row['omschrijving']) . "<br/>\n";
    echo htmlspecialchars($row['bedrag']) . "<br/>\n";
    echo '</h4>';
    echo '</div>';
    echo '<div class="container-button">';
    // Button or link can go here
    echo '</div>';
    echo '</div>'; // text-menu
    echo '</div>'; // blah-box
    echo '</a>';
}
?>
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
</div>
<script src="js/main.jsx"></script>
</body>
</html>

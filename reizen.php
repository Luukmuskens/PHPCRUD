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
    <link rel="stylesheet" href="/css/jop.css">
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
require_once("db.php");

ini_set('display_errors', 1);
error_reporting(E_ALL);

$db = new db();
$conn = $db->get_connection();
$result = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST["search"])) {
    $search = "%" . $_POST["search"] . "%";
    $sql = "SELECT * FROM menu WHERE name LIKE :search";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['search' => $search]);
    $result = $stmt->fetchAll();
} else {
    $sql = "SELECT * FROM menu";
    $stmt = $conn->query($sql);
    $result = $stmt->fetchAll();
}

$template = '
<div class="gerecht-item space-between column">
    <div>
        <h1 class="gerecht-naam">%s</h1>
        <h2 class="gerecht-beschrijving">%s</h2>
    </div>
    <h2 class="gerecht-prijs">€%s</h2>
</div>
';

foreach ($result as $row) {
    printf($template, htmlspecialchars($row['naam']), htmlspecialchars($row['omschrijving']), number_format($row['bedrag'], 2));
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

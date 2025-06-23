<?php
// Map met afbeeldingen
$map = 'images/';
$bestanden = glob($map . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

// Extra stukje PHP, niet gebaseerd op de database
$welkom_tekst = "Welkom op onze reispagina! Hier vind je allerlei mooie reizen gebaseerd op onze afbeeldingen.";
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Reizen</title>
    <style>
        * { box-sizing: border-box; }
        body { font-family: Arial; background:rgb(112, 157, 220); }
        .reis { background: #fff; margin: 20px; padding: 10px; border-radius: 8px; width: 250px; float: left; }
        .reis img { width: 100%; height: 150px; object-fit: cover; }
        .titel { font-weight: bold; margin-top: 10px; }
        .buttons {
            display: flex;
            gap: 10px;
        }
        .Items {
            background:rgb(219, 52, 52);
            color: #fff;
            padding: 8px 16px;
            border-radius: 4px;
            text-decoration: none;
            transition: background 0.2s;
        }
        .Items:hover {
            background: #217dbb;
        }
    </style>
</head>
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
    <h1>Onze Reizen</h1>
    <p><?php echo $welkom_tekst; ?></p>
    <?php
    if (count($bestanden) == 0) {
        echo "<p>Geen reizen gevonden.</p>";
    } else {
        foreach ($bestanden as $bestand) {
            $naam = basename($bestand);
            $titel = ucfirst(pathinfo($naam, PATHINFO_FILENAME));
            echo '<div class="reis">';
            echo '<img src="' . $map . $naam . '" alt="' . $titel . '">';
            echo '<div class="titel">' . $titel . '</div>';
            echo '<div>Ontdek de reis naar ' . $titel . '.</div>';
            echo '</div>';
        }
    }
    ?>
</body>
</html>

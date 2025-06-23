<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Contact - Gamers Reisbureau</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <script src="/js/main.js" defer></script>
</head>
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
<body>
    <div class="container">
        <h2>Contact ASSR TRAVMOBILE</h2>
        <form method="post" action="">
            <label for="naam">Naam</label>
            <input type="text" id="naam" name="naam" required>

            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" required>

            <label for="bericht">Bericht</label>
            <textarea id="bericht" name="bericht" rows="4" required></textarea>

            <button type="submit">Verzenden</button>
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $naam = htmlspecialchars($_POST['naam']);
            $email = htmlspecialchars($_POST['email']);
            $bericht = htmlspecialchars($_POST['bericht']);
            echo "<p>Bedankt voor je bericht, $naam! We nemen zo snel mogelijk contact met je op.</p>";
        }
        ?>
    </div>
</body>
</html>
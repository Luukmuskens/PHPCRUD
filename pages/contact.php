<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Contact - Gamers Reisbureau</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <script src="/js/main.js" defer></script>
</head>
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
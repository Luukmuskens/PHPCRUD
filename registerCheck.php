<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Succesvol Geregisteerd</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; text-align: center; padding-top: 50px; }
        .container { background: #fff; padding: 30px; border-radius: 8px; display: inline-block; box-shadow: 0 2px 8px rgba(0,0,0,0.1);}
        a { color: #3498db; text-decoration: none; font-weight: bold; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Succesvol Geregisteerd!</h1>
        <p>Je bent succesvol geregisteerd met je account , probeer nu in te loggen !!.</p>
        <p><a href="index.php">Terug naar de hoofdpagina</a></p>
    </div>

    

    <script>
        // Redirect to the user home page after 3 seconds
        setTimeout(function() {
            window.location.href = "/index.php";
        }, 3000);
    </script>
    <p>Je wordt automatisch doorgestuurd naar je gebruikerspagina.</p>
    <p>Als je niet automatisch wordt doorgestuurd, klik dan <a href="/index.php">hier</a>.</p>
    </div>
    <script src="/js/main.js" defer></script>
</body>
</html>
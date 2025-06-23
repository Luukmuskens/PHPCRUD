<?php

// User home page content goes here.
session_start();

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

$username = htmlspecialchars($_SESSION['username']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Home Page</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; }
        .container { max-width: 600px; margin: 50px auto; background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);}
        h1 { color: #333; }
        a.button { display: inline-block; margin-top: 20px; padding: 10px 20px; background: #007bff; color: #fff; text-decoration: none; border-radius: 4px;}
        a.button:hover { background: #0056b3; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welkom, <?php echo $username; ?>!</h1>
        <p>Dit is je persoonlijke homepagina.</p>
        <a href="logout.php" class="button">Uitloggen</a>
    </div>
</body>
</html>

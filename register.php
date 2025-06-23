<?php
// register.php

// Start session
session_start();

// Handle form submission
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Simple validation
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm = $_POST['confirm'] ?? '';

    if ($username === '' || $password === '' || $confirm === '') {
        $errors[] = "Vul alle velden in.";
    } elseif ($password !== $confirm) {
        $errors[] = "Wachtwoorden komen niet overeen.";
    } else {
        // Hier zou je de gebruiker toevoegen aan de database
        // Voorbeeld: header('Location: login.php');
        $_SESSION['success'] = "Registratie gelukt! Je kunt nu inloggen.";
        header('Location: login.php');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Registreren</title>
    <link rel="stylesheet" href="main.css">
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
    <div class="register-container">
        <h2>Registreren</h2>
        <?php if ($errors): ?>
            <div class="errors">
                <?php foreach ($errors as $error): ?>
                    <div><?= htmlspecialchars($error) ?></div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <form method="post" autocomplete="off">
            <input type="text" name="username" placeholder="Gebruikersnaam" value="<?= htmlspecialchars($_POST['username'] ?? '') ?>" required>
            <input type="password" name="password" placeholder="Wachtwoord" required>
            <input type="password" name="confirm" placeholder="Bevestig wachtwoord" required>
            <button type="submit">Registreren</button>
        </form>
        <a class="login-link" href="login.php">Al een account? Inloggen</a>
    </div>
</body>
</html>
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
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/main.css" >
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
        <form class="form" autocomplete="off">
          <div class="control">
            <h1>Register here</h1>
          </div>
          <div class="control block-cube block-input">
            <input name="username" type="text" placeholder="Username" />
            <div class="bg-top">
              <div class="bg-inner"></div>
            </div>
            <div class="bg-right">
              <div class="bg-inner"></div>
            </div>
            <div class="bg">
              <div class="bg-inner"></div>
            </div>
          </div>
          <div class="control block-cube block-input">
            <input name="password" type="password" placeholder="Password" />
            <div class="bg-top">
              <div class="bg-inner"></div>
            </div>
            <div class="bg-right">
              <div class="bg-inner"></div>
            </div>
            <div class="bg">
              <div class="bg-inner"></div>
            </div>
          </div>

           <div class="control block-cube block-input">
            <input name="password" type="password" placeholder=" Repeat Password" />
            <div class="bg-top">
              <div class="bg-inner"></div>
            </div>
            <div class="bg-right">
              <div class="bg-inner"></div>
            </div>
            <div class="bg">
              <div class="bg-inner"></div>
            </div>
          </div>

          <button class="btn block-cube block-cube-hover" type="button">
            <div class="bg-top">
              <div class="bg-inner"></div>
            </div>
            <div class="bg-right">
              <div class="bg-inner"></div>
            </div>
            <div class="bg">
              <div class="bg-inner"></div>
            </div>
             <div class="buttons">
            <a href="/registerCheck.php" class="Items">register</a>   
            </div>
          </button>
          <div class="credits">
            <a href="/login.php" target="_blank">
              click here to login :)
            </a>
          </div>
        </form>
        <?php
        echo "Register page loaded successfully.";
        ?>
    </body>
</html>

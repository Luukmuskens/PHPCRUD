<?php
    session_start();
    include 'conn.php';
    if (!isset($_SESSION["email"])) {
        header("Location: /pages/login.php");
        exit(); 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/main.css" >
</head>
<header>
    <div class="nav">
        <div class="left-75">
            <div class="name">
                <img src="/assets/ASCR" class="kook">
            </div>
        </div>
        <div class="right-20">
            <div class="buttons">
            <a href="../index.php" class="Items">Home</a>     
            <a href="/pages/overons.php" class= "Items">Over ons</a>
            <a href="/pages/reizen.php" class= "Items">Reizen</a>     
            <a href="/pages/contact.php" class="Items">Contact</a>     
        </div>
    </div>
    <div class="right-5">
        <div class="buttons">
            <a href="/pages/login.php" class="Items">Login</a>   
        </div>
    </div>
    </div>
    <div class="row112">

    </div>
    <div class="in-out">
            <h1>Je bent succesvol ingelogd als admin!!!</h1>
            <br><br><br>
            <a href="logout.php"class="logoutt">KLIK HIER om uit te loggen</a>     
        </div>
        <div class="search-container">
        <h2>Zoek gebruiker</h2>
        <form action="search-logic.php" method="POST">
            <input type="text" name="search" placeholder="Voer voornaam in...">
            <input type="submit" value="Zoeken">
        </form>
    </div>
        <div class="full-login">
            <form class='register_form' action='user_delete_logic.php' name='user_delete_logic'method="POST">
            <label>gebruiker verwijderen</label>
                <div class="row55">
                    <label>Id van user: </label> 
                    <input type="text" name="id_user"placeholder="   id of user" required>
                </div>
                <div class="row55">
                    <input type="submit" value='delete user' class="button-log"/>
                </div>
            </form>
        </div>
        <div class="full-login">
            <form class='product_form' action='reis_logic.php' name='reis_logic' method="post">
            <div class="row555">
                <label>Nieuwe Reis</label> 
                <input type="text" name="name"placeholder="   Naam" required>
                <input type="text" name="omschrijving"placeholder="   omschrijving" >
                <input type="text" name="omschrijving_2"placeholder="   omschrijving_2" >
                <input type="text" name="omschrijving_3"placeholder="   omschrijving_3" >
            </div>
            <div class="row55">
                <input type="submit" value='Maak product' class="button-log"/>
            </div>
            </form>
        </div>
        <div class="fulls-login">
            <div class="update">
                <?php
            $stmt = $connection->prepare("SELECT * FROM users");
            $stmt->execute();
            $data = $stmt->fetchAll();
            
            
            echo 'Update usertype id = email';
            foreach ($data as $row) {
                echo '<div class="mooi";>';
                echo 'id number = ';
                echo $row['id'];
                echo "<a href='/pages/user_update.php?id=". $row['id']."'>update</a>";
                echo '</div>';
            }
            ?>
            </div>
        </div>
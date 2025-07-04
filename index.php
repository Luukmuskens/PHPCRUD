<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ASCR</title>

        <link rel="stylesheet" href="css/main.css" >
</head>
<body>
     <style>
        body { font-family: Arial, sans-serif;  text-align: center; padding-top: 50px; }
        .container { background: #fff; padding: 30px; border-radius: 8px; display: inline-block; box-shadow: 0 2px 8px rgba(0,0,0,0.1);}
        a { color: #3498db; text-decoration: none; font-weight: bold; }
        a:hover { text-decoration: underline; }
    </style>
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
                    <a href="/overons.php" class="Items">Over ons</a>
                    <a href="/reizen.php" class="Items">Reizen</a>
                    <a href="/contact.php" class="Items">Contact</a>
                    <a href="admin/index.php" class="Items">Admin</a>
                </div>
            </div>
            <div class="right-5">
                <div class="buttons">
                    <a href="/login.php" class="Items">Login</a>
                    <a href="/register.php" class="Items">Registreren</a>
                </div>
            </div>
        </div>
    </header>
    <div id="terms-popup" class="terms-popup">
        <p>To use this website, you have to confirm our Terms of use page <a href="/terms.php" target="_blank">Terms of use</a>.</p>
        <button id="accept-terms" class="terms-button">Accept</button>
    </div>
    <div id="overlay"></div>
    <div id="popup">
        <h1>Welkom op onze website</h1>
        <img src="https://i.gifer.com/4Snj.gif" class="pop-img" width="40%" height="5%">
        <button id="close">Sluit</button>
    </div>
    <div class="slider">
        <div class="all-images">

        </div>
    </div>
    <div class="row111">
    </div>

    <div class="row113">
        <p>Onze best verkochte reizen</p>
    </div>
    <div class="row1">
        <div class="box">
            <img src="images/ukraine.png" class="img1" width="30%" height="150px">
            <input type="submit" name="submit" value='' class="blue-box"/>
            <a href="/reizen.php" class="mayo">Click me</a>   
        </div>
        <div class="box">
            <img src="images/america.png" class="img1" width="30%" height="150px">
            <input type="submit" name="submit" value='' class="blue-box"/>
            <a href="/reizen.php" class="mayo">Click me</a>   
        </div>
        <div class="box">
            <img src="images/griekenland.png" class="img1" width="30%" height="150px">
            <input type="submit" name="submit" value='' class="blue-box"/>
            <a href="/reizen.php" class="mayo">Click me</a>   
        </div>
    </div>
    <div class="row1">
        <div class="box1">
            <img src="images/ad.png" class="reclame" width="30%" height="200px">
        </div>
    </div>
         <a
      href="reizen.php"
      style="
        display: inline-block;
        margin-bottom: 24px;
        padding: 10px 24px;
        background: #2a5d84;
        color: #fff;
        text-decoration: none;
        border-radius: 4px;
        font-weight: bold;
        transition: background 0.2s;
      "
    >
      &larr; Bekijk onze reizen 
    </a>


<script>
    function filterItems() {
        // Get the input value
        let input = document.getElementById('searchInput').value.toLowerCase();
        // Get the list of items
        let items = document.getElementsByClassName('item');

        // Loop through the items and hide those that don't match the search query
        for (let i = 0; i < items.length; i++) {
            let item = items[i];
            if (item.innerHTML.toLowerCase().indexOf(input) > -1) {
                item.style.display = "";
            } else {
                item.style.display = "none";
            }
        }
    }
</script>

    <div class="feet">
        <h1>Wil je op de hoogte blijven?</h1>
        <h4>Vul dan hier je email in voor weekelijkse updates</h4>
        <div class="hoogte">
        <input type="text" placeholder=" vul hier je mail in" class="mail">
        <a href="/aangemeld.php" class="mail-link">
            <button id="close">send</button>
        </a>
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
                <a href="/login.php">Login</a>
                <a href="/register.php">Register</a>
                <p>Terms Of Service</p>
            </div>
        </div>
        <div class="column">
            <div class="info-text">
                <h1>Developers</h1>
                <p>Mate</p>
                <p>Joey</p>
                <p>Luuk</p>
                <p>Internet</p>
            </div>
        </div>
    </div>
    <script src="js/main.jsx"></script>
    </body>
</html>
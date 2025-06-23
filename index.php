<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ASCR</title>

        <link rel="stylesheet" href="css/main.css" >
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
                    <a href="#" class="Items">Home</a>     
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
    <div id="terms-popup" class="terms-popup">
        <p>To use this website, you have to confirm our Terms of use page <a href="/terms.html" target="_blank">Terms of use</a>.</p>
        <button id="accept-terms" class="terms-button">Accept</button>
    </div>
    <div id="overlay"></div>
    <div id="popup">
        <h1>Welkom op onze website</h1>
        <img src="images/tokyo.png" class="pop-img" width="40%" height="20%">                    
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
            <a href="/pages/reizen.php" class="mayo">Click me</a>   
        </div>
        <div class="box">
            <img src="images/america.png" class="img1" width="30%" height="150px">
            <input type="submit" name="submit" value='' class="blue-box"/>
            <a href="/pages/reizen.php" class="mayo">Click me</a>   
        </div>
        <div class="box">
            <img src="images/griekenland.png" class="img1" width="30%" height="150px">
            <input type="submit" name="submit" value='' class="blue-box"/>
            <a href="/pages/reizen.php" class="mayo">Click me</a>   
        </div>
    </div>
    <div class="row1">
        <div class="box1">
            <img src="images/ad.png" class="reclame" width="30%" height="200px">
        </div>
    </div>
<input type="text" id="searchInput" placeholder="Search for items..." onkeyup="filterItems()">

<div id="itemList">
    <div class="item">Kopenhagen</div>
    <div class="item">Brussel</div>
    <div class="item">Berlijn</div>
    <div class="item">Rome</div>
    <div class="item">Warschau</div>
    <div class="item">Stockholm</div>
    <div class="item">Munchen</div>
    <div class="item">Barcelona</div>
    <div class="item">Madrid</div>
    <div class="item">Zurich</div>
    <div class="item">Wenen</div>
    <div class="item">Amsterdam</div>
    <div class="item">Parijs</div>
    <div class="item">Londen</div>
    <div class="item">Lissabon</div>
    <div class="item">Dublin</div>
    <div class="item">Oslo</div>
    <div class="item">Helsinki</div>
    <div class="item">Prague</div>
    <div class="item">Budapest</div>
    <div class="item">Krakow</div>
    <div class="item">Valencia</div>
    <div class="item">Florence</div>
    <div class="item">Milan</div>
    <div class="item">Catania</div>
    <div class="item">Naples</div>
    <div class="item">Athens</div>
    <div class="item">Istanbul</div>
    <div class="item">Lisbon</div>
</div>

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
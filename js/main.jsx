function showPopup() {
  document.getElementById("overlay").style.display = "block";
  document.getElementById("popup").style.display = "block";
}

function closePopup() {
  document.getElementById("overlay").style.display = "none";
  document.getElementById("popup").style.display = "none";
}

setTimeout(showPopup, 12000);

document.getElementById("close").addEventListener("click", closePopup);

document.addEventListener("DOMContentLoaded", function () {
  var termsPopup = document.getElementById("terms-popup");
  var acceptButton = document.getElementById("accept-terms");

  setTimeout(function () {
    termsPopup.style.display = "block";
  }, 1000);

  acceptButton.addEventListener("click", function () {
    termsPopup.style.display = "none";
  });
});

function bookSearch(products) {
  const inputValue = document.getElementById("search").value.toLowerCase();
  const shopItems = document.getElementsByClassName(products);
  for (var i = 0; i < products.length; i++) {
    var products = products[i];
    var itemText = products.textContent.toLowerCase();

    if (itemText.includes(inputValue)) {
      shopItem.style.display = "unset";
    } else {
      products.style.display = "none";
    }
  }
}

<?php
session_start();

set_error_handler(function (){});
$is_logged_in = $_SESSION["logged_in"];
restore_error_handler();

if (!$_SESSION["is_logged_in"]) {
    die("Get out of my swamp!");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Admin Panel:
    <br>
    <br>
    <br>
    <!-- for adding products: -->
    <form action="/add_menu.php" method="POST">
        <h1>Add Product:</h1>
        <label for="name">Name</label>
        <input required type="text" name="name">
        <label for="price">Price</label>
        <input required type="number" step="0.01" name="price">
        <label for="description">Description</label>
        <input required type="text" name="description">
        <input type="submit" value="submit">
    </form>
    <!-- for modifying products: -->
    <form method="POST" action="/modify.php">
            <h1>Modify Product:</h1>
            <label>Product ID:</label>
            <input type="number" name="id" required>

            <label>Product Name:</label>
            <input type="text" name="name" required>

            <label>Description:</label>
            <input name="description"></textar>

            <label>Price:</label>
            <input type="number" name="price" required>

            <button type="submit" name="add">Modify!</button>
        </form>
        <!-- for deleting products: -->
        <form method="POST" action="/delete.php" class="form center column">
            <h1>Delete Product:</h1>
            <label>Product ID:</label>
            <input type="number" name="id" required>

            <button type="submit" name="delete">Delete!</button>
        </form>
    <br>
    <br>
    <a
      href="/index.php"
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
      &larr; Back to Homepage
    </a>
</body>
</html>
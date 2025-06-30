<?php

require_once "db.php";

session_start();

if (!$_SESSION["is_logged_in"]) {
    die("Get out of my swamp!");
}

$db = new db();
$conn = $db->get_connection();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $description = $_POST["description"];
    $price = $_POST["price"];

    $sql = "UPDATE menu SET naam = ?, omschrijving = ?, bedrag = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);

    $stmt->execute([
        $name, $description, $price, $id
    ]);
    header("location: ../admin");
}

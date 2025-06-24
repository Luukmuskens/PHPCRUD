<?php

require_once "db.php";

session_start();

if (!$_SESSION["is_logged_in"]) {
    die("Get out of my swamp!");
}

$db = new db();
$conn = $db->get_connection();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $price = $_POST["price"];
    $description = $_POST["description"];

    $sql = "INSERT INTO menu (naam, bedrag, omschrijving) VALUES (:naam, :bedrag, :omschrijving)";

    $stmt = $conn->prepare($sql);

    $stmt->execute([
        ":naam" => $name,
        ":bedrag" => $price,
        ":omschrijving" => $description
    ]);
    

}
header("../admin/index.php");
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
    $stmt = $conn->prepare("DELETE FROM menu WHERE id = ?");
    $stmt->execute([
        $id
    ]);
    header("location: ../admin");
}

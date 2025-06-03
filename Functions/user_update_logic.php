<?php
 include 'conn.php';

$data = [
    'usertype' => $_POST['usertype'],
    'id' => $_POST['id']
    
];
$sql = "UPDATE users SET usertype=:usertype WHERE id=:id";
$stmt= $connection->prepare($sql);
$stmt->execute($data);

header('Location:../index.php');
?>
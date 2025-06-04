<?php
session_start();
include 'conn.php';

    if(empty($_POST["email"]) || empty($_POST["password"])){
        header("Location: dashboard.php");
        exit();
    }
    
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $stmt = $connection->prepare("SELECT * FROM users WHERE email=:email AND password=:pass");
    $stmt->execute(["email" => $email,'pass' => $password]);
    $user = $stmt ->fetch(); 

    if($user["usertype"]=="user")
    {
        $_SESSION['email'] = $user['email'];
        header("location: userhome.php" );
    }
    elseif($user["usertype"]=="admin")
    {
        $_SESSION['email'] = $user['email'];
        header("location: dashboard.php");
    }
    else{
        echo "fout";
    }
?>
    <a href="logout.php"></a>     
<?php
session_start();
require_once("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);

    $query = $conn->prepare("SELECT password FROM users WHERE username = ?");
    $query->bind_param("s", $username);
    $query->execute();
    $query->bind_result($hashedPassword);

    if ($query->fetch() && password_verify($password, $hashedPassword)) {

        $_SESSION["username"] = $username;
        

        header("Location: main.php");
        exit();

    } else {
        die("Invalid login");
    }
}
?>

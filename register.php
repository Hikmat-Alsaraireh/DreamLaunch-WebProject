<?php
require_once("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = htmlspecialchars($_POST["username"]);
    $email    = htmlspecialchars($_POST["email"]);
    $industry = htmlspecialchars($_POST["industry"]);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $check = $conn->prepare("SELECT id FROM users WHERE username = ?");
    $check->bind_param("s", $username);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        die("Username exists");
    }

    $insert = $conn->prepare(
        "INSERT INTO users (username, email, industry, password)
         VALUES (?, ?, ?, ?)"
    );
    $insert->bind_param("ssss", $username, $email, $industry, $password);
    $insert->execute();

    header("Location: login.html");
    exit();
}
?>

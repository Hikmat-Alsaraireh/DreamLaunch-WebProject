<?php
session_start();
require_once("connect.php");

if (!isset($_SESSION["username"])) {
    header("Location: login.html");
    exit();
}

$username = $_SESSION["username"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>DreamLaunch | Main</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">

<nav class="navbar navbar-dark bg-black px-4">
<span class="navbar-brand">DreamLaunch 🚀</span>
<div class="d-flex align-items-center gap-3">
<span>Welcome, <?php echo htmlspecialchars($username); ?></span>
<a href="logout.php" class="btn btn-danger">Logout</a>
</div>
</nav>

<div class="container mt-4">
<div class="row row-cols-1 row-cols-md-3 g-4">

<div class="col">
<div class="card bg-black text-white h-100">
<div class="card-body">
<h5 class="card-title">AI Startup Breakthrough</h5>
<p class="card-text">
New AI platforms are helping startups automate decision-making and scale faster.
</p>
</div>
</div>
</div>

<div class="col">
<div class="card bg-black text-white h-100">
<div class="card-body">
<h5 class="card-title">Green Energy Innovation</h5>
<p class="card-text">
Clean energy startups are redefining sustainability with smart solutions.
</p>
</div>
</div>
</div>

<div class="col">
<div class="card bg-black text-white h-100">
<div class="card-body">
<h5 class="card-title">HealthTech Evolution</h5>
<p class="card-text">
Digital healthcare platforms are improving patient outcomes worldwide.
</p>
</div>
</div>
</div>

<div class="col">
<div class="card bg-black text-white h-100">
<div class="card-body">
<h5 class="card-title">Startup Funding Tips</h5>
<p class="card-text">
Learn how early-stage startups attract angel investors and venture capital.
</p>
</div>
</div>
</div>

<div class="col">
<div class="card bg-black text-white h-100">
<div class="card-body">
<h5 class="card-title">Design-Driven Products</h5>
<p class="card-text">
Modern startups focus on user-centered design to gain market advantage.
</p>
</div>
</div>
</div>

<div class="col">
<div class="card bg-black text-white

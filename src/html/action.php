<?php
$db_username = '89626';
$db_password = 'G4nrArP8!';
$db_database = 'db_89626';
$db_hostname = 'localhost:3306';


try {
    $db = new PDO("mysql:host=$db_hostname;dbname=$db_database", $db_username, $db_password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$company = $_POST["company"];
$message = $_POST["message"];

$sql_query = "INSERT INTO contact  (`id`, `naam`, `email`, `nummer`, `bedrijf`, `vraag`) VALUES (NULL, '$name', '$email', '$phone', '$company', '$message')";
    $statement = $db->prepare($sql_query);
    $statement->execute();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="../css/action.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;700&display=swap" rel="stylesheet">
<script src="../javascript/script.js"></script>
</head>
<body style="background-color: black;">
<header class="sticky-header"> 
    <ul>
        <li><a href="../../index.html" style="color: black;">Home</a></li>
        <li><a href="projecten.php" style="color: black;">Projecten</a></li>
        <li><a href="overmij.html" style="color: black;">Over mij</a></li>
        <li><a href="#" style="color: #FFA500;">Contact</a></li>
      </ul>
</header>

    <div class="action-wrapper">
    <h1>Bedankt voor het versturen van uw formulier, <?= $name ?></h1>
    <a href="../../index.html">
        <h2>Ga terug naar de <span style="color: #FFA500;"> hoofdpagina</span>.</h2>
    </a>
    </div>
</body>

<?php
$host = "localhost";
$dbname = "db_89626";
$username = "89626";
$password = "G4nrArP8!";

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $ex) {
    echo "Fout bij verbinden database: " . $ex->getMessage();
}

?>
<?php

$bdd_servername = "localhost";
$bdd_username = "admin";
$bdd_password = "palworld";

try {
    
    $conn = new PDO("mysql:host=$bdd_servername;dbname=the_sense", $bdd_username, $bdd_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

function refracto_text($text) {
    
    $text = strtolower($text);
    $text = stripslashes($text);
    $text = trim($text);
    $text = htmlspecialchars($text);

    return $text;
}

?>
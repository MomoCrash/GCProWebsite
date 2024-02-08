<?php

$bdd_servername = "mysql-thesense.alwaysdata.net";
$bdd_username = "thesense_admin";
$bdd_password = "qsdlkpghqsujidgqsojguqsioweqsjq546dfg4qs8df4gq+gb";

try {

    $conn = new PDO("mysql:host=$bdd_servername;dbname=thesense_data", $bdd_username, $bdd_password);
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
<?php
// Incluez votre fichier de connexion à la base de données
if (file_exists('../sql\sql-manager.php')) {
    require_once '../sql\sql-manager.php';
} else {
    echo 'Le fichier sql_manager.php n\'existe pas dans le chemin spécifié.';
}

// Vérifiez si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['code']) && isset($_POST['usages_left'])) {
    $code = $_POST['code'];
    $usagesLeft = $_POST['usages_left'];

    // Préparez une déclaration pour éviter les injections SQL
    $stmt = $conn->prepare("INSERT INTO nom_de_la_table (code, usages_left) VALUES (?, ?)");

    // Liez les paramètres et exécutez
    $stmt->bind_param("si", $code, $usagesLeft);

    if ($stmt->execute()) {
        echo "Le code promo a été ajouté avec succès.";
        header('Location: ../admin.php');
    } else {
        echo "Erreur: " . $stmt->error;
    }

    // Fermez le statement
    $stmt->close();
}

?>

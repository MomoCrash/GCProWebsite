<?php
if (file_exists('sql\sql-manager.php')) {
    require_once 'sql\sql-manager.php';
} else {
    echo 'Le fichier sql_manager.php n\'existe pas dans le chemin spécifié.';
}


// Vérifier si la méthode de la requête est POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($_POST['admin'] as $id => $adminStatus) {
        // Convertir la valeur en entier (1 ou 0)
        $adminStatus = (int)$adminStatus;
        // Préparer et exécuter la requête de mise à jour
        $stmt = $conn->prepare("UPDATE users SET admin = :adminStatus WHERE id = :id");
        $stmt->bindParam(':adminStatus', $adminStatus, PDO::PARAM_INT);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }
}
header('Location: admin.php'); // Redirection vers la page d'administration
exit();
?>

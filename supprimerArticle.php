<?php
// Inclure le gestionnaire de base de données
if (file_exists('sql\sql-manager.php')) {
    require_once 'sql\sql-manager.php';
} else {
    echo 'Le fichier sql_manager.php n\'existe pas dans le chemin spécifié.';
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['article_id'])) {
    $articleId = $_POST['article_id'];

    try {
        // Préparer la requête SQL pour supprimer l'article
        $stmt = $conn->prepare("DELETE FROM new WHERE id = :id");
        $stmt->bindParam(':id', $articleId, PDO::PARAM_INT);

        // Exécuter la requête
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            echo "Article supprimé avec succès!";
        } else {
            echo "Aucun article trouvé avec cet ID.";
        }
    } catch(PDOException $e) {
        echo "Erreur lors de la suppression de l'article: " . $e->getMessage();
    }
} else {
    echo "Aucun formulaire soumis ou ID d'article manquant.";
}
?>

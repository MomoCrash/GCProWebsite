<?php
// Inclure le gestionnaire de base de données
if (file_exists('sql\sql-manager.php')) {
    require_once 'sql\sql-manager.php';
} else {
    echo 'Le fichier sql_manager.php n\'existe pas dans le chemin spécifié.';
}

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $articleId = $conn->real_escape_string($_GET['id']);

    // Préparez une requête SQL pour sélectionner l'article par son ID
    $sql = "SELECT id, title, content, image_path FROM articles WHERE id = ?";
    
    // Préparez la déclaration
    if ($stmt = $conn->prepare($sql)) {
        // Liez les paramètres pour les marqueurs
        $stmt->bind_param("i", $articleId);
        
        // Exécutez la requête
        $stmt->execute();
        
        // Récupérez le résultat
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            // Si un article est trouvé, encodez-le en JSON et renvoyez-le
            $article = $result->fetch_assoc();
            echo json_encode($article);
        } else {
            // Si aucun article n'est trouvé, renvoyez un message d'erreur
            echo json_encode(array("error" => "Aucun article trouvé avec cet ID."));
        }
        
        // Fermez la déclaration
        $stmt->close();
    } else {
        echo json_encode(array("error" => "Erreur de préparation de la requête."));
    }
} else {
    echo json_encode(array("error" => "ID de l'article non spécifié."));
}

// Fermez la connexion
$conn->close();
?>
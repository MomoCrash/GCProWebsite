<?php
// Inclure le gestionnaire de base de données
if (file_exists('sql\sql-manager.php')) {
    require_once 'sql\sql-manager.php';
} else {
    echo 'Le fichier sql_manager.php n\'existe pas dans le chemin spécifié.';
}
// Assurez-vous que le formulaire a été soumis via la méthode POST.
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['article_id'])) {
    $articleId = $_POST['article_id'];
    $title = refracto_text($_POST['title']); // Utilisez votre fonction de nettoyage des entrées.
    $content = refracto_text($_POST['content']);
    $imagePath = ''; // Chemin de la nouvelle image, si uploadé.

    // Traiter l'image téléchargée, si elle existe.
    if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
        $targetDirectory = "uploads/";
        $imageFileType = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
        $imageName = uniqid() . '.' . $imageFileType;
        $targetFile = $targetDirectory . $imageName;

        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
            $imagePath = $targetFile;
        } else {
            die("Désolé, il y a eu une erreur lors du téléchargement de votre fichier.");
        }
    }

    // Préparer la requête SQL pour mettre à jour l'article.
    try {
        if ($imagePath !== '') {
            // Si une nouvelle image a été téléchargée, mettez à jour aussi le chemin de l'image.
            $stmt = $conn->prepare("UPDATE new SET title = :title, content = :content, image_path = :image_path WHERE id = :id");
            $stmt->bindParam(':image_path', $imagePath);
        } else {
            // Sinon, ne mettez à jour que le titre et le contenu.
            $stmt = $conn->prepare("UPDATE new SET title = :title, content = :content WHERE id = :id");
        }

        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':id', $articleId, PDO::PARAM_INT);

        // Exécuter la requête.
        $stmt->execute();

        echo "Article modifié avec succès!";
    } catch(PDOException $e) {
        echo "Erreur: " . $e->getMessage();
    }
} else {
    echo "Aucun formulaire soumis.";
}
?>
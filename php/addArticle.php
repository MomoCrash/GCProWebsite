<?php
// Inclure le gestionnaire de base de données
if (file_exists('../sql\sql-manager.php')) {
    require_once '../sql\sql-manager.php';
} else {
    echo 'Le fichier sql_manager.php n\'existe pas dans le chemin spécifié.';
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les valeurs du formulaire
    $title = refracto_text($_POST['title']);
    $content = refracto_text($_POST['content']);
    $imagePath = ''; // Initialiser le chemin de l'image comme vide

    // Gérer le téléchargement de l'image si un fichier a été téléchargé
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        // Définir le répertoire de destination des images
        $targetDirectory = "uploads/";
        // Créer ce répertoire s'il n'existe pas
        if (!file_exists($targetDirectory)) {
            mkdir($targetDirectory, 0755, true);
        }
        
        // Obtenir l'extension de fichier
        $imageFileType = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
        // Créer un nom de fichier unique pour éviter les écrasements
        $imageName = uniqid() . '.' . $imageFileType;
        $targetFile = $targetDirectory . $imageName;
        
        // Vérifier si le fichier est une image réelle
        if (getimagesize($_FILES['image']['tmp_name'])) {
            // Vous pouvez également vérifier la taille du fichier ici
            // Déplacer l'image téléchargée dans le répertoire de destination
            if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
                $imagePath = $imageName;
            } else {
                echo "Désolé, il y a eu une erreur lors du téléchargement de votre fichier.";
            }
        } else {
            echo "Le fichier n'est pas une image.";
        }
        $imagePath = "php/". $targetDirectory . $imageName;
    }

    // Préparer la requête SQL pour insérer l'article et le chemin de l'image
    try {
        $stmt = $conn->prepare("INSERT INTO new (title, content, image_path) VALUES (:title, :content, :image_path)");
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':image_path', $imagePath);

        // Exécuter la requête
        $stmt->execute();

        echo "Article créé avec succès!";
        header('Location: ../admin.php');
    } catch(PDOException $e) {
        echo "Erreur: " . $e->getMessage();
    }
}
?>



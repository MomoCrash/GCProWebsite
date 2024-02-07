<?php
// Simulacre de connexion à la base de données et récupération des données
// Remplacez ceci par votre propre logique de base de données

if (isset($_POST['article_id'])) {
    $articleId = $_POST['article_id'];

    // Simuler la récupération de l'article depuis la base de données
    // $article = fetchArticleFromDatabase($articleId);
    // Pour cet exemple, utilisons des valeurs fixes
    $article = [
        'id' => $articleId,
        'title' => 'Titre Exemple',
        'content' => 'Contenu exemple.',
        'image_path' => 'image_exemple.jpg'
    ];

    // Générer le formulaire de modification
    echo "<form method='post' action='modifierArticle.php' enctype='multipart/form-data'>
            <input type='hidden' name='article_id' value='{$article['id']}'>
            <div class='form-group'>
                <label for='article-title'>Titre de l'article:</label>
                <input type='text' id='article-title' name='title' value='{$article['title']}' required>
            </div>
            <div class='form-group'>
                <label for='article-content'>Contenu de l'article:</label>
                <textarea id='article-content' name='content' rows='4' required>{$article['content']}</textarea>
            </div>
            <div class='form-group'>
                <label for='article-image'>Image actuelle de l'article:</label>
                <img src='uploads/{$article['image_path']}' width='200' alt='Image de l'article'>
                <label for='article-new-image'>Télécharger une nouvelle image :</label>
                <input type='file' id='article-new-image' name='new_image'>
            </div>
            <button type='submit'>Enregistrer les modifications</button>
          </form>";
}
?>

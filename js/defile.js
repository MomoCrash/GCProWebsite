
document.getElementById('article-select').addEventListener('change', function() {
    var articleId = this.value;
    if (articleId) {
        // Préparez une requête AJAX pour obtenir les données de l'article
        fetch('getArticleForm.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: 'article_id=' + encodeURIComponent(articleId)
        })
        .then(response => response.text())
        .then(html => {
            // Injectez le formulaire de modification dans le conteneur sur la page
            document.getElementById('article-edit-form').innerHTML = html;
        })
        .catch(error => console.error('Error:', error));
    } else {
        // Si aucune sélection n'est faite, videz le conteneur
        document.getElementById('article-edit-form').innerHTML = '';
    }
});


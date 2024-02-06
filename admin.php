<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"></noscript>
    <link rel="stylesheet" href="css/style.css">
    <link href="css/mainstyle.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="css/admin.css">
    <title>Admin</title>
</head>


<body>
    <header>
        <nav class="navbar" id="navbar">
            <div class="nav-img">
              <a href="#"><img src="ressources/logo_black.svg" alt="logo home"></a>
            </div>
            <div class="nav-links">
              <ul>
                <li><a href="new.php">NEWS</a></li>
                <li><a href="#" class="nav-border">NOS EXPERIENCES</a></li>
                <li><a href="Apropos.html" class="nav-border">A PROPOS DE NOUS</a></li>
                <li><a href="equipement.html" class="nav-border">NOS EQUIPEMENTS</a></li>
                <li><a href="#" class="nav-border"><b>CONNEXION</b></a></li>
              </ul>
            </div>
            <img src="ressources/bouton_menu_by_moi.png" alt="menu_bouton" class="menu_bouton" id="menu_bouton">
        </nav>

        
    </header>
    <main>
        <div class="animated-on-scroll">
            <div class="admin-container">
                <h2>Créer un nouvel article</h2>
                <form id="create-article-form">
                    <div class="form-group">
                        <label for="article-title">Titre de l'article:</label>
                        <input type="text" id="article-title" name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="article-content">Contenu de l'article:</label>
                        <textarea id="article-content" name="content" rows="4" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="article-image">Image de l'article:</label>
                        <input type="file" id="article-image" name="image">
                    </div>
                    <button type="submit">Créer l'article</button>
                </form>
            </div>
        </div>
        <div class="animated-on-scroll">
            <div class="admin-container">
                <h2>Modifier un nouvel article</h2>
                <br>
                <div class="select">
                    <button type="button">Selectionner l'article  à modifier</button>
                </div>
                <br>
                <form id="create-article-form">
                    <div class="form-group">
                        <label for="article-title">Titre de l'article:</label>
                        <input type="text" id="article-title" name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="article-content">Contenu de l'article:</label>
                        <textarea id="article-content" name="content" rows="4" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="article-image">Image de l'article:</label>
                        <input type="file" id="article-image" name="image">
                    </div>
                    <button type="submit">Créer l'article</button>
                </form>
            </div>
        </div>
        <div class="animated-on-scroll">
            <div class="article">
                <br>
                <div class="select">
                    <button type="button">Selectionner l'article  à modifier</button>
                </div>
                <br>
                <h3>Titre de l'article</h3>
                <p>Contenu de l'article</p>
                <img src="chemin_de_l_image.jpg" alt="Image de l'article">
                <br>
                <br>
                <a href="#" class="delete-article">Supprimer</a>
            </div>
        </div>
        
    </main>

    <body>
        <footer>
            <div class="footer-nav">
                <a href="#"><span>Nous contacter</span></a>
                <a href="#"><span>Réservation</span></a>
                <a href="#"><span>FAQ</span></a>
            </div>
            <div class="copyright">
                © THE SENSE, SAS. Tous droits réservés
            </div>
            <div class="moda">
                <a href="#"><span>Modalités</span></a>
                <span> | </span>
                <a href="#"><span>Politique de confidentialité </span></a>
                <div class="contact">
                  <span> | </span>
                  <a href="#"><span>Contact</span></a>
                </div>
                
            </div>
            <div class="social-icons">
                <a href="#"><img src="ressources/Youtube.png" alt="Youtube"></a>
                <a href="#"><img src="ressources/Instagram.png" alt="Instagram"></a>
                <a href="#"><img src="ressources/Twitter.png" alt="Twitter"></a>
                <a href="#"><img src="ressources/Facebook.png" alt="Facebook"></a>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="js/actions.js"></script>
        <script src="js/animation.js"></script>
    </body>
    
</html>
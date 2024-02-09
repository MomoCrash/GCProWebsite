<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    </noscript>
    <link rel="stylesheet" href="css/style.css">
    <link href="css/mainstyle.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/admin.css">
    <title>Admin</title>
</head>
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
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Récupérer les données du formulaire
                $email = $_POST['email'];
                $password = $_POST['password'];
            }

            $articles = array();
            try {
                $stmt = $conn->query("SELECT id, title FROM new"); // Remplacer 'new' par le nom réel de votre table
                $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch(PDOException $e) {
                echo "Erreur: " . $e->getMessage();
            }

            session_start();
            if (isset($_SESSION["name"])) {
                $name = $_SESSION["name"];
                $email = $_SESSION["email"];
                $admin = $_SESSION["admin"];
            }
            
            if (!$admin) {
                header("Location: index.php");
            }

        ?>


<body>

    <header>
        <nav class="navbar" id="navbar">
            <div class="nav-img">
                <a href="#"><img src="ressources/logo_black.svg" alt="logo home"></a>
            </div>
            <div class="nav-links">
                <ul>
                    <li><a href="new.php">NEWS</a></li>
                    <li><a href="rooms/light_room1.php" class="nav-border">NOS EXPERIENCES</a></li>
                    <li><a href="apropos.php" class="nav-border">A PROPOS DE NOUS</a></li>
                    <li><a href="equipement.php" class="nav-border">NOS EQUIPEMENTS</a></li>
                    <li><a href="#" id="login" class="nav-border"><b>CONNEXION</b></a></li>
                </ul>
            </div>
            <img src="ressources/bouton_menu_by_moi.png" alt="menu_bouton" class="menu_bouton" id="menu_bouton">
        </nav>


    </header>
    <main>
        <div class="animated-on-scroll">
            <div class="admin-container">
                <h2>Créer un nouvel article</h2>
                <form method="post" action="php/addArticle.php" id="create-article-form" enctype="multipart/form-data">
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
                <br>
                <form id="select-article-form">
                    <div class="form-group">
                        <label for="article-select">Sélectionner l'article à modifier :</label>
                        <select id="article-select" name="article_id">
                            <option value="">Sélectionnez un article</option>
                            <?php foreach ($articles as $article): ?>
                            <option value="<?php echo htmlspecialchars($article['id']); ?>">
                                <?php echo htmlspecialchars($article['title']); ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </form>

                <div id="article-edit-form">
                    <!-- Le formulaire de modification sera injecté ici -->
                </div>

            </div>
        </div>
        <div class="animated-on-scroll">
            <div class="article">
                <form id="delete-article-form" method="post" action="php/supprimerArticle.php">
                    <div class="form-group">
                        <label for="article-delete-select">Sélectionner l'article à supprimer :</label>
                        <select id="article-delete-select" name="article_id">
                            <option value="">Sélectionnez un article</option>
                            <?php foreach ($articles as $article): ?>
                            <option value="<?php echo htmlspecialchars($article['id']); ?>">
                                <?php echo htmlspecialchars($article['title']); ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button type="submit"
                        onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet article ?');">Supprimer
                        l'article</button>
                </form>
            </div>
        </div>
        <div class="animated-on-scroll">
            <div class="promo">
                <h2>Ajouter un Code Promo</h2>
                <form method="post" action="php/codepromo.php">
                    <div class="form-group">
                        <label for="code">Code Promo:</label>
                        <input type="text" id="code" name="code" maxlength="10" required>
                    </div>
                    <div class="form-group">
                        <label for="usages_left">Nombre d'usages:</label>
                        <input type="number" id="usages_left" name="usages_left" min="1" max="100" required>
                    </div>
                    <button type="submit">Ajouter le Code</button>
                </form>
            </div>
        </div>
        <div class="animated-on-scroll">
            <div class="admin-container">
                <h2>Gestion des utilisateurs</h2>
                <form method="post" action="php/updateAdminStatus.php">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Admin</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                    $users = array();
                                    try {
                                        $stmt = $conn->query("SELECT id, name, email, admin FROM users");
                                        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                    } catch(PDOException $e) {
                                        echo "Erreur: " . $e->getMessage();
                                    }

                                    foreach ($users as $user):
                                ?>
                            <tr>
                                <td><?php echo htmlspecialchars($user['id']); ?></td>
                                <td><?php echo htmlspecialchars($user['name']); ?></td>
                                <td><?php echo htmlspecialchars($user['email']); ?></td>
                                <td>
                                    <!-- Champ caché pour s'assurer qu'une valeur est envoyée même si la case est décochée -->
                                    <input type="hidden" name="admin[<?php echo $user['id']; ?>]" value="0">
                                    <input type="checkbox" name="admin[<?php echo $user['id']; ?>]" value="1"
                                        <?php echo ($user['admin'] == 1 ? 'checked' : ''); ?>>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <button type="submit">Mettre à jour les statuts</button>
                </form>
            </div>
        </div>
        </div>
        <div class="admin-container">
            <h3>Newsletter</h3>
            <form action="php/send_newsletter.php" method="post">
                <label for="subject">Sujet:</label>
                <input type="text" id="subject" name="subject" required>
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
                <input type="submit" value="Envoyer">
            </form>
        </div>
        <div class="admin-container">
            <br>
            <h3>Liste des Réservations</h3>
            <?php
                try {
                    $stmt = $conn->query("SELECT id, user_id, date, player_number, mode, paid, discover_way FROM booking"); // Remplacez 'reservations' par le nom réel de votre table de réservations
                    $reservations = $stmt->fetchAll(PDO::FETCH_ASSOC);
                } catch(PDOException $e) {
                    echo "Erreur: " . $e->getMessage();
                }

                if (!empty($reservations)): 
            ?>
            <div class="scrollable-table">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User ID</th>
                            <th>Date</th>
                            <th>Player Number</th>
                            <th>Mode</th>
                            <th>Paid</th>
                            <th>Discover Way</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($reservations as $reservation): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($reservation['id']); ?></td>
                            <td><?php echo htmlspecialchars($reservation['user_id']); ?></td>
                            <td><?php echo htmlspecialchars($reservation['date']); ?></td>
                            <td><?php echo htmlspecialchars($reservation['player_number']); ?></td>
                            <td><?php echo htmlspecialchars($reservation['mode']); ?></td>
                            <td><?php echo htmlspecialchars($reservation['paid']) ? 'Yes' : 'No'; ?></td>
                            <td><?php echo htmlspecialchars($reservation['discover_way']); ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?php else: ?>
                <p>Aucune réservation trouvée.</p>
                <?php endif; ?>
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
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
        <script src="js/actions.js"></script>
        <script src="js/animation.js"></script>
        <script src="js/defile.js"></script>
    </body>

</html>
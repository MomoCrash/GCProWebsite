<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/newstyle.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="css/style2.css" rel="stylesheet" type="text/css" />

    <title>The Sense | Les News</title>
</head>

<?php 

include "sql/sql-manager.php";

session_start();
if (isset($_SESSION["id"])) {
    $id = $_SESSION["id"];
    $email = $_SESSION["email"];
    $name = $_SESSION["name"];
    $admin = $_SESSION["admin"];
}

?>

<body class="fond_page_news">
    <nav class="navbar" id="navbar" style="position: inherit;">
        <div class="nav-img">
            <a href="index.php"><img src="ressources/logo_black.svg" alt="logo home"></a>
        </div>
        <div class="nav-links">
            <ul>
                <li><a href="new.php">NEWS</a></li>
                <li><a href="rooms/light_room1.php" class="nav-border">NOS EXPERIENCES</a></li>
                <li><a href="apropos.php" class="nav-border">A PROPOS DE NOUS</a></li>
                <li><a href="equipement.php" class="nav-border">NOS EQUIPEMENTS</a></li>
                <?php if(!isset($email)): ?>
                <li><a href="#" id="login" class="nav-border"><b>CONNEXION</b></a></li>
                <?php else: ?>
                <li><a href="#" id="login" class="nav-border"><b>MON COMPTE</b></a></li>
                <?php endif ?>
            </ul>
        </div>
        <img src="ressources/bouton_menu_by_moi.png" alt="menu_bouton" class="menu_bouton" id="menu_bouton">
    </nav>
    <div class="loginbg">
        <form action="account.php?method=login&redirect=new.php" method="POST" class="login-pan mb-3"
            style="width: 0px; height: 0px; z-index: 1; visibility: hidden;">
            <div class="login-content">
                <p><SPAN STYLE="color:#000000"><b>Connexion</b></span></p>
                <p> Identifiant <input class="login-input form-label" type="email" name="email"
                        placeholder="abc@mail.fr"> </input>
                </p>
                <p> Mot de passe <input class="login-input form-label" type="password" name="password"
                        placeholder="······"> </input>
                </p>
                <a style="gray" href="account.php?method=register">Crée un compte</a> <button type="submit"
                    name="submit" placeholder="Connexion">Connexion</button>
            </div>
        </form>
    </div>
    <header></header>
    <div class="img-header"><img src="ressources/EN TÊTE.png" alt="header"></div>

    <main>
        <!-- Main content sections -->
        <div class="animated-on-scroll">
            <div class="first-p">
                <h1>SUIVEZ TOUTE L'ACTUALITE DE THE SENSE</h1>
                <p>Nous souhaitons vous offrir toujours plus d’expériences immersive, c’est pourquoi nous avons à cœur
                    de vous proposer de plus en plus de nouvelles aventures. Toute l’année, The Sense vous invite à
                    rejoindre ces rooms événements et à découvrir celles qui arriveront plus tard.
                </p>
            </div>
        </div>

        <?php
            $news = array();
            try {
                $stmt = $conn->query("SELECT title, content, image_path FROM new");
                $news = $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch(PDOException $e) {
                echo "Erreur: " . $e->getMessage();
            }

            foreach ($news as $new):
        ?>

        <section>
            <!-- News article -->
            <div class="animated-on-scroll">
                <div class="second-p">
                    <img src="<?= $new['image_path'] ?>" alt="video" width=110% height=110%>
                    <div class="text-second" animation-type="fadeIn" animation-delay="0.5s">
                        <h1><?= htmlspecialchars($new['title']) ?></h1>
                        <p><?= htmlspecialchars($new['content']) ?></p>
                    </div>
                </div>
            </div>
        </section>

        <?php endforeach; ?>

        <!-- Carousel -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="ressources/image129.webp" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>LES ÉQUIPEMENTS THE SENSE</h5>
                        <p>Tous nos équipements sont prévus pour toutes les tailles et tous les âges, ils conviennent
                            aussi bien aux adultes qu'aux jeunes de 12 ans. Ils vous garantissent également un confort à
                            toutes épreuves lors de vos voyages chez nous.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="ressources/Rectangle94.webp" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <p>"C'est dingue, j'ai vraiment eu l'impression d'être transporté dans un autre monde. Avant je
                            ne faisais pas d'expérience VR car je ne croyais pas en la qualité mais grâce à The Sense,
                            j'ai pu traverser la frontière du réel."</p>
                        <p>- Denise, 23 Octobre 2020 -</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="ressources/image127.webp" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <p>“Avec mes fils nous avons tenté l'expérience “NAMELESS”, moi qui pensais avoir tout vu dans
                            le domaine de l'horreur, je ne me suis jamais autant trompé. Si vous êtes à la recherche de
                            sensation forte et de frissons, la DARK ROOM est faite pour vous”</p>
                        <p>- Denise, 23 Octobre 2020 -</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="ressources/image128.webp" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>NOUVELLE ROOM EN VUE !</h5>
                        <p>En 2021, préparez à manger du slime en pleine face, les fantômes de Ghost Buster arrivent
                            chez THE SENSE. Ça promet de belles parties de chasse aux fantômes dans tout le complexe.
                            Les réservations sont d'ores et déjà possible sur place et en Février sur internet.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="ressources/image130.webp" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <p>“Avec mes fils nous avons tenté l'expérience “NAMELESS”, moi qui pensais avoir tout vu dans
                            le domaine de l'horreur, je ne me suis jamais autant trompé. Si vous êtes à la recherche de
                            sensation forte et de frissons, la DARK ROOM est faite pour vous”</p>
                        <p>- Denise, 23 Octobre 2020 -</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
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
        <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="../js/actions.js"></script>

    </body>

    <script>
    const menubtns = document.querySelector(".menu_bouton")
    const navLinks = document.querySelector(".nav-links")
    const navbar = document.getElementById("navbar")
    var isOpen = true


    menubtns.addEventListener('click', () => {
        navLinks.classList.toggle('mobile-menu');
        if (isOpen) {
            navbar.style.backdropFilter = 'none';
            isOpen = false
        } else {
            navbar.style.backdropFilter = 'blur(10px)'
            isOpen = true
        }
    })
    </script>

</html>
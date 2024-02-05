<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/newstyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/style2.css" rel="stylesheet" type="text/css" />
    <title>Les News</title>
</head>

<?php

session_start();
if (isset($_SESSION["name"])) {
  $name = $_SESSION["name"];
  $email = $_SESSION["email"];
  $admin = $_SESSION["admin"];
}

?>

<body>
    <header>
        <div class="nav">
            <div class="nav-img">
                <a href="#"><img src="ressources/logo_black.svg" alt="logo home"></a>
            </div>
            <div class="nav-right">
                <a href="#">NEWS</a>
                <a href="#" class="nav-border">NOS EXPERIENCES</a>
                <a href="Apropos.html" class="nav-border">A PROPOS DE NOUS</a>
                <a href="equipement.php" class="nav-border">NOS EQUIPEMENTS</a>
                <a href="#" id="login" class="nav-border"><b> <?= isset($name) ? $name : "CONNEXION"; ?> </b></a>
                <!-- Connexion page -->
                <form action="account.php?method=login&redirect=new.php" method="POST" class="login-pan"
                    style="width: 0px; height: 0px; visibility: hidden; display:none;">
                    <div class="login-content">
                        <p> Connexion </p>
                        <p> Identifiant <input class="form-label" type="email" name="email" placeholder="abc@mail.fr">
                            </input>
                        </p>
                        <p> Mot de passe <input class="form-label" type="password" name="password" placeholder="······">
                            </input>
                        </p>
                        <a style="gray" href="account.php?method=register"> Crée un compte </a> <button type="submit"
                            name="submit" placeholder="Connexion"> Connexion </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="img-header"><img src="ressources/EN TÊTE.png" alt="header"></div>
    </header>

    <main>
        <?php if (isset($admin) && $admin): ?>
        <p> t admin la chienneté </p>
        <?php else: ?>
        <p> t pas admin la chienneté </p>
        <?php endif; ?>

    </main>

    <footer>
        <div class="footer-nav">
            <a href="#">Nous contacter</a>
            <a href="#">Réservation</a>
            <a href="#">FAQ</a>
        </div>
        <div class="copyright">
            © THE SENSE, SAS. Tous droits réservés
        </div>
        <div class="moda">
            <a href="#">Modalités </a>
            <span> | </span>
            <a href="#"> Politique de confidentialité </a>
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

</body>

</html>
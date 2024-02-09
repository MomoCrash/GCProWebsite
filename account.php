<!DOCTYPE html>
<html lang="fr">

<?php 

include "sql/sql-manager.php";

$method = "login";
if (isset($_GET["method"])) {
    $method = $_GET["method"];
}

session_start();
if (isset($_SESSION["id"])) {
    $id = $_SESSION["id"];
    $email = $_SESSION["email"];
    $name = $_SESSION["name"];
    $admin = $_SESSION["admin"];
}

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style2.css" rel="stylesheet" type="text/css" />
    <link href="css/mainstyle.css" rel="stylesheet" type="text/css" />
    <link href="css/booking.css" rel="stylesheet" type="text/css" />
    <meta name="google-signin-client_id"
        content="1055389349967-6clh6ao3sp4aadjb22g7sa0fbcvn0g99.apps.googleusercontent.com">
    <title>Document</title>
</head>

<body style="background-image: none">


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

    <div class="header">
        <div class="background-header"> </div>
    </div>
    <header></header>

    <?php if($method == "login" && !isset($email)): ?>
    <div id="form-login">
        <form action="account.php?method=login" method="POST" style="margin: auto;">
            <div class="login-content"
                style="background-color: #E5E5E5; padding: 20px; border-radius: 10px; border: 1px solid;">
                <p> Connexion </p>
                <p> Identifiant <input class="form-label" type="email" name="email" required placeholder="abc@mail.fr"
                        value=<?= isset($_POST["email"]) ? $_POST["email"] : "" ?>> </input>
                </p>
                <p> Mot de passe <input class="form-label" type="password" name="password" required
                        placeholder="······">
                    </input>
                </p>

                <?php if(isset($_POST["email"])): ?>
                <a style="gray" href="account.php?method=register&email=<?= $_POST["email"] ?>"> Crée un compte </a>
                <?php else: ?>
                <a style="gray" href="account.php?method=register"> Crée un compte </a>
                <?php endif; ?>

                <button type="submit" name="submit" placeholder="Connexion"> Connexion </button>
            </div>
        </form>
    </div>
    <?php elseif($method == "register"  && !isset($email)): ?>
    <div id="form-login">
        <form action="account.php?method=register" method="POST" style="margin: auto;">
            <div class="login-content"
                style="background-color: #E5E5E5; padding: 20px; border-radius: 10px; border: 1px solid;">
                <p> Crée un compte </p>
                <h6>*Champs Obligatoires</h6>
                <p> Nom/Prénom* <input class="form-label" type="text" name="name" required placeholder="Jeremy Nadeau"
                        value=<?= isset($_POST["name"]) ? $_POST["name"] : "" ?>>
                    </input>
                </p>
                <p> Téléphone <input class="form-label" type="text" name="phone" placeholder="0601020304"
                        value=<?= isset($_POST["phone"]) ? $_POST["phone"] : "" ?>> </input>
                </p>
                <p> Votre email* <input class="form-label" type="email" name="email" required placeholder="abc@mail.fr"
                        value=<?= isset($_POST["email"]) ? $_POST["email"] : "" ?>>
                    </input>
                </p>
                <p> Mot de passe* <input class="form-label" type="password" name="password" required
                        placeholder="······" value=<?= isset($_POST["password"]) ? $_POST["password"] : "" ?>>
                    </input>
                </p>
                <p> Confirmer le mot de passe* <input class="form-label" type="password" required name="password_repeat"
                        placeholder="······"> </input>
                </p>


                <?php if(isset($_POST["email"])): ?>
                <a style="gray" href="account.php?method=login&email=<?= $_POST["email"] ?>"> Se connecter </a>
                <?php else: ?>
                <a style="gray" href="account.php?method=login"> Se connecter </a>
                <?php endif; ?>

                <button type="submit" name="submit" placeholder="Connexion"> Crée un compte </button>
            </div>
        </form>
    </div>
    <?php endif; ?>

    <?php if(isset($id)): ?>

    <?php
    $request =  $conn->prepare("SELECT * FROM users WHERE email='" . $email . "';");
    $request->execute();
    //nombre de lignes retournées
    $count = $request->rowCount();
    $currentRow  = $request -> fetch();
    setcookie('fidelityCount', $currentRow["fidelity"], time() + (86400 * 30), "/");
    ?>

    <br> <br>
    <div class="panel" style="margin: auto;">
        <div id="background" class="vertical-container"
            style="background-color: #E5E5E5; padding: 20px; border-radius: 10px; border: 1px solid;">
            <p> Mon adresse mail <?= $email ?></p>
            <p> Mot de passe XXXXXXXX</p>

            <div class="horizontal-container">
                <p>Réservations
                <p class="fidelity-text"></p>
                </p>
            </div>
            <div class="horizontal-container">
                <div class="fidelity-point"></div>
            </div>
        </div>
    </div>
    <br> <br>

    <?php endif; ?>

    <?php 

    if ($method == "register" && isset($_POST["password"])) {

        $password = $_POST["password"];
        $email = refracto_text($_POST["email"]);
        $name = refracto_text($_POST["name"]);
        if (isset($_GET["phone"])) {
            $phone = $_GET["phone"];
        } else {
            $phone = null;
        }

        if ($password != $_POST["password_repeat"]) {
            echo "Les mots de passes ne sont pas identiques.";
            return;
        }

        $request =  $conn->prepare("SELECT * FROM users WHERE email='" . $email . "';");
        $request->execute();
        //nombre de lignes retournées
        $count = $request->rowCount();
        $currentRow  = $request -> fetch();

        if ($count < 1) {

            $request =  $conn->prepare("INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `admin`) VALUES (NULL, '" . $name . "', '" . $email . "', '" . password_hash($password, PASSWORD_DEFAULT) . "', '" . $phone . "', '0');");
            $request->execute();

            $_SESSION["name"] = $name;
            $_SESSION["email"] = $email;

            $request =  $conn->prepare("SELECT * FROM users WHERE email='" . $email . "';");
            $request->execute();
            $currentRow  = $request -> fetch();

            $_SESSION["id"] = $currentRow["id"];
            $_SESSION["admin"] = false;

            $redirect = "index.php";
            if (isset($_GET["redirect"])) {
                $redirect = $_GET["redirect"];
            }
            header("Location: " . $redirect);

        } else {
            echo "Un problème est survenue lors de la création du compte.";
        }

    }
        
    if ($method == "login" && isset($_POST["password"])) {

        $password = $_POST["password"];
        $email = refracto_text($_POST["email"]);

        $request =  $conn->prepare("SELECT * FROM users WHERE email='" . $email . "';");
        $request->execute();
        //nombre de lignes retournées
        $count = $request->rowCount();
        $currentRow  = $request -> fetch();

        if ($count > 0 && password_verify($password, $currentRow["password"])) {

            $_SESSION["name"] = $currentRow["name"];
            $_SESSION["email"] = $email;
            $_SESSION["id"] = $currentRow["id"];
            if ($currentRow["admin"] == 1) {
                $_SESSION["admin"] = true;
            } else {
                $_SESSION["admin"] = false;
            }
            $redirect = "index.php";

            if (isset($_GET["redirect"])) {
                $redirect = $_GET["redirect"];
            }
            header("Location: " . $redirect);

        } else {

            echo "Identifiant ou mot de passe inconnu";

        }

    }

    ?>

    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="js/account.js"></script>

</body>

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

</html>
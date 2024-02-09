<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Battle Room</title>
    <link href="../css/mainstyle.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../css/booking.css">
</head>

<?php

include "../sql/sql-manager.php";

session_start();

$_SESSION["page"] = "battle_room";

if(isset($_SESSION["finalized"])){
    if (isset($_SESSION["reloaded"])) {
        unset($_SESSION["date"]);
        unset($_SESSION["finalized"]);
        unset($_SESSION["reloaded"]);
    } else {
        $_SESSION["reloaded"] = true;
    }
}

if (isset($_SESSION["email"])) {

    $email = $_SESSION["email"];
    $name = $_SESSION["name"];
    $id = $_SESSION["id"];

}

?>

<body class="fond_template">
    <nav class="navbar" id="navbar">
        <div class="nav-img">
            <a href="../index.php"><img src="../ressources/logo_black.svg" alt="logo home"></a>
        </div>
        <div class="nav-links">
            <ul>
                <li><a href="../new.php">NEWS</a></li>
                <li><a href="../rooms/light_room1.php" class="nav-border">NOS EXPERIENCES</a></li>
                <li><a href="../apropos.php" class="nav-border">A PROPOS DE NOUS</a></li>
                <li><a href="../equipement.php" class="nav-border">NOS EQUIPEMENTS</a></li>
                <?php if(!isset($email)): ?>
                <li><a href="#" id="login" class="nav-border"><b>CONNEXION</b></a></li>
                <?php else: ?>
                <li><a href="#" id="login" class="nav-border"><b>MON COMPTE</b></a></li>
                <?php endif ?>
            </ul>
        </div>
        <img src="../ressources/bouton_menu_by_moi.png" alt="menu_bouton" class="menu_bouton" id="menu_bouton">
    </nav>
    <header></header>
    <div class="loginbg">
        <form action="../account.php?method=login&redirect=rooms/batlle_room2.php" method="POST" class="login-pan mb-3"
            style="width: 0px; height: 0px; z-index: 1; visibility: hidden;">
            <div class="login-content">
                <p><SPAN STYLE="color:#000000"><b>Connexion</b></span></p>
                <p> Identifiant <input class="login-input form-label" type="email" name="email"
                        placeholder="abc@mail.fr"> </input>
                </p>
                <p> Mot de passe <input class="login-input form-label" type="password" name="password"
                        placeholder="······"> </input>
                </p>
                <a style="gray" href="../account.php?method=register">Crée un compte</a> <button type="submit"
                    name="submit" placeholder="Connexion">Connexion</button>
            </div>
        </form>
    </div>

    <div class="top_container">
        <div class="position_logo"><img src="../ressources/LOGO ROOM.png" alt="logos"></div>
        <div class="position_logo_mobile">
            <img src="../ressources/logo_battle_mobile.png">
            <div class="position_img2_logo">
                <img src="../ressources/LIGHT_ROOM_logo.png">
            </div>
        </div>
    </div>

    <div class="btn_container">
        <div id="btn">
            <a href="#text"><button class="btn_decouvrir" type="button">DÉCOUVRIR</button></a>
        </div>
    </div>
    <div id="text"></div>

    <div class="intro_container" id="intro">

        <div class="popup-btn"><img class="img_trailer" src="../ressources/VIDEO.webp" /></div>

        <!--POPUP VIDEO-->
        <div class="popup-wrap">

            <div class="popup-box">

                <div class="line"></div>

                <div class="trailer">
                    <video id="video" width="1090">
                        <source src="../ressources/Trailer/Trailer.mp4" type="video/mp4" />
                    </video>
                </div>
            </div>
        </div>


        <div class="texte_intro">

            <div class="titre_intro">
                <p>QU'EST CE QUE LA <img src="../ressources/BATTLE_ROOM_pc.png" class="battle_room_logo" /><img
                        src="../ressources/BATTLE_ROOM_mobile.png" class="battle_room_logo_mobile" /> ?</p>
            </div>

            <p> Vous cherchez à connaitre qui est le meilleur dans la famille ou qui fera le S.A.M ce
                soir ? Venez régler vos comptes dans la BATTLE ROOM par équipe de 1 à 4 joueurs soit 8 joueurs au
                maximum. Au travers de nos différents modes de jeux, prouvez votre courage et montrez qu’au reste du
                monde que vous êtes le meilleur. Battez tous les records, faites ressortirvotre côté compétitif et pas
                de quartier ! N'attendez plus et rejoignez l’arène, pour prouver que vous serez le prochain champion de
                THE SENSE.
            </p>

        </div>
    </div>

    <!-- DERNIERE PARTIE -->
    <div class="intro_exp_darkroom">
        <a href="battle_room1.php"><img class="redirectbtn" src="../ressources/retournnoir.png"></a>

        <div class="img_dark2">
            <img src="../ressources/darkroom_banner2.png">
        </div>

        <div class="space"></div>

    </div>

    <?php include "booking.php"; ?>

</body>

<!-- PAS TOUCHE -->

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
        <!-- Replace # with actual links to your social media profiles -->
        <a href="#"><img src="../ressources/Youtube.png" alt="Youtube"></a>
        <a href="#"><img src="../ressources/Instagram.png" alt="Instagram"></a>
        <a href="#"><img src="../ressources/Twitter.png" alt="Twitter"></a>
        <a href="#"><img src="../ressources/Facebook.png" alt="Facebook"></a>
    </div>
</footer>

<!-- POP UP VIDEO -->
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

function handleIntersection(entries, observer) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('footer-anim');
            // Optionnel: Désactivez l'observer si vous ne voulez l'animation qu'une seule fois
            observer.unobserve(entry.target);
        }
    });
}

// Création de l'observer avec la fonction et les options
const observer = new IntersectionObserver(handleIntersection, {
    threshold: 0.1 // Déclenche l'animation lorsque 10% du footer est visible
});

// Cible le footer pour l'observer
const footer = document.querySelector('footer');
observer.observe(footer);
</script>

<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="../js/actions.js"></script>
<script src="../js/booking.js"></script>
<script src="../js/home.js"></script>

</html>
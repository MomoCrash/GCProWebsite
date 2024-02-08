<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../css/mainstyle.css" rel="stylesheet" type="text/css" />
</head>

<body class="fond_template">
    <nav class="navbar" id="navbar">
        <div class="nav-img">
            <a href="../index.php"><img src="../ressources/logo_black.svg" alt="logo home"></a>
        </div>
        <div class="nav-links">
            <ul>
                <li><a href="../new.php">NEWS</a></li>
                <li><a href="../lightroom/light_room1.php" class="nav-border">NOS EXPERIENCES</a></li>
                <li><a href="../apropos.php" class="nav-border">A PROPOS DE NOUS</a></li>
                <li><a href="../equipement.php" class="nav-border">NOS EQUIPEMENTS</a></li>
                <li><a href="#" id="login" class="nav-border"><b>CONNEXION</b></a></li>
            </ul>
        </div>
        <img src="../ressources/bouton_menu_by_moi.png" alt="menu_bouton" class="menu_bouton" id="menu_bouton">
    </nav>
    <header></header>
    <div class="loginbg">
        <form action="../account.php?method=login&redirect=../battleroom/batlle_room3.php" method="POST"
            class="login-pan mb-3" style="width: 0px; height: 0px; z-index: 1; visibility: hidden;">
            <div class="login-content">
                <p><SPAN STYLE="color:#000000"><b>Connexion</b></span></p>
                <p> Identifiant <input class="login-input form-label" type="email" name="email"
                        placeholder="abc@mail.fr"> </input>
                </p>
                <p> Mot de passe <input class="login-input form-label" type="password" name="password"
                        placeholder="······"> </input>
                </p>
                <a style="gray" href="../account.php?method=register'">Crée un compte</a> <button type="submit"
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

        <a href="#img1"><img class="img_trailer" src="../ressources/image_battle.png" /></a>


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
    <div class="second_part">
        <div class="pc"><img src="../ressources/forme10.webp"></div>
        <div class="mobile"><img src="../ressources/forme9.webp"></div>
    </div>



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

<a href="#_" class="lightbox" id="img1">
    <div id="videoModal" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel"
        aria-hidden="false" style="display: block;">
        <div class="modal-header"></div>
        <div class="modal-body"><iframe width="870" height="489" src="https://www.youtube.com/embed/9Qzm66JX-RA"
                frameborder="0" allowfullscreen=""></iframe></div>
        <div class="modal-footer"></div>
    </div>



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
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="../js/actions.js"></script>

</html>
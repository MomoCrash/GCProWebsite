<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/mainstyle.css" rel="stylesheet" type="text/css" />
    <link href="css/login.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/btob.css">
    <link rel="stylesheet" href="css/style.css">
    <title>B TO B</title>
</head>


<body>
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
                <li><a href="#" id="login" class="nav-border"><b>CONNEXION</b></a></li>
            </ul>
        </div>
        <img src="ressources/bouton_menu_by_moi.png" alt="menu_bouton" class="menu_bouton" id="menu_bouton">
    </nav>
    <header></header>
    <div class="img-header"><img src="ressources/entetebtob.png" alt="header"></div>
    <div class="loginbgb2b">
        <form action="account.php?method=login&redirect='darkroom/dark_room1.php'" method="POST" class="login-pan mb-3"
            style="width: 0px; height: 0px; z-index: 1; visibility: hidden;">
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

        
            <!--=================================BOUTON DECOUVRIR=================================-->
            <div class="btn_container">
                <a href="#intro" class="discover_btn">Découvrir</a>
            </div> 
             <!--=================================BANDEAU INTRO=================================-->
            <div class="intro_container" id="intro">
                <!--LOGO A GAUCHE-->
                <div class="popup-btn"><img class="img_trailer" src="ressources/VIDEO.webp"/></div>
                
                <!--POPUP VIDEO-->
                <div class="popup-wrap">
                
                    <div class="popup-box">
                        
                        <div class="line"></div>

                        <div class="trailer">
                            <video id="video" width="1090"><source src="ressources/Trailer/Trailer.mp4" type="video/mp4" /></video>
                        </div>
                    </div>
                </div>
                
                <!--TEXTE A DROITE-->
                <div class = "text_intro">

                    <div class="title_intro">
                        <p>QU'EST CE QUE <img class="logo" src="ressources/Sense.webp"/> ?</p>
                    </div> 
        
                    <p> Préparez-vous pour une expérience unique qui vous emmenera dans un autre univers.
                        Vivez vos émotions comme vous ne l’avez jamais fait auparavant. Avec THE SENSE
                        explorez d’autres dimensions et vivez l’impossible en interragissant avec un
                        environnement dynamique et virtuel. Ce n’est pas une expérience en réalité virtuelle
                        que vous vivez, c’est la réalité.
                    </p>

                    <a href="Apropos.php" class="about_btn">DÉCOUVREZ THE SENSE ➜</a>
                </div>
        </div>

        <!--ESPACE-->
        <div class="space"></div>
        </div>
        

            <div class="animated-on-scroll">
                <div class="second-div">
                    <div class="text-content">
                        <h1>AU SERVICE DES PROFESSIONNELS</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                    </div>
                </div>
            </div>

        <section>
        <div class="animated-on-scroll">
            <div class="third-div">
                <div class="img-third"><img src="ressources\image157.png" alt="header"></div>
                <div class="text-content">
                    <div class="text-content-third">
                    <h1>POUR LE SECTEUR DU BÂTIMENT</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <section>
            <div class="animated-on-scroll">
                <div class="four-div">
                    <div class="text-content">
                        <div class="text-content-four">
                        <h1>POUR LE SECTEUR COMMERCIAL</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                        </div>
                    </div>
                    <div class="img-four"><img src="ressources\image158.png" alt="header"></div>
                </div>
            </div>
        </section>
        <section>
        <div class="animated-on-scroll">
                <div class="five-div">
                    <div class="img-five"><img src="ressources\image159.png" alt="header"></div>
                    <div class="text-content">
                        <div class="text-content-five">
                        <h1>POUR LES INGÉNIEURS</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
          <div class="contact-container">

            <h2>CONTACTEZ NOUS</h2>
                <form action="Apropos.php" method="post">
                  <input class="inputcontact" id="nom" name="nom" size="28" type="text" placeholder="Nom"/> 
                  <input class="inputcontact" id="prenom" name="prenom" size="27" type="text" placeholder="Prenom"/> <br> <br>
                  <input class="inputcontact" id="mail" name="mail" size="27" type="text" placeholder="Mail"/> <br> <br>
                  <input class="inputcontact" id="content" name="content" size="81" type="text" placeholder="Votre message/avis"/></p>
                  <input class="submitcontact" type="submit" value="Envoyer" name="submit"> </input>
                </form>
                <div class="tel">
                  <p> ou par téléphone </p>
                  <a href="tel:0601023672">06 01 02 36 72</a>
                </div>
          </div>
      </div>
    </main>

    <body>
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
        <script src="js/btob.js"></script>
    </body>
    
</html>
<script>
    const menubtns = document.querySelector(".menu_bouton")
    const navLinks = document.querySelector(".nav-links")
    const navbar = document.getElementById("navbar")
    var isOpen = true
    

    menubtns.addEventListener('click',()=>{
      navLinks.classList.toggle('mobile-menu');
      if(isOpen){
      navbar.style.backdropFilter = 'none';
      isOpen = false
      }else{
        navbar.style.backdropFilter = 'blur(10px)'
        isOpen = true
      }
    })


</script>
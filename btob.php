<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/btob.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/mainstyle.css" rel="stylesheet" type="text/css" />
    <link href="css/login.css" rel="stylesheet" type="text/css" />
    <title>B TO B</title>
</head>

<?php

session_start();
if (isset($_SESSION["name"])) {
  echo "set";
  $name = $_SESSION["name"];
  $email = $_SESSION["email"];
}

?>

<body>
<nav class="navbar" id="navbar">
      <div class="nav-img">
        <a href="#"><img src="ressources/logo_black.svg" alt="logo home"></a>
      </div>
      <div class="nav-links">
        <ul>
          <li><a href="#">NEWS</a></li>
          <li><a href="#" class="nav-border">NOS EXPERIENCES</a></li>
          <li><a href="#" class="nav-border">A PROPOS DE NOUS</a></li>
          <li><a href="#" class="nav-border">NOS EQUIPEMENTS</a></li>
          <li><a href="#" class="nav-border"><b>CONNEXION</b></a></li>
        </ul>
      </div>
      <img src="ressources/bouton_menu_by_moi.png" alt="menu_bouton" class="menu_bouton" id="menu_bouton">
  </nav>
  <header></header>
        <div class="img-header"><img src="ressources\image120.webp" alt="header"></div>
        
    <div class="decouvrir">
        <div class="decouvert-img">
            <a href="#"><img src="ressources/discover.webp" alt="decouvrir" width=100% height=100%></a>
        </div>
    </div>
    <main>
        <div class="animated-on-scroll">
            <div class="firs-div">
                <div class="img-first"><img src="ressources\VIDEObtob.png" alt="header"></div>
                <div class="text-content">
                    <h1>AU SERVICE DES PROFESSIONNELS</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
        

            <div class="animated-on-scroll">
                <div class="second-div">
                    <div class="text-content">
                        <h1>DÉCOUVREZ NOS ÉQUIPEMENTS</h1>
                        <p>Car nous croyons que l’excellence de nos expériences et votre confort passe avant tout, nous n’achetons que les meilleurs produits du marché, et sommes directement en contact avec les marques pour proposer des outils adaptés à tous.</p>
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
<script>
    const menubtns = document.querySelector(".menu_bouton")
    const navLinks = document.querySelector(".nav-links")
    const navbar = document.getElementById("navbar")
    var meow = true
    

    menubtns.addEventListener('click',()=>{
      navLinks.classList.toggle('mobile-menu');
      if(meow){
      navbar.style.backdropFilter = 'none';
      meow = false
      }else{
        navbar.style.backdropFilter = 'blur(10px)'
        meow = true
      }
    })
</script>
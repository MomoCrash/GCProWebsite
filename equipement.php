<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"></noscript>
    <link href="css/equiStyle.css" rel="stylesheet" type="text/css" media="screen">
    <link href="css/mainstyle.css" rel="stylesheet" type="text/css"/>
    <title>Les News</title>
</head>


<body>
    <nav class="navbar" id="navbar" style="position: inherit;">
            <div class="nav-img">
                <a href="index.php"><img src="ressources/logo_black.svg" alt="logo home"></a>
            </div>
            <div class="nav-links">
                <ul>
                    <li><a href="new.php">NEWS</a></li>
                    <li><a href="lightroom/light_room1.php" class="nav-border">NOS EXPERIENCES</a></li>
                    <li><a href="apropos.php" class="nav-border">A PROPOS DE NOUS</a></li>
                    <li><a href="equipement.php" class="nav-border">NOS EQUIPEMENTS</a></li>
                    <li><a href="#" id="login" class="nav-border"><b>CONNEXION</b></a></li>
                </ul>
            </div>
            <img src="ressources/bouton_menu_by_moi.png" alt="menu_bouton" class="menu_bouton" id="menu_bouton">
        </nav>
        <header></header>
        <div class="img-header"><img src="ressources/EN-TÊTEtext.webp" alt="header"></div>
        <div class="loginbg" style="margin-top: -36%;">
            <form action="account.php?method=login&redirect=equipement.php" method="POST" class="login-pan mb-3"
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
    <main>
        <div class="btn_container">
            <div id="btn">
                <a href="#text"><button class="btn_decouvrir" type="button">DÉCOUVRIR</button></a>
            </div>
        </div>
        <div id="text"></div>
        <div class="animated-on-scroll">
            <div class="firs-div">
                <div class="img-first"><img src="ressources\VIDEOEQUIP.webp" alt="header" width=440 height=440></div>
                <div class="text-content">
                    <h1>LA VR, UNE AFFAIRE D’EXCELLENCE</h1>
                    <p>Pour une expérience aussi bien virtuelle que réelle nous avons besoin d’équipements de hautes qualités prêt à vous suivre là où vous irez ! Pour nous, la garantie d’une expérience réussie passe forcément par la qualité de notre matériel. C’est pourquoi nous cherchons constamment les dernières technologies sur le marché pour pouvoir vous proposer le meilleur de la Réalité Virtuelle. Nous travaillons également directement avec les marques leaders du marchés pour vous proposer du matériels adaptés à vos besoins (Lunettes, coiffures, fauteuil roulant, petits et grands, ...). Chez The Sense, l’excellence de nos outils vous garantissent la qualité de votre voyage dans une autre dimension.</p>
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
                <div class="img-third"><img src="ressources\image122.webp" alt="header"></div>
                <div class="text-content">
                    <div class="text-content-third">
                    <h1>CASQUE HTC VIVE COSMOS</h1>
                    <p>Concernant notre casque VR, nous avons choisit d’optimiser vos expériences grâce à l'HTC VIVE COSMOS ! Chaque casque possède un écran LCD, offrant une qualité optimale pour une meilleure immersion. Car nous avons à coeur votre satisfaction, The Sense vous offre la meilleure technologie du marché actuel pour encore plus d’émotions et d’immersion.</p>
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
                        <h1>BAGPACK HAPTIQUE RAPTURE</h1>
                        <p>Haptique Rapture est une combinaison spécialisée pour l’utilisation VR, cette “armure” vous permettra de vous mouvoir sans problème et avec fluidité dans le jeu comme dans la réalité. Votre confort est également assuré grâce à son mantient et sa légéreté impressionnante (à peine 5kg), qualitées vous assurera une expérience réussie. </p>
                        </div>
                    </div>
                    <div class="img-four"><img src="ressources\image123.webp" alt="header"></div>
                </div>
            </div>
        </section>
        <section>
        <div class="animated-on-scroll">
                <div class="five-div">
                    <div class="img-five"><img src="ressources\image124.webp" alt="header"></div>
                    <div class="text-content">
                        <div class="text-content-five">
                        <h1>COMPLEXE THE SENSE</h1>
                        <p>Notre complexe d’une taille de 2 hectare vous permettra de vous amuser sans vous soucier des limites du terrain. Toutes nos expériences possèdent une salle dédiée d’environ 50m², y compris la CREATIVE ROOM que nous pouvons aménager selon vos goûts. Nous avons également souhaité rendre vos parties les plus immersives possible c’est nous mélons VR et Réalité Augmenté, vous permettant d’agir dans la vrai vie avec l’environnement de votre immersion.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="animated-on-scroll">
                <div class="second-div">
                    <div class="text-content">
                        <h1>ILS SONT SATISFAITS DE NOS ÉQUIPEMENTS</h1>
                        <p>Ceux qui en parlent le mieux, ce sont vous. Pour finir de vous convaincre de la qualité et de l’excellence de nos équipements, rien de mieux que d’écouter les retours que vous nous faites à chaque fin de sessions. Le taux satisfaction de nos clients concernant nos outils d’immersion est de 90%. </p>
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

</html>
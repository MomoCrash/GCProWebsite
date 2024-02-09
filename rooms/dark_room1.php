<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../css/mainstyle.css" rel="stylesheet" type="text/css"/>
</head>
<body class="fond_dark_room">
  <nav class="navbar_dark_room" id="navbar">
      <div class="nav-img">
        <a href="../index.php"><img src="../ressources/logo_black.svg" alt="logo home"></a>
      </div>
      <div class="nav-links">
        <ul>
          <li><a href="../new.php">NEWS</a></li>
          <li><a href="../rooms/light_room1.php" class="nav_dark_room-border">NOS EXPERIENCES</a></li>
          <li><a href="../apropos.php" class="nav_dark_room-border">A PROPOS DE NOUS</a></li>
          <li><a href="../equipement.php" class="nav_dark_room-border">NOS EQUIPEMENTS</a></li>
          <li><a href="#" id="login" class="nav_dark_room-border"><b>CONNEXION</b></a></li>
        </ul>
      </div>
      <img src="../ressources/bouton_menu_by_moi.png" alt="menu_bouton" class="menu_bouton" id="menu_bouton">
  </nav>
  <header></header>
  <div class="loginbg">
    <form action="../account.php?method=login&redirect=../rooms/dark_room1.php" method="POST" class="login-pan mb-3" style="width: 0px; height: 0px; z-index: 1; visibility: hidden;">
          <div class="login-content">
              <p><SPAN STYLE="color:#000000"><b>Connexion</b></span></p>
              <p> Identifiant <input class="login-input form-label" type="email" name="email" placeholder="abc@mail.fr"> </input>
              </p>
              <p> Mot de passe <input class="login-input form-label" type="password" name="password" placeholder="······"> </input>
              </p>
              <a style="gray" href="../account.php?method=register'">Crée un compte</a>      <button type="submit" name="submit"
                  placeholder="Connexion">Connexion</button>
          </div>
    </form>
  </div>

  <div class="top_container">
    <div class="position_logo"><img src="../ressources/logo_top_darkroom.png" alt="logos"></div>
    <div class="position_logo_mobile_dark">
      <img src="../ressources/logo_top_darkroom.png" >
    </div>
  </div>

  <div class="btn_container">
    <div id="btn">
      <a href="#text"><button class="btn_decouvrir" type="button" >DÉCOUVRIR</button></a>
    </div>
    
  </div>
  <div id="text"></div>

    <div class="intro_container_dark_room" id="intro">

      <div class="popup-btn"><img class="img_trailer" src="../ressources/darkroom_video.png"/></div>
              
              <!--POPUP VIDEO-->
              <div class="popup-wrap">
              
                  <div class="popup-box">
                      
                      <div class="line"></div>

                      <div class="trailer">
                          <video id="video" width="1090"><source src="../ressources/Trailer/Trailer.mp4" type="video/mp4" /></video>
                      </div>
                  </div>
              </div>


      <div class = "texte_intro_white">

          <div class="titre_intro_white">
              <p>QU'EST CE QUE LA <img src="../ressources/darkroom.webp" class="battle_room_logo"/><img src="../ressources/darkroom.webp" class="battle_room_logo_mobile"/> ?</p>
          </div> 

          <p> Vous pensez ne pas avoir peur du noir ? Que rien ne pourra vous effrayer ? Vous avez tord. Avec la DARK ROOM, toutes vos peurs deviendront réelles et en rien de temps, il ne 
            vous restera plus que vos jambes pour vous enfuir. Vous vous penser suffisamment
            fort pour affronter vos peurs ? Franchissez donc le seuil de la DARK ROOM. Vous avez
            hâte d’y entrer mais dans le noir... Personne ne vous verra mourir.
          </p>

          <div class="red_texte"><p>*Les expériences proposées dans cette salle ne conviennent pas à un public mineur ou sensible.</p></div>




    </div>
  </div>

  <!-- DERNIERE PARTIE -->
 <!--EXPERIENCES-->

        
      <!--INTRO-->
      <div class="intro_exp_darkroom">




        <!--TITRE-->
        <div class="title_darkroom">
          <p>REVEILLEZ LA PEUR QUI SOMMEILLE EN VOUS</p>
        </div>
    <!--==================1 EXPERIENCE==================-->
    
        <!--IMAGE DE L'EXPERIENCE AVEC TOUS SES COMPOSANTS-->
        <div class="img_exp">
    
            <img class="img_behind" src="../ressources/image_2.webp" alt="image de l'experience"/><!--image du fond-->
            <!--NB DE LIKES-->
            <div class="likes">
                <img src="../ressources/like.webp" alt="image like"/>
                <p class="subtxt">5.6k</p>
            </div>
    
            <div class="infos">
                <!--TEMPS ESTIME-->
                <div class="time">
                    <img width="40px" src="../ressources/time.webp" alt="img temps"/>
                    <p class="subtxt">45-60MIN</p>
                </div>
    
                <!--NB JOUEURS-->
                <div class="player_amount">
                    <img width="35px" src="../ressources/players.webp" alt="img nb joueurs"/>
                    <p class="subtxt">2 à 4</p>
                </div>
            </div>
        </div>
    
        <!--TEXTE EXPLICATION DE L'EXPERIENCE-->
        <div class="about_exp_darkroom">
    
            <!--TITRE-->
            <div class="about_title">
                <p class="txt_about_title_darkroom">THE CONJURING EXPERIENCE</p>
                <div class="break_line_darkroom"></div><!--LIGNE SEPARATRICE-->
                <p class="room_title_darkroom">DARK ROOM</p>
                <p class="warn">Expérience interdite aux -18</p>
            </div>
    
            <!--TXT A PROPOS-->
            <div class="about_txt_darkroom">
                <p>Revivez l'histoire d'un chef d'oeuvre cinématographique au travers d’une expérience aussi bien réaliste qu'immersive. Rassemblez
                  ce qu'il vous reste de courage, les inspecteurs Ed et Loren Warren ont besoin de vous. Un malheur hante la maison de ces
                  derniers et vous ne pouvez vous en échapper sans sacrifices. Serez-vous à la hauteur de ce qui vous attend ? Bonne chance,
                  vous en aurez besoin !</p>
            </div>
    
            <!--BOUTON POUR RESERVER-->
            <div class="book_btn">
                <a href="dark_room2.php"><img src="../ressources/Bouton réserver (Blanc).png" alt="bouton reserver"></a>
            </div>
        </div>
    
        <!--ESPACE-->
        <div class="space"></div>
        <br> <br>
    <!--==================2 EXPERIENCE==================-->
    
        <!--IMAGE DE L'EXPERIENCE AVEC TOUS SES COMPOSANTS-->
        <div class="img_exp">
    
            <img class="img_behind" src="../ressources/image_58.webp" alt="image de l'experience"/><!--image du fond-->
            
            <!--NB DE LIKES-->
            <div class="likes">
                <img src="../ressources/like.webp" alt="image like"/>
                <p class="subtxt">4.8k</p>
            </div>
    
            <div class="infos">
    
                <!--TEMPS ESTIME-->
                <div class="time">
                    <img width="40px" src="../ressources/time.webp" alt="img temps"/>
                    <p class="subtxt">45-60MIN</p>
                </div>
    
                <!--NB JOUEURS-->
                <div class="player_amount">
                    <img width="35px" src="../ressources/players.webp" alt="img nb joueurs"/>
                    <p class="subtxt">2 à 4</p>
                </div>
            </div>
        </div>
    
        <!--TEXTE EXPLICATION DE L'EXPERIENCE-->
        <div class="about_exp_darkroom">
    
            <!--TITRE-->
            <div class="about_title">
                <p class="txt_about_title_darkroom">NAMELESS</p>
                <div class="break_line_darkroom"></div><!--LIGNE SEPARATRICE-->
                <p class="room_title_darkroom">DARK ROOM</p>
                <p class="warn">Expérience interdite aux -18</p>
            </div>
    
            <!--TXT A PROPOS-->
            <div class="about_txt_darkroom">
                <p>De retour de soirée avec vos amis, votre voiture tombe soudainement en panne au beau milieu des bois. Coïncidence, c’est dans cette forêt que l’on a signalé de mystérieuses disparitions. Après un long moment à tenter d’appeller une dépanneuse, vous vous rendez compte que vous ne pouvez compter que sur vous-même pour vous en sortir. Mais dans le froid de la nuit et les recoins de la forêt, quelque chose rôde. Travaillez en équipe car sans vos amis, vous n’aurez aucune chance, survivrez-vous assez longtemps ?</p>
            </div>
    
            <!--BOUTON POUR RESERVER-->
            <div class="book_btn">
                <a href="dark_room1.php"><img class="image_black" src="../ressources/Bouton réserver (Blanc).png" alt="bouton reserver"></a>
            </div>
        </div>
    
    
        <!--ESPACE-->
        <div class="space"></div>
    
    
      </div>
    
      <br> <br>
    
<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="../ressources/image127.webp" style="width:100%">
    <div class="text">
      <div class="text_slideshowdown"><b>“Avec mes fils nous avons tenté l’expérience “NAMELESS”, moi qui pensais avoir tout vu dans le domaine de l’horreur, je ne me suis jamais autant trompé. 
        Si vous êtes à la recherche de sensation forte et de frissons, la DARK ROOM est faite pour vous”
        <br><br>- Nicolas, 3 Septembre 2020 -</b></div>
    </div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="../ressources/image129.webp" style="width:100%">
    <div class="text"></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="../ressources/image130.webp" style="width:100%">
    <div class="text"></div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>     



</body>

<!-- PAS TOUCHE -->

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
      <!-- Replace # with actual links to your social media profiles -->
      <a href="#"><img src="../ressources/Youtube.png" alt="Youtube"></a>
      <a href="#"><img src="../ressources/Instagram.png" alt="Instagram"></a>
      <a href="#"><img src="../ressources/Twitter.png" alt="Twitter"></a>
      <a href="#"><img src="../ressources/Facebook.png" alt="Facebook"></a>
  </div>
</footer>

<!-- POP UP VIDEO -->

<a href="#_" class="lightbox" id="img1">
  <div id="videoModal" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="false" style="display: block;">
    <div class="modal-header"></div>
    <div class="modal-body"><iframe width="870" height="489" src="https://www.youtube.com/embed/9Qzm66JX-RA" frameborder="0" allowfullscreen=""></iframe></div>
    <div class="modal-footer"></div>
  </div>



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


  let slideIndex = 0;
  showSlides();

  function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 8000); // Change image every 2 seconds
  }


  let slideyay = 1;
  erm(slideyay);

  // Next/previous controls
  function plusSlides(n) {
    erm(slideyay += n);
  }

  // Thumbnail image controls
  function currentSlide(n) {
    erm(slideyay = n);
  }

  function erm(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideyay = 1}
    if (n < 1) {slideyay = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideyay-1].style.display = "block";
    dots[slideyay-1].className += " active";
  }

  </script>
  <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script src="../js/actions.js"></script>
  <script src="../js/home.js"></script>

</html>
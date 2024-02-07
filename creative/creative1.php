<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../css/mainstyle.css" rel="stylesheet" type="text/css"/>
</head>
<body class="fond_creative">
  <nav class="navbar" id="navbar">
      <div class="nav-img">
        <a href="#"><img src="../ressources/logo_black.svg" alt="logo home"></a>
      </div>
      <div class="nav-links">
        <ul>
          <li><a href="#">NEWS</a></li>
          <li><a href="#" class="nav-border">NOS EXPERIENCES</a></li>
          <li><a href="#" class="nav-border">A PROPOS DE NOUS</a></li>
          <li><a href="#" class="nav-border">NOS EQUIPEMENTS</a></li>
          <li><a href="#" id="login" class="nav-border"><b>CONNEXION</b></a></li>
        </ul>
      </div>
      <img src="../ressources/bouton_menu_by_moi.png" alt="menu_bouton" class="menu_bouton" id="menu_bouton">
  </nav>
  <header></header>
  <div class="loginbg">
    <form action="../account.php?method=login&redirect='../darkroom/dark_room1.php'" method="POST" class="login-pan mb-3" style="width: 0px; height: 0px; z-index: 1; visibility: hidden;">
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
    <div class="position_logo"><img src="../ressources/logo_creative_room.png" alt="logos"></div>
    <div class="position_logo_mobile_dark">
      <img src="../ressources/logo_creative_room.png" >
    </div>
  </div>

  <div class="btn_container">
    <div id="btn">
      <a href="#text"><button class="btn_decouvrir" type="button" >DÉCOUVRIR</button></a>
    </div>
  </div>

    <div class="intro_container_creative" id="intro">

      <a href="#img1"><img class="img_trailer" src="../ressources/creative_video.png"/></a>


      <div class = "texte_intro">

          <div class="titre_intro">
              <p>QU'EST CE QUE LA <img src="../ressources/creative.webp" class="battle_room_logo"/><img src="../ressources/creative.webp" class="battle_room_logo_mobile"/> ?</p>
          </div> 

          <p>Notre catalogue ne vous suffit pas ? Vous aimeriez laisser parler votre imagination ? Grâce à la CREATIVE ROOM, concept inédit en France, la créativité est votre seule limite, créez de toute pièce l'univers dans lequel vous voyagerez par la suite. Que ce soit dans la jungle ou en haut de montagnes enneigées, pour affronter des démons ou enquêter sur la disparition de bébés licornes roses fluos, le choix vous appartient. Alors tester votre imagination dans la CREATIVE ROOM et entraîner vos amis ou votre famille dans votre univers.
          </p>




    </div>
  </div>

  <!-- DERNIERE PARTIE -->
  <div class="second_part">
    <div class="pc"><img src="../ressources/forme8.webp"></div>
    <div class="mobile"><img src="../ressources/forme8.webp"></div>
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
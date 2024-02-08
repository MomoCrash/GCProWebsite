<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"></noscript>
    <link href="css/apropos.css" rel="stylesheet" type="text/css"/>
    <link href="css/mainstyle.css" rel="stylesheet" type="text/css"/>
    <title>A propos</title>
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
    <div class="img-header"><img src="ressources/THE SENSE.webp" alt="header"></div>
    <div class="loginbg" style="margin-top: -36%;">
        <form action="account.php?method=login&redirect=apropos.php" method="POST" class="login-pan mb-3"
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
    <div class="decouvrir" style="position: relative; z-index: 1;">
        <a href="#text"><img src="ressources/discover.webp" alt="decouvrir" width=100% height=100%></a>
    </div>
    <div id="text"></div>
    <div class="animated-on-scroll">
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


            <div class="texte_intro">

                <div class="titre_intro">
                    <p>THE SENSE, UNE IDÉE NOVATRICE</p>
                </div>

                <p> The Sense est né d’un projet d’école de quatre étudiants en école de commerce. Se basant sur une idée originaire des États-Unis, les quatre amis décidèrent d’adapter ce concept inédit au marché français en y ajoutant leurs idées novatrices. Mélant deux activités attractives, la Réalité Virtuel et les Escape Game, THE SENSE joint le meilleur des deux mondes pour vous proposer des expériences inédites et époustouflantes. N’hésitez plus et franchisser la frontière du réel.
                </p>

        </div>
    </div>


    
  </div>
  <section>
    <!-- News article -->
    <div class="animated-on-scroll">
      <div class="second-p">
        <img src="ressources\QUI.png" alt="video" width=110% height=110%>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="container">
          <div class="iframe-container">
            <iframe id="iframegoogle" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.501839966723!2d4.846184576846494!3d45.76113207108033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea5e4b5e0f67%3A0xed466e201cea076d!2s207%20Rue%20Duguesclin%2C%2069003%20Lyon!5e0!3m2!1sfr!2sfr!4v1706879039820!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="hours-container">

              <h2>NOS HORAIRES</h2>
              <ul>
                  <li class="closed">Lundi - FERMÉ</li>
                  <li>Mardi - 10:00-22:00</li>
                  <li>Mercredi - 10:00-22:00</li>
                  <li>Jeudi - 10:00-22:00</li>
                  <li>Vendredi - 10:00-01:00</li>
                  <li>Samedi - 10:00-01:00</li>
                  <li>Dimanche - 10:00-22:00</li>
              </ul>
          </div>
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
      <br>
      <br>
      <br>
      <br>


        <?php 

            function sendMail($mail, $name, $content) {
              
              // Envoyer le mail
              $subject = "Message d'utilisateur.";
              
              $message = 'Message reçu de '.$name.',<br>';
              $message .= $content.',<br>';
              $message .= "Mail du client: ". $mail;
              
              // Always set content-type when sending HTML email
              $headers = "MIME-Version: 1.0" . "\r\n";
              $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
              
              // More headers
              $headers .= 'From: '.$name.' <'. $mail .'>' . "\r\n";
              $headers .= 'To: The Sense <thesense@alwaysdata.net>' . "\r\n";
              
              mail($mail,$subject,$message,$headers);
            }

            if (isset($_POST["mail"])) {

              sendMail($_POST["mail"], $_POST["nom"]." ". $_POST["prenom"], $_POST["content"]);

            }

        ?>
    
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
        <!-- Replace # with actual links to your social media profiles -->
        <a href="#"><img src="ressources/Youtube.png" alt="Youtube"></a>
        <a href="#"><img src="ressources/Instagram.png" alt="Instagram"></a>
        <a href="#"><img src="ressources/Twitter.png" alt="Twitter"></a>
        <a href="#"><img src="ressources/Facebook.png" alt="Facebook"></a>
    </div>
</footer>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
<script src="js/actions.js"></script>
<script src="js/home.js"></script>


</html>

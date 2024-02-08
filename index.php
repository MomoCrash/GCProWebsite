<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../ressources/ongletIcon.png" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/home.css" />
        <link rel="stylesheet" href="css/bookingstyle.css">
        <link rel="stylesheet" href="css/booking.css">

        <title>The Sense - Home</title>
    </head>
    <body>

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

        <!--=================================EXPERIENCES=================================-->
        <div class="experiences">

        
            <!--INTRO-->
            <div class="intro_exp">

                <div class="title">
                    <p>LA RÉALITÉ À PORTÉE DE MAIN</p>
                </div>

                <div class="txt_intro">
                    <p>Vous rêvez de voyager, de frissoner ou tout simplement de vivre une expérience unique ? 
                    Explorez nos univers entre amis ou en famille et franchissez la frontière de la réalité. Plusieurs dimensions 
                    s’offrent à vous, vous donnant accès à de nombreuses expériences.</p>
                </div>

            </div>


            <!--TITRE-->
            <div class="title">
                <p>NOS EXPÉRIENCES LES PLUS APPRÉCIÉES</p>
            </div>

        <!--==================1 EXPERIENCE==================-->

            <!--IMAGE DE L'EXPERIENCE AVEC TOUS SES COMPOSANTS-->
            <div class="img_exp">

                <img class="img_behind" src="ressources/lightroom_img.webp" alt="image de l'experience"/><!--image du fond-->
                <!--NB DE LIKES-->
                <div class="likes">
                    <img src="ressources/like.webp" alt="image like"/>
                    <p class="subtxt">3.7k</p>
                </div>

                <div class="infos">
                    <!--TEMPS ESTIME-->
                    <div class="time">
                        <img width="40px" src="ressources/time.webp" alt="img temps"/>
                        <p class="subtxt">60-90MIN</p>
                    </div>

                    <!--NB JOUEURS-->
                    <div class="player_amount">
                        <img width="35px" src="ressources/players.webp" alt="img nb joueurs"/>
                        <p class="subtxt">2 à 4</p>
                    </div>
                </div>
            </div>

            <!--TEXTE EXPLICATION DE L'EXPERIENCE-->
            <div class="about_exp">

                <!--TITRE-->
                <div class="about_title">
                    <p class="txt_about_title">SHANGRI-LA : LA CITÉ PERDUE DE Z</p>
                    <div class="break_line"></div><!--LIGNE SEPARATRICE-->
                    <p class="room_title">LIGHT ROOM</p>
                </div>

                <!--TXT A PROPOS-->
                <div class="about_txt">
                    <p>Shangri-La la cité mythique, symbole de paix, de prospérité et de magnificence. <br>Personne n'a apparemment pu se rendre en ce lieu
                        depuis des décennies ou prouver son existence, du moins depuis votre découverte ! Aventurez-vous au plus profond des légendes,
                        entrez dans la cité de Z avec votre équipe et explorez les lieux à la recherche de Percy Fawcett.</p>
                </div>

                <!--BOUTON POUR RESERVER-->
                <div class="book_btn">
                    <a href="lightroom/light_room1.php"><img class="book_img" src="ressources/reserve.webp" alt="bouton reserver"></a>
                </div>

                <!--BOUTON DISCOVER-->
                <div class="room_discover">
                    <a href="lightroom/light_room1.php" class="discover_room"><p>DÉCOUVREZ LA LIGHT ROOM →</p></a>
                </div>
            </div>
        
            <!--ESPACE-->
            <div class="space"></div>
        <!--==================1 EXPERIENCE==================-->
        
            <!--IMAGE DE L'EXPERIENCE AVEC TOUS SES COMPOSANTS-->
            <div class="img_exp">

                <img class="img_behind" src="ressources/darkroom_img.webp" alt="image de l'experience"/><!--image du fond-->
                
                <!--NB DE LIKES-->
                <div class="likes">
                    <img src="ressources/like.webp" alt="image like"/>
                    <p class="subtxt">3.7k</p>
                </div>

                <div class="infos">

                    <!--TEMPS ESTIME-->
                    <div class="time">
                        <img width="40px" src="ressources/time.webp" alt="img temps"/>
                        <p class="subtxt">60-90MIN</p>
                    </div>

                    <!--NB JOUEURS-->
                    <div class="player_amount">
                        <img width="35px" src="ressources/players.webp" alt="img nb joueurs"/>
                        <p class="subtxt">2 à 4</p>
                    </div>
                </div>
            </div>

            <!--TEXTE EXPLICATION DE L'EXPERIENCE-->
            <div class="about_exp">

                <!--TITRE-->
                <div class="about_title">
                    <p class="txt_about_title">THE CONJURING EXPERIENCE</p>
                    <div class="break_line"></div><!--LIGNE SEPARATRICE-->
                    <p class="room_title">DARK ROOM</p>
                    <p class="warn">Expérience interdite aux -18</p>
                </div>

                <!--TXT A PROPOS-->
                <div class="about_txt">
                    <p>Revivez l'histoire d'un chef d'oeuvre cinématographique au travers d’une expérience aussi bien réaliste qu'immersive. <br>Rassemblez
                        ce qu'il vous reste de courage, les inspecteurs Ed et Loren Warren ont besoin de vous. Un malheur hante la maison de ces
                        derniers et vous ne pouvez vous en échapper sans sacrifices. Serez-vous à la hauteur de ce qui vous attend ? Bonne chance,
                        vous en aurez besoin !</p>
                </div>

                <!--BOUTON POUR RESERVER-->
                <div class="book_btn">
                    <a href="darkroom/dark_room1.php"><img class="book_img" src="ressources/reserve.webp" alt="bouton reserver"></a>
                </div>

                <!--BOUTON DISCOVER-->
                <div class="room_discover">
                    <a href="darkroom/dark_room1.php" class="discover_room"><p>DÉCOUVREZ LA DARK ROOM →</p></a>
                </div>
            </div>

            
        
            <!--ESPACE-->
            <div class="space"></div>
        <!--==================1 EXPERIENCE==================-->
        
            <!--IMAGE DE L'EXPERIENCE AVEC TOUS SES COMPOSANTS-->
            <div class="img_exp">

                <img class="img_behind" src="ressources/battleroom_img.webp" alt="image de l'experience"/><!--image du fond-->
                
                <!--NB DE LIKES-->
                <div class="likes">
                    <img src="ressources/like.webp" alt="image like"/>
                    <p class="subtxt">3.7k</p>
                </div>

                <div class="infos">

                    <!--TEMPS ESTIME-->
                    <div class="time">
                        <img width="40px" src="ressources/time.webp" alt="img temps"/>
                        <p class="subtxt">60-90MIN</p>
                    </div>

                    <!--NB JOUEURS-->
                    <div class="player_amount">
                        <img width="35px" src="ressources/players.webp" alt="img nb joueurs"/>
                        <p class="subtxt">2 à 4</p>
                    </div>
                </div>
            </div>

            <!--TEXTE EXPLICATION DE L'EXPERIENCE-->
            <div class="about_exp">

                <!--TITRE-->
                <div class="about_title">
                    <p class="txt_about_title">ULTIMATE FIGHT</p>
                    <div class="break_line"></div><!--LIGNE SEPARATRICE-->
                    <p class="room_title">BATTLE ROOM</p>
                </div>

                <!--TXT A PROPOS-->
                <div class="about_txt">
                    <p>Sentez votre cœur battre, votre souffle se couper, votre concentration monter... <br>Enrôlez des joueurs, formez votre équipe et
                        préparez vous au combat ! Arrachez la victoire à vos adversaires à travers une bataille dans des décors et des "maps" des
                        plus immersives. En équipe de 4 ou 5 voyez lesquels d’entre vous sont digne de remporter le trophée.</p>
                </div>

                <!--BOUTON POUR RESERVER-->
                <div class="book_btn">
                    <a href="battleroom/battle_room1.php"><img class="book_img" src="ressources/reserve.webp" alt="bouton reserver"></a>
                </div>

                <!--BOUTON DISCOVER-->
                <div class="room_discover">
                    <a href="battleroom/battle_room1.php" class="discover_room"><p>DÉCOUVREZ LA BATTLE ROOM →</p></a>
                </div>
            </div>
        </div>
        
        
        <!--ESPACE-->
        <div class="space"></div>

        <!--=================================MORE=================================-->
        
        <div class="experiences">
            <!--TITRE-->
            <div class="title">
                <p>VOUS EN VOULEZ TOUJOURS PLUS ?</p>
            </div>

        <!--==================1 EXPERIENCE==================-->

            <!--IMAGE DE L'EXPERIENCE AVEC TOUS SES COMPOSANTS-->
            <div class="img_exp">

                <img class="img_behind" src="ressources/more.webp" alt="image de l'experience"/><!--image du fond-->
                <!--NB DE LIKES-->
                <div class="likes">
                    <img src="ressources/like.webp" alt="image like"/>
                    <p class="subtxt">3.7k</p>
                </div>

            </div>

            <!--TEXTE EXPLICATION DE L'EXPERIENCE-->
            <div class="about_exp">

                <!--TITRE-->
                <div class="about_title">
                    <p class="txt_about_title">CRÉEZ VOTRE PROPRE EXPÉRIENCE </p>
                    <div class="break_line"></div><!--LIGNE SEPARATRICE-->
                    <p class="room_title">CREATIVE ROOM</p>
                </div>

                <!--TXT A PROPOS-->
                <div class="about_txt">
                    <p>Vous en avez marre des expériences répétitives ! Vous êtes à la recherche d'une toute nouvelle expérience en réalité virtuelle ? 
                        Alors venez créer votre propre expérience avec notre tout nouveau système de création virtuelle ! 
                        Vous nous exposez votre idée et votre univers et nous le mettons en oeuvre rien que pour vous ! 
                        N'attendez plus, c'est désormais votre création, votre univers, votre expérience, votre SENSE !</p>
                </div>

                <!--BOUTON POUR RESERVER-->
                <div class="book_btn">
                    <a href="creative/creative.php"><img class="book_img" src="ressources/reserve.webp" alt="bouton reserver"></a>
                </div>

                <!--BOUTON DOSCPVER-->
                <div class="room_discover">
                    <a href="creative/creative.php" class="discover_room"><p>DÉCOUVREZ LA CREATIVE ROOM →</p></a>
                </div>

            </div>

        </div>
        
        <!--ESPACE-->
        <div class="space"></div>
        <!--=================================PRIX=================================-->

        <div class="pricing">

            <div class="book_price">
                <img src="ressources/RESERVER.webp" alt="image reserver"/>
                <p class="catchphrase">N'ATTENDEZ PLUS, RÉSERVEZ</p> 
            </div>

            <div class="amount_player">
                <img src="ressources/NOS_TARIFS.webp" alt="tarifs"/>
                <div class="hor_line"></div>
                <p class="txt1">Voir les tarifs pour</p>
                <p class="txt2">(max 8 joueurs)</p>
            </div>

            <div class="number">
                <button class="minus" onclick="decrement()">-</button>
                <p class="amount">4</p>
                <button class="plus" onclick="increment()">+</button>
            </div>

            <div class="priceperperson">


                <div class="lightroom_pricing">
                    <img class="room_logo" src="ressources/LIGHT_ROOM_WHITE.webp" alt="lightroom_logo"/>
                    <p class="price_txt">DE 10H À 18H: <span class="lightprice">45€</span><span class="pers"><span class="per"> /</span>PERSONNE</span></p>
                    <p class="price_txt">DE 18H À 21H: <span class="lightprice">30€</span><span class="pers"><span class="per"> /</span>PERSONNE</span></p>
                </div>

                <div class="darkroom_pricing">
                    <img class="room_logo" src="ressources/DARK_ROOM_WHITE.webp" alt="darkroom_logo"/>
                    <p class="price_txt">DE 10H À 18H: <span class="lightprice">45€</span><span class="pers"><span class="per"> /</span>PERSONNE</span></p>
                    <p class="price_txt">DE 18H À 21H: <span class="lightprice">30€</span><span class="pers"><span class="per"> /</span>PERSONNE</span></p>
                </div>     

                <div class="battleroom_pricing">
                    <img class="room_logo" src="ressources/BATTLE_ROOM.webp" alt="battleroom_logo"/>
                    <p class="price_txt">DE 10H À 18H: <span class="creativeprice">45€</span><span class="pers"><span class="per"> /</span>PERSONNE</span></p>
                    <p class="price_txt">DE 18H À 21H: <span class="creativeprice">30€</span><span class="pers"><span class="per"> /</span>PERSONNE</span></p>
                </div>    

                <div class="creativeroom_pricing">
                    <img class="room_logo" src="ressources/CREATIVE_ROOM.webp" alt="battleroom_logo"/>
                    <p class="price_txt">DE 10H À 18H: <span class="lightprice">45€</span><span class="pers"><span class="per"> /</span>PERSONNE</span></p>
                    <p class="price_txt">DE 18H À 21H: <span class="lightprice">30€</span><span class="pers"><span class="per"> /</span>PERSONNE</span></p>
                </div>   


            </div>

            
        </div>
        
        <div class="book_planning">
            <div id="calendar" class="calendar"></div>
            <div class="status unavailable">NON DISPONIBLE</div>
            <div class="status reserved">RÉSERVÉ</div>
        </div>

        <!--ESPACE-->
        <div class="space"></div>
        
        <!--TITRE-->
        <div class="title">
                <p>VOUS EN VOULEZ TOUJOURS PLUS ?</p>
            </div>
        <!--=================================NEWS=================================-->
        
        <div class="experiences_flex">
            

            <!--==================1 EXPERIENCE==================-->
            <div class="imgtxt">
                <!--IMAGE DE L'EXPERIENCE AVEC TOUS SES COMPOSANTS-->
                <div class="img_exp">

                    <img class="img_behind" src="ressources/image_8.webp" alt="image de l'experience"/><!--image du fond-->

                </div>

                <!--TEXTE EXPLICATION DE L'EXPERIENCE-->
                <div class="about_new">

                    <!--TITRE-->
                    <div class="about_title">
                        <p class="txt_about_title">ÉVÉNEMENT : LA CHASSE À L’OEUF</p>
                    </div>

                    <!--TXT A PROPOS-->
                    <div class="about_txt">
                        <p>La chasse à l'oeuf est un évènement durant lequel vous aurez l'occasion entre amis ou en famille de chercher tous es oeufs 
                            déposés par le lapin à l'occasion de pâques
                        </p>
                    </div>

                </div>
            </div>

            <div class="imgtxt">
                <!--IMAGE DE L'EXPERIENCE AVEC TOUS SES COMPOSANTS-->
                <div class="img_exp">

                    <img class="img_behind" src="ressources/image_9.webp" alt="image de l'experience"/><!--image du fond-->
                    <!--NB DE LIKES-->

                </div>

                <!--TEXTE EXPLICATION DE L'EXPERIENCE-->
                <div class="about_new">

                    <!--TITRE-->
                    <div class="about_title">
                        <p class="txt_about_title">ÉVÉNEMENT : LA CHASSE À L’OEUF</p>
                    </div>

                    <!--TXT A PROPOS-->
                    <div class="about_txt">
                        <p>La chasse à l'oeuf est un évènement durant lequel vous aurez l'occasion entre amis ou en famille de chercher tous es oeufs 
                            déposés par le lapin à l'occasion de pâques
                        </p>
                    </div>

                </div>
            </div>
        </div>
        <!--ESPACE-->
        <div class="space"></div>

        <!--TITRE-->
        <div class="title">
            <p>QU'EST CE QUI VOUS RETIENT ?</p>
        </div>

        <div class="resevation">
            
        </div>
    
        <!--=================================CARROUSEL=================================-->

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
                    <!--===========1slide===========-->
                    <img class="d-block w-100" src="ressources/Rectangle46.png" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                    <div class="images">
                        <img src="ressources/imagelep.png" alt="leprogres">
                    </div>
                    <p class="title_intro">"C'est la meilleure manière de faire découvrir l'expérience VR à vos enfants et vos grand-parents mais aussi de changer des perpétuels bowlings ou séance de cinéma du week-end"</p>
                </div>
            </div>
            <div class="carousel-item">
                
                <!--===========1slide===========-->
                <img class="d-block w-100" src="ressources/Rectangle46.png" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <div class="images">
                        <img src="ressources/image125.png" alt="lyonmag">
                    </div>
                <p class="title_intro">"Bluffé par la qualité du service, que ce soit l’accueil et la prise en charge du groupe. Quant à l’expérience, rien à dire, c’est une expérience unique au monde”</p>
                </div>
            </div>
            <div class="carousel-item">

                <!--===========1slide===========-->
                <img class="d-block w-100" src="ressources/Rectangle46.png" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <div class="images">
                        <img src="ressources/lemonde-removebg-preview.png" alt="lemonde">
                    </div>
                <p class="title_intro">"WOW”</p>
                </div>
            </div>
            
            <div class="carousel-item">

                <!--===========1slide===========-->
                <img class="d-block w-100" src="ressources/Rectangle46.png" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <div class="images">
                        <img src="ressources/lefigaro-removebg-preview.png" alt="lefigaro">
                    </div>
                <p class="title_intro">"Bluffé par la qualité du service, que ce soit l’accueil et la prise en charge du groupe. Quant à l’expérience, rien à dire, c’est une expérience unique au monde”</p>
                </div>
            </div>

            <div class="carousel-item">

                <!--===========1slide===========-->
                <img class="d-block w-100" src="ressources/Rectangle46.png" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <div class="images">
                        <img src="ressources/Logo_DL-removebg-preview.png" alt="ledauphiné">
                    </div>
                <p class="title_intro">"Bluffé par la qualité du service, que ce soit l’accueil et la prise en charge du groupe. Quant à l’expérience, rien à dire, c’est une expérience unique au monde”</p>
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

        <!--ESPACE-->
        <div class="space"></div>
        <!--=================================FAQ=================================-->
        <div class="FAQ">
            <!--TITRE-->
            <div class="about_title">
                <p class="txt_about_title" style="margin-left:170px">FOIRE AUX QUESTIONS</p>
            </div>

            <!--==================1 QUESTION==================-->
            <div class="question">

                    <!--BOUTON DEROULANT-->
                <div class="container">
                    <div class="button1"></div>
                </div>

                    <div class="question_txt">
                        <p class="question_title">Qu'est ce que The SENSE ?</p>
                    </div>
                </div>
                <div class="answer1">
                    <p class="p_answer">
                        The SENSE est une immersion poussée grâce à la réalité virtuelle. The SENSE propose de nombreuses expériences
                        à faire entre amis ou avec la famille. Vous pouvez tout à fait favoriser une expérience avec de l’action comme notre 
                        Dark Room basé sur l’horreur. Ou encore, si vous le souhaiter par exemple, vous pouvez favoriser l’aspect compétitif 
                        en participant aux expériences de notre Battle Room. De plus, The SENSE propose un système de création d’expérience où 
                        les clients peuvent à leurs tours imaginer et créer la meilleure expériences possibles. </p>
                </div>
            </div>

            <!--==================1 QUESTION==================-->
            <div class="question">

                    <!--BOUTON DEROULANT-->
                <div class="container">
                    <div class="button1"></div>
                </div>

                    <div class="question_txt">
                        <p class="question_title">Qu'est ce que The SENSE ?</p>
                    </div>
                </div>
                <div class="answer1">
                    <p class="p_answer">
                        The SENSE est une immersion poussée grâce à la réalité virtuelle. The SENSE propose de nombreuses expériences
                        à faire entre amis ou avec la famille. Vous pouvez tout à fait favoriser une expérience avec de l’action comme notre 
                        Dark Room basé sur l’horreur. Ou encore, si vous le souhaiter par exemple, vous pouvez favoriser l’aspect compétitif 
                        en participant aux expériences de notre Battle Room. De plus, The SENSE propose un système de création d’expérience où 
                        les clients peuvent à leurs tours imaginer et créer la meilleure expériences possibles. </p>
                </div>
            </div>

            <!--==================1 QUESTION==================-->
            <div class="question">

                    <!--BOUTON DEROULANT-->
                <div class="container">
                    <div class="button1"></div>
                </div>

                    <div class="question_txt">
                        <p class="question_title">Qu'est ce que The SENSE ?</p>
                    </div>
                </div>
                <div class="answer1">
                    <p class="p_answer">
                        The SENSE est une immersion poussée grâce à la réalité virtuelle. The SENSE propose de nombreuses expériences
                        à faire entre amis ou avec la famille. Vous pouvez tout à fait favoriser une expérience avec de l’action comme notre 
                        Dark Room basé sur l’horreur. Ou encore, si vous le souhaiter par exemple, vous pouvez favoriser l’aspect compétitif 
                        en participant aux expériences de notre Battle Room. De plus, The SENSE propose un système de création d’expérience où 
                        les clients peuvent à leurs tours imaginer et créer la meilleure expériences possibles. </p>
                </div>
            </div>

            <!--==================1 QUESTION==================-->
            <div class="question">

                    <!--BOUTON DEROULANT-->
                <div class="container">
                    <div class="button1"></div>
                </div>

                    <div class="question_txt">
                        <p class="question_title">Qu'est ce que The SENSE ?</p>
                    </div>
                </div>
                <div class="answer1">
                    <p class="p_answer">
                        The SENSE est une immersion poussée grâce à la réalité virtuelle. The SENSE propose de nombreuses expériences
                        à faire entre amis ou avec la famille. Vous pouvez tout à fait favoriser une expérience avec de l’action comme notre 
                        Dark Room basé sur l’horreur. Ou encore, si vous le souhaiter par exemple, vous pouvez favoriser l’aspect compétitif 
                        en participant aux expériences de notre Battle Room. De plus, The SENSE propose un système de création d’expérience où 
                        les clients peuvent à leurs tours imaginer et créer la meilleure expériences possibles. </p>
                </div>
            </div>
        <!--=================================FOOTER=================================-->
        <footer>
        <div class="footer-nav">
            <a class="barAnim" href="#"><span>Nous contacter</span></a>
            <a class="barAnim" href="#"><span>Réservation</span></a>
            <a class="barAnim" href="#"><span>FAQ</span></a>
        </div>
        <div class="copyright">
            © THE SENSE, SAS. Tous droits réservés
        </div>
        <div class="moda">
            <a class="barAnim" href="#"><span>Modalités</span></a>
            <span> | </span>
            <a class="barAnim" href="#"><span>Politique de confidentialité </span></a>
            <div class="contact">
              <span> | </span>
              <a class="barAnim" href="#"><span>Contact</span></a>
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
    </body>
    <script src="js/home.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="js/booking.js"></script>

    <script>
        generateCalendar(7)
    </script>
    
</html>
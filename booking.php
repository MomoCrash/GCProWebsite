<!DOCTYPE html>
<html lang="fr">

<?php

include "sql/sql-manager.php";

session_start();
if (isset($_SESSION["email"])) {

    $email = $_SESSION["email"];
    $name = $_SESSION["name"];

}

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="css/booking.css">
</head>

<body>

    <!-- Grand Calendrier de présentation de la semaine a venir -->

    <div class="container-back">
        <form action="account.php?method=register&redirect=booking.php" method="POST">

            <h2 class="booking-title" style="font-weight: 700;"> VOTRE RESERVATION EST PRETE ! </h2>
            <h4 class="booking-subtitle" style="font-family: abel;"> IL NE RESTE PLUS QU'A VALIDER ! </h3>
                <div class="separator" style="width: 60%; margin: 10px auto 10px auto;"></div>
                <div class="container-large">
                    <div>
                        <div class="vertical-container">
                            <img id="previous"> Previous </img>
                            <img id="next"> Next </img>
                            <h3 id="week-field" class="text"></h4>
                            <div id="calendar" class="calendar"></div>
                        </div>
                    </div>

                    <?php if(isset($email)): ?>
                    <div class="vertical-container">
                        <h4 class="text">Vous etes connecté avec le nom <?= $name ?> </h4>
                        <h3 class="text">Email de la réservation : <?= $email ?></h3>
                        <button id="reserver"> Reserver </button>
                    </div>
                    <?php else: ?>
                    <div>
                        <div>
                            <div class="login-content">
                                <div class="vertical-container">
                                    <h1 class="day-display"> Vous devez choisir</h1>
                                    <h2 class="hour-display"> une date </h2>
                                    <div class="horizontal-container">
                                        <input class="item" type="text" name="firstname" required
                                            placeholder="Votre nom"
                                            value=<?= isset($_POST["firstname"]) ? $_POST["firstname"] : "" ?>>
                                        </input>
                                        <input class="item" type="text" name="name" required placeholder="Votre prénom"
                                            value=<?= isset($_POST["name"]) ? $_POST["name"] : "" ?>>
                                        </input>
                                    </div>
                                    <div class="horizontal-container">
                                        <input class="item" type="email" name="email" required
                                            placeholder="Votre adresse mail"
                                            value=<?= isset($_POST["email"]) ? $_POST["email"] : "" ?>> </input>
                                        <input class="item" type="text" name="phone" placeholder="Votre n° de téléphone"
                                            value=<?= isset($_POST["phone"]) ? $_POST["phone"] : "" ?>> </input>
                                    </div>
                                    <div class="horizontal-container">
                                        <select class="item" name="email" style="height: 35px;" required>
                                            <option value="1">1 joueurs</option>
                                            <option value="2">2 joueurs</option>
                                            <option value="3">3 joueurs</option>
                                            <option value="4">4 joueurs</option>
                                            <option value="5">5 joueurs</option>
                                        </select>
                                        <select class="item" name="email" style="height: 35px;" required>
                                            <option value="">J'ai découvert The Sense</option>
                                            <option value="1">Recherche</option>
                                            <option value="2">Publicité</option>
                                            <option value="3">Proches</option>
                                        </select>
                                    </div>
                                    <div class="horizontal-container">
                                        <input class="item" type="text" name="gift-code" placeholder="Code promo ou bon cadeau"> </input>
                                        <case class="item" id="promo"> APPLIQUER </case>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
                <input type='submit' name="submit" id="reserver"> </button>
        </form>
        <button id="cancel"> Cancel </button>
    </div>
    <?php

            if (isset($_GET["date"])) {

                $request =  $conn->prepare("SELECT * FROM users WHERE email='" . $email . "';");
                $request->execute();
                //nombre de lignes retournées
                $count = $request->rowCount();
                $currentRow  = $request -> fetch();

                if ($count > 0) {

                    $userId = $currentRow["id"];
                    date_default_timezone_set('Europe/Paris'); 
                    $sqlDate = date("Y-m-d H:i:s", strtotime($_GET["date"]));

                    $request =  $conn->prepare("INSERT INTO `booking` (`id`, `user_id`, `date`, `paid`, `discover_way`) VALUES (NULL, '" . $userId . "', '" . $sqlDate . "', '0', 'Google')");
                    $request->execute();


                }

            }

        ?>

    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="js/booking.js"></script>

</body>

</html>
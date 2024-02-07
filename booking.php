<!DOCTYPE html>
<html lang="fr">

<?php

require_once "sql/sql-manager.php";

session_start();
if (isset($_SESSION["email"])) {

    $email = $_SESSION["email"];
    $name = $_SESSION["name"];
    $id = $_SESSION["id"];

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
        <form action="booking.php" method="POST">
            <h2 class="booking-title" style="font-weight: 700;"> VOTRE RESERVATION EST PRETE ! </h2>
            <h4 class="booking-subtitle" style="font-family: abel;"> IL NE RESTE PLUS QU'A VALIDER ! </h4>
            <div class="separator" style="width: 60%; margin: 10px auto 10px auto;"></div>
            <div class="horizontal-container">
                <div class="vertical-container">
                    <img id="previous"> Previous </img>
                    <img id="next"> Next </img>
                    <h3 id="week-field" class="text"> </h3>
                    <div id="calendar" class="calendar"></div>
                </div>

                <?php if(isset($email)): ?>
                <div class="vertical-container">
                    <h4 class="text">Vous etes connecté avec le nom <?= $name ?> </h4>
                    <h3 class="text">Email de la réservation : <?= $email ?></h3>
                    <input class="item" type="text" name="name" required placeholder="Nom de la réservation"
                        value=<?= isset($_POST["name"]) ? $_POST["name"] : "" ?>>
                    </input>
                    <select class="item" name="player_number" style="height: 35px;" required>
                        <option value="1">1 joueurs</option>
                        <option value="2">2 joueurs</option>
                        <option value="3">3 joueurs</option>
                        <option value="4">4 joueurs</option>
                        <option value="5">5 joueurs</option>
                    </select>
                </div>
                <?php else: ?>
                <div class="vertical-container">
                    <div class="login-content">
                        <div class="vertical-container">
                            <h1 class="day-display"> Vous devez choisir</h1>
                            <h2 class="hour-display"> une date </h2>
                            <div class="horizontal-container">
                                <input class="item" type="text" name="firstname" required placeholder="Votre nom"
                                    value=<?= isset($_POST["firstname"]) ? $_POST["firstname"] : "" ?>>
                                </input>
                                <input class="item" type="text" name="name" required placeholder="Votre prénom"
                                    value=<?= isset($_POST["name"]) ? $_POST["name"] : "" ?>>
                                </input>
                            </div>
                            <div class="horizontal-container">
                                <input class="item" type="email" name="email" required placeholder="Votre adresse mail"
                                    value=<?= isset($_POST["email"]) ? $_POST["email"] : "" ?>> </input>
                                <input class="item" type="text" name="phone" placeholder="Votre n° de téléphone"
                                    value=<?= isset($_POST["phone"]) ? $_POST["phone"] : "" ?>> </input>
                            </div>
                            <div class="horizontal-container">
                                <select class="item" name="player_number" style="height: 35px;" required>
                                    <option value="1">1 joueurs</option>
                                    <option value="2">2 joueurs</option>
                                    <option value="3">3 joueurs</option>
                                    <option value="4">4 joueurs</option>
                                    <option value="5">5 joueurs</option>
                                </select>
                                <select class="item" name="discorver_way" style="height: 35px;" required>
                                    <option value="">J'ai découvert The Sense</option>
                                    <option value="1">Recherche</option>
                                    <option value="2">Publicité</option>
                                    <option value="3">Proches</option>
                                </select>
                            </div>
                            <div class="horizontal-container">
                                <input class="item" type="text" name="gift-code" placeholder="Code promo ou bon cadeau">
                                </input>
                                <case class="item" id="promo"> APPLIQUER </case>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <input type='submit' name="submit" id="reserver"> </button>
        </form>
    </div>
    <button id="cancel"> Cancel </button>
    </div>
    <?php

            $day = $_COOKIE['date'];
            if (!isset($day)) {
                echo "Select a day";
            }

            if (!isset($email) && isset($_POST["email"]) && isset($day)) {

                $email = $_POST["email"];
                $firstname = $_POST["firstname"];
                $name = $_POST["name"];
                $phone = $_POST["phone"];
                $player_number = $_POST["player_number"];
                $discorver_way = $_POST["discorver_way"];

                //// TODO
                $paid = 0;

                $request =  $conn->prepare("SELECT * FROM users WHERE email='" . $email . "';");
                $request->execute();
                //nombre de lignes retournées
                $count = $request->rowCount();
                $currentRow  = $request -> fetch();

                if ($count > 0) {

                    echo "L'email associé a votre commande existe déjà, connectez-vous à votre compte avant de reserver.";

                } else {

                    date_default_timezone_set('Europe/Paris'); 
                    $sqlDate = date("Y-m-d H:i:s", strtotime($day));

                    $request =  $conn->prepare("INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `fidelity`, `admin`) VALUES (NULL, '" . $name . " " . $firstname . "', '". $email ."', '', '". $phone ."', '1', '0');");
                    $request->execute();

                    $_SESSION["name"] = $name;
                    $_SESSION["email"] = $email;

                    $request =  $conn->prepare("SELECT * FROM users WHERE email='" . $email . "';");
                    $request->execute();
                    $currentRow  = $request -> fetch();

                    $_SESSION["id"] = $currentRow["id"];
                    $_SESSION["admin"] = false;

                    if (isset($_SESSION["id"])) {
                        $request =  $conn->prepare("INSERT INTO `booking` (`id`, `user_id`, `date`, `player_number`, `paid`, `discover_way`) VALUES (NULL, '" . $_SESSION["id"] . "', '" . $sqlDate . "', '" . $player_number . "', '" . $paid . "', '" . $discorver_way . "');");
                        $request->execute();
                    }

                }

            } else if (isset($id)) {

                $request =  $conn->prepare("SELECT * FROM users WHERE id='" . $id . "';");
                $request->execute();
                //nombre de lignes retournées
                $count = $request->rowCount();
                $currentRow  = $request -> fetch();

                if ($count > 0) {
                    $name = $_POST["name"];
                    $player_number = $_POST["player_number"];

                    //// TODO
                    $paid = 0;

                    date_default_timezone_set('Europe/Paris'); 
                    $sqlDate = date("Y-m-d H:i:s", strtotime($day));

                    $request =  $conn->prepare("UPDATE `users` SET `fidelity` = '". (intval($currentRow["fidelity"])+1) ."' WHERE `users`.`id` = ". $id .";");
                    $request->execute();

                    $request =  $conn->prepare("INSERT INTO `booking` (`id`, `user_id`, `date`, `player_number`, `paid`, `discover_way`) VALUES (NULL, '" . $id . "', '" . $sqlDate . "', '" . $player_number . "', '" . $paid . "', '4');");
                    $request->execute();

                }

            }

        ?>

    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="js/booking.js"></script>

</body>

</html>
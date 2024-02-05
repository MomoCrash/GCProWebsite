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

        <h2 class="booking-title"> Votre réservation est prête ! </h2>
        <h3 class="booking-subtitle"> Votre réservation est prête ! </h3>
        <div class="container-large">
            <div id="calendar" class="calendar">
            <button id="next"> Next </button>
                <button id="previous"> Previous </button>
            </div>

            <?php if(isset($email)): ?>
            <h4>Vous etes connecté avec le nom <?= $name ?> </h4>
            <h3>Email de la réservation : <?= $email ?></h3>
            <button id="next"> Next </button>
            <button id="previous"> Previous </button>
            <button id="reserver"> Reserver </button>
            <?php else: ?>
            <div>
                <div>
                    <form action="account.php?method=register&redirect=booking.php" method="POST">
                        <div class="login-content">
                            <div class="vertical-container">
                                <p class="day-display"> Lundi</p>
                                <p class="hour-display"> 10 </p>
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
                                    <input class="item" type="email" name="email" required placeholder="Votre adresse mail"
                                        value=<?= isset($_POST["email"]) ? $_POST["email"] : "" ?>> </input>
                                    <input class="item" type="text" name="phone" placeholder="Votre n° de téléphone"
                                        value=<?= isset($_POST["phone"]) ? $_POST["phone"] : "" ?>> </input>
                                </div>
                            </div>
                        </div>
                        <button id="reserver"> Reserver </button>
                    </form>
                </div>
            </div>
            <?php endif; ?>
        </div>
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
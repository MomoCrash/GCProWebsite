<!DOCTYPE html>
<html lang="fr">

<?php 

include "sql/sql-manager.php"

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>The Sense | Connexion</title>
</head>

<body>

    <a id="login"> Connexion </a>

    <form action="login.php" class="login-pan" style="width: 0px; height: 0px; visibility: hidden;">
        <div class="login-content">
            <p> Connexion </p>
            <p> Identifiant <input class="login-input" type="email" name="email" placeholder="abc@mail.fr"> </input>
            </p>
            <p> Mot de passe <input class="login-input" type="password" name="password" placeholder="······"> </input>
            </p>
            <a style="gray" href="register.php"> Crée un compte </a> <button type="submit" name="submit"
                placeholder="Connexion"> Connexion </button>
        </div>

    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="js/actions.js"></script>

</body>

</html>
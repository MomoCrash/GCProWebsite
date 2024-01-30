<!DOCTYPE html>
<html lang="en">

<?php 

include "sql/sql-manager.php"

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php 
    
    if (isset($_POST["password"])) {

        $password = $_POST["password"];
        $email = refracto_text($_POST["email"]);

        $request =  $conn->prepare("SELECT * FROM users WHERE email='" . $email . "';");
        $request->execute();
        //nombre de lignes retournées
        $count = $request->rowCount();
        $currentRow  = $request -> fetch();

        if ($count > 0 && password_verify($password, $currentRow["password"])) {

            echo "marche";

        } else {

            echo "Identifiant ou mot de passe inconnu";

        }

    }

    ?>

    <?php if(isset($_GET["method"]) && $_GET["method"] == "login"): ?>
    <form action="account.php?method=login" method="POST" class="login-pan" style="width: 400px; height: 300px;">
        <div class="login-content">
            <p> Connexion </p>
            <p> Identifiant <input class="login-input" type="email" name="email" placeholder="abc@mail.fr"> </input>
            </p>
            <p> Mot de passe <input class="login-input" type="password" name="password" placeholder="······"> </input>
            </p>

            <?php if(isset($_POST["email"])): ?>
            <a style="gray" href="account.php?method=register&email=<?= $_POST["email"] ?>"> Crée un compte </a>
            <?php else: ?>
            <a style="gray" href="account.php?method=register"> Crée un compte </a>
            <?php endif; ?>

            <button type="submit" name="submit" placeholder="Connexion"> Connexion </button>
        </div>
    </form>
    <?php elseif(isset($_GET["method"]) && $_GET["method"] == "register"): ?>
        <form action="account.php?method=register" method="POST" class="login-pan" style="width: 400px; height: 300px;">
        <div class="login-content">
            <p> Crée un compte </p>
            <p> Votre nom <input class="login-input" type="text" name="name" placeholder="abc@mail.fr"> </input>
            </p>
            <p> Votre nom <input class="login-input" type="email" name="email" placeholder="abc@mail.fr"> </input>
            </p>
            <p> Mot de passe <input class="login-input" type="password" name="password" placeholder="······"> </input>
            </p>

            <?php if(isset($_POST["email"])): ?>
            <a style="gray" href="account.php?method=login&email=<?= $_POST["email"] ?>"> Se connecter </a>
            <?php else: ?>
            <a style="gray" href="account.php?method=login"> Se connecter </a>
            <?php endif; ?>

            <button type="submit" name="submit" placeholder="Connexion"> Crée un compte </button>
        </div>
    </form>
    <?php endif; ?>

</body>

</html>
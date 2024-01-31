<!DOCTYPE html>
<html lang="en">

<?php 

include "sql/sql-manager.php"

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="newstyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/style2.css" rel="stylesheet" type="text/css"/>
    <title>Document</title>
</head>

<body>

    <?php if(isset($_GET["method"]) && $_GET["method"] == "login"): ?>
    <form action="account.php?method=login" method="POST" class="login-pan" style="width: 400px; height: 300px;">
        <div class="login-content">
            <p> Connexion </p>
            <p> Identifiant <input class="login-input" type="email" name="email" required placeholder="abc@mail.fr" value=<?= isset($_POST["email"]) ? $_POST["email"] : "" ?>> </input>
            </p>
            <p> Mot de passe <input class="login-input" type="password" name="password" required placeholder="······"> </input>
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
            <h6>*Champs Obligatoires</h6>
            <p> Nom/Prénom* <input class="login-input" type="text" name="name" required placeholder="Jeremy Nadeau" value=<?= isset($_POST["name"]) ? $_POST["name"] : "" ?>> </input>
            </p>
            <p> Téléphone <input class="login-input" type="text" name="phone" placeholder="0601020304" value=<?= isset($_POST["phone"]) ? $_POST["phone"] : "" ?>> </input>
            </p>
            <p> Votre email* <input class="login-input" type="email" name="email" required placeholder="abc@mail.fr" value=<?= isset($_POST["email"]) ? $_POST["email"] : "" ?> > </input>
            </p>
            <p> Mot de passe* <input class="login-input" type="password" name="password" required placeholder="······" value=<?= isset($_POST["password"]) ? $_POST["password"] : "" ?>> </input>
            </p>
            <p> Confirmer le mot de passe* <input class="login-input" type="password" required name="password_repeat" placeholder="······"> </input>
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

    <br> <br>

    <?php 

    if ($_GET["method"] == "register" && isset($_POST["password"])) {

        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $email = refracto_text($_POST["email"]);
        $name = refracto_text($_POST["name"]);
        if (isset($_GET["phone"])) {
            $phone = $_GET["phone"];
        } else {
            $phone = null;
        }

        if ($password != $_POST["password_repeat"]) {

            echo "Les mots de passes ne sont pas identiques.";

        }

        $request =  $conn->prepare("SELECT * FROM users WHERE email='" . $email . "';");
        $request->execute();
        //nombre de lignes retournées
        $count = $request->rowCount();
        $currentRow  = $request -> fetch();

        if ($count < 1) {

            $request =  $conn->prepare("INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `admin`) VALUES (NULL, '$name', '$email', '$password', '$phone', '0');");
            $request->execute();

            session_start();
            $_SESSION["name"] = $name;
            $_SESSION["email"] = $email;

            header("Location: new.php");
            
        } else {

            echo "Le compte existe déjà.";

        }

    }
        
    if ($_GET["method"] == "login" && isset($_POST["password"])) {

        $password = $_POST["password"];
        $email = refracto_text($_POST["email"]);

        $request =  $conn->prepare("SELECT * FROM users WHERE email='" . $email . "';");
        $request->execute();
        //nombre de lignes retournées
        $count = $request->rowCount();
        $currentRow  = $request -> fetch();

        if ($count > 0 && password_verify($password, $currentRow["password"])) {

            session_start();
            $_SESSION["name"] = $name;
            $_SESSION["email"] = $email;

            header("Location: new.php");

        } else {

            echo "Identifiant ou mot de passe inconnu";

        }

    }

    ?>

</body>

</html>
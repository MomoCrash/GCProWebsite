<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>The Sense | Connexion</title>
</head>

<body>

    <a id="login"> Connexion </a>

    <form action="account.php?method=login" method="POST" class="login-pan mb-3" style="width: 0px; height: 0px; visibility: hidden;">
        <div class="login-content">
            <p> Connexion </p>
            <p> Identifiant <input class="login-input form-label" type="email" name="email" placeholder="abc@mail.fr"> </input>
            </p>
            <p> Mot de passe <input class="login-input form-label" type="password" name="password" placeholder="······"> </input>
            </p>
            <a style="gray" href="account.php?method=register'"> Crée un compte </a> <button type="submit" name="submit"
                placeholder="Connexion"> Connexion </button>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
    <script src="js/actions.js"></script>

</body>

</html>
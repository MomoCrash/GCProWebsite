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

    <?php
                
                if ($currentMethod == "login" && isset($_POST["password"]) && isset($_POST["email"]) && !isset($_POST["username"])) {

                    $password = $_POST["password"]; 
                    $mail = $_POST["email"];

                    $request =  $conn->prepare("SELECT * FROM users WHERE mail='" . $mail . "';");
                    $request->execute();
                    //nombre de lignes retournées
                    $count = $request->rowCount();
                    $currentRow  = $request -> fetch();

                    if (password_verify($password, $currentRow['password'])) {
                      if ($count > 0) {
                        echo "Vous etes connecte";
                        $_SESSION['name'] = $currentRow['name'];
                        $_SESSION['admin'] = $currentRow['admin'];
                        $_SESSION['id'] = $currentRow["user_id"];
                        header('Location: quiz.php');
                        exit;
                      } else {
                        echo "Identifiants inccorectes.";
                      }
                    } else {
                      echo "Identifiants inccorectes.";
                    }

                }

                if ($currentMethod == "register") {

                  if (isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["username"])) {

                    $mail = $_POST["email"];
                    $username = $_POST["username"];

                    $mail = refracto_text($mail);
                    $username = refracto_text($username);

                    $request =  $conn->prepare("SELECT mail FROM users WHERE mail='" . $mail . "';");
                    $request->execute();
                    //nombre de lignes retournées
                    $count = $request->rowCount();

                    if ($count > 0) {
                      
                      echo 'Cet utilisateur exite deja !';

                    } else {

                      $mail = refracto_text($mail);
                      $username = refracto_text($username);
                      $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

                      $request =  $conn->prepare("INSERT INTO `users` (`user_id`, `mail`, `name`, `password`, `admin`) VALUES (NULL, '". $mail ."', '" . $username . "', '" . $password . "', 0);");
                      $request->execute();

                      $response =  $conn->prepare("SELECT * FROM users WHERE mail='" . $mail . "';");
                      $response -> execute();

                      $currentRow  = $response -> fetch();

                      $_SESSION['name'] = $currentRow['name'];
                      $_SESSION['admin'] = $currentRow['admin'];
                      $_SESSION['id'] = $currentRow["user_id"];
                      
                      header('Location: quiz.php');
                      exit;

                    }

                  }
                  
                } 

              ?>

    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="js/actions.js"></script>

</body>

</html>
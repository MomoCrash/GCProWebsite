<?php
// Assurez-vous que cette ligne pointe vers le bon fichier et que ce fichier retourne un objet PDO
if (file_exists('../sql/sql-manager.php')) {
    require_once '../sql/sql-manager.php';
} else {
    exit('Le fichier sql_manager.php n\'existe pas dans le chemin spécifié.');
}

// Fonction pour envoyer l'email
function sendMail($to, $subject, $message) {
    // Headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: The Sense <thesense@alwaysdata.net>' . "\r\n";

    // Envoi de l'email
    if (!mail($to, $subject, $message, $headers)) {
        echo "L'envoi de l'email à $to a échoué.\n";
    }
}

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["subject"], $_POST["message"])) {
    // Sujet et message de la newsletter provenant du formulaire
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Préparer la requête pour récupérer les emails des utilisateurs abonnés à la newsletter
    $stmt = $conn->prepare("SELECT email FROM users WHERE newsletter = 1");
    $stmt->execute();

    // Récupérer les résultats
    if ($stmt->rowCount() > 0) {
        $emails = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($emails as $row) {
            sendMail($row['email'], $subject, $message);
        }
        echo "Newsletter envoyée avec succès à tous les abonnés.\n";
        header('Location: ../admin.php');
    } else {
        echo "Aucun utilisateur abonné à la newsletter.\n";
    }
} else {
    echo "Le formulaire n'a pas été soumis correctement.\n";
}

// Fermer la connexion
$conn = null;
?>

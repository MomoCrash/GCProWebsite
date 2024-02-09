<?php
    if (file_exists('../sql/sql-manager.php')) {
        require_once '../sql/sql-manager.php';
    } else {
        echo 'Le fichier sql_manager.php n\'existe pas dans le chemin spécifié.';
        exit;
    }

    // Vérifier si la méthode de la requête est POST
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['admin'])) {
        try {
            $conn->beginTransaction();
            $stmt = $conn->prepare("UPDATE users SET admin = :adminStatus WHERE id = :id");

            foreach ($_POST['admin'] as $id => $adminStatus) {
                // Convertir la valeur en entier (1 ou 0)
                $adminStatus = (int)$adminStatus;
                // Préparer et exécuter la requête de mise à jour
                $stmt->bindParam(':adminStatus', $adminStatus, PDO::PARAM_INT);
                $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                $stmt->execute();
            }

            $conn->commit();
            header('Location: ../admin.php'); // Redirection vers la page d'administration
            exit;
        } catch(PDOException $e) {
            $conn->rollBack();
            echo "Erreur lors de la mise à jour : " . $e->getMessage();
        }
    }
?>

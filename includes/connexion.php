 <?php
//hachage mot de passe 
require_once('../bdd/config.php'); 
session_start();
try {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $email = htmlspecialchars($_POST['email']);
            $passwordFromClient = htmlspecialchars($_POST['password']);

            $recupUser = $pdo->prepare("SELECT * FROM `user` WHERE `email` = ?");
            $recupUser->execute([$email]);

            if ($recupUser->rowCount() > 0) {
                $user = $recupUser->fetch(PDO::FETCH_ASSOC);

                // Utilisez password_verify pour comparer le mot de passe haché
                if (password_verify($passwordFromClient, $user['password'])) {
                    // Authentification réussie
                    session_start();
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['user_email'] = $user['email'];

                    if ($user['role_id'] == 1) {
                        // Redirection vers la page d'administration
                        header('Location: ../admin.php');
                        exit();
                    } else {
                        // Redirection vers la page employé
                        header('Location: ../employe.php');
                        exit();
                    }
                } else {
                    echo "L'email ou le mot de passe est incorrect...";
                }
            } else {
                echo "L'email ou le mot de passe est incorrect...";
            }
        } else {
            echo 'Le champ de formulaire est actuellement vide';
        }
    }
} catch (PDOException $e) {
    echo "Erreur PDO : " . $e->getMessage();
}


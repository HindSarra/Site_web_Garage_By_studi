<?php require_once('../bdd/config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription Administrateur</title>
    <style>
        #password {
            width: 300px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h2>Inscription Administrateur</h2>

    <form action="hachpass.php" method="post" id="registrationForm">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Mot de Passe :</label>
        <input type="text" id="password" name="password" readonly>

        <button type="button" onclick="generateAdminPassword()">Générer un Mot de Passe Admin</button>
        
        <button type="submit">Inscrire</button>
    </form>

    <script>
        // function generateAdminPassword() {
        //     var characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()-_";
        //     var passwordLength = 12;

        //     var password = "";
        //     for (var i = 0; i < passwordLength; i++) {
        //         var randomIndex = Math.floor(Math.random() * characters.length);
        //         password += characters.charAt(randomIndex);
        //     }

        //     document.getElementById("password").value = password;
        // }
    </script>
</body>
</html>

<?php
// Assurez-vous d'inclure votre fichier de configuration de la base de données

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['password'])) {
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);
        $passwordFromClient = htmlspecialchars($_POST['password']);

        // Hachez le mot de passe côté serveur avant de l'enregistrer dans la base de données
        $hashedPassword = password_hash($passwordFromClient, PASSWORD_DEFAULT);

        // Enregistrez le nom, le prénom, l'email et le mot de passe haché dans la base de données
        try {
            $sql = "INSERT INTO `user` (`first_name`, `last_name`, `email`, `password`, `role_id`) VALUES (?, ?, ?, ?, ?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$nom, $prenom, $email, $hashedPassword, 1]); // 1 pourrait être l'identifiant du rôle administrateur
            echo "Compte administrateur créé avec succès.";
        } catch (PDOException $e) {
            echo "Erreur PDO : " . $e->getMessage();
        }
    } else {
        echo 'Le formulaire est incomplet';
    }
}
?>


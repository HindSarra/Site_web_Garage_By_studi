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
            $stmt->execute([$nom, $prenom, $email, $hashedPassword, 2]); // 1 pourrait être l'identifiant du rôle administrateur
            echo "Compte administrateur créé avec succès.";
        } catch (PDOException $e) {
            echo "Erreur PDO : " . $e->getMessage();
        }
    } else {
        echo 'Le formulaire est incomplet';
    }
}
?>
<?php
require_once('bdd/config.php');
require('includes/function/function_get_opening_day.php');
function getService(PDO $pdo)
{
    $query = "SELECT * FROM `service` ORDER BY id DESC";
    $conn = $pdo->prepare($query);
    $conn->execute();
    return $conn->fetchAll(PDO::FETCH_ASSOC);
}
$services = getService($pdo);
$open_days = getOpeningDay($pdo);

$query = 'SELECT `first_name`, `last_name` FROM `user` WHERE `role_id` = 1';
$conn = $pdo->prepare($query);
$conn->execute();
$role_admin = $conn->fetchAll(PDO::FETCH_ASSOC);


//changer les horraires 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($open_days as $key => $open_day) {
        $day = $open_day['day'];
        $hour_open = $_POST['hour_open_' . $key];
        $hour_close = $_POST['hour_close_' . $key];

        // Mettez à jour la base de données avec les nouvelles heures
        // Utilisez une requête UPDATE adaptée à votre structure de base de données
        // Exemple générique :
        $query = "UPDATE table_horaires SET hour_open = :hour_open, hour_close = :hour_close WHERE day = :day";
        $stmt = $pdo->prepare($query);

        if ($hour_open == 'closed' && $hour_close == 'closed') {
            $stmt->bindValue(':hour_open', null, PDO::PARAM_NULL);
            $stmt->bindValue(':hour_close', null, PDO::PARAM_NULL);
        } else {
            $stmt->bindValue(':hour_open', $hour_open, PDO::PARAM_INT);
            $stmt->bindValue(':hour_close', $hour_close, PDO::PARAM_INT);
        }

        $stmt->bindValue(':day', $day, PDO::PARAM_STR);
        $stmt->execute();
    }

    // ectuez d'autres actions après l'enregistrement
    header("Location: admin.php");
    exit();
}


?>



<!DOCTYPE html>


<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap_override.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Administration </title>
    <link rel='icon' type="image/png" href="favicon.ico">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Administration</a>
            <!-- Ajoutez d'autres éléments de la barre de navigation si nécessaire -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Déconnexion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <h1 class="py-5">Bienvenue <?php foreach ($role_admin as $row) {
                                    echo 'Mr ' .  $row['last_name'] . ' ' . $row['first_name'];
                                } ?></h1>
    <section class="services ">
        <div class="list-service">
            <h2>Liste des services</h2>
            <div class="row">
                <?php foreach ($services as $key => $service) { ?>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="<?= $service['title'] ?>" class="card-img-top" alt="<?= $service['title'] ?>" width="300" loading="lazy">
                            <div class="card-body">
                                <h5 class="card-title"><?= $service['title'] ?></h5>
                                <div class="card-text">
                                    <p><?= $service['description'] ?></p>
                                </div>
                                <button class="btn btn-danger card-bottum ">Suprimer</button>
                                <button class="btn btn-warning card-bottum ">Modifier</button>

                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <h2>Créer un Nouvel service </h2>
        <div class="col-md-7">
            <form action="servcice.php" method="post">
                <label for="titre">Titre :</label>
                <input type="text" name="titre" id="titre" required><br>

                <label for="contenu">Contenu :</label>
                <textarea name="contenu" id="contenu" rows="5" required></textarea><br>
                <label for="file" class="form-label">Image</label>
                <input type="file" name="file" id="file">
                <div>
                    <input class="btn btn-primary m-2" type="submit" value="Créer l'article">
                </div>
        </div>
        </form>
    </section>
    <!-- <div class="tect"><form method="POST" action="includes/admin_horaires.php">
    <label for="jours">Jours d'ouverture :</label><br>
    <select id="jours" name="jours">
        <?php
        // Exécuter la requête SQL pour récupérer les jours existants depuis la table horaires
        $query = "SELECT day FROM opening_day";
        $statement = $pdo->prepare($query);
        $statement->execute();
        $joursList = $statement->fetchAll(PDO::FETCH_COLUMN);

        // Afficher les options du menu déroulant
        foreach ($joursList as $jour) {
            echo '<option value="' . $jour . '">' . $jour . '</option>';
        }
        ?>
    </select><br><br>
    <label for="ouverture">Heure d'ouverture :</label><br>
    <input type="text" id="ouverture" name="ouverture" placeholder="Format: HH:MM"><br><br>
    <label for="fermeture">Heure de fermeture :</label><br>
    <input type="text" id="fermeture" name="fermeture" placeholder="Format: HH:MM"><br><br>
    <input type="submit" value="Valider">
</form></div> -->
    <section class="py-3">
        <h2>Modifier les horaires</h2>


        <form action="traitement_modifier_horaire.php" method="post">
            <?php foreach ($open_days as $key => $open_day) { ?>
                <div class="row mb-3">
                    <div class="col-md-2">
                        <label for="<?= 'day_' . $key ?>" class="form-label"><?= $open_day['day'] ?></label>
                    </div>
                    <div class="col-md-3 ">
                        <label for="<?= 'hours_' . $key ?>">Heure d'ouverture</label>
                        <select class="form-select m-0" name="<?= 'hours_' . $key ?>">
                            <?php for ($hour = 6; $hour <= 22; $hour++) { ?>
                                <option value="<?= $hour ?>" <?= ($hour >= $open_day['hour_open'] && $hour <= $open_day['hour_close']) ? 'selected' : '' ?>>
                                    <?= $hour ?>h
                                </option>
                            <?php } ?>
                            <option value="closed" <?= $open_day['hour_open'] === null && $open_day['hour_close'] === null ? 'selected' : '' ?>>
                                Fermé
                            </option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="<?= 'hours_' . $key ?>">Heure de fermeture</label>
                        <select class="form-select" name="<?= 'hours_' . $key ?>" require>
                            <?php for ($hour = 6; $hour <= 22; $hour++) { ?>
                                <option value="<?= $hour ?>" <?= ($hour >= $open_day['hour_open'] && $hour <= $open_day['hour_close']) ? 'selected' : '' ?>>
                                    <?= $hour ?>h
                                </option>
                            <?php } ?>
                            <option value="closed" <?= $open_day['hour_open'] === null && $open_day['hour_close'] === null ? 'selected' : '' ?>>
                                Fermé
                            </option>
                        </select>
                    </div>
                </div>
            <?php } ?>

            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </section>

    <?php include('templates/footer.php'); ?>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
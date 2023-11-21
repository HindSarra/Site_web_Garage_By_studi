<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["name"];
    $commentaire = $_POST["message"];
    $note = $_POST["rate"];

    // Insérer le témoignage dans la base de données
    $query = "INSERT INTO comment (name, message, rate) VALUES (:param1 , :param2, :param3)";
    $statement = $pdo->prepare($query);
    $statement->bindParam(':param1', $nom, PDO::PARAM_STR);
    $statement->bindParam(':param2', $commentaire, PDO::PARAM_STR);
    $statement->bindParam(':param3', $note, PDO::PARAM_INT);
    $statement->execute();

    // Rediriger vers la page employ.php
    exit();
}
$query = "SELECT * FROM comment";
$statement = $pdo->prepare($query);
$statement->execute();
$temoignages = $statement->fetchAll()

?>
<section class=" col-6 temoignage ">
    <div id="form-temoignage  ">
        <h2>Avis sur le garage V.Parrot</h2>
        <form id="temoignage-form " method="POST">
            <label for="name">Pseudo :</label>
            <input type="text" id="name" name="name" placeholder="Votre pseudo" required /><br>

            <label for="message">Commentaire :</label>
            <textarea id="message" name="message" placeholder="Votre message" required></textarea><br>
            <div class="rating">
                <input type="radio" id="star5" name="rate" value="5" />
                <label for="star5" title="5 étoile"></label>
                <input type="radio" id="star4" name="rate" value="4" />
                <label for="star4" title="4 étoiles"></label>
                <input type="radio" id="star3" name="rate" value="3" />
                <label for="star3" title="3 étoiles"></label>
                <input type="radio" id="star2" name="rate" value="2" />
                <label for="star2" title="2 étoiles"></label>
                <input type="radio" id="star1" name="rate" value="1" />
                <label for="star1" title="1 étoiles"></label>
            </div>
            <br>

            <button class="btn btn-primary" type="submit">Ajouter</button>
        </form>
    </div>
</section>
<div>
    <p><?php $pseudo ?><br></p>
    <p><?php $commentaire ?><br></p>
    <span><?php $note ?></span>
</div>

<section id="message" class="container">
    <!-- Message de succès -->
</section>
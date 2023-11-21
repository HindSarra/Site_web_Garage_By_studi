<?php require_once('templates/header.php'); ?>
<?php require_once('includes/services.php'); ?>


<?php include('includes/coment.php')?>
<div class="contact-section">
        <div class="contact-info">
            <h2>Lieu et Moyens de Contact</h2>
            <p>Adresse : 123 Rue de la Rue, Ville</p>
            <p>Téléphone : +1 234 567 890</p>
            <p>Email : contact@example.com</p>
        </div>
        <div class="contact-form">
            <h2>Formulaire de Contact</h2>
            <form>
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" required>
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Message :</label>
                <textarea id="message" name="message" required></textarea>
                <button type="submit">Envoyer</button>
            </form>
        </div>
    </div>
    <style> 

.contact-section {
    display: flex;
    justify-content: space-between;
    max-width: 900px;
    margin: 0 auto;
    padding: 20px;
}

.contact-info {
    flex: 1;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 2px 2px 5px #ccc;
}

.contact-form {
    flex: 1;
    background-color: #fff;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 2px 2px 5px #ccc;
}

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<?php require_once('templates/footer.php'); ?>
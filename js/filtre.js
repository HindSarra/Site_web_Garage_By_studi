// $(document).ready(function () {
//     $('#btn-filter').click(function (e) {
//         e.preventDefault();

//         // Récupérez les valeurs des filtres
//         var price = $('#inputPrice').val();
//         var year = $('#inputYear').val();
//         var distance = $('#inputDistance').val();
//         var brand = $('#inputBrand').val();
//         var modele = $('#inputModel').val();

//         // Utilisez AJAX pour envoyer les valeurs au serveur PHP de manière asynchrone
//         var xhr = new XMLHttpRequest();
//         xhr.open('POST', 'voitures.php', true);
//         xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

//         xhr.onreadystatechange = function () {
//             if (xhr.readyState == 4 && xhr.status == 200) {
//                 // Mettez à jour le contenu du conteneur des résultats avec les résultats de la requête
//                 $('#results').html(xhr.responseText);
//             }
//         };

//         // Encodez les données pour les envoyer correctement
//         var data = 'price=' + price + '&year=' + year + '&distance=' + distance + '&brand=' + brand + '&modele=' + modele;
//         xhr.send(data);
//     });
// });
// $(document).ready(function() {
//     $('#carFilterForm').submit(function(e) {
//         e.preventDefault(); // Empêche le formulaire de se soumettre normalement

//         var price = $('#inputPrice').val();
//         var year = $('#inputYear').val();
//         var distance = $('#inputDistance').val();
//         var brand = $('#inputBrand').val();
//         var modele = $('#inputModele').val();

//         var formData = {
//             price: price,
//             year: year,
//             distance: distance,
//             brand: brand,
//             modele: modele
//         };

//         $.ajax({
//             type: 'POST',
//             url: 'voitures.php', // L'URL du script PHP qui traitera la requête
//             data: formData, // Les données du formulaire
//             success: function(response) {
//                 $('#results').html(response); // Met à jour la section des résultats avec la réponse du serveur
//             },
//             error: function(xhr, status, error) {
//                 console.error("Une erreur s'est produite lors de la requête AJAX : " + status + " - " + error); // Affiche l'erreur dans la console
//             }
//         });
//     });
// });

$(document).ready(function () {
    $('#btn-filter').click(function (e) {
        e.preventDefault();

        var price = $('#inputPrice').val();
        var year = $('#inputYear').val();
        var distance = $('#inputDistance').val();
        var brand = $('#inputBrand').val();
        var modele = $('#inputModele').val();

        var formData = {
            price: price,
            year: year,
            distance: distance,
            brand: brand,
            modele: modele
        };
        $.ajax({
            type: 'POST',
            url: 'filtre.php', // L'URL du script PHP qui traitera la requête
            data: formData, // Les données du formulaire
            success: function(response) {
                $('#results').html(response); // Met à jour la section des résultats avec la réponse du serveur
            }
            // error: function(xhr, status, error) {
            //     console.error("Une erreur s'est produite lors de la requête AJAX : " + status + " - " + error); // Affiche l'erreur dans la console
            // }
        });
    });
});

// Fonction pour récupérer les données filtrées
function filtrerVoitures() {
  const marque = document.getElementById("marqueFilter").value;
  const xhr = new XMLHttpRequest();

  // Remplacez  par l'URL de votre serveur pour récupérer les données filtrées
  const url = `votre-url-api?marque=${encodeURIComponent(marque)}`;
  xhr.open("GET", url, true);

  xhr.onload = function () {
    if (xhr.status >= 200 && xhr.status < 300) {
      const resultats = JSON.parse(xhr.responseText);
      afficherResultats(resultats);
    } else {
      console.error("Erreur lors de la récupération des données.");
    }
  };

  xhr.onerror = function () {
    console.error("Erreur réseau.");
  };

  xhr.send();
}

// Fonction pour afficher les résultats filtrés
function afficherResultats(resultats) {
  const divResultats = document.getElementById("resultats");
  divResultats.innerHTML = ""; // Efface les résultats précédents

  if (resultats.length === 0) {
    divResultats.innerHTML = "Aucun résultat trouvé.";
    return;
  }

  resultats.forEach((voiture) => {
    const p = document.createElement("p");
    p.textContent = `${voiture.modele} - ${voiture.annee}`;
    divResultats.appendChild(p);
  });
}

// Écouteur d'événement pour le changement dans le menu déroulant
document.getElementById("marqueFilter").addEventListener("change", filtrerVoitures);

// Charge les résultats initiaux
filtrerVoitures();

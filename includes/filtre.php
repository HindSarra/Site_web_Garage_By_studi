<?php require_once('./bdd/config.php');
// Récupérez les résultats
$modele = isset($_POST['modele']) ? $_POST['modele'] : 'Toutes';
$distance = isset($_POST['distance']) ? $_POST['distance'] : '';
$year = isset($_POST['year']) ? $_POST['year'] : '';
$price = isset($_POST['price']) ? $_POST['price'] : '';


$brand = isset($_POST['brand']) ? $_POST['brand'] : 'Toutes';

$sql = "SELECT * FROM car WHERE 1=1";
$params = [];

if ($modele !== 'Toutes') {
    $sql .= " AND modele = ?";
    $params[] = $modele;
}

if (!empty($distance)) {
    $sql .= " AND distance <= ?";
    $params[] = $distance;
}

if (!empty($year)) {
    $sql .= " AND year = ?";
    $params[] = $year;

}


if (!empty($price)) {
    $sql .= " AND price <= ?";
    $params[] = $price;
}

if ($brand !== 'Toutes') {
    $sql .= " AND brand = ?";
    $params[] = $brand;
}


$statement = $pdo->prepare($sql);
// Liaison des paramètres
// Exécutez la requête;
$statement->execute($params);
// Récupérez les résultats
$results = $statement->fetchAll(PDO::FETCH_ASSOC);


var_dump($params);

//Récuperer les marque existante dans la base de donner 
$sql = "SELECT DISTINCT modele FROM   car";
$stmt1 = $pdo->prepare($sql);
$stmt1->execute();
$modeles = $stmt1->fetchAll(PDO::FETCH_COLUMN);

//Récuperer les marque existante dans la base de donner 
$sql = "SELECT DISTINCT brand FROM car";
$stmt2 = $pdo->prepare($sql);
$stmt2->execute();
$brands = $stmt2->fetchAll(PDO::FETCH_COLUMN);



// Génére le HTML des résultats

?>


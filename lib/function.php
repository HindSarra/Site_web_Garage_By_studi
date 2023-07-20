<?php
//include('bdd/config.php');
define('_CARS_IMG_PATH_', 'assets/image/image_car/');
define('_DEFAULT_IMG_PATH_', 'assets/uploads/');

//FONCTION POUR REALISER LE LIEN DE DE LIMAGE DE VOITURE 

function getCarImage(string|null $image)
{
  if ($image === null) {
    return _DEFAULT_IMG_PATH_ . 'img-acceuil.jpg';
  } else {
    return _CARS_IMG_PATH_ . $image;
  }
}

function getCarById(PDO $pdo, int $id)
{
  $query = $pdo->prepare("SELECT * FROM car WHERE id = :id");
  $query->bindParam(':id', $id, PDO::PARAM_INT);
  $query->execute();
  return $query->fetch();
}
// function getCars(PDO $pdo, int $limit = null)
// {

//   $sql = 'SELECT * FROM recipes ORDER BY RAND() DESC';

//   if ($limit) {
//     $sql .= ' LIMIT :limit';
//   }
//   $query = $pdo->prepare($sql);

//   if ($limit) {
//     $query->bindParam(':limit', $limit, PDO::PARAM_INT);
//   }
//   $query->execute();
//   return $query->fetchAll();
// }

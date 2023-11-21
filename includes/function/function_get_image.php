<?php
define('_CARS_IMG_PATH_', './assets/image/image_car/');
define('_DEFAULT_IMG_PATH_', './assets/uploads/');

//FONCTION POUR REALISER LE LIEN  DE LIMAGE DE VOITURE 

function getCarImage(string|null $image)
{
  if ($image === null) {
    return _DEFAULT_IMG_PATH_ . 'img-acceuil.jpg';
  } else {
    return _CARS_IMG_PATH_ . $image;
  }
}

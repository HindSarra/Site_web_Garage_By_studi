<?php

function getCarById(PDO $pdo, int $id)
{
  $query = $pdo->prepare("SELECT * FROM car WHERE id = :id");
  $query->bindParam(':id', $id, PDO::PARAM_INT);
  $query->execute();
  return $query->fetch();
}

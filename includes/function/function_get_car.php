<?php
function getCar(PDO $pdo, int $limit = null)
{

  $sql = 'SELECT * FROM car ORDER BY id DESC';

  if ($limit) {
    $sql .= ' LIMIT :limit';
  }

  $query = $pdo->prepare($sql);

  if ($limit) {
    $query->bindParam(':limit', $limit, PDO::PARAM_INT);
  }

  $query->execute();
  return $query->fetchAll();
}

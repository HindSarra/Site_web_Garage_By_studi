<?php
function getOpeningDay(PDO $pdo)
{
  $query=("SELECT `day`,`hour_open`,`hour_close` FROM `open_day ` ");
  $conn = $pdo->prepare($query);
  $conn->execute();
   return $conn->fetchAll(PDO::FETCH_ASSOC);
}

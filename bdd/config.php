<?php

$dbhost = getenv ('DB_HOST') ?: '127.0.0.1';
$dbport = getenv('DB_PORT') ?: '3306';
$dbname = getenv('DB_NAME') ?: 'garage_auto';

$dsn = "mysql:host={$dbhost};port={$dbport};dbname={$dbname}";
$username = getenv('DB_USERNAME') ?: 'root';
$password = getenv('DB_PASSWORD') ?: '';

$pdo = new PDO($dsn, $username, $password);

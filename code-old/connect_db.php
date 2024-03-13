<?php

const DB_HOST = "database";
const DB_NAME = "docker_DB";
const DB_USER = "user";
const DB_PASSWORD = "pass";

$dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;

try {
    $pdo = new PDO($dsn, DB_USER, DB_PASSWORD);

    echo "Connexion reussie";
} catch (PDOException $e) {
    echo "Une erreur est survenue :" . $e->getMessage();
}

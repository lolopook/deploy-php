<?php

// echo "Hello World";

// rechercher les informations sur le serveur
// phpinfo();
// pour le moment pas de données, comment avoir accées au serveur sql ? Grace au Dockerfile

require_once('connect_db.php');

$sql = "SELECT * FROM `test`;";

$result = $pdo->query($sql);

echo "<pre>";
print_r($result->fetchAll());
echo "</pre>";

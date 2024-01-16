
<?php

use App\DatabaseConfiguration;
use App\DatabaseConnection;

define('ROOT', realpath(__DIR__ . '/..'));
require __DIR__ . '/vendor/autoload.php';
$databaseConfigFile = require __DIR__ . '/config/database.php';

//klasa za konfiguracijske podatke
$databaseConfiguration = new DatabaseConfiguration(
    $databaseConfigFile['database'],
    $databaseConfigFile['username'],
    $databaseConfigFile['password']
);

try {
    $connection = DatabaseConnection::getInstance($databaseConfiguration);
} catch (\Throwable $th) {
    echo 'Connection failed', PHP_EOL;
    return;
}

echo 'Connection successful', PHP_EOL;

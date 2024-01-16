<?php

namespace App;

class DatabaseConnection
{
    private static ?DatabaseConnection $instance = null;
    private function __construct(private DatabaseConfiguration $databaseConfiguration)
    {
        return new \PDO(
            'mysql:dbname=' . $databaseConfiguration->getDatabase(),
            username: $databaseConfiguration->getUsername(),
            password: $databaseConfiguration->getPassword()
        );
    }

    public static function getInstance(DatabaseConfiguration $databaseConfiguration): DatabaseConnection
    {
        if (self::$instance === null) {
            self::$instance = new DatabaseConnection($databaseConfiguration);

            return self::$instance;
        }
    }
}

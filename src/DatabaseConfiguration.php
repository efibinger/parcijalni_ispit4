<?php

namespace App;

class DatabaseConfiguration
{
    public function __construct(private string $database, private string $username, private string $password)
    {
    }

    public function getDatabase(): string
    {
        return $this->database;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }
}

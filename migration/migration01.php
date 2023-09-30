<?php

// Add elements in tables

require __DIR__ . '/migration00.php';

function isTableEmpty(PDO $pdo, string $table): bool
{
    $query = $pdo->query("SELECT COUNT(*) FROM {$table}");
    $result = $query->fetch();

    return $result[0] === 0 ? true : false;
}

if (isTableEmpty($bd, 'users')) {
    $bd->exec("INSERT INTO users (id, username, password) VALUES (1, 'serge', 'asd'),(2, 'fo', '123');");
}
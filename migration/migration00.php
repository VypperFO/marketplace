<?php

// Create necessary tables for the project

$bd = \Bd::getBD();

function tableExists(PDO $pdo, string $table): bool
{

    try {
        $result = $pdo->query("SELECT 1 FROM {$table} LIMIT 1");
    } catch (Exception $e) {
        return FALSE;
    }

    return $result !== FALSE;
}

if (!tableExists($bd, "users")) {
    $bd->exec("CREATE TABLE users (id int(10) UNSIGNED NOT NULL, username varchar(255) NOT NULL, password varchar(255) NOT NULL);");

    $bd->exec("ALTER TABLE users ADD PRIMARY KEY (id);");
}
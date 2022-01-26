<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

// << php dasar multiline
$sql = <<<SQL
    INSERT INTO customers(id, name, email)
    VALUES ('riza', 's', 'a');
SQL;

$connection->exec($sql);

$connection = null;
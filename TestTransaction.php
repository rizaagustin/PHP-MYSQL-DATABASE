<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$connection->beginTransaction();

$connection->exec("INSERT INTO comments(email, comment) VALUES ('riza@test.com', 'hi')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('riza@test.com', 'hi')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('riza@test.com', 'hi')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('riza@test.com', 'hi')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('riza@test.com', 'hi')");

// $connection->rollBack();

// commit kalau salah satu ada yg salah maka di rollback
$connection->commit();

$connection = null;
<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

// bisa di backpass dengan '#
// $username = "admin'#";
$username = "admin";
$password = "admin";

// salah satu solosuinya dengan quote
$username = $connection->quote("admin");
$password = $connection->quote("admin") ;

$sql = "SELECT * FROM admin WHERE username = $username AND password = $password;";

echo $sql . PHP_EOL;

$statement = $connection->query($sql);

$success = false;
$find_user = null;

foreach ($statement as $row) {
    // sukses
    $success = true;
    $find_user = $row["username"];
}

// $success == true
if ($success) {
    echo "Sukses login : " . $find_user . PHP_EOL;
} else {
    echo "Gagal login" . PHP_EOL;
}

$connection = null;
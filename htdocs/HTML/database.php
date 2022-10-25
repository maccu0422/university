<?php

// 설정.

$DATABASE_DSN = "mysql:host=139.162.112.25;port=3306;dbname=app;charset=utf8mb4";
$DATABASE_USERNAME = "remote";
$DATABASE_PASSWORD = "remote!23";

// 생성.

$DATABASE = null;

try {

    $DATABASE = new PDO($DATABASE_DSN, $DATABASE_USERNAME, $DATABASE_PASSWORD);

} catch (PDOException $e) {

    print_r($e);
    exit;

}

?> 
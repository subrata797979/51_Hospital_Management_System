<?php
    include_once __DIR__ . '/vendor/autoload.php';
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    var_dump(getenv('LOCALHOST'));
    var_dump($_ENV['LOCALHOST']);
?>
<?php

function RecrConnect() {
    $server = "localhost";
    $database = "recruitment";
    $user = "iClient";
    $password = "ytdubZRJvwDa5avw";
    $dsn = "mysql:host=$server;dbname=$database";
    $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

    try {
        $recrtLink = new PDO($dsn, $user, $password, $options);
        return $recrtLink;
    } catch (PDOException $ex) {
        header('location:/view/500.php');
    }
}
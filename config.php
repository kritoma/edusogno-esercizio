<?php

$host = "localhost";
$user = "root";
$password = "root";
$database = "edusogno";

$connessione = new mysqli($host, $user, $password, $database);

if($connessione === false){
    die("Errore durante la connessione: " . $connessione->connect_error);
}



$tableUser = "CREATE TABLE IF NOT EXISTS utenti (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(45),
    cognome VARCHAR(45),
    email VARCHAR(255),
    password VARCHAR(255) UNIQUE
    )";
    
$connessione->query($tableUser);


$tableEvent = "CREATE TABLE IF NOT EXISTS eventi (
    id int NOT NULL AUTO_INCREMENT,
    attendees text,
    nome_evento varchar(255),
    data_evento datetime,
    PRIMARY KEY (id)
    )";
$connessione->query($tableEvent);   

?>
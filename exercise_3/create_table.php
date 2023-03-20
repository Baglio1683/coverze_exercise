<?php

$host = "127.0.0.1"; 
$user = "root"; 
$password = "root";
$db = "coverzen_db";

// Create connection
$connection = new mysqli($host , $user , $password , $db); 

// Check connection
if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}

// sql to create table
$sql = "CREATE TABLE users (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(100) NOT NULL,
lastname VARCHAR(100) NOT NULL,
email VARCHAR(150) NOT NULL, 
password VARCHAR(255) NOT NULL, 
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($connection->query($sql) === TRUE) {
  echo "La tabella utenti è stata creata in modo efficace";
} else {
  echo "Errore nella creazione della tabella: " . $connection->error;
}

$connection->close();

?>
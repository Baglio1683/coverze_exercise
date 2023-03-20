<?php  


$host = "127.0.0.1"; 
$user = "root"; 
$password = "root";
$db = "coverzen_db"; 

$connection = new mysqli($host , $user , $password , $db); 

if($connection === false ){

    die('Errore durante la connessione:'); 

}


?>
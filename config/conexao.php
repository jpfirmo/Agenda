<?php

$host = "localhost";
$dbname = "agenda";
$user = "root";
$password = "28132813";

try{

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

    //ativar modo de erros
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);  

}catch(PDOException $e){
    //erro na conexão
    $error = $e->getMessage();
    echo "erro: $error";
}

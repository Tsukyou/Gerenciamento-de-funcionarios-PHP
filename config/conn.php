<?php 

$host = "localhost";
$dbName = "gerenciamentofuncionarios";
$user = "root";
$password = "";

try{

$conn = new PDO("mysql:host=$host;dbname=$dbName", $user, $password);

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    $error = $e->getMessage();
    echo "Erro: $error";
}

?>
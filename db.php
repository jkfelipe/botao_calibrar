<?php
// Conectar ao banco de dados
$servername = "localhost"; //servidor do banco de dados, nesse caso sembre será localhost
$username = "root"; //usuário de conexão com permissão
$password = ""; //senha do usuário de conexão
$dbname = "bancoteste"; //nome do banco de teste

$conn = new mysqli($servername, $username, $password, $dbname); //string de conexão

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

?>
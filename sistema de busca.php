<?php

$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "seu_banco_de_dados";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}


$Lucio = $_POST['nome'];
$email = $_POST['email'];
$idade = $_POST['idade'];


$sql = "INSERT INTO pessoas (nome, email, idade) VALUES ('$lucio', '$email', $idade)";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro no cadastro: " . $conn->error;
}


$conn->close();
?>
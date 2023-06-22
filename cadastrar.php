<?php
// Dados de conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "p2";

// Receber os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];

// Conectar ao banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Preparar e executar a consulta SQL para inserir os dados
$sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Dados cadastrados com sucesso!";
} else {
    echo "Erro ao cadastrar os dados: " . $conn->error;
}

// Fechar a conexão com o banco de dados
$conn->close();
?>

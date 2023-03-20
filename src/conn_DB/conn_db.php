<?php
// Configuração de conexão com o banco de dados
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "secretario_DB";

// Cria a conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se houve erro na conexão
if ($conn->connect_error) {
    die("Erro ao conectar ao banco de dados: " . $conn->connect_error);
}

// Recebe os dados do formulário
$nome = $_POST["nome_completo"];
$cidade = $_POST["cidade"];
$secretaria = $_POST["secretaria"];
$instagram = $_POST["instagram"];
$twitter = $_POST["twitter"];

// Prepara a query SQL para inserção dos dados no banco de dados
$sql = "INSERT INTO secretario (nome_completo, cidade, secretaria, instagram, twitter)
        VALUES ('$nome', '$cidade', '$secretaria', '$instagram', '$twitter')";

// Executa a query SQL
if ($conn->query($sql) === TRUE) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro ao inserir dados: " . $conn->error;
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
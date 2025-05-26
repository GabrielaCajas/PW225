<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "cadastro_db";

$conn = new mysqli($host, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

$nome = $_POST['nome'];
$importancia = $_POST['valor']; // corrigido

$sql = "INSERT INTO tarefas (nome, importancia) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $nome, $importancia);

if ($stmt->execute()) {
    echo "<h2 style='color: #9b59b6; font-family: Orbitron, sans-serif;'>Tarefa salva com sucesso!</h2>";
} else {
    echo "Erro: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
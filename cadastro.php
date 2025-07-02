<?php
include 'conexao.php';

$nome = $_POST['nome'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];

$sql = "INSERT INTO produtos (nome, preco, quantidade) VALUES ('$nome', $preco, $quantidade)";

if ($conn->query($sql) === TRUE) {
    echo "Produto cadastrado com sucesso!<br>";
    echo "<a href='index.php'>Voltar</a>";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<?php
include 'conexao.php';

$sql = "SELECT * FROM produtos";
$result = $conn->query($sql);

echo "<h1>Lista de Produtos</h1>";
echo "<table border='1'>
<tr><th>ID</th><th>Nome</th><th>Preço</th><th>Quantidade</th></tr>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>".$row["id"]."</td>
        <td>".$row["nome"]."</td>
        <td>".$row["preco"]."</td>
        <td>".$row["quantidade"]."</td>
        </tr>";
    }
} else {
    echo "0 resultados";
}
echo "</table>";
$conn->close();
?>
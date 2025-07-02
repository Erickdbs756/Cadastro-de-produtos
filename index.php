<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Produtos</title>
</head>
<body>
    <h1>Cadastro de Produto</h1>
    <form action="cadastro.php" method="POST">
        Nome: <input type="text" name="nome"><br>
        Preço: <input type="number" step="0.01" name="preco"><br>
        Quantidade: <input type="number" name="quantidade"><br>
        <input type="submit" value="Cadastrar">
    </form>
    <a href="listar.php">Ver Produtos</a>
</body>
</html>
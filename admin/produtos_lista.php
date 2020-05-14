<?php
// Incluir o arquivo e fazer a conexão
include("../Connections/conn_produtos.php");
// Selecionar os dados
$consulta = "SELECT * FROM tbprodutos ORDER BY descri_produto ASC";
// Fazer a lista completa dos dados
$lista = $conn_produtos->query($consulta);
// Separar os dados em linhas(row)
$row = $lista->fetch_assoc();
// Contar o total de linhas
$totalRows = ($lista)->num_rows;
?> 



<!doctype html>
<html lang="pt-br">
<head>
<title>Produtos - lista.</title>
<meta charset="utf-8">
</head>
<body>
    <main>
        <h1>Lista de produtos.</h1>
        <table border="1">
           <!-- thead>tr>th*8 -->
            <thead> <!-- cabeçalho da tabela -->
                <tr>
                    <th>ID</th> <!-- cabeça da coluna -->
                    <th>Tipo</th>
                    <th>Destaque</th>
                    <th>Descrição</th>
                    <th>Resumo</th>
                    <th>Valor</th>
                    <th>Imagem</th>
                    <th>Adicionar</th>
                </tr>
            </thead>
            <!-- tbody>tr>th*8 -->
            <tbody>  <!-- corpo da tabela -->
                <tr>
            <!-- Insira os dados determinando a linha e o campo -->
            <td><?php echo $row['id_produto']; ?></td>
            <td><?php echo $row['id_tipo_produto']; ?></td>
            <td><?php echo $row['destaque_produto']; ?></td>
            <td><?php echo $row['descri_produto']; ?></td>
            <td><?php echo $row['resumo_produto']; ?></td>
            <td><?php echo $row['valor_produto']; ?></td>
            <td><?php echo $row['imagem_produto']; ?></td>
            <td>ALTERAR|EXCLUIR</td>
            </tr>
            </tbody>
        </table>
    </main>
</body>
</html>
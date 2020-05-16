<?php
// Incluir o arquivo e fazer a conexão
include("../Connections/conn_produtos.php");
// Selecionar os dados
$consulta = "SELECT * FROM tbtipos ORDER BY rotulo_tipo ASC";
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
<title>Tipos - lista.</title>
<meta charset="utf-8">
</head>
<body>
    <main>
        <h1>Lista de tipos.</h1>
        <table border="1">
           <!-- thead>tr>th*4 -->
            <thead> <!-- cabeçalho da tabela -->
                <tr>
                    <th>ID</th> <!-- cabeça da coluna -->
                    <th>Sigla</th>
                    <th>Rótulo</th>
                    <th>Adicionar</th>
                  </tr>
            </thead>
            <!-- tbody>tr>th*4 -->
            <tbody>  <!-- corpo da tabela -->
               <!-- abre estrutura de repetição -->
             <?php do { ?>
             <tr>
            <!-- Insira os dados determinando a linha e o campo -->            
            <td><? php echo $row['id_tipo'] ?></td>
            <td><? php echo $row['sigla_tipo'] ?></td>
            <td><? php echo $row['rotulo_tipo'] ?></td>
            <td>ALTERAR|EXCLUIR</td>
            </tr>
            <?php } while ($row = $lista->fetch_assoc()); ?>
            <!-- fecha estrutura de repetição -->
            
            </tbody>
        </table>
    </main>
</body>
</html>
<?php mysqli_free_result($lista); ?>
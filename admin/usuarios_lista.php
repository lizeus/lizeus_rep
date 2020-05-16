<?php
    include("../Connections/conn_produtos.php");
    $consulta = "SELECT id_usuario,login_usuario,nivel_usuario FROM tbusuarios ORDER BY login_usuario ASC";
    $lista = $conn_produtos->query($consulta);
    $row = $lista->fetch_assoc();
    $totalRows = ($lista)->num_rows;
?> 

<!doctype html>
<html lang="pt-br">
<head>
<title>Usuários - lista.</title>
<meta charset="utf-8">
</head>
<body>
    <main>
        <h1>Lista de usuários.</h1>
        <table border="1">
           <thead> 
                <tr>
                    <th>ID</th> 
                    <th>Login</th>
                    <!-- campo senha não foi criado - não há justificativa p/ exibição de senhas... -->
                    <th>Nivel</th>
                </tr>
            </thead>
            <tbody>  
               <?php do { ?>
            <tr>
            <td><?php echo $row['id_usuario']; ?></td>
            <td><?php echo $row['login_usuario']; ?></td>
            <td><?php echo $row['nivel_usuario']; ?></td>
            </tr>
            <?php } while ($row = $lista->fetch_assoc()); ?>
            </tbody>
        </table>
    </main>
</body>
</html>
<?php mysqli_free_result($lista); ?>
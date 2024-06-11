<?php
include_once 'conexao.php';

$sql = "SELECT * FROM usuarios ORDER BY id DESC";

$resultado = $conexao->query($sql);
?>

<table class="MyTable">
    <thead>
        <tr>
            <th>#</th>
            <th>Usuários</th>
            <th>CPF</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($linha = $resultado->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $linha['id']; ?></td>
                <td><?php echo $linha['nome']; ?></td>
                <td><?php echo $linha['cpf']; ?></td>
                <td>
                <?php    
                echo "<a href='listarcadastro.php?operacao=excluir&id=$linha[id]'>Excluir</a> |   Editar |    Visualizar"
                ?>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

    /* 1º jquery */
<script src="js/jquery.min.js"></script>

<link rel="stylesheet" href="//cdn.datatables.net/2.0.7/css/dataTables.dataTables.min.css">

<script src="//cdn.datatables.net/2.0.7/js/dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#myTable').DataTable({
            "language": {
                "url": "https://cdn.datatables.net/plug-ins?1.10.12/i18n/Portuguese-Brasil.json"
            },
        });
    });
</script>
<?php
//no index vamos listar os dados
//vai ter botao de inserir
require 'config.php';

$lista = [];

$sql = $pdo->query("SELECT * FROM schemaphp.usuarios");
if ($sql->rowCount() >0) {
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);  // PDO::FETCH_ASSOC faz associacao dos campos
}
?>

<a href="adicionar.php">ADICIONAR USUÁRIO</a>


<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach($lista as $usuario): ?>
        <tr>
            <td><?php echo $usuario['id']; ?></td>
            <td><?php echo $usuario['name']; ?></td>
            <td><?php echo $usuario['email']; ?></td>
            <td>
                <a href="editar.php?id=<?php echo $usuario['id']; ?>">[ Editar ]</a>
                <a href="excluir.php?id=<?php echo $usuario['id']; ?>">[ Excluir ]</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>













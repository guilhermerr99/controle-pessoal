<?php
require 'config.php';
$lista = [];
$sql = $pdo->query("SELECT * FROM clientes");
if ($sql->rowCount() > 0) {
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>
<div class="container">
<h1>Listagem de Clientes</h1>
<table class="table table-success table-striped">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Data de nascimento</th>
        <th>Sexo</th>
        <th>Observação</th>
        <th>UF</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($lista as $clientes) : ?>
        <tr>
            <td><?= $clientes['id']; ?></td>
            <td><?= $clientes['nome']; ?></td>
            <td><?= $clientes['dt_nascimento']; ?></td>
            <td><?= $clientes['sexo']; ?></td>
            <td><?= $clientes['observacao']; ?></td>
            <td><?= $clientes['uf']; ?></td>
            <td>
                <a href="?page=editar&id=<?= $clientes['id']; ?>">[ Editar ]</a>
                <a href="?page=excluir&id=<?= $clientes['id']; ?>">[ Excluir ]</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
</div>
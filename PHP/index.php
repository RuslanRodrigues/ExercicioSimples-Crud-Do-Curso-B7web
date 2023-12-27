<?php
require 'db.php';

$lista = [];


    $sql = $pdo->query('SELECT * FROM sys.notas');
    if ($sql->rowCount() > 0) {
        $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
    }

?>
<a href="adicionar.php">Adicionar</a>
</br>
</br>
<div>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Nota</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($lista as $notas) : ?>
            <tr>
                <td><?php echo $notas['id']; ?></td>
                <td><?php echo $notas['nome']; ?></td>
                <td><?php echo $notas['email']; ?></td>
                <td><?php echo $notas['nota']; ?></td>
                <td><a href="editar.php?id=<?php echo $notas['id'];?>">Editar</a> 
                <a href="excluir.php?id=<?php echo $notas['id'];?>">Excluir</a>
            
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

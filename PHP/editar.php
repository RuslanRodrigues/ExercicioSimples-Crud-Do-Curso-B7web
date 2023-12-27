
<?php
require 'db.php';
$id = $_GET['id'];

if ($id) {
    try {
        $sql = $pdo->prepare("SELECT  id, nome, email, nota FROM notas WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();

        $result = $sql->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            $di = $result ['id'];
            $nome = $result['nome'];
            $email = $result['email'];
            $nota = $result['nota'];
        }
    } catch (PDOException $e) {
        echo 'Erro: ' . $e->getMessage();
    }
}
?>

<h1>Editar</h1>
<form action="editar_action.php" method="post">
    <input type="hidden" name= "id" value="<?php echo $di; ?>">
    Nome: <input type="text" name="nome" value="<?php echo $nome; ?>">
    <br/><br/>
    Email: <input type="text" name="email" value="<?php echo $email; ?>">
    <br/><br/>
    Nota: <input type="text" name="nota" value="<?php echo $nota; ?>">
    <br/><br/>
    <input type="submit" value="Enviar">
</form>


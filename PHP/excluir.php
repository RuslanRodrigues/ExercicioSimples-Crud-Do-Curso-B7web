<?php
require 'db.php';
$id=$_GET['id'];


if ($id){

$sql = $pdo->prepare("DELETE FROM notas WHERE id =:id" );

$sql->bindValue(':id', $id); 
$sql->execute(); 


header ("Location:index.php");
exit;
}

?>
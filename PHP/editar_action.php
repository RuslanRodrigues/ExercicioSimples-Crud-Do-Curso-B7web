<?php
require 'db.php';

$id=$_POST ['id'];
$name=$_POST['nome'];
$email=$_POST['email'];
$nota=$_POST['nota'];

if ($id && $name && $email && $nota){

    $sql = $pdo->prepare("UPDATE notas SET nome = :nome, email = :email, nota = :nota WHERE id = :id");


$sql->bindValue(':nome', $name); 
$sql->bindValue(':email', $email); 
$sql->bindValue(':nota',$nota);  
$sql->bindValue(':id',$id);  
$sql->execute(); 

header ("Location:index.php");
exit;
}else {

    header ("Location:adicionar.php");
    exit;
}





?>
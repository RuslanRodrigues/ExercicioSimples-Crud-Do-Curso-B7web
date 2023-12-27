<?php
require 'db.php';
$name=$_POST['nome'];
$email=$_POST['email'];
$nota=$_POST['nota'];

if ($name && $email && $nota){

$sql = $pdo->prepare("INSERT INTO notas (nome,email,nota ) VALUES (:nome, :email, :nota)" );

$sql->bindValue(':nome', $name); 
$sql->bindValue(':email', $email); 
$sql->bindValue(':nota',$nota);    
$sql->execute(); 

header ("Location:index.php");
exit;
}else {

    header ("Location:adicionar.php");
    exit;
}





?>
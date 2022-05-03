<?php 
	
require 'config.php';

$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'nome');
$dt_nascimento = filter_input(INPUT_POST, 'dt_nascimento');
$sexo = filter_input(INPUT_POST, 'sexo');
$observacao = filter_input(INPUT_POST, 'observacao');
$uf = filter_input(INPUT_POST, 'uf');

if($id && $nome && $dt_nascimento && $sexo && $observacao && $uf){
	$sql = $pdo->prepare("UPDATE clientes SET nome= :nome, dt_nascimento= :dt_nascimento, 
                        sexo= :sexo, observacao= :observacao, uf= :uf WHERE id= :id");
	$sql->bindValue(':id', $id);
	$sql->bindValue(':nome', $nome);
	$sql->bindValue(':dt_nascimento', $dt_nascimento);
	$sql->bindValue(':sexo', $sexo);
	$sql->bindValue(':observacao', $observacao);
	$sql->bindValue(':uf', $uf);
	$sql->execute();

	header("Location: ?page=listar");
	exit;
}else{
	header("Location: ?page=listar");
	exit;
}
?>
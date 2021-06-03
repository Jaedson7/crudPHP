<?php
require 'config.php';

$lista = [];
$sql = $pdo->query("SELECT * FROm usuarios");
if($sql->rowCount() > 0){
	$lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>

<a href="adicionar.php"> ADICIONAR USUARIO</a>

<table border="1" width="100%">
	<tr>
		<th>ID</th>
		<th>NOME</th>
		<th>EMAIL</th>
		<th>AÇÔES</th>
	</tr>


	<!--lendo e passando as informações do banco de dados-->
	<?php foreach($lista as $usuario): ?>
	<tr>
		<td><?php echo $usuario['id']; ?></td>
		<td><?php echo $usuario['nome']; ?></td>
		<td><?php echo $usuario['email']; ?></td>
		<td>
			<a href="editar.php?id=<?php echo $usuario['id']; ?>">[ EDITAR ]</a> 
			<a href="excluir.php?id=<?php echo $usuario['id']; ?>" onclick="return confirm('Tem certeza ?')">[ EXCLUIR ]</a> 
		</td>
	</tr>
	<?php endforeach; ?>
</table>
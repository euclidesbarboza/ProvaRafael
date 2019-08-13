<?php
	include ("Livro.php");
	$listar = new Livro();
	$valor = $listar->buscarTodos();
?>	
<table border="1">
<th>Item</th>
	<th>Id</th>
	<th>Nome</th>
	<th>Autor</th>		
	<th>Editora</th>
	<th>Edicao</th>
	<th>Genero</th>
	<th>Descricao</th>
	<th>Valor (R$)</th>
	
	<?php
	$contador = 0;
		foreach($valor as $linha){
			$contador++;
	?>
	
	<tr>
	<td><?php echo $contador?></td>
		<td><?php echo $linha["id"]; ?></td>
		<td><?php echo $linha["nome"]; ?></td>
		<td><?php echo $linha["autor"]; ?></td>
		<td><?php echo $linha["editora"]; ?></td>
		<td><?php echo $linha["numEdicao"]; ?></td>
		<td><?php echo $linha["genero"]; ?></td>
		<td><?php echo $linha["descricao"]; ?></td>
		<td><?php 
		
		$t=number_format($linha["valor"], 2, ',', '.');		
		echo $t;
		?></td>
	</tr>
	<?php
	}		
	?>
</table>
<p>Foram encontrados <?php echo $contador; ?> registros.</p>
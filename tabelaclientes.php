<?php
	include ("cadastrocliente.php);
	$listarNoticia = new Cadastro ();
	$valor = $listarNoticia->buscarTodos();
?>	
<table border=>
	<th>Item</th>
	<th>Título</th>
	<th>Autor</th>		
	<th>Ação</th>
	<?php
		foreach($valor as $linha){
	?>
		<tr>
		<td><?php echo $linha["id"]; ?></td>
		<td><?php echo $linha["titulo"]; ?></td>
		<td><?php echo $linha["autor"]; ?></td>
		<td>
			<a href=controllerAlterar.php<?=$linha["id"]?>>[ ALTERAR ]</a>
			<a href=controllerAtivarInativar.php?id=<?=$linha["id"]?>&situacao=0>[ INATIVAR ]</a>
			<a href=controllerAtivarInativar.php?id=<?=$linha["id"]?>&situacao=1>[ ATIVAR ]</a>
		</td>
	</tr>
	<?php
	}		
	?>
</table>
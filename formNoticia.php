<style>
	.form{
		border:1px dashed black;
		background-color: #e2e2e2;
		width: 400px;
	}
	.campos{
		width: 400px;
		height: 35px;
	}
</style>
<div class="form">
<h1>Cadastro de Notícia</h1>
<form action= "controllerNoticia.php" method="post">
	<label>Titulo:</label>
		<input type="text" name="titulo" class="campos">
	<label>Descrição</label>
		<input type="text" name="descricao" class="campos"><br>
	<label>Autor:</label>
		<input type="text" name="autor" class="campos"><br>
	<label>Publicado em:</label>
		<input type="text" name="dataPublicacao" class="campos"><br>
	<label>Curso:</label>
		<input type="text" name="curso" class="campos"><br>
		<input type="submit" value="enviar">
</form>
</div>


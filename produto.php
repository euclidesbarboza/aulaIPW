<?php
?>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			&nbsp;
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<h2>Produto</h2>
		</div>
	</div>
	
	<div class="row">
		<div class="col-sm-12">
			<form action="controllerNoticia.php" method="post">
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
					    <label for="titulo">Nome:</label>
					    <input type="text" class="form-control" id="Nome" name="Nome">
			  		</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
			  		  <label for="autor">Descrição:</label>
			 		   <input type="text" class="form-control" id="Descrição" name="Descrição">
				  </div>
				</div>
			</div>
				
				
			<div class="row">
				<div class="col-sm-6">
				  <div class="form-group">
				    <label for="curso">Valor Venda:</label>
				    <input type="text" class="form-control" id="Valor Venda" name="Valor Venda">
				  </div>
			
			</div>
			  <button type="submit" class="btn btn-primary">CADASTRAR</button>
			</form> 	
		</div><!--fecha coluna principal-->
	</div><!--fecha linha principal-->
</div><!--fecha container-->

<?php
?>
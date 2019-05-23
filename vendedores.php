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
			<h2>Vendedores</h2>
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
			  		  <label for="autor">celular:</label>
			 		   <input type="text" class="form-control" id="celular" name="celular">
				  </div>
				</div>
			</div>
				
				
			<div class="row">
				<div class="col-sm-6">
				  <div class="form-group">
				    <label for="curso">E-mail:</label>
				    <input type="text" class="form-control" id="E-mail" name="E-mail">
				  </div>
				</div>
				<div class="col-sm-6">
  				  <div class="form-group">
  				  <h2>comissão</h2>
  				<input type="text" class="form-control" id="comissão" name="comissão">
					</div>
			  <button type="submit" class="btn btn-primary">CADASTRAR</button>
			</form> 	
		</div><!--fecha coluna principal-->
	</div><!--fecha linha principal-->
</div><!--fecha container-->
<?php
?>
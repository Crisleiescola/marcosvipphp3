<!DOCTYPE html>
<html>

<head>
<title>Fixação Aula 7</title>
<meta charset="utf-8" />
  <link href="estilo1.css" rel="stylesheet" media="all" />    
</head>

<body>
	
	<div id="area_form">
		<form name="meu_form" method="POST" action="index.php">
			<h1>CATÁLOGO DE PRODUTOS</h1>
		
			<table>
				<tr>
					<td style="text-align:right"><span class="titulo-um">Nome:</span></td>
					<td>
						<input type="text" class="inputid" placeholder="Nome Completo" required="required" name="nome" />
					</td>
				</tr>
				
				<tr>
					<td style="text-align:right"><span class="titulo-um">Telefone:</span></td>
					<td>
						<input type="text" class="inputid" placeholder="Telefone" name="telefone" />
					</td>
				</tr>
				
				<tr>
					<td style="text-align:right"><span class="titulo-um">E-mail:</span></td>
					<td>
						<input type="text" class="inputid" placeholder="E-mail" name="email" />
					</td>
				</tr>
				
				<tr>
					<td colspan="2">
						<input type="submit" class="inputsubmit" value="Enviar" />
					</td>
				</tr>
				
			</table>
		</form>	
		<p>
		<div id="resultado">
			<hr/>
			<?php
				if(!empty($_POST)){
					@$nome=$_POST["nome"];
					@$email=$_POST["email"];
					@$telefone=$_POST["telefone"];					
					?>
					<div id="areaRes">
						<div class="areaTitulo">Cliente:</div>
						<div class="areaResult">
							<?php echo strtoupper($nome);?>
						</div>
					</div>
					<div id="areaRes">
						<div class="areaTitulo">E-mail:</div>
						<div class="areaResult">
							<?php echo $email;?>
						</div>
					</div>
					<div id="areaRes">
						<div class="areaTitulo">Telefone:</div>
						<div class="areaResult">
							<?php echo $telefone;?>
						</div>
					</div>					
					
			<?php }	?>
					
				
		</div>
		
	</div>
  

</body>
</html>
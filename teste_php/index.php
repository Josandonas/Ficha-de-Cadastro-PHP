<!DOCTYPE html>
<html>

	<head>
	<meta charset="UTF-8">
	<script>document.createElement("Projeto_de_cadastro")</script>
	<title>Sistema de Cadastro</title>
	<link href="model.css" rel="stylesheet">
	</head>
	
	<body>
		<div class="container">
			<nav>
				<ul class="menu">
					<a href="consulta.php"> <li>Consulta </li> </a>
				</ul>
			</nav>
			<section>
				<h1 style="text-align: center;">Cadastro dos Animais do Muzoopan</h1>
				<hr><br><br>

				<form method="$POST" action="registro.php">
					
					<div>
					Nome do Animal:<br> <input type="text" name="nome" class="campo" maxlength="40" required autofocus>
					</div>

					<div>
					Gênero:<br> <input type="text" name="genero" class="campo" maxlength="5000" required autofocus> 
					</div>
					
					<div>
					Sobre:<br> <input type="text" name="sobre" class="campodescribe" maxlength="6000" required autofocus>
					</div>
	
					<input type="submit" value="Salvar" class="btn">
					<input type="reset" name="Limpar" class="btn">

				</form>
			</section>
		</div>
		
	</body>
</html>
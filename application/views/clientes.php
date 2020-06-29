<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<title>Clientes</title>
	<style>
		.alerta {
			padding: 25px;
			border: 1px solid gray;
			border-radius: 3px;
			margin: 10px;
			font-size: 18px;
		}

		.error {
			border-color: #e8273b;
			color: #FFF;
			background-color: #ed5565;
		}
	</style>
</head>

<body>
	<?php if (isset($mensagens)) {
	echo "<div class='alerta error'>$mensagens</div>";
	} ?>
	<div class="container">
		<h1 class="text-center">Cadastro de Clientes</h1>
		<hr>
		<div class="row">
			<div class="col-12 col-md-6 offset-md-3">
				<h2>Novo cliente</h2>
				<form action="" method="post">
					<div class="form-group">
						<input type="text" name="nome" id="nome" placeholder="Nome" required class=form-control>
					</div>
					<div class="form-group">
						<input type="tel" name="email" id="email" placeholder="E-mail" required class=form-control>
					</div>
					<div class="form-group">
						<select name="perfil" id="perfil" required>
							<option placeholder="Perfil"></option>
							<option value="Bronze">Bronze</option>
							<option value="Gold ">Gold </option>
							<option value="Platinum">Platinum</option>
						</select>
					</div>
					<input type="submit" value="Enviar" class="btn btn-primary">
				</form>
			</div>
			<div class="col-12 col-md-6 offset-md-3 mt-5">
				<h2>Lista de Clientes</h2>
				<table border="1">
					<tr>
						<td>Nome</td>
						<td>Email</td>
						<td>Perfil</td>
					</tr>
					<?php foreach ($clientes as $cliente) : ?>
						<tr>
							<td><?= $cliente['nome']; ?></td>
							<td><?= $cliente['email']; ?></td>
							<td><?= $cliente['perfil']; ?></td>
						</tr>
					<?php endforeach; ?>
				</table>
			</div>
		</div>
	</div>

</body>

</html>

<?php require 'config.php'; ?>
<html>
<head>
	<title>Atendimento Saude Ocupacional</title>
	<link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="./assets/css/styleSimple.css" />

	<script type="text/javascript" src="./assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="./assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="./assets/js/script.js"></script>
	<script type="text/javascript" src="./assets/js/main.js"></script>

</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="./" class="navbar-brand">Atendimento Saude Ocupacional</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<?php #if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])): ?>
					<li><a href="index.php">Voltar para os Atendimentos</a></li>
					<li><a href="sair.php">Sair</a></li>
				<?php #else: ?>
					<li><a href="cadastre-se.php">Cadastre-se</a></li>
					<li><a href="login.php">Login</a></li>
				<?php #endif; ?>
			</ul>
		</div>
	</nav>
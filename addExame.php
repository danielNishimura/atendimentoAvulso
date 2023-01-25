<?php require 'pages/header.php'; ?>

<div class="container">
	<link rel="stylesheet" href="assets/css/style.css" />
  <h2>Cadastrar Novo Exame</h2>

  <?php
  require './classes/exame.class.php';
    $cadastro = new AddExame();
  if(isset($_POST['nome']) && !empty($_POST['nome'])) {
    $nome = addslashes($_POST['nome']);
    $valor = str_replace(",", ".", $_POST['valor']);

    if(!empty($nome) && !empty($nome)) {
      $cadastro->cadastrar($nome, $valor);

      header("Location: exames.php");
    } else {
      ?>
        <div class="alert alert-warning">
          Insira o nome do exame
        </div>
      <?php
    }
  }

?>

  <form method="POST">
      
  <fieldset>
    <div class="form-group">
      <legend>Exame</legend>
      <label for="nome">NOME:</label>
      <input type="text" name="nome" id="nome" class="form-control" />

      <label for="valor">VALOR:</label>
      <input type="text" name="valor" id="valor" class="form-control" />
    </div>
  </fieldset>

  <input type="submit" value="Adicionar" class="btn btn-default">

  </form>
</div>

  <script  src="./assets/js/main.js">
  </script>
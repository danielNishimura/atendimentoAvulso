<?php
require 'config.php';
require 'classes/exame.class.php';
$a = new AddExame();
 
if(isset($_GET['id']) && !empty($_GET['id'])) {
  $id = addslashes($_GET['id']);
  $a->excluirExame($id);
}

header("Location: exames.php")
?>

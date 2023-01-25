<?php require 'pages/headerSimple.php'; ?>

<div class="nav">
  
  <a href="./addExame.php" class="btn btn-default" >Cadastrar Novo Exame</a>
  
  <table border="1">
    <tr class="jumbotron">
      <th>ID </th>
      <th>NOME </th>
      <th>VALOR </th>
      <th>AÇÕES</th>
    </tr>
  
    <?php
        require 'classes/exame.class.php';
        $a = new ExameLista();
        $exames = $a->getExameLista();
        foreach($exames as $exame):
          ?>
      <tr>
        <td><?=$exame['id'];?></td>
        <td><?=$exame['nome'];?></td>
        <td>R$ <?=str_replace(".",",", $exame['valor']);?></td>
        
        <td>
          <a href="./editarExame.php?id=<?=$exame['id'];?>">Editar
            <img width="20px" src="./assets/images/file.svg" alt="icone para editar">
          </a>
          <a href="./excluir.php?id=<?=$exame['id'];?>" onclick="return confirm('Tem certeza que deseja excluir o exame?')">Excluir
            <img width="20px" src="./assets/images/bin.svg" alt="icone para excluir registro">
          </a>
        </td>
      </tr>
      <?php endforeach; ?>
    </table>
  </div>
  

<?php require 'pages/footer.php'; ?>
<?php require 'pages/header.php'; ?>

<div class="container-fluid">
  
  <a href="./add.php" class="btn btn-default" >Novo Atendimento</a>
  
  <table border="1" class="jumbotron">
    <tr>
      <th>ID </th>
      <th>CNPJ </th>
      <th>RAZAOSOCIAL </th>
      <th>NOMEFANTASIA </th>
      <th>FUNCIONARIO </th>
      <th>CPF </th>
      <th>NASCIMENTO </th>
      <th>CARGO </th>
      <th>DATAATENDIMENTO </th>
      <th>TIPOEXAME </th>
      <th>RISCOFISICO </th>
      <th>RISCOQUIMICO </th>
      <th>RISCOBIOLOGICO </th>
      <th>RISCOERGONOMICO </th>
      <th>RISCOACIDENTE </th>
      <th>EXAME1 </th>
      <th>DATAEXAME1 </th>
      <th>EXAME2 </th>
      <th>DATAEXAME2 </th>
      <th>EXAME3 </th>
      <th>DATAEXAME3 </th>
      <th>EXAME4 </th>
      <th>DATAEXAME4 </th>
      <th>EXAME5 </th>
      <th>DATAEXAME5 </th>
      <th>EXAME6 </th>
      <th>DATAEXAME6 </th>
      <th>EXAME7 </th>
      <th>DATAEXAME7 </th>
      <th>EXAME8 </th>
      <th>DATAEXAME8 </th>
      <th>EXAME9 </th>
      <th>DATAEXAME9 </th>
      <th>EXAME10 </th>
      <th>DATAEXAME10 </th>
      <th>EXAME11 </th>
      <th>DATAEXAME11 </th>
      <th>EXAME12 </th>
      <th>DATAEXAME12 </th>
      <th>EXAME13 </th>
      <th>DATAEXAME13 </th>
      <th>EXAME14 </th>
      <th>DATAEXAME14 </th>
      <th>EXAME15 </th>
      <th>DATAEXAME15 </th>
      <th>EXAME16 </th>
      <th>DATAEXAME16 </th>
      <th>EXAME17 </th>
      <th>DATAEXAME17 </th>
      <th>EXAME18 </th>
      <th>DATAEXAME18 </th>
      <th>APTIDAO </th>
      <th>APTIDAOALTURA </th>
      <th>APTIDAOCONFINADO </th>
      <th>APTIDAOALIMENTOS </th>
      <th>MEDICORESPONSAVEL </th>
      <th>OBSERVACAO </th>
      <th>CONVENIO </th>
      <th>AÇÕES</th>
    </tr>
  
    <?php
        require 'classes/atendimentosLista.class.php';
        $a = new AtendimentoLista();
        $atendimentos = $a->getAtendimentoLista();
        foreach($atendimentos as $atendimento):
    ?>
      <tr>
        <td><?=$atendimento['id'];?></td>
        <td><?=$atendimento['cnpj'];?></td>
        <td><?=$atendimento['razaoSocial'];?></td>
        <td><?=$atendimento['nomeFantasia'];?></td>
        <td><?=$atendimento['funcionario'];?></td>
        <td><?=$atendimento['cpf'];?></td>
        <td><?=date('d/m/Y', strtotime($atendimento['nascimento']));?></td>
        <td><?=$atendimento['cargo'];?></td>
        <td><?=date('d/m/Y', strtotime($atendimento['dataAtendimento']));?></td>
        <td><?=$atendimento['tipoExame'];?></td>
        <td><?=$atendimento['riscoFisico'];?></td>
        <td><?=$atendimento['riscoQuimico'];?></td>
        <td><?=$atendimento['riscoBiologico'];?></td>
        <td><?=$atendimento['riscoErgonomico'];?></td>
        <td><?=$atendimento['riscoAcidente'];?></td>
        <td><?=$atendimento['exame1'];?></td>
        <td><?=date('d/m/Y', strtotime($atendimento['dataExame1']));?></td>
        <td><?=$atendimento['exame2'];?></td>
        <td><?=date('d/m/Y', strtotime($atendimento['dataExame2']));?></td>
        <td><?=$atendimento['exame3'];?></td>
        <td><?=date('d/m/Y', strtotime($atendimento['dataExame3']));?></td>
        <td><?=$atendimento['exame4'];?></td>
        <td><?=date('d/m/Y', strtotime($atendimento['dataExame4']));?></td>
        <td><?=$atendimento['exame5'];?></td>
        <td><?=date('d/m/Y', strtotime($atendimento['dataExame5']));?></td>
        <td><?=$atendimento['exame6'];?></td>
        <td><?=date('d/m/Y', strtotime($atendimento['dataExame6']));?></td>
        <td><?=$atendimento['exame7'];?></td>
        <td><?=date('d/m/Y', strtotime($atendimento['dataExame7']));?></td>
        <td><?=$atendimento['exame8'];?></td>
        <td><?=date('d/m/Y', strtotime($atendimento['dataExame8']));?></td>
        <td><?=$atendimento['exame9'];?></td>
        <td><?=date('d/m/Y', strtotime($atendimento['dataExame9']));?></td> 
        <td><?=$atendimento['exame10'];?></td>
        <td><?=date('d/m/Y', strtotime($atendimento['dataExame10']));?></td> 
        <td><?=$atendimento['exame11'];?></td>
        <td><?=date('d/m/Y', strtotime($atendimento['dataExame11']));?></td> 
        <td><?=$atendimento['exame12'];?></td>
        <td><?=date('d/m/Y', strtotime($atendimento['dataExame12']));?></td> 
        <td><?=$atendimento['exame13'];?></td>
        <td><?=date('d/m/Y', strtotime($atendimento['dataExame13']));?></td> 
        <td><?=$atendimento['exame14'];?></td>
        <td><?=date('d/m/Y', strtotime($atendimento['dataExame14']));?></td> 
        <td><?=$atendimento['exame15'];?></td> 
        <td><?=date('d/m/Y', strtotime($atendimento['dataExame15']));?></td> 
        <td><?=$atendimento['exame16'];?></td> 
        <td><?=date('d/m/Y', strtotime($atendimento['dataExame16']));?></td> 
        <td><?=$atendimento['exame17'];?></td> 
        <td><?=date('d/m/Y', strtotime($atendimento['dataExame17']));?></td> 
        <td><?=$atendimento['exame18'];?></td> 
        <td><?=date('d/m/Y', strtotime($atendimento['dataExame18']));?></td> 
        <td><?=$atendimento['aptidao'];?></td> 
        <td><?=$atendimento['aptidaoAltura'];?></td> 
        <td><?=$atendimento['aptidaoConfinado'];?></td> 
        <td><?=$atendimento['aptidaoAlimentos'];?></td> 
        <td><?=$atendimento['medicoResponsavel'];?></td> 
        <td><?=$atendimento['observacao'];?></td> 
        <td><?=$atendimento['convenio'];?></td> 
        
        <td>
          <a href="./editar.php?id=<?=$atendimento['id'];?>">Editar
            <img width="20px" src="./assets/images/file.svg" alt="icone para editar">
          </a>
          <a href="./excluir.php?id=<?=$atendimento['id'];?>" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir
            <img width="20px" src="./assets/images/bin.svg" alt="icone para excluir registro">
          </a>
          <a href="./aso.php?id=<?=$atendimento['id'];?>" onclick="return confirm('Tem certeza que deseja imprimir o ASO desse funcionário?')" target="blank">ASO
            <img width="20px" src="./assets/images/aso.svg" alt="icone para excluir registro">
          </a>
          <a href="./acuidade.php?id=<?=$atendimento['id'];?>" onclick="return confirm('Imprimi acuidade')" target="blank">Acuidade
            <img width="20px" src="./assets/images/document.svg" alt="icone para imprimir acuidade">
          </a>
          <a href="./glicemia.php?id=<?=$atendimento['id'];?>" onclick="return confirm('Imprimi glicemia')" target="blank">Glicemia
            <img width="20px" src="./assets/images/document.svg" alt="icone para imprimir glicemia">
          </a>
          <a href="./recibo.php?id=<?=$atendimento['id'];?>" onclick="return confirm('Imprimi recibo de pagamento')" target="blank">Recibo
            <img width="20px" src="./assets/images/document.svg" alt="Imprimi recibo de pagamento">
          </a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</div>


<?php require 'pages/footer.php'; ?>

###################
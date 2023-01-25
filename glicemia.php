<?php require 'config.php'; ?>

<?php require 'pages/acuidadeHeader.php'; ?>

<?php
  require 'classes/atendimentosLista.class.php';
  $a = new AtendimentoLista();
  if(isset($_POST['cnpj']) && !empty($_POST['cnpj'])) {
      $cnpj = addslashes($_POST['cnpj']);
      $razaoSocial = addslashes($_POST['razaoSocial']);
      $nomeFantasia = addslashes($_POST['nomeFantasia']);
      $funcionario = addslashes($_POST['funcionario']);
      $cpf = addslashes($_POST['cpf']);
      $nascimento = addslashes($_POST['nascimento']);
      $cargo = addslashes($_POST['cargo']);
      $dataAtendimento = addslashes($_POST['dataAtendimento']);
      $tipoExame = addslashes($_POST['tipoExame']);
      $riscoFisico = addslashes($_POST['riscoFisico']);
      $riscoQuimico = addslashes($_POST['riscoQuimico']);
      $riscoBiologico = addslashes($_POST['riscoBiologico']);
      $riscoErgonomico = addslashes($_POST['riscoErgonomico']);
      $riscoAcidente = addslashes($_POST['riscoAcidente']);
      $exame1 = addslashes($_POST['exame1']);
      $dataExame1 = addslashes($_POST['dataExame1']);
      $exame2 = addslashes($_POST['exame2']);
      $dataExame2 = addslashes($_POST['dataExame2']);
      $exame3 = addslashes($_POST['exame3']);
      $dataExame3 = addslashes($_POST['dataExame3']);
      $exame4 = addslashes($_POST['exame4']);
      $dataExame4 = addslashes($_POST['dataExame4']);
      $exame5 = addslashes($_POST['exame5']);
      $dataExame5 = addslashes($_POST['dataExame5']);
      $exame6 = addslashes($_POST['exame6']);
      $dataExame6 = addslashes($_POST['dataExame6']);
      $exame7 = addslashes($_POST['exame7']);
      $dataExame7 = addslashes($_POST['dataExame7']);
      $exame8 = addslashes($_POST['exame8']);
      $dataExame8 = addslashes($_POST['dataExame8']);
      $exame9 = addslashes($_POST['exame9']);
      $dataExame9 = addslashes($_POST['dataExame9']);
      $exame10 = addslashes($_POST['exame10']);
      $dataExame10 = addslashes($_POST['dataExame10']);
      $exame11 = addslashes($_POST['exame11']);
      $dataExame11 = addslashes($_POST['dataExame11']);
      $exame12 = addslashes($_POST['exame12']);
      $dataExame12 = addslashes($_POST['dataExame12']);
      $exame13 = addslashes($_POST['exame13']);
      $dataExame13 = addslashes($_POST['dataExame13']);
      $exame14 = addslashes($_POST['exame14']);
      $dataExame14 = addslashes($_POST['dataExame14']);
      $exame15 = addslashes($_POST['exame15']);
      $dataExame15 = addslashes($_POST['dataExame15']);
      $exame16 = addslashes($_POST['exame16']);
      $dataExame16 = addslashes($_POST['dataExame16']);
      $exame17 = addslashes($_POST['exame17']);
      $dataExame17 = addslashes($_POST['dataExame17']);
      $exame18 = addslashes($_POST['exame18']);
      $dataExame18 = addslashes($_POST['dataExame18']);
      $aptidao = addslashes($_POST['aptidao']);
      $aptidaoAltura = addslashes($_POST['aptidaoEspecificaAltura']);
      $aptidaoConfinado = addslashes($_POST['aptidaoEspecificaConfinado']);
      $aptidaoAlimentos = addslashes($_POST['aptidaoEspecificaAlimentos']);
      $medicoResponsavel = addslashes($_POST['medicoResponsavel']);
      $observacao = addslashes($_POST['observacao']);
      $convenio = addslashes($_POST['convenio']);

      if(!empty($cnpj) && !empty($razaoSocial) && !empty($nomeFantasia)) {
        if($cadastro->cadastrar($cnpj, $razaoSocial, $nomeFantasia, $funcionario, $cpf, $nascimento, $cargo, $dataAtendimento, $tipoExame, $riscoFisico, $riscoQuimico, $riscoBiologico, $riscoErgonomico, $riscoAcidente, $exame1, $dataExame1, $exame2, $dataExame2, $exame3, $dataExame3, $exame4, $dataExame4, $exame5, $dataExame5, $exame6, $dataExame6, $exame7, $dataExame7, $exame8, $dataExame8, $exame9, $dataExame9, $exame10, $dataExame10, $exame11, $dataExame11, $exame12, $dataExame12, $exame13, $dataExame13, $exame14, $dataExame14, $exame15, $dataExame15, $exame16, $dataExame16, $exame17, $dataExame17, $exame18, $dataExame18, $aptidao, $aptidaoAltura, $aptidaoConfinado, $aptidaoAlimentos, $medicoResponsavel, $observacao, $convenio)) {
          ?>
            <div class="alert alert-danger" role="alert">
              "Não foi possivel gravar o atendimento!!!"
            </div>
          <?php
        } else {
          ?>
            <div class="alert alert-success" role="alert">
              <strong>Atendimento inserido!!</strong> Imprima o ASO agora>>> <a href="aso.php" class="alert-link">Imprimir Atestado</a>
            </div>
          <?php
        }
      } else {
        ?>
        <div class="alert alert-warning" role="alert">
          preencha todos os campos!
        </div>
        <?php
  }
}
if(isset($_GET['id']) && !empty($_GET['id'])) {
  $atendimento = $a->getAtendimento($_GET['id']);
} else {
  ?>
  <script type="text/javascript">window.location.href="index.php";</script>
  <?php
  exit;
}
?>
<body>
    
    <div class="container">
        
        <header class="headerAso">
            
            </header>
            
            <main class="conteudo">
                
                <div class="atestadoSaude">
                    <h2>
                        Glicemia Capilar
                    </h2>
                </div>

            <div class="nome-empresa border">
                <div class="linha">
                    <p class="titulo">Empresa:</p>
                    <input type="text" value="<?=$atendimento['razaoSocial'];?>">
                </div>

                <div class="linha">
                    <p class="titulo">Tipo de Exame:</p>
                    <input type="text" value="<?=$atendimento['tipoExame'];?>">
                </div>
            </div>

            <div class="nome-empresa border">
                <div class="linha">
                    <p class="titulo">Nome:</p>
                    <input type="text" value="<?=$atendimento['funcionario'];?>">
                </div>

                <div class="linha">
                    <div class="linha50">
                        <p class="titulo">CPF:</p>
                        <input type="text" value="<?=$atendimento['cpf'];?>">
                    </div>

                    <div class="linha50">
                        <p class="titulo">Data de nascimento:</p>
                        <input type="text" value="<?= $atendimento['nascimento'] != '0001-01-01' ? date('d/m/Y', strtotime($atendimento['nascimento'])) : '';?>">
                    </div>
                </div>

                <div class="linha">
                    <p class="titulo">Função:</p>
                    <input type="text" value="<?=$atendimento['cargo'];?>">
                </div>

            </div>

            <div class="resultado">
                <h2>EM JEJUM [    ]</h2>
                <h2>PRÉ-PRADIAL [    ]</h2>
                <h2>PÓS-PRADIAL [    ]</h2>
            </div>


            <div class="resultadoMg">
                <h2>Resultado:</h2>
                <h3>mg/dl</h3>
            </div>


            <div class="tb-aptidao">
                <p><strong class="titulo">Observações: <br><br><br><br><br><br></strong></p>
            </div>

            <div>
                <div class="linha">
                    <p class="titulo">Data:</p>
                    <input value="<?=$atendimento['dataAtendimento'] != '0001-01-01' ? date('d/m/Y', strtotime($atendimento['dataAtendimento'])) : '';?>">
                </div>
            </div>


            <div class="assinaturas">
                    <p class="assinaturas">Assinatura do responsável</p>
            </div>

            <div>
                <p class="nr7">Declaro para todos os fins que recebi a 2ª via.</p>
            </div>

        </main>
    </div>
</body>
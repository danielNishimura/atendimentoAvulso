
<?php require 'config.php'; ?>
<?php require 'pages/asoHeader.php'; ?>

<div>
	
  <link rel="stylesheet" href="assets/css/styleAso.css" />
  <br/><br/>
  
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

<form method="POST">
    
<body>
            <div class="atestadoSaude">
                <h1>Atestado de Saúde ocupacional</h1>
            </div>

            <main class="conteudo">
                
                <fieldset class="bloco border" >
                    <legend> Empresa </legend>
                    <div class="linha">
                        <p class="titulo">Empresa selecionada:</p>
                        <input type="text" value="<?=$atendimento['razaoSocial'];?>" disabled>
                    </div>

                    <div class="linha">
                        <p class="titulo">CNPJ:</p>
                        <input type="text" value="<?=$atendimento['cnpj'];?>" disabled>
                    </div>


                    <div class="linha">
                        <p class="titulo">Tipo de Exame:</p>
                        <input type="text" value="<?=$atendimento['tipoExame'];?>" disabled>
                    </div>
                </fieldset>

                <fieldset class="bloco border">
                    <legend>Funcionário</legend>
                    <div class="linha">
                        <p class="titulo">Nome:</p>
                        <input type="text" value="<?=$atendimento['funcionario'];?>" disabled>
                    </div>

                    <div class="linha">
                        <div class="linha50">
                            <p class="titulo">CPF:</p>
                            <input type="text" value="<?=$atendimento['cpf'];?>" disabled>
                        </div>

                        <div class="linha50">
                            <p class="titulo">Data de nascimento:</p>
                            <input type="text" value="<?= $atendimento['nascimento'] != '0001-01-01' ? date('d/m/Y', strtotime($atendimento['nascimento'])) : '';?>" disabled>
                        </div>
                    </div>

                    <div class="linha">
                        <p class="titulo">Função:</p>
                        <input type="text" value="<?=$atendimento['cargo'];?>" disabled>
                    </div>

                </fieldset>

                <div class="bloco border">
                    <div class="linha">
                        <p class="titulo">Risco Fisíco:</p>
                        <input type="text" value="<?=$atendimento['riscoFisico'];?>" disabled>
                    </div>

                    <div class="linha">
                        <p class="titulo">Risco Químico:</p>
                        <input type="text" value="<?=$atendimento['riscoQuimico'];?>" disabled>

                    </div>

                    <div class="linha">
                        <p class="titulo">Risco Biológico:</p>
                        <input type="text" value="<?=$atendimento['riscoBiologico'];?>" disabled>

                    </div>

                    <div class="linha">
                        <p class="titulo">Risco Ergonomico:</p>
                        <input type="text" value="<?=$atendimento['riscoErgonomico'];?>" disabled>

                    </div>

                    <div class="linha">
                        <p class="titulo">Risco Acidente:</p>
                        <input type="text" value="<?=$atendimento['riscoAcidente'];?>" disabled>

                    </div>
                </div>

                <div class="bloco border">
                    <div class="linha">
                        <p class="titulo">Exame Médico:</p>
                        <p class="linhaInteira">Procedimentos médicos realizados: anamnese pessoal e profissional, medição dos dados
                            vitais (pressão arterial, frequência cardíaca, peso, altura), exame clínico de aptidão física e
                            mental.</p>
                    </div>
                </div>

                <div class="tb-exames">
                    <div class="colunaExameEsqueda">

                        <div class="linhaExame">
                        <input class="tituloExame" id="exame1" value="<?=$atendimento['exame1'];?>" disabled>
                        <input class="dataExame" id="dateExame1"
                        value="<?=$atendimento['dataExame1'] != '0001-01-01' ? date('d/m/Y', strtotime($atendimento['dataExame1'])) : '';?>" disabled>
                        </div>

                        <div class="linhaExame">
                        <input class="tituloExame" id="exame2" value="<?=$atendimento['exame2'];?>" disabled>
                        <input class="dataExame" id="dateExame2"
                        value="<?=$atendimento['dataExame2'] != '0001-01-01' ? date('d/m/Y', strtotime($atendimento['dataExame2'])) : '';?>" disabled>
                        </div>
        
                        <div class="linhaExame">
                        <input class="tituloExame" id="exame3" value="<?=$atendimento['exame3'];?>" disabled>
                        <input class="dataExame" id="dateExame3"
                        value="<?=$atendimento['dataExame3'] != '0001-01-01' ? date('d/m/Y', strtotime($atendimento['dataExame3'])) : '';?>" disabled>
                        </div>
        
                        <div class="linhaExame">
                        <input class="tituloExame" id="exame4" value="<?=$atendimento['exame4'];?>" disabled>
                        <input class="dataExame" id="dateExame4"
                        value="<?=$atendimento['dataExame4'] != '0001-01-01' ? date('d/m/Y', strtotime($atendimento['dataExame4'])) : '';?>" disabled>
                        </div>
        
                        <div class="linhaExame">
                        <input class="tituloExame" id="exame5" value="<?=$atendimento['exame5'];?>" disabled>
                        <input class="dataExame" id="dateExame5"
                        value="<?=$atendimento['dataExame5'] != '0001-01-01' ? date('d/m/Y', strtotime($atendimento['dataExame5'])) : '';?>" disabled>
                        </div>
        
                        <div class="linhaExame">
                        <input class="tituloExame" id="exame6" value="<?=$atendimento['exame6'];?>" disabled>
                        <input class="dataExame" id="dateExame6"
                        value="<?=$atendimento['dataExame6'] != '0001-01-01' ? date('d/m/Y', strtotime($atendimento['dataExame6'])) : '';?>" disabled>
                        </div>
        
                        <div class="linhaExame">
                        <input class="tituloExame" id="exame7" value="<?=$atendimento['exame7'];?>" disabled>
                        <input class="dataExame" id="dateExame7"
                        value="<?=$atendimento['dataExame7'] != '0001-01-01' ? date('d/m/Y', strtotime($atendimento['dataExame7'])) : '';?>" disabled>
                        </div>
        
                        <div class="linhaExame">
                        <input class="tituloExame" id="exame8" value="<?=$atendimento['exame8'];?>" disabled>
                        <input class="dataExame" id="dateExame8"
                        value="<?=$atendimento['dataExame8'] != '0001-01-01' ? date('d/m/Y', strtotime($atendimento['dataExame8'])) : '';?>" disabled>
                        </div>
                        
                        <div class="linhaExame">
                        <input class="tituloExame" id="exame9" value="<?=$atendimento['exame9'];?>" disabled>
                        <input class="dataExame" id="dateExame9"
                        value="<?=$atendimento['dataExame9'] != '0001-01-01' ? date('d/m/Y', strtotime($atendimento['dataExame9'])) : '';?>" disabled>
                        </div>
                    </div>

                    
                    <div class="colunaExameDireita">


                        <div class="linhaExame">
                        <input class="tituloExame" id="exame10" value="<?=$atendimento['exame10'];?>" disabled>
                        <input class="dataExame" id="dateExame10"
                        value="<?=$atendimento['dataExame10'] != '0001-01-01' ? date('d/m/Y', strtotime($atendimento['dataExame10'])) : '';?>" disabled>
                        </div>
        
                        <div class="linhaExame">
                        <input class="tituloExame" id="exame11" value="<?=$atendimento['exame11'];?>" disabled>
                        <input class="dataExame" id="dateExame11"
                        value="<?=$atendimento['dataExame11'] != '0001-01-01' ? date('d/m/Y', strtotime($atendimento['dataExame11'])) : '';?>" disabled>
                        </div>
        
                        <div class="linhaExame">
                        <input class="tituloExame" id="exame12" value="<?=$atendimento['exame12'];?>" disabled>
                        <input class="dataExame" id="dateExame12"
                        value="<?=$atendimento['dataExame12'] != '0001-01-01' ? date('d/m/Y', strtotime($atendimento['dataExame12'])) : '';?>" disabled>
                        </div>
        
                        <div class="linhaExame">
                        <input class="tituloExame" id="exame13" value="<?=$atendimento['exame13'];?>" disabled>
                        <input class="dataExame" id="dateExame13"
                        value="<?=$atendimento['dataExame13'] != '0001-01-01' ? date('d/m/Y', strtotime($atendimento['dataExame13'])) : '';?>" disabled>
                        </div>
        
                        <div class="linhaExame">
                        <input class="tituloExame" id="exame14" value="<?=$atendimento['exame14'];?>" disabled>
                        <input class="dataExame" id="dateExame14"
                        value="<?=$atendimento['dataExame14'] != '0001-01-01' ? date('d/m/Y', strtotime($atendimento['dataExame14'])) : '';?>" disabled>
                        </div>
        
                        <div class="linhaExame">
                        <input class="tituloExame" id="exame15" value="<?=$atendimento['exame15'];?>" disabled>
                        <input class="dataExame" id="dateExame15"
                        value="<?=$atendimento['dataExame5'] != '0001-01-01' ? date('d/m/Y', strtotime($atendimento['dataExame5'])) : '';?>" disabled>
                        </div>
        
                        <div class="linhaExame">
                        <input class="tituloExame" id="exame16" value="<?=$atendimento['exame16'];?>" disabled>
                        <input class="dataExame" id="dateExame16"
                        value="<?=$atendimento['dataExame16'] != '0001-01-01' ? date('d/m/Y', strtotime($atendimento['dataExame16'])) : '';?>" disabled>
                        </div>
        
                        <div class="linhaExame">
                        <input class="tituloExame" id="exame17" value="<?=$atendimento['exame17'];?>" disabled>
                        <input class="dataExame" id="dateExame17"
                        value="<?=$atendimento['dataExame17'] != '0001-01-01' ? date('d/m/Y', strtotime($atendimento['dataExame17'])) : '';?>" disabled>
                        </div>
        
                        <div class="linhaExame">
                        <input class="tituloExame" id="exame18" value="<?=$atendimento['exame18'];?>" disabled>
                        <input class="dataExame" id="dateExame18"
                        value="<?=$atendimento['dataExame18'] != '0001-01-01' ? date('d/m/Y', strtotime($atendimento['dataExame18'])) : '';?>" disabled>
                        </div>
                    </div>
                </div>

                <div class="bloco tb-aptidao border">
                    <p>Atesto que o(a) funcionário(a), acima qualificado(a), foi clinicamente examinado(a), nesta data, sendo constado que está:</p>
                    <input id="aptidao" value="<?=$atendimento['aptidao'];?>" class="aptidao" disabled>
                    <input type="text" value="validade de 1 ano" disabled>
                </div>

                <div class="bloco tb-aptidao border">
                    <p>Aptidão especifica:</p>
                    <input id="aptidaoAltura" value="<?=$atendimento['aptidaoAltura'];?>" class="aptidao" disabled>
                    <br/>
                    <input id="aptidaoConfinado" value="<?=$atendimento['aptidaoConfinado'];?>" class="aptidao" disabled>
                    <br/>
                    <input id="aptidaoAlimentos" value="<?=$atendimento['aptidaoAlimentos'];?>" class="aptidao" disabled>

                </div>


                <div class="bloco border">
                    <div class="linha">
                        <p class="titulo">Data:</p>
                        <input class="titulo"
                        value="<?=$atendimento['dataAtendimento'] != '0001-01-01' ? date('d/m/Y', strtotime($atendimento['dataAtendimento'])) : '';?>" disabled>
                    </div>
                </div>


                <div class="assinaturas">
                    <div class="assinatura">
                        <p class="assinaturaEsquerda">Ass. do(a) Funcionário(a)</p>
                        <p class="assinaturaDireita">Carimbo e Assinatura do Médico:</p>
                    </div>
                </div>

                <div class="bloco tb-medicoCoordenador border">
                    <h3>Médico Responsavel pelo PCMSO</h3>
                    <input id="medicoResponsavel" value="<?=$atendimento['medicoResponsavel'];?>" disabled>
                </div>

                <div class="bloco tb-observacao border">
                    <div class="linha">
                        <p class="titulo">Obs:</p>
                        <input class="titulo" id="observacao" value="<?=$atendimento['observacao'];?>" disabled>

                    </div>
                </div>

                <div class="bloco border">
                    <p class="nr7">A ficha clínica e os resultados dos exames médicos complementares previstos na NR-7 da Portaria nº
                        24 de 29/12/1994, do Ministério do Trabalho, encontram-se arquivados Clínica Salutar Saúde, situado
                        na Av. Nelson Spielmann, 593 – Marília – São Paulo, estando à disposição do médico fiscal do
                        Ministério do Trabalho.</p>
                </div>
            </main>
</body>

</form>

</div>
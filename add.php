<?php require 'pages/header.php'; ?>

<div class="container">
	<link rel="stylesheet" href="assets/css/style.css" />
  <h2>Novo Atendimento</h2>

  <?php
  require './classes/atendimento.class.php';
    $cadastro = new Atendimentos();
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

    if(!empty($cnpj) && !empty($razaoSocial)) {
      $cadastro->cadastrar($cnpj, $razaoSocial, $nomeFantasia, $funcionario, $cpf, $nascimento, $cargo, $dataAtendimento,$tipoExame, $riscoFisico, $riscoQuimico, $riscoBiologico, $riscoErgonomico, $riscoAcidente, $exame1, $dataExame1,$exame2, $dataExame2, $exame3, $dataExame3, $exame4, $dataExame4, $exame5, $dataExame5, $exame6, $dataExame6, $exame7,$dataExame7, $exame8, $dataExame8, $exame9, $dataExame9, $exame10, $dataExame10, $exame11, $dataExame11, $exame12,$dataExame12, $exame13, $dataExame13, $exame14, $dataExame14, $exame15, $dataExame15, $exame16, $dataExame16, $exame17,$dataExame17, $exame18, $dataExame18, $aptidao, $aptidaoAltura, $aptidaoConfinado, $aptidaoAlimentos,$medicoResponsavel, $observacao, $convenio);

      header("Location: index.php");

    } else {
      ?>
        <div class="alert alert-warning">
          Preencha os campos CNPJ e Razão Social
        </div>
      <?php
    }
  }

?>

  <form method="POST">
      
  <fieldset>
    <div class="form-group">
      <legend>Informações da Empresa</legend>
      <label for="cnpj">CNPJ:</label>
      <input type="text" name="cnpj" id="cnpj" class="form-control" />

      <label for="razaoSocial">Razao Social:</label>
      <input type="text" name="razaoSocial" id="razaoSocial" class="form-control" />

      <label for="nomeFantasia">Nome Fantasia:</label>
      <input type="text" name="nomeFantasia"  class="form-control" />
    </div>
  </fieldset>

  <fieldset>
    <div class="form-group">
      <legend>Informações do Funcionário</legend>

      <label for="funcionario">Nome do funcionario:</label>
      <input type="text" name="funcionario" id="funcionario" class="form-control">
  
      <label for="cpf">CPF do funcionario:</label>
      <input type="text" name="cpf" class="form-control">
  
      <label for="nascimento">Data de nascimento:</label>
      <input type="date" value="0001-01-01" name="nascimento" class="form-control">
  
      <label for="cargo">Cargo do funcionario:</label>
      <input type="text" name="cargo" class="form-control">

    </div>
  </fieldset>

  <fieldset>
    <legend>Tipo de Atendimento</legend>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="dataAtendimento">Data do Atendimento:</label>
        <input type="date" value="0001-01-01" name="dataAtendimento" class="form-control">
      </div>

      <div class="form-group col-md-6">
        <label for="tipoExame">Tipo do exame:</label>
        <select name="tipoExame" id="tipoExame"  class="form-control">
            <option value="Admissional">Admissional</option>
            <option value="Periódico">Periódico</option>
            <option value="Demissional">Demissional</option>
            <option value="Mudança de risco ocupacional">Mudança de risco ocupacional</option>
            <option value="Retorno ao Trabalho">Retorno ao Trabalho</option>
            <option value="Consulta">Consulta</option>
            <option value="Validação de atestado">Validação de atestado</option>
            <option value="Validação de atestado">Outro</option>
          </select>
      </div>
    </div>
  </fieldset>

  <fieldset>
    <legend>Identificação dos Riscos</legend>
      <div class="form-group">
        <label for="riscoFisico">Risco Fisico:</label>
          <input type="text" name="riscoFisico" value="Ausência de agente nocivo" class="form-control">
    
        <label for="riscoQuimico">Risco Químico:</label>
          <input type="text" name="riscoQuimico" value="Ausência de agente nocivo" class="form-control">
    
        <label for="riscoBiologico">Risco Biológico:</label>
          <input type="text" name="riscoBiologico" value="Ausência de agente nocivo" class="form-control">
    
        <label for="riscoErgonomico">Risco Ergonômico:</label>
          <input type="text" name="riscoErgonomico" value="Ausência de agente nocivo" class="form-control">
    
        <label for="riscoAcidente">Risco Acidente:</label>
          <input type="text" name="riscoAcidente" value="Ausência de agente nocivo" class="form-control">
      </div>
  </fieldset>



  <fieldset id="examesField">
    <legend>Exames realizados</legend>

      <!--#################### EXAMES ESQUERDO #############################-->

    <fieldset id="esquerdo">
      <div class="form-row">
        <!--divider-->
        <div class="form-group col-md-8">
         <label for="exame1">exame1:</label>

           <select class="form-control" name="examesList" id="">
            <?php
              require 'classes/exame.class.php';
                $a = new ExameSelect();
                $exames = $a->getExameSelect();
              foreach($exame as $exame) {
            ?>
                <option value="<?php echo $exame['nome']?>"> <?php echo $exame['nome']?></option>
            <?php
              }
            ?>
          ?>
            </select>
         
           <input type="text" list="examesList" class="form-control" name="exame1" >
        </div>

        <div class="form-group col-md-4">
         <label for="dataExame1">dataExame1:</label>
          <input type="date" value="0001-01-01" name="dataExame1" class="form-control">
        </div>
        <!--divider-->
        <div class="form-group col-md-8">
          <label for="exame2">exame2:</label>
            <input type="text" list="examesList" class="form-control" name="exame2" >
          </div>

          <div class="form-group col-md-4">
          <label for="dataExame2">dataExame2:</label>
            <input type="date" value="0001-01-01" name="dataExame2" class="form-control">
        </div>
        <!--divider-->
        <div class="form-group col-md-8">
          <label for="exame3">exame3:</label>
            <input type="text" list="examesList" class="form-control" name="exame3" >
          </div>

          <div class="form-group col-md-4">
          <label for="dataExame3">dataExame3:</label>
            <input type="date" value="0001-01-01" name="dataExame3" class="form-control">
        </div>
        <!--divider-->
        <div class="form-group col-md-8">
          <label for="exame4">exame4:</label>
            <input type="text" list="examesList" class="form-control" name="exame4" >
          </div>

          <div class="form-group col-md-4">
          <label for="dataExame4">dataExame4:</label>
            <input type="date" value="0001-01-01" name="dataExame4" class="form-control">
        </div>
        <!--divider-->
        <div class="form-group col-md-8">
          <label for="exame5">exame5:</label>
            <input type="text" list="examesList" class="form-control" name="exame5" >
          </div>

          <div class="form-group col-md-4">
          <label for="dataExame5">dataExame5:</label>
            <input type="date" value="0001-01-01" name="dataExame5" class="form-control">
        </div>
        <!--divider-->
        <div class="form-group col-md-8">
          <label for="exame6">exame6:</label>
            <input type="text" list="examesList" class="form-control" name="exame6" >
          </div>

          <div class="form-group col-md-4">
          <label for="dataExame6">dataExame6:</label>
            <input type="date" value="0001-01-01" name="dataExame6" class="form-control">
        </div>        
        <!--divider-->
        <div class="form-group col-md-8">
          <label for="exame7">exame7:</label>
            <input type="text" list="examesList" class="form-control" name="exame7" >
          </div>

          <div class="form-group col-md-4">
          <label for="dataExame7">dataExame7:</label>
            <input type="date" value="0001-01-01" name="dataExame7" class="form-control">
        </div>
        <!--divider-->
        <div class="form-group col-md-8">
          <label for="exame8">exame8:</label>
            <input type="text" list="examesList" class="form-control" name="exame8" >
          </div>

          <div class="form-group col-md-4">
          <label for="dataExame8">dataExame8:</label>
            <input type="date" value="0001-01-01" name="dataExame8" class="form-control">
        </div>        
        <!--divider-->
        <div class="form-group col-md-8">
          <label for="exame9">exame9:</label>
            <input type="text" list="examesList" class="form-control" name="exame9" >
          </div>

          <div class="form-group col-md-4">
          <label for="dataExame9">dataExame9:</label>
            <input type="date" value="0001-01-01" name="dataExame9" class="form-control">
        </div>
    </fieldset>


    <!--#################### EXAMES DIREITO #############################-->

    <fieldset id="direito">
      <div class="form-row">
        <!--divider-->
        <div class="form-group col-md-8">
          <label for="exame10">exame10:</label>
            <input type="text" list="examesList" class="form-control" name="exame10" >
          </div>

          <div class="form-group col-md-4">
          <label for="dataExame10">dataExame10:</label>
            <input type="date" value="0001-01-01" name="dataExame10" class="form-control">
        </div>        
        <!--divider-->
        <div class="form-group col-md-8">
          <label for="exame11">exame11:</label>
            <input type="text" list="examesList" class="form-control" name="exame11" >
          </div>

          <div class="form-group col-md-4">
          <label for="dataExame11">dataExame11:</label>
            <input type="date" value="0001-01-01" name="dataExame11" class="form-control">
        </div>
        <!--divider-->
        <div class="form-group col-md-8">
          <label for="exame12">exame12:</label>
            <input type="text" list="examesList" class="form-control" name="exame12" >
          </div>

          <div class="form-group col-md-4">
          <label for="dataExame12">dataExame12:</label>
            <input type="date" value="0001-01-01" name="dataExame12" class="form-control">
        </div>        
        <!--divider-->
        <div class="form-group col-md-8">
          <label for="exame13">exame13:</label>
            <input type="text" list="examesList" class="form-control" name="exame13" >
          </div>

          <div class="form-group col-md-4">
          <label for="dataExame13">dataExame13:</label>
            <input type="date" value="0001-01-01" name="dataExame13" class="form-control">
        </div>
        <!--divider-->
        <div class="form-group col-md-8">
          <label for="exame14">exame14:</label>
            <input type="text" list="examesList" class="form-control" name="exame14" >
          </div>

          <div class="form-group col-md-4">
          <label for="dataExame14">dataExame14:</label>
            <input type="date" value="0001-01-01" name="dataExame14" class="form-control">
        </div>
        <!--divider-->
        <div class="form-group col-md-8">
          <label for="exame15">exame15:</label>
            <input type="text" list="examesList" class="form-control" name="exame15" >
          </div>

          <div class="form-group col-md-4">
          <label for="dataExame15">dataExame15:</label>
            <input type="date" value="0001-01-01" name="dataExame15" class="form-control">
        </div>
        <!--divider-->
        <div class="form-group col-md-8">
          <label for="exame16">exame16:</label>
            <input type="text" list="examesList" class="form-control" name="exame16" >
          </div>

          <div class="form-group col-md-4">
          <label for="dataExame16">dataExame16:</label>
            <input type="date" value="0001-01-01" name="dataExame16" class="form-control">
        </div>
        <!--divider-->
        <div class="form-group col-md-8">
          <label for="exame17">exame17:</label>
            <input type="text" list="examesList" class="form-control" name="exame17" >
          </div>

          <div class="form-group col-md-4">
          <label for="dataExame17">dataExame17:</label>
            <input type="date" value="0001-01-01" name="dataExame17" class="form-control">
        </div>
        <!--divider-->
        <div class="form-group col-md-8">
          <label for="exame18">exame18:</label>
            <input type="text" list="examesList" class="form-control" name="exame18" >
          </div>

          <div class="form-group col-md-4">
          <label for="dataExame18">dataExame18:</label>
            <input type="date" value="0001-01-01" name="dataExame18" class="form-control">
        </div>
      </div>  
    </fieldset>
  </fieldset>

  <!--#################### APTIDAO #############################-->
  <fieldset class="form-group">
    <div class="row">
      <legend>Aptidão do ASO</legend>
      <label for="aptidao">Aptidao:</label>
      <input type="text" name="aptidao" value="[&nbsp&nbsp]&nbsp apto para função [&nbsp&nbsp]&nbsp inapto para função" class="form-control">
    </div>
  </fieldset>

  <!--#################### APTIDAO ESPECIFICA #############################-->

  <fieldset>
    <legend>Aptidão especifica</legend>
    <div class="form-inline">
      <div class="custom-control custom-checkbox my-1 mr-sm-2">
        <input class="checkbox" type="checkbox" name="aptidaoAltura" id="aptidaoAltura" value="Trabalho em altura" onchange="aptAltura()">
        <label class="custom-control-label" for="aptidaoAltura">Trabalho em altura</label>
      </div>
    </div>
    
    <div class="form-inline">
      <div class="custom-control custom-checkbox my-1 mr-sm-2">
        <input class="checkbox" type="checkbox" name="aptidaoConfinado" id="aptidaoConfinado" value="Trabalho em espaço confinado" onchange="aptConfinado()">
        <label class="custom-control-label" for="aptidaoConfinado">Trabalho em espaço confinado</label>
      </div>
    </div>

    <div class="form-inline">
      <div class="custom-control custom-checkbox my-1 mr-sm-2">
        <input class="checkbox" type="checkbox" name="aptidaoAlimentos" id="aptidaoAlimentos" value="Trabalho com manipulação de alimentos" onchange="aptAlimentos()">
        <label class="custom-control-label" for="aptidaoAlimentos">Trabalho com manipulação de alimentos</label>
      </div>
    </div>

        <input type="text" name="aptidaoEspecificaAltura" id="aptidaoEspecificaAltura" class="aptidaoEspecificaSelecionada">

        <input type="text" name="aptidaoEspecificaConfinado" id="aptidaoEspecificaConfinado" class="aptidaoEspecificaSelecionada">

        <input type="text" name="aptidaoEspecificaAlimentos" id="aptidaoEspecificaAlimentos" class="aptidaoEspecificaSelecionada">
  </fieldset>
    
    <!--#################### MEDICO RESPONSAVEL #############################-->

  <fieldset class="form-group">
    <div class="row">
      <legend>Medico Responsavel pelo PCMSO:</legend>
      <label for="medicoResponsavel">Medico Responsavel pelo PCMSO:</label>
      <input type="text" name="medicoResponsavel" class="form-control">
    </div>
  </fieldset>

    <!--#################### OBSERVAÇÃO #############################-->

  <fieldset class="form-group">
    <div class="row">
      <legend>Observação:</legend>
      <label for="observacao">Observação:</label>
        <input type="text" name="observacao"class="form-control">
    </div>
  </fieldset>  

  <!--#################### CONVENIO #############################-->

  <fieldset class="form-group">
    <div class="row">
      <legend>Convênio:</legend>
      <label for="convenio">Convênio:</label>
        <input type="text" name="convenio"class="form-control">
    </div>
  </fieldset>  

    <input type="submit" value="Adicionar" class="btn btn-default">

  <select name="examesList" id="">
    <?php
      require 'classes/exame.class.php';
        $a = new ExameSelect();
        $exames = $a->getExameSelect();
      foreach($exame as $exame) {
    ?>
      <option value="<?php echo $exame['nome']?>"> <?php echo $exame['nome']?></option>
    <?php
      }
    ?>
?>
  </select>  



  </form>
</div>

  <script  src="./assets/js/main.js">
  </script>


<datalist id="examesList">


          <option value=""></option>
          <option value="acetil colinesterase eritrocitária">acetil colinesterase eritrocitária</option>
          <option value="acetona sangue">acetona sangue</option>
          <option value="acetona urina">acetona urina</option>
          <option value="ácido fenil-glioxilico">ácido fenil-glioxilico</option>
          <option value="ácido hipúrico">ácido hipúrico</option>
          <option value="ácido mandelico">ácido mandelico</option>
          <option value="acido metil hipurico">acido metil hipurico</option>
          <option value="ácido tricloreto acético">ácido tricloreto acético</option>
          <option value="ácido t-transmuconico">ácido t-transmuconico</option>
          <option value="ácido úrico">ácido úrico</option>
          <option value="acuidade visual">acuidade visual</option>
          <option value="alau">alau</option>
          <option value="amilase">amilase</option>
          <option value="anfetaminas">anfetaminas</option>
          <option value="anti hbs - igg">anti hbs - igg</option>
          <option value="anti hbs - igm">anti hbs - igm</option>
          <option value="anti hcv">anti hcv</option>
          <option value="anti hiv">anti hiv</option>
          <option value="antibiograma">antibiograma</option>
          <option value="audiometria">audiometria</option>
          <option value="avaliação odontológica">avaliação odontológica</option>
          <option value="avaliação oftalmológica">avaliação oftalmológica</option>
          <option value="avaliação psicologica">avaliação psicologica</option>
          <option value="avaliação psicossocial">avaliação psicossocial</option>
          <option value="avaliação toxicológica">avaliação toxicológica</option>
          <option value="beta hcg">beta hcg</option>
          <option value="bilirrumina total + frações">bilirrumina total + frações</option>
          <option value="brucelose">brucelose</option>
          <option value="cádmio (sangue)">cádmio (sangue)</option>
          <option value="cádmio (urina)">cádmio (urina)</option>
          <option value="cálcio">cálcio</option>
          <option value="canabinóides">canabinóides</option>
          <option value="carboxihemoglobina">carboxihemoglobina</option>
          <option value="ceruloplasmina">ceruloplasmina</option>
          <option value="chagas igg">chagas igg</option>
          <option value="chagas igm">chagas igm</option>
          <option value="chumbo - sérico (sangue)">chumbo - sérico (sangue)</option>
          <option value="coagulograma">coagulograma</option>
          <option value="cobre (sangue)">cobre (sangue)</option>
          <option value="cocaína">cocaína</option>
          <option value="colesterol hdl/ldl/vldl">colesterol hdl/ldl/vldl</option>
          <option value="colesterol total">colesterol total</option>
          <option value="colinesterase plasmática">colinesterase plasmática</option>
          <option value="colpocitoliga oncótica">colpocitoliga oncótica</option>
          <option value="consulta clínica">consulta clínica</option>
          <option value="contagem de plaquetas">contagem de plaquetas</option>
          <option value="controle de absenteísmo">controle de absenteísmo</option>
          <option value="coprocultura">coprocultura</option>
          <option value="covid anticorpos totais">covid anticorpos totais</option>
          <option value="covid pcr">covid pcr</option>
          <option value="covid teste rápido">covid teste rápido</option>
          <option value="creatinina">creatinina</option>
          <option value="cromatopsia">cromatopsia</option>
          <option value="cromo">cromo</option>
          <option value="cultura e antibiograma">cultura e antibiograma</option>
          <option value="curva glicêmica">curva glicêmica</option>
          <option value="dinamometria">dinamometria</option>
          <option value="dosagem de cromo u">dosagem de cromo u</option>
          <option value="dosagem de fluoreto">dosagem de fluoreto</option>
          <option value="dosagem de manganês u">dosagem de manganês u</option>
          <option value="eas">eas</option>
          <option value="ecg">ecg</option>
          <option value="eeg">eeg</option>
          <option value="epf">epf</option>
          <option value="eritograma">eritograma</option>
          <option value="espirometria">espirometria</option>
          <option value="exame clinico">exame clinico</option>
          <option value="exame clínico">exame clínico</option>
          <option value="fator rh">fator rh</option>
          <option value="fenol">fenol</option>
          <option value="ferratina">ferratina</option>
          <option value="ferro sérico">ferro sérico</option>
          <option value="fluoreto sangue">fluoreto sangue</option>
          <option value="fluoreto urina">fluoreto urina</option>
          <option value="fosfatase alcalina">fosfatase alcalina</option>
          <option value="fósforo">fósforo</option>
          <option value="gama gt">gama gt</option>
          <option value="glicemia jejum">glicemia jejum</option>
          <option value="glicose">glicose</option>
          <option value="grupo sanguineo e fator rh">grupo sanguineo e fator rh</option>
          <option value="hbsag">hbsag</option>
          <option value="hemoglobina glicosada">hemoglobina glicosada</option>
          <option value="hemograma completo">hemograma completo</option>
          <option value="hepatite a">hepatite a</option>
          <option value="hepatite b">hepatite b</option>
          <option value="hepatite c">hepatite c</option>
          <option value="hexanodiona urina">hexanodiona urina</option>
          <option value="hidroxi - vitamina d">hidroxi - vitamina d</option>
          <option value="hiv">hiv</option>
          <option value="ige total">ige total</option>
          <option value="lipidograma">lipidograma</option>
          <option value="machado guerreiro">machado guerreiro</option>
          <option value="magnésio">magnésio</option>
          <option value="mamografia">mamografia</option>
          <option value="manganês">manganês</option>
          <option value="mercúrio (sangue)">mercúrio (sangue)</option>
          <option value="mercúrio (urina)">mercúrio (urina)</option>
          <option value="metahemoglobina">metahemoglobina</option>
          <option value="metahemoglobina">metahemoglobina</option>
          <option value="metanol">metanol</option>
          <option value="metil etil cetona - mek">metil etil cetona - mek</option>
          <option value="micológico">micológico</option>
          <option value="parasitológico de fezes">parasitológico de fezes</option>
          <option value="pcr - proteína">pcr - proteína</option>
          <option value="potássio">potássio</option>
          <option value="psa livre">psa livre</option>
          <option value="psa total">psa total</option>
          <option value="pth">pth</option>
          <option value="raio x coluna lombo sacra - pa e perfil">raio x  coluna lombo sacra - pa e perfil</option>
          <option value="raio x cervical">raio x cervical</option>
          <option value="raio x coluna lombo sacra">raio x coluna lombo sacra</option>
          <option value="raio x de tórax - pa">raio x de tórax - pa</option>
          <option value="raio x de tórax oit">raio x de tórax oit</option>
          <option value="raio x de tórax pa e perfil">raio x de tórax pa e perfil</option>
          <option value="raio x dorsal">raio x dorsal</option>
          <option value="reticulócitos">reticulócitos</option>
          <option value="romberg">romberg</option>
          <option value="rotina de urina eas">rotina de urina eas</option>
          <option value="sódio">sódio</option>
          <option value="t3 - triiodotironina">t3 - triiodotironina</option>
          <option value="t4 - tiroxina total">t4 - tiroxina total</option>
          <option value="teste de protombina">teste de protombina</option>
          <option value="tgo">tgo</option>
          <option value="tgp">tgp</option>
          <option value="tipagem sanguínea">tipagem sanguínea</option>
          <option value="triagem (drogas)">triagem (drogas)</option>
          <option value="triagem vocal">triagem vocal</option>
          <option value="tricolorocompostos totais">tricolorocompostos totais</option>
          <option value="triglicerídeos">triglicerídeos</option>
          <option value="tsh">tsh</option>
          <option value="ureia">ureia</option>
          <option value="urina tipo I">urina tipo I</option>
          <option value="urocultura">urocultura</option>
          <option value="vdrl">vdrl</option>
          <option value="vitamina b12">vitamina b12</option>
          <option value="vitamina d">vitamina d</option>
          <option value="zinco">zinco</option>

</datalist>
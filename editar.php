<?php require './pages/header.php'; ?>

<div class="container">
	
  <link rel="stylesheet" href="./assets/css/style.css" />
  <br/><br/>

  <h2>Editar o Atendimento</h2>
  
<?php
  require 'classes/atendimento.class.php';
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

        $a->editAtendimento($cnpj, $razaoSocial, $nomeFantasia, $funcionario, $cpf, $nascimento, $cargo, $dataAtendimento, $tipoExame, $riscoFisico, $riscoQuimico, $riscoBiologico, $riscoErgonomico, $riscoAcidente, $exame1, $dataExame1, $exame2, $dataExame2, $exame3, $dataExame3, $exame4, $dataExame4, $exame5, $dataExame5, $exame6, $dataExame6, $exame7, $dataExame7, $exame8, $dataExame8, $exame9, $dataExame9, $exame10, $dataExame10, $exame11, $dataExame11, $exame12, $dataExame12, $exame13, $dataExame13, $exame14, $dataExame14, $exame15, $dataExame15, $exame16, $dataExame16, $exame17, $dataExame17, $exame18, $dataExame18, $aptidao, $aptidaoAltura, $aptidaoConfinado, $aptidaoAlimentos, $medicoResponsavel, $observacao, $convenio, $_GET['id']);
          ?>
            <div class="alert alert-success" role="alert">
              "Informações editadas com sucesso!!!"
            </div>
          <?php
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
    
<fieldset>
  <div class="form-group" >
    <legend>Informações da Empresa</legend>
    <label for="cnpj">
      CNPJ:<br/>
      <input type="text" name="cnpj" id="cnpj" class="form-control" value="<?=$atendimento['cnpj']; ?>" />
    </label><br/><br/>

    <label for="razaoSocial">
    Razao Social:<br/>
      <input type="text" name="razaoSocial" id="razaoSocial" class="form-control" value="<?=$atendimento['razaoSocial'];?>" />
    </label><br/><br/>

    <label for="nomeFantasia">
    Nome Fantasia:<br/>
      <input type="text" name="nomeFantasia"  class="form-control"  value="<?=$atendimento['nomeFantasia'];?>" />
    </label><br/><br/>
  </div>
</fieldset>

<fieldset>
  <legend>Informações do Funcionário</legend>

  <label for="funcionario">
  Nome do funcionario:<br/>
    <input type="text" name="funcionario" id="funcionario"  value="<?=$atendimento['funcionario'];?>">
  </label><br/><br/>

  <label for="cpf">
  CPF do funcionario:<br/>
    <input type="text" name="cpf"  value="<?=$atendimento['cpf'];?>">
  </label><br/><br/>

  <label for="nascimento">
  Data de nascimento:<br/>
    <input type="date" name="nascimento" class="inputDataExame"  value="<?=$atendimento['nascimento'];?>">
  </label><br/><br/>

  <label for="cargo">
  Cargo do funcionario:<br/>
    <input type="text" name="cargo"  value="<?=$atendimento['cargo'];?>">
  </label><br/><br/>
</fieldset>

<fieldset>
  <label for="dataAtendimento">
  Data do Atendimento:<br/>
    <input type="date" name="dataAtendimento" class="inputDataExame" value="<?=$atendimento['dataAtendimento'];?>">
  </label><br/><br/>

    <label for="tipoExame">
    Tipo do exame:<br/>
      <select name="tipoExame" id="tipoExame">
        <option value="Admissional"<?php echo($atendimento['tipoExame']=="Admissional")?'selected="selected"':'';?>>Admissional</option>
        <option value="Periódico"<?php echo ($atendimento['tipoExame']=="Periódico")?'selected="selected"':'';?>>Periódico</option>
        <option value="Demissional"<?php echo ($atendimento['tipoExame']=='Demissional')?'selected="selected"':'';?>>Demissional</option>
        <option value="Mudança de risco ocupacional"<?php echo ($atendimento['tipoExame']=='Mudança de risco ocupacional')?'selected="selected"':'';?>>Mudança de risco ocupacional</option>
        <option value="Retorno ao Trabalho"<?php echo ($atendimento['tipoExame']=='Retorno ao Trabalho')?'selected="selected"':'';?>>Retorno ao Trabalho</option>
        <option value="Consulta"<?php echo ($atendimento['tipoExame']=='Consulta')?'selected="selected"':'';?>>Consulta</option>
        <option value="Validação de atestado"<?php echo ($atendimento['tipoExame']=='Validação de atestado')?'selected="selected"':'';?>>Validação de atestado</option>
        <option value="Outro"<?php echo ($atendimento['tipoExame']=='Outro')?'selected="selected"':'';?>>Outro</option>
      </select>
    </label><br/><br/>
  </fieldset>

<fieldset>
  <legend>Identificação dos Riscos</legend>
  
  <label for="riscoFisico">
  Risco Fisico:<br/>
    <input type="text" name="riscoFisico" value="Ausência de agente nocivo" class="inputRisco" value="<?=$atendimento['riscoFisico'];?>">
  </label><br/><br/>

  <label for="riscoQuimico">
  Risco Químico:<br/>
    <input type="text" name="riscoQuimico" value="Ausência de agente nocivo" value="<?=$atendimento['riscoQuimico'];?>">
  </label><br/><br/>

  <label for="riscoBiologico">
  Risco Biológico:<br/>
    <input type="text" name="riscoBiologico" value="Ausência de agente nocivo" value="<?=$atendimento['riscoBiologico'];?>">
  </label><br/><br/>

  <label for="riscoErgonomico">
  Risco Ergonômico:<br/>
    <input type="text" name="riscoErgonomico" value="Ausência de agente nocivo" value="<?=$atendimento['riscoErgonomico'];?>">
  </label><br/><br/>

  <label for="riscoAcidente">
  Risco Acidente:<br/>
    <input type="text" name="riscoAcidente" value="Ausência de agente nocivo" value="<?=$atendimento['riscoAcidente'];?>">
  </label><br/><br/>
</fieldset>



<fieldset id="examesField">
  <legend>Exames realizados</legend>


    <!--#################### EXAMES ESQUERDO #############################-->

    <fieldset id="esquerdo">

      <label for="exame1">exame1:<br/>
        <input type="text" list="examesList" class="inputExame" name="exame1" value="<?=$atendimento['exame1'];?>">
        <input type="date" name="dataExame1" class="inputDataExame" value="<?=$atendimento['dataExame1'];?>">
      </label><br/><br/>

      <label for="exame2">exame2:<br/>
        <input type="text" list="examesList" class="inputExame" name="exame2" value="<?=$atendimento['exame2'];?>">
        <input type="date" name="dataExame2" class="inputDataExame" value="<?=$atendimento['dataExame2'];?>">
      </label><br/><br/>

      <label for="exame3">exame3:<br/>
        <input type="text" list="examesList" class="inputExame" name="exame3" value="<?=$atendimento['exame3'];?>">
        <input type="date" name="dataExame3" class="inputDataExame" value="<?=$atendimento['dataExame3'];?>">
      </label><br/><br/>

      <label for="exame4">exame4:<br/>
      <input type="text" list="examesList" class="inputExame" name="exame4" value="<?=$atendimento['exame4'];?>">
      <input type="date" name="dataExame4" class="inputDataExame" value="<?=$atendimento['dataExame4'];?>">
      </label><br/><br/>

      <label for="exame5">exame5:<br/>
        <input type="text" list="examesList" class="inputExame" name="exame5" value="<?=$atendimento['exame5'];?>">
        <input type="date" name="dataExame5" class="inputDataExame" value="<?=$atendimento['dataExame5'];?>">
      </label><br/><br/>

      <label for="exame6">exame6:<br/>
        <input type="text" list="examesList" class="inputExame" name="exame6" value="<?=$atendimento['exame6'];?>">
        <input type="date" name="dataExame6" class="inputDataExame" value="<?=$atendimento['dataExame6'];?>">
      </label><br/><br/>

      <label for="exame7">exame7:<br/>
        <input type="text" list="examesList" class="inputExame" name="exame7" value="<?=$atendimento['exame7'];?>">
        <input type="date" name="dataExame7" class="inputDataExame" value="<?=$atendimento['dataExame7'];?>">
      </label><br/><br/>

      <label for="exame8">exame8:<br/>
        <input type="text" list="examesList" class="inputExame" name="exame8" value="<?=$atendimento['exame8'];?>">
        <input type="date" name="dataExame8" class="inputDataExame" value="<?=$atendimento['dataExame8'];?>">
      </label><br/><br/>

      <label for="exame9">exame9:<br/>
        <input type="text" list="examesList" class="inputExame" name="exame9" value="<?=$atendimento['exame9'];?>">
        <input type="date" name="dataExame9" class="inputDataExame" value="<?=$atendimento['dataExame9'];?>">
      </label><br/><br/>

    </fieldset>


  <!--#################### EXAMES DIREITO #############################-->

  <fieldset id="direito">
    <div class="exameDireita">

      <label for="exame10">exame10:<br/>
      <input type="text" list="examesList" class="inputExame" name="exame10" value="<?=$atendimento['exame10'];?>">
        <input type="date" name="dataExame10" class="inputDataExame" value="<?=$atendimento['dataExame10'];?>">
      </label><br/><br/>
        
      <label for="exame11">exame11:<br/>
      <input type="text" list="examesList" class="inputExame" name="exame11" value="<?=$atendimento['exame11'];?>">
        <input type="date" name="dataExame11" class="inputDataExame" value="<?=$atendimento['dataExame11'];?>">
      </label><br/><br/>
    
      <label for="exame12">exame12:<br/>
      <input type="text" list="examesList" class="inputExame" name="exame12" value="<?=$atendimento['exame12'];?>">
        <input type="date" name="dataExame12" class="inputDataExame" value="<?=$atendimento['dataExame12'];?>">
      </label><br/><br/>
      <label for="exame13">exame13:<br/>
      <input type="text" list="examesList" class="inputExame" name="exame13" value="<?=$atendimento['exame13'];?>">
        <input type="date" name="dataExame13" class="inputDataExame" value="<?=$atendimento['dataExame13'];?>">
      </label><br/><br/>
    
      <label for="exame14">exame14:<br/>
      <input type="text" list="examesList" class="inputExame" name="exame14" value="<?=$atendimento['exame14'];?>">
        <input type="date" name="dataExame14" class="inputDataExame" value="<?=$atendimento['dataExame14'];?>">
      </label><br/><br/>
        
      <label for="exame15">exame15:<br/>
      <input type="text" list="examesList" class="inputExame" name="exame15" value="<?=$atendimento['exame15'];?>">
        <input type="date" name="dataExame15" class="inputDataExame" value="<?=$atendimento['dataExame15'];?>">
      </label><br/><br/>
    
      <label for="exame16">exame16:<br/>
      <input type="text" list="examesList" class="inputExame" name="exame16" value="<?=$atendimento['exame16'];?>">
        <input type="date" name="dataExame16" class="inputDataExame" value="<?=$atendimento['dataExame16'];?>">
      </label><br/><br/>

      <label for="exame17">exame17:<br/>
      <input type="text" list="examesList" class="inputExame" name="exame17" value="<?=$atendimento['exame17'];?>">
        <input type="date" name="dataExame17" class="inputDataExame" value="<?=$atendimento['dataExame17'];?>">
      </label><br/><br/>

      <label for="exame18">exame18:<br/>
      <input type="text" list="examesList" class="inputExame" name="exame18" value="<?=$atendimento['exame18'];?>">
        <input type="date" name="dataExame18" class="inputDataExame" value="<?=$atendimento['dataExame18'];?>">
      </label><br/><br/>

    </div>

  </fieldset>

</fieldset>

<fieldset>
  <legend>Aptidão do ASO</legend>

    <!--#################### APTIDAO #############################-->

    <label for="aptidao">
  Aptidao:<br/>
  
    <input type="text" name="aptidao" value="[&nbsp&nbsp]&nbsp apto para função [&nbsp&nbsp]&nbsp inapto para função">
  </label><br/><br/>

  <fieldset>
    <legend>Aptidão especifica</legend>
    <br/>
    <div class="checkbox-apt">
      <input class="checkbox-apt" type="checkbox" name="aptidaoAltura" id="aptidaoAltura"<?php echo($atendimento['aptidaoAltura']=="[  ] apto para trabalho em altura   [  ] inapto para trabalho em altura")?'checked="checked"':'';?>><label for="aptidaoAltura">Trabalho em altura</label>
    </div>

    <div class="checkbox-apt">
      <input class="checkbox-apt" type="checkbox" name="aptidaoConfinado" id="aptidaoConfinado"<?php echo($atendimento['aptidaoConfinado']=="[  ] apto para trabalho em espaço confinado   [  ] inapto para trabalho em espaço confinado")?'checked="checked"':'';?>><label for="aptidaoConfinado">Trabalho em espaço confinado</label>
    </div>

    <div class="checkbox-apt">
      <input class="checkbox-apt" type="checkbox" name="aptidaoAlimentos" id="aptidaoAlimentos"<?php echo($atendimento['aptidaoAlimentos']=="[  ] apto para trabalho com manipulação de alimentos   [  ] inapto para trabalho com manipulação de alimentos")?'checked="checked"':'';?>><label for="aptidaoAlimentos">Trabalho com manipulação de alimentos</label>
    </div>
  
      <input type="text" name="aptidaoEspecificaAltura" id="aptidaoEspecificaAltura" class="aptidaoEspecificaSelecionada">

      <input type="text" name="aptidaoEspecificaConfinado" id="aptidaoEspecificaConfinado" class="aptidaoEspecificaSelecionada">

      <input type="text" name="aptidaoEspecificaAlimentos" id="aptidaoEspecificaAlimentos" class="aptidaoEspecificaSelecionada">

  </fieldset>
  
  <!--#################### MEDICO RESPONSAVEL #############################-->

  <label for="medicoResponsavel">
  Medico Responsavel pelo PCMSO:<br/>
    <input type="text" name="medicoResponsavel" value="<?=$atendimento['medicoResponsavel'];?>">
  </label><br/><br/>

  <!--#################### OBSERVAÇÃO #############################-->

  <label for="observacao">
  Observação:<br/>
    <input type="text" name="observacao" value="<?=$atendimento['observacao'];?>">
  </label><br/><br/>  

  <!--#################### CONVENIO #############################-->

  <label for="convenio">
  Convênio:<br/>
    <input type="text" name="convenio" value="<?=$atendimento['convenio'];?>">
  </label><br/><br/>   

</fieldset>

  <input type="submit" value="Salvar" class="btn btn-default">

</form>

<script  src="./assets/js/main.js">

</script>

</div>

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


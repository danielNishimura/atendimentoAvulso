<!DOCTYPE html>
<html lang="pt-br">

<?php
  require 'classes/atendimentosLista.class.php';
  $a = new AtendimentoLista();

if(isset($_GET['id']) && !empty($_GET['id'])) {
  $atendimento = $a->buscaAtendimento($_GET['id']);
} else {
  ?>
  <script type="text/javascript">window.location.href="index.php";</script>
  <?php
  exit;
}
?>

    <body>
        <?php require 'pages/asoHeader.php'; ?>

            <div class="atestadoSaude">
                <h1>
                    Atestado de Saúde ocupacional
                </h1>
            </div>

            <main class="conteudo">
                
                <fieldset class="bloco border">
                    <legend> Empresa </legend>
                    <div class="linha">
                        <p class="titulo">Empresa selecionada:</p>
                        <input type="text" value="<?=$atendimento['razaoSocial'];?>">
                    </div>

                    <div class="linha">
                        <p class="titulo">CNPJ:</p>
                        <input type="text" value="<?=$atendimento['cnpj'];?>">
                    </div>


                    <div class="linha">
                        <p class="titulo">Tipo de Exame:</p>
                        <input type="text" value="<?=$atendimento['tipoExame'];?>">
                    </div>
                </fieldset>

                <fieldset class="bloco border">
                    <legend>Funcionário</legend>
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

                </fieldset>

                <div class="bloco border">
                    <div class="linha">
                        <p class="titulo">Risco Fisíco:</p>
                        <input type="text" value="<?=$atendimento['riscoFisico'];?>">
                    </div>

                    <div class="linha">
                        <p class="titulo">Risco Químico:</p>
                        <input type="text" value="<?=$atendimento['riscoQuimico'];?>">

                    </div>

                    <div class="linha">
                        <p class="titulo">Risco Biológico:</p>
                        <input type="text" value="<?=$atendimento['riscoBiologico'];?>">

                    </div>

                    <div class="linha">
                        <p class="titulo">Risco Ergonomico:</p>
                        <input type="text" value="<?=$atendimento['riscoErgonomico'];?>">

                    </div>

                    <div class="linha">
                        <p class="titulo">Risco Acidente:</p>
                        <input type="text" value="<?=$atendimento['riscoAcidente'];?>">

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
                        <input class="tituloExame" id="exame1" value="<?=$atendimento['exame1'];?>">
                        <input class="dataExame" id="dateExame1"
                        value="<?=$atendimento['dataExame1'] != '0001-01-01' ? date('d/m/Y', strtotime($atendimento['dataExame1'])) : '';?>">
                        </div>

                        <div class="linhaExame">
                        <input class="tituloExame" id="exame2" value="<?=$atendimento['exame2'];?>">
                        <input class="dataExame" id="dateExame2"
                        value="<?=$atendimento['dataExame2'] != '0001-01-01' ? date('d/m/Y', strtotime($atendimento['dataExame2'])) : '';?>">
                        </div>
        
                        <div class="linhaExame">
                        <input class="tituloExame" id="exame3" value="<?=$atendimento['exame3'];?>">
                        <input class="dataExame" id="dateExame3"
                        value="<?=$atendimento['dataExame3'] != '0001-01-01' ? date('d/m/Y', strtotime($atendimento['dataExame3'])) : '';?>">
                        </div>
        
                        <div class="linhaExame">
                        <input class="tituloExame" id="exame4" value="<?=$atendimento['exame4'];?>">
                        <input class="dataExame" id="dateExame4"
                        value="<?=$atendimento['dataExame4'] != '0001-01-01' ? date('d/m/Y', strtotime($atendimento['dataExame4'])) : '';?>">
                        </div>
        
                        <div class="linhaExame">
                        <input class="tituloExame" id="exame5" value="<?=$atendimento['exame5'];?>">
                        <input class="dataExame" id="dateExame5"
                        value="<?=$atendimento['dataExame5'] != '0001-01-01' ? date('d/m/Y', strtotime($atendimento['dataExame5'])) : '';?>">
                        </div>
        
                        <div class="linhaExame">
                        <input class="tituloExame" id="exame6" value="<?=$atendimento['exame6'];?>">
                        <input class="dataExame" id="dateExame6"
                        value="<?=$atendimento['dataExame6'] != '0001-01-01' ? date('d/m/Y', strtotime($atendimento['dataExame6'])) : '';?>">
                        </div>
        
                        <div class="linhaExame">
                        <input class="tituloExame" id="exame7" value="<?=$atendimento['exame7'];?>">
                        <input class="dataExame" id="dateExame7"
                        value="<?=$atendimento['dataExame7'] != '0001-01-01' ? date('d/m/Y', strtotime($atendimento['dataExame7'])) : '';?>">
                        </div>
        
                        <div class="linhaExame">
                        <input class="tituloExame" id="exame8" value="<?=$atendimento['exame8'];?>">
                        <input class="dataExame" id="dateExame8"
                        value="<?=$atendimento['dataExame8'] != '0001-01-01' ? date('d/m/Y', strtotime($atendimento['dataExame8'])) : '';?>">
                        </div>
                        
                        <div class="linhaExame">
                        <input class="tituloExame" id="exame9" value="<?=$atendimento['exame9'];?>">
                        <input class="dataExame" id="dateExame9"
                        value="<?=$atendimento['dataExame9'] != '0001-01-01' ? date('d/m/Y', strtotime($atendimento['dataExame9'])) : '';?>">
                        </div>
                    </div>

                    
                    <div class="colunaExameDireita">


                        <div class="linhaExame">
                        <input class="tituloExame" id="exame10" value="<?=$atendimento['exame10'];?>">
                        <input class="dataExame" id="dateExame10"
                        value="<?=$atendimento['dataExame10'] != '0001-01-01' ? date('d/m/Y', strtotime($atendimento['dataExame10'])) : '';?>">
                        </div>
        
                        <div class="linhaExame">
                        <input class="tituloExame" id="exame11" value="<?=$atendimento['exame11'];?>">
                        <input class="dataExame" id="dateExame11"
                        value="<?=$atendimento['dataExame11'] != '0001-01-01' ? date('d/m/Y', strtotime($atendimento['dataExame11'])) : '';?>">
                        </div>
        
                        <div class="linhaExame">
                        <input class="tituloExame" id="exame12" value="<?=$atendimento['exame12'];?>">
                        <input class="dataExame" id="dateExame12"
                        value="<?=$atendimento['dataExame12'] != '0001-01-01' ? date('d/m/Y', strtotime($atendimento['dataExame12'])) : '';?>">
                        </div>
        
                        <div class="linhaExame">
                        <input class="tituloExame" id="exame13" value="<?=$atendimento['exame13'];?>">
                        <input class="dataExame" id="dateExame13"
                        value="<?=$atendimento['dataExame13'] != '0001-01-01' ? date('d/m/Y', strtotime($atendimento['dataExame13'])) : '';?>">
                        </div>
        
                        <div class="linhaExame">
                        <input class="tituloExame" id="exame14" value="<?=$atendimento['exame14'];?>">
                        <input class="dataExame" id="dateExame14"
                        value="<?=$atendimento['dataExame14'] != '0001-01-01' ? date('d/m/Y', strtotime($atendimento['dataExame14'])) : '';?>">
                        </div>
        
                        <div class="linhaExame">
                        <input class="tituloExame" id="exame15" value="<?=$atendimento['exame15'];?>">
                        <input class="dataExame" id="dateExame15"
                        value="<?=$atendimento['dataExame5'] != '0001-01-01' ? date('d/m/Y', strtotime($atendimento['dataExame5'])) : '';?>">
                        </div>
        
                        <div class="linhaExame">
                        <input class="tituloExame" id="exame16" value="<?=$atendimento['exame16'];?>">
                        <input class="dataExame" id="dateExame16"
                        value="<?=$atendimento['dataExame16'] != '0001-01-01' ? date('d/m/Y', strtotime($atendimento['dataExame16'])) : '';?>">
                        </div>
        
                        <div class="linhaExame">
                        <input class="tituloExame" id="exame17" value="<?=$atendimento['exame17'];?>">
                        <input class="dataExame" id="dateExame17"
                        value="<?=$atendimento['dataExame17'] != '0001-01-01' ? date('d/m/Y', strtotime($atendimento['dataExame17'])) : '';?>">
                        </div>
        
                        <div class="linhaExame">
                        <input class="tituloExame" id="exame18" value="<?=$atendimento['exame18'];?>">
                        <input class="dataExame" id="dateExame18"
                        value="<?=$atendimento['dataExame18'] != '0001-01-01' ? date('d/m/Y', strtotime($atendimento['dataExame18'])) : '';?>">
                        </div>
                    </div>
                </div>

                <div class="bloco tb-aptidao border">
                    <p>Atesto que o(a) funcionário(a), acima qualificado(a), foi clinicamente examinado(a), nesta data, sendo constado que está:</p>
                    <br/>
                    <input id="aptidao" value="<?=$atendimento['aptidao'];?>" class="aptidao">
                    <input type="text" value="validade de 1 ano">
                </div>

                <div class="bloco tb-aptidao border">
                    <p>Aptidão especifica:</p>
                    <br/>
                    <input id="aptidaoAltura" value="<?=$atendimento['aptidaoAltura'];?>" class="aptidao">
                    <br/>
                    <input id="aptidaoConfinado" value="<?=$atendimento['aptidaoConfinado'];?>" class="aptidao">
                    <br/>
                    <input id="aptidaoAlimentos" value="<?=$atendimento['aptidaoAlimentos'];?>" class="aptidao">

                </div>


                <div class="bloco border">
                    <div class="linha">
                        <p class="titulo">Data:</p>
                        <input class="titulo"
                        value="<?=$atendimento['dataAtendimento'] != '0001-01-01' ? date('d/m/Y', strtotime($atendimento['dataAtendimento'])) : '';?>">
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
                    <input id="medicoResponsavel" value="<?=$atendimento['medicoResponsavel'];?>">
                </div>

                <div class="bloco tb-observacao border">
                    <div class="linha">
                        <p class="titulo">Obs:</p>
                        <input class="titulo" id="observacao" value="<?=$atendimento['observacao'];?>">

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
</html>
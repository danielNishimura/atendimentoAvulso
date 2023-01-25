<?php
  class AtendimentoLista{
    public function getAtendimentoLista() {
      global $pdo;

      $array = array();
      $sql = $pdo->query("SELECT * FROM atendimentos");
      $sql->execute();

      if($sql->rowCount() > 0) {
        $array = $sql->fetchAll();
      }
      return $array;
    }

    ###### para o 
    public function getAtendimento($id) {
      global $pdo;
      $array =array();

      $sql = $pdo->prepare("SELECT * FROM atendimentos WHERE id = :id");
      $sql->bindValue(":id", $id);
      $sql->execute();

      if($sql->rowCount() > 0) {
        $array = $sql->fetch();
      }

      return $array;
    }

    ####### para o ASO
    public function buscaAtendimento($id) {
      global $pdo;
      $array =array();

      $sql = $pdo->prepare("SELECT * FROM atendimentos WHERE id = :id");
      $sql->bindValue(":id", $id);
      $sql->execute();

      if($sql->rowCount() > 0) {
        $array = $sql->fetch();
      }

      return $array;
    }


    ###### ára o excluir
    public function excluirAtendimento($id) {
      global $pdo;

      $sql = $pdo->prepare("DELETE FROM atendimentos WHERE id = :id");
      $sql->bindValue(":id", $id);
      $sql->execute();
    }

    public function editAtendimento($cnpj, $razaoSocial, $nomeFantasia, $funcionario, $cpf, $nascimento, $cargo, $dataAtendimento, $tipoExame, $riscoFisico, $riscoQuimico, $riscoBiologico, $riscoErgonomico, $riscoAcidente, $exame1, $dataExame1, $exame2, $dataExame2, $exame3, $dataExame3, $exame4, $dataExame4, $exame5, $dataExame5, $exame6, $dataExame6, $exame7, $dataExame7, $exame8, $dataExame8, $exame9, $dataExame9, $exame10, $dataExame10, $exame11, $dataExame11, $exame12, $dataExame12, $exame13, $dataExame13, $exame14, $dataExame14, $exame15, $dataExame15, $exame16, $dataExame16, $exame17, $dataExame17, $exame18, $dataExame18, $aptidao, $aptidaoAltura, $aptidaoConfinado, $aptidaoAlimentos, $medicoResponsavel, $observacao, $convenio, $id) {

      global $pdo;
      
      $sql = $pdo->prepare("UPDATE atendimentos SET cnpj = :cnpj, razaoSocial = :razaoSocial, nomeFantasia =:nomeFantasia, funcionario = :funcionario, cpf = :cpf, nascimento = :nascimento, cargo = :cargo, dataAtendimento =:dataAtendimento, tipoExame = :tipoExame, riscoFisico = :riscoFisico, riscoQuimico = :riscoQuimico, riscoBiologico =:riscoBiologico, riscoErgonomico = :riscoErgonomico, riscoAcidente = :riscoAcidente, exame1 = :exame1, dataExame1 =:dataExame1, exame2 = :exame2, dataExame2 = :dataExame2, exame3 = :exame3, dataExame3 = :dataExame3, exame4 = :exame4,dataExame4 = :dataExame4, exame5 = :exame5, dataExame5 = :dataExame5, exame6 = :exame6, dataExame6 = :dataExame6, exame7= :exame7, dataExame7 = :dataExame7, exame8 = :exame8, dataExame8 = :dataExame8, exame9 = :exame9, dataExame9 =:dataExame9, exame10 = :exame10, dataExame10 = :dataExame10, exame11 = :exame11, dataExame11 = :dataExame11, exame12 =:exame12, dataExame12 = :dataExame12, exame13 = :exame13, dataExame13 = :dataExame13, exame14 = :exame14, dataExame14 =:dataExame14, exame15 = :exame15, dataExame15 = :dataExame15, exame16 = :exame16, dataExame16 = :dataExame16, exame17 =:exame17, dataExame17 = :dataExame17, exame18 = :exame18, dataExame18 = :dataExame18, aptidao = :aptidao, aptidaoAltura= :aptidaoAltura, aptidaoConfinado = :aptidaoConfinado, aptidaoAlimentos = :aptidaoAlimentos, medicoResponsavel =:medicoResponsavel, observacao = :observacao, convenio = :convenio WHERE id = :id");
            $sql->bindValue(':cnpj', $cnpj);
            $sql->bindValue(':razaoSocial', $razaoSocial);
            $sql->bindValue(':nomeFantasia', $nomeFantasia);
            $sql->bindValue(':funcionario', $funcionario);
            $sql->bindValue(':cpf', $cpf);
            $sql->bindValue(':nascimento', $nascimento);
            $sql->bindValue(':cargo', $cargo);
            $sql->bindValue(':dataAtendimento', $dataAtendimento);
            $sql->bindValue(':tipoExame', $tipoExame);
            $sql->bindValue(':riscoFisico', $riscoFisico);
            $sql->bindValue(':riscoQuimico', $riscoQuimico);
            $sql->bindValue(':riscoBiologico', $riscoBiologico);
            $sql->bindValue(':riscoErgonomico', $riscoErgonomico);
            $sql->bindValue(':riscoAcidente', $riscoAcidente);
            $sql->bindValue(':exame1', $exame1);
            $sql->bindValue(':dataExame1', $dataExame1);
            $sql->bindValue(':exame2', $exame2);
            $sql->bindValue(':dataExame2', $dataExame2);
            $sql->bindValue(':exame3', $exame3);
            $sql->bindValue(':dataExame3', $dataExame3);
            $sql->bindValue(':exame4', $exame4);
            $sql->bindValue(':dataExame4', $dataExame4);
            $sql->bindValue(':exame5', $exame5);
            $sql->bindValue(':dataExame5', $dataExame5);
            $sql->bindValue(':exame6', $exame6);
            $sql->bindValue(':dataExame6', $dataExame6);
            $sql->bindValue(':exame7', $exame7);
            $sql->bindValue(':dataExame7', $dataExame7);
            $sql->bindValue(':exame8', $exame8);
            $sql->bindValue(':dataExame8', $dataExame8);
            $sql->bindValue(':exame9', $exame9);
            $sql->bindValue(':dataExame9', $dataExame9);
            $sql->bindValue(':exame10', $exame10);
            $sql->bindValue(':dataExame10', $dataExame10);
            $sql->bindValue(':exame11', $exame11);
            $sql->bindValue(':dataExame11', $dataExame11);
            $sql->bindValue(':exame12', $exame12);
            $sql->bindValue(':dataExame12', $dataExame12);
            $sql->bindValue(':exame13', $exame13);
            $sql->bindValue(':dataExame13', $dataExame13);
            $sql->bindValue(':exame14', $exame14);
            $sql->bindValue(':dataExame14', $dataExame14);
            $sql->bindValue(':exame15', $exame15);
            $sql->bindValue(':dataExame15', $dataExame15);
            $sql->bindValue(':exame16', $exame16);
            $sql->bindValue(':dataExame16', $dataExame16);
            $sql->bindValue(':exame17', $exame17);
            $sql->bindValue(':dataExame17', $dataExame17);
            $sql->bindValue(':exame18', $exame18);
            $sql->bindValue(':dataExame18', $dataExame18);
            $sql->bindValue(':aptidao', $aptidao);
            $sql->bindValue(':aptidaoAltura', $aptidaoAltura);
            $sql->bindValue(':aptidaoConfinado', $aptidaoConfinado);
            $sql->bindValue(':aptidaoAlimentos', $aptidaoAlimentos);
            $sql->bindValue(':medicoResponsavel', $medicoResponsavel);
            $sql->bindValue(':observacao', $observacao);
            $sql->bindValue(':convenio', $convenio);
            $sql->bindValue(':id', $id);
            $sql->execute();
      }

  }
?>
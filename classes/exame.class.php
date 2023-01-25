<?php

      class AddExame {
            public function cadastrar($nome, $valor) {
      
            global $pdo;
      
            $sql = $pdo->prepare("INSERT INTO exame SET nome = :nome, valor = :valor");
                  $sql->bindValue(':nome', $nome);
                  $sql->bindValue(':valor', $valor);
                  $sql->execute();
            }
      
      
            public function editExame($nome, $valor, $id) {
      
            global $pdo;
            
            $sql = $pdo->prepare("UPDATE exame SET nome = :nome, valor = :valor WHERE id = :id");
                  $sql->bindValue(':nome', $nome);
                  $sql->bindValue(':valor', $valor);
                  $sql->bindValue(':id', $id);
                  $sql->execute();
            }

            
            public function excluirExame($id) {
                  global $pdo;

                  $sql = $pdo->prepare("DELETE FROM exame WHERE id = :id");
                  $sql->bindValue(":id", $id);
                  $sql->execute();
            }

      }

      class ExameLista{
            public function getExameLista() {
              global $pdo;
        
              $array = array();
              $sql = $pdo->query("SELECT * FROM exame");
              $sql->execute();
        
              if($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
              }
              return $array;
            }
      }


      class ValorExame{
            public function getValorExame() {
              global $pdo;
        
              $array = array();
              $sql = $pdo->query("SELECT * FROM exame");
              $sql->execute();
        
              if($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
              }
              return $array;
              echo json_encode($array);
            }
      }

      class ExameSelect{
            
            public function getExameSelect() {
                  global $pdo;
                  
                  $valores = $pdo->query("SELECT * FROM exame");
                  foreach($valores as $valor) {
                    ?>
                     <option value="<?php echo $valor['nome']?>"> <?php echo $valor['nome']?></option>
                    <?php
                  }
            }
      }
  
?>
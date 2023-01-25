
<?php require 'config.php'; ?>
<?php require 'pages/asoHeader.php'; ?>

<div>
<?php
            global $pdo;
    
            $array = array();
            $sql = $pdo->query("SELECT * FROM exame");
            $sql->execute();
            
                $array = $sql->fetchAll(PDO::FETCH_ASSOC);

                foreach ($array as $linha) {
                    print_r($linha['nome']);
                    echo "\n";
                }

                foreach ($array as $linha) {
                    print_r($linha['valor']);
                    echo "\n";
                }

?>        
</div>
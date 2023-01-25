<?php
session_start();

global $pdo;
try {
	$pdo = new \PDO('mysql:dbname=atendimento;host=localhost', 'root', 'root');
	$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
	//echo "Conectado ao banco de dados com sucesso";
} catch(\PDOException $e) {
	echo "A CONEXÃO COM O BANCO DE DADOS FALHOU!!!: ".$e->getMessage();
	exit;
}
?>
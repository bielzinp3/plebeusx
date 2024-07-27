<?php

namespace App;

class Connection {

	public static function getDb() {
		try {

			$conn = new \PDO( // endereço do banco                                     //nome do banco
				"mysql:host=sql202.infinityfree.com;dbname=if0_36977232_twitter;charset=utf8",
				"if0_36977232",//usuário
				"KNaE0bSL99yG" //senha 
			);

			return $conn;

		} catch (\PDOException $e) {
			echo 'Erro ao conectar com o banco de dados: ' . $e->getMessage();
		}
	}
}

?>

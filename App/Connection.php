<?php

namespace App;

class Connection {

	public static function getDb() {
		try {

			$conn = new \PDO( // endereço do banco                                     //nome do banco
				"mysql:host=localhost:3306;dbname=alex0737_twitter;charset=utf8",
				"alex0737_alexandre_liberato",//usuário
				"Js-EBD5Mdxru" //senha 
			);

			return $conn;

		} catch (\PDOException $e) {
			echo 'Erro ao conectar com o banco de dados: ' . $e->getMessage();
		}
	}
}

?>

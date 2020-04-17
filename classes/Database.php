<?php

class Conexao {
	/**
	 * [$stmt hold de prepared statements conection]
	 * @var [type: string]
	 */
	public $stmt;

	/**
	 * [$connect the conection on database]
	 * @var [type]
	 */
	public $connect;

	/**
	 * [__construct inicializa a conexao com base de dados]
	 */
	public function __construct() {
		try {
			$this->connect = new PDO('mysql:host=localhost;dbname=database', 'root', '');
			// $this->connect->setAttribute();
		} catch (Exception $e) {
			echo "Message: " . $e->getMessage();
		}
	}

	/**
	 * [query function para preparar a query]
	 * @param  [type: string] $query [recebe a query a ser preparada]
	 * @return [type: string]        [retorna a query preparada pronta para passar os valores]
	 */
	public function query($query) {
		$this->stmt = $this->connect->prepare($query);
	}

	/**
	 * [bind passar os valores da query preparada]
	 * @param  [type] $param [parametro da query preparada i.e. :nome]
	 * @param  [type] $value [valor para armazenar na base dados i.e. $nome]
	 * @return [type]        [query com valores pronta para ser executada]
	 */
	public function bind($param, $value) {
		$this->stmt->bindParam($param, $value);
	}

	/**
	 * [executar executar a query ja pronta]
	 * @return [type] [true se a query executar sem erro]
	 */
	public function executar() {
		$this->stmt->execute();
	}

	/**
	 * [getRow contar numero de linhas afetadas]
	 * @return [type] [retorna valor com numero de linhas]
	 */
	public function getRow() {
		return $this->stmt->rowCount();
	}

	/**
	 * [singledata fazer fecth de dados]
	 * @return [type] [retorna uma unica linha da base dados]
	 */
	public function singleData() {
		$this->executar();
		return $this->stmt->fetch(PDO::FETCH_ASSOC);
	}

	/**
	 * [alldata fazer fetch de todos dados]
	 * @return [type] [retorna array com todos dados]
	 */
	public function allData() {
		$this->executar();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}

}
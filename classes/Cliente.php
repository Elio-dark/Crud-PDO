<?php
require_once 'Database.php';
require_once 'Validation.php';

class Cliente {
	public $db;
	public $vd;

	public function __construct() {
		$this->db = new Conexao;
		$this->vd = new Validation;
	}

	public function read($id) {
		$id = $this->vd->idadeCheck($_GET['id']);
		$query = "SELECT * FROM clientes WHERE id = :id";

		$this->db->query($query);
		$this->db->bind('id', $id);
		$this->db->executar();
		return $this->db->singleData();
	}

	public function readAll() {
		$query = "SELECT * FROM clientes";

		$this->db->query($query);
		$this->db->executar();
		return $this->db->allData();
	}

	public function create() {
		# code...
	}

	public function update($id) {
		# code...
	}

	public function delete($id) {
		$id = $this->vd->idadeCheck($id);
		$query = "DELETE FROM clientes WHERE id = :id";

		$this->db->query($query);
		$this->db->bind('id', $id);
		$this->db->executar();

		return $this->db->getRow();
	}

}
<?php

class Cliente {
    public $db;
    public $vd;

    public function __construct() {
        $this->db = new Conexao();
        $this->vd = new Validation();
    }

    public function create() {

    }

    public function read($id) {
        $id = $this->vd-idadeCheck($id);
        $query = "SELECT * FROM clientes WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->executar();

        return $this->db->singledata();
    }

    public function readAll() {

    }

    public function update() {

    }

    public function delete() {

    }
}
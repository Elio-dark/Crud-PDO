<?php 


class Login {
    public $user;
    public $pass;
    public $db;
    public $vd;


    public function __construct() {
        $this->db = new Conexao();
        $this->vd = new Validation();
    }

    public function clean() {
        $this->user = $this->user->vd->nomeCheck($_POST['user']);
        $this->user = $this->user->vd->nomeCheck($_POST['pass']);
    }

    public function login() {
        $this->clean();

        if (!empty($this->user) AND !empty($this->pass)) {
            
        }
    }
}
<?php
require_once "Usuario.php";

class Professor extends Usuario {
    private $disciplina;

    public function _construct($nome, $email, $disciplina) {
        parent::_construct($nome, $email);
        $this->disciplina = $disciplina;
    }
    public function getDiscplina() {
        return $this ->disciplina;
    }
    public function exibirInfo() {
        return parent::exibirInfo() . " | Disciplina {$this ->disciplina}";
    }

    public function darAula() {
        return "{$this->nome} está dando aula de {$this->disciplina}.";
    }
}
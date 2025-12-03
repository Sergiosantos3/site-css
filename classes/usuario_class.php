<?php
require_once __DIR__ . '/db_local.php';

class Usuario{
    public $id;
    public $nome;
    public $email;
    public $senha_hash;
    public $data_nascimento;
    public $nivel_libra;
    public $pontos_xp;
    public $data_cadastro;
    public $ultimo_login;
    public $ativo;


    public function Cadastar(){
        $sql = "INSERT INTO usuarios (nome, email, senha_hash, data_nascimento, nivel_libra)
        VALUES (?, ?, ?, ?, ?)";
        $banco = Banco::conectar(); //conectra com o banco de dados.
        $comando = $banco->prepare($sql);
        $comando->execute([
            $this->nome,
            $this->email,
            hash('sha256', $this->senha_hash),
            $this->data_nascimento,
            $this->nivel_libra
        ]);

    }
}
?>
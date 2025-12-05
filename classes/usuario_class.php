<?php
require_once('banco_class.php');

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


    public function Cadastrar(){
        $sql = "INSERT INTO usuarios (nome, email, senha_hash, data_nascimento, nivel_libra)
        VALUES (?, ?, ?, ?, ?)";
        $banco = Banco::conectar(); //conecta com o banco de dados.
        $comando = $banco->prepare($sql);
        $comando->execute([
            $this->nome,
            $this->email,
            hash('sha256', $this->senha_hash),
            $this->data_nascimento,
            $this->nivel_libra
        ]);
        Banco::desconectar();
        return $comando->rowCount();
        
    }

    public function Logar(){
        $sql = "SELECT * FROM USUARIOS WHERE email = ? and senha_hash = ?";
        $banco = Banco::conectar();
        $comando = $banco->prepare($sql);
        $comando->execute([
            $this->email,
            hash('sha256', $this->senha_hash)
        ]);
        $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
        Banco::desconectar();
        return $resultado;
    }
}
?>
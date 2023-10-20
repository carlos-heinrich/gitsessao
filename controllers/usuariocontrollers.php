<?php
require_once 'models/UsuarioModel.php';

class UsuarioController {
    private $usuarioModel;

    public function __construct($pdo) {
        $this->usuarioModel = new UsuarioModel($pdo);
    }

    public function criarUsuario($email, $senha, $usuario ) {
        $this->usuarioModel->criarUsuario($email, $senha, $usuario );
    }
    public function listarUsuarios() {
        return $this->UsuarioModel->listarUsuario();
    }

    public function exibirListaUsuarios() {
        $Usuario = $this->UsuarioModel->listarUsuarios();
        include 'views/Usuario/listar.php';
    }
}
?>
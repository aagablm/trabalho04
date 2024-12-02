<?php

namespace Classes;

class RegistroUsuarios {
    private static ?RegistroUsuarios $instance = null;
    private array $usuarios = [];

    private function __construct() {}

    public static function getInstance(): RegistroUsuarios {
        if (self::$instance === null) {
            self::$instance = new RegistroUsuarios();
        }
        return self::$instance;
    }

    public function adicionarUsuario(string $nome, string $email): void {
        $this->usuarios[] = ['nome' => $nome, 'email' => $email];
    }

    public function listarUsuarios(): array {
        return $this->usuarios;
    }
}

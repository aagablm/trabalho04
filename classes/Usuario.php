<?php

namespace Classes;

class Usuario {
    private string $nome;
    private string $email;
    private array $observadores = [];

    public function __construct(string $nome, string $email) {
        $this->nome = $nome;
        $this->email = $email;
    }

    public function adicionarObservador(Observador $observador): void {
        $this->observadores[] = $observador;
    }

    public function notificarObservadores(): void {
        foreach ($this->observadores as $observador) {
            $observador->atualizar($this);
        }
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getNome(): string {
        return $this->nome;
    }
}

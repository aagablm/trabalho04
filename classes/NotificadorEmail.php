<?php

namespace Classes;

interface Observador {
    public function atualizar(Usuario $usuario): void;
}

class NotificadorEmail implements Observador {
    public function atualizar(Usuario $usuario): void {
        echo "Notificação por E-mail enviada para {$usuario->getEmail()}\n";
    }
}

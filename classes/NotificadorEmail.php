<?php

namespace Classes;

interface Observador {
    public function atualizar(Usuario $usuario): void;
}

class NotificadorEmail implements Observador {
    public function atualizar(Usuario $usuario): void {
        echo "Notificação por E-mail enviada para {$usuario->getEmail()}\n";
        // Aqui você pode adicionar a lógica real de envio de e-mail, como o uso de mail() ou PHPMailer
    }
}

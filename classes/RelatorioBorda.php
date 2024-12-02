<?php

namespace Classes;

class RelatorioBorda extends RelatorioDecorator {
    public function gerar(): string {
        return "----\n" . $this->relatorio->gerar() . "\n----";
    }
}

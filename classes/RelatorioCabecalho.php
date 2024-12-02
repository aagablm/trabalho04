<?php

namespace Classes;

class RelatorioCabecalho extends RelatorioDecorator {
    public function gerar(): string {
        return "Cabeçalho do Relatório\n" . $this->relatorio->gerar();
    }
}

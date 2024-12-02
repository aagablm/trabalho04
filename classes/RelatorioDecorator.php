<?php

namespace Classes;

abstract class RelatorioDecorator implements Relatorio {
    protected Relatorio $relatorio;

    public function __construct(Relatorio $relatorio) {
        $this->relatorio = $relatorio;
    }

    public function gerar(): string {
        return $this->relatorio->gerar();
    }
}

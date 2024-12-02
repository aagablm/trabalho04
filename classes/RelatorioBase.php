<?php

namespace Classes;

class RelatorioBase implements Relatorio {
    public function gerar(): string {
        return "Conteúdo do Relatório";
    }
}

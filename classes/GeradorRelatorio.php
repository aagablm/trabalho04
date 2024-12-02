<?php

namespace Classes;

interface EstrategiaRelatorio {
    public function gerar(array $usuarios): string;
}

class RelatorioJSON implements EstrategiaRelatorio {
    public function gerar(array $usuarios): string {
        return json_encode($usuarios, JSON_PRETTY_PRINT);
    }
}

class RelatorioHTML implements EstrategiaRelatorio {
    public function gerar(array $usuarios): string {
        $html = "<ul>";
        foreach ($usuarios as $usuario) {
            $html .= "<li>{$usuario->nome} ({$usuario->email})</li>";
        }
        $html .= "</ul>";
        return $html;
    }
}

class GeradorRelatorio {
    private EstrategiaRelatorio $estrategia;

    public function definirEstrategia(EstrategiaRelatorio $estrategia): void {
        $this->estrategia = $estrategia;
    }

    public function gerarRelatorio(array $usuarios): string {
        return $this->estrategia->gerar($usuarios);
    }
}

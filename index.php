<?php

require_once __DIR__ . '/vendor/autoload.php';

use Classes\RegistroUsuarios;
use Classes\NotificadorEmail;
use Classes\Usuario;
use Classes\RelatorioBase;
use Classes\RelatorioBorda;
use Classes\RelatorioCabecalho;

$registro = RegistroUsuarios::getInstance();
$registro->adicionarUsuario("Ana Gabriela", "ana@email.com");
$registro->adicionarUsuario("João Silva", "joao@email.com");

$usuario1 = new Usuario("Ana Gabriela", "ana@email.com");
$usuario2 = new Usuario("João Silva", "joao@email.com");

$notificador = new NotificadorEmail();
$usuario1->adicionarObservador($notificador);
$usuario2->adicionarObservador($notificador);

$usuario1->notificarObservadores();
$usuario2->notificarObservadores();

$relatorio = new RelatorioBase();
$relatorioComBorda = new RelatorioBorda($relatorio);
$relatorioComCabecalhoEBorda = new RelatorioCabecalho($relatorioComBorda);

echo "\nRelatório Simples:\n" . $relatorio->gerar();
echo "\nRelatório com Borda:\n" . $relatorioComBorda->gerar();
echo "\nRelatório com Cabeçalho e Borda:\n" . $relatorioComCabecalhoEBorda->gerar();

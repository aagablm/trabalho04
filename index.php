<?php
require_once __DIR__ . '/vendor/autoload.php';

use Classes\RegistroUsuarios;
use Classes\NotificadorEmail;
use Classes\Usuario;
use Classes\RelatorioBase;
use Classes\RelatorioBorda;
use Classes\RelatorioCabecalho;

// Criando instâncias para os padrões Singleton, Observer e Decorator
$registro = RegistroUsuarios::getInstance();
$notificador = new NotificadorEmail();

// Verifica se o formulário de registro foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['nome']) && isset($_POST['email'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    // Cria o usuário
    $usuario = new Usuario($nome, $email);
    $usuario->adicionarObservador($notificador);

    // Registra o usuário e notifica
    $registro->adicionarUsuario($nome, $email);
    $usuario->notificarObservadores();
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Registro de Usuários</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .form-container { margin-bottom: 20px; }
        .users-list { margin-top: 20px; }
        table { width: 100%; border-collapse: collapse; }
        table, th, td { border: 1px solid black; }
        th, td { padding: 8px; text-align: left; }
        h1 { color: #4CAF50; }
    </style>
</head>
<body>
    <h1>Sistema de Registro de Usuários</h1>
    
    <!-- Formulário de registro -->
    <div class="form-container">
        <h2>Registrar Novo Usuário</h2>
        <form method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required><br><br>
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required><br><br>
            <button type="submit">Registrar</button>
        </form>
    </div>

    <!-- Lista de Usuários -->
    <div class="users-list">
        <h2>Usuários Registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>E-mail</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Exibe os usuários registrados
                $usuarios = $registro->listarUsuarios();
                foreach ($usuarios as $usuarioRegistrado) {
                    echo "<tr><td>" . htmlspecialchars($usuarioRegistrado['nome']) . "</td><td>" . htmlspecialchars($usuarioRegistrado['email']) . "</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Gerar Relatório -->
    <div class="report-section">
        <h2>Gerar Relatório</h2>
        <?php
        $relatorio = new RelatorioBase();
        $relatorioComBorda = new RelatorioBorda($relatorio);
        $relatorioComCabecalhoEBorda = new RelatorioCabecalho($relatorioComBorda);

        echo "<h3>Relatório Simples:</h3>" . $relatorio->gerar();
        echo "<h3>Relatório com Borda:</h3>" . $relatorioComBorda->gerar();
        echo "<h3>Relatório com Cabeçalho e Borda:</h3>" . $relatorioComCabecalhoEBorda->gerar();
        ?>
    </div>
</body>
</html>

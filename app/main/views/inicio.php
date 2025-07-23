<?php 
require_once('../models/sessions.php');
$session = new sessions();
$session->autenticar_session();
$session->tempo_session();

if(isset($_GET['sair'])){
    $session->quebra_session();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento - Escolha a Forma de Pagamento</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> <!-- Ícones FontAwesome -->
</head>
<body class="bg-gray-900 font-sans text-gray-200 min-h-screen flex flex-col">

    <header class="bg-black text-yellow-400 shadow-lg">
        <nav class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold">Banco Ouro</div>
            <div class="flex items-center space-x-4">
                <img src="https://api.dicebear.com/9.x/initials/svg?seed=<?= $_SESSION['nome'] ?>"
                alt="Foto de Perfil" class="w-10 h-10 rounded-full object-cover border-2 border-yellow-400">
                <span class="text-sm sm:text-base font-medium"><?= $_SESSION['nome'] ?? "erro" ?></span>
                <a href="inicio.php?sair" class="bg-yellow-500 text-gray-900 px-3 py-2 rounded-lg hover:bg-yellow-400 transition duration-300 text-sm font-semibold">Sair</a>
            </div>
        </nav>
    </header>
    <main class="container mx-auto px-4 py-8 flex-grow">
        <section class="text-center mb-12">
            <h1 class="text-3xl sm:text-4xl font-bold text-yellow-400 mb-4">Escolha a Forma de Pagamento</h1>
            <p class="text-base sm:text-lg text-gray-400 max-w-2xl mx-auto">Selecione a opção mais conveniente para realizar seu pagamento de forma rápida e segura.</p>
        </section>
        <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <a href="pays/pix.php" class="bg-gray-800 rounded-lg shadow-lg p-6 text-center hover:bg-gray-700 transition duration-300">
                <i class="fas fa-qrcode text-yellow-400 text-3xl mb-4"></i>
                <h2 class="text-xl font-semibold text-yellow-400 mb-2">PIX</h2>
                <p class="text-gray-300 text-sm">Pagamento instantâneo com QR Code ou chave.</p>
            </a>
            <a href="pays/boleto.php" class="bg-gray-800 rounded-lg shadow-lg p-6 text-center hover:bg-gray-700 transition duration-300">
                <i class="fas fa-barcode text-yellow-400 text-3xl mb-4"></i>
                <h2 class="text-xl font-semibold text-yellow-400 mb-2">Boleto</h2>
                <p class="text-gray-300 text-sm">Pague com boleto bancário em até 3 dias úteis.</p>
            </a>
            <a href="pays/cartao_credito.php" class="bg-gray-800 rounded-lg shadow-lg p-6 text-center hover:bg-gray-700 transition duration-300">
                <i class="fas fa-credit-card text-yellow-400 text-3xl mb-4"></i>
                <h2 class="text-xl font-semibold text-yellow-400 mb-2">Cartão de Crédito</h2>
                <p class="text-gray-300 text-sm">Pague em até 12x com seu cartão de crédito.</p>
            </a>
            <a href="pays/cartao_debito.php" class="bg-gray-800 rounded-lg shadow-lg p-6 text-center hover:bg-gray-700 transition duration-300">
                <i class="fas fa-money-check-alt text-yellow-400 text-3xl mb-4"></i>
                <h2 class="text-xl font-semibold text-yellow-400 mb-2">Cartão de Débito</h2>
                <p class="text-gray-300 text-sm">Pague diretamente com seu cartão de débito.</p>
            </a>
        </section>
    </main>
    <footer class="bg-black text-yellow-400 text-center py-4 mt-12">
        <p class="text-sm">Todos os direitos reservados © 2025</p>
    </footer>
</body>
</html>
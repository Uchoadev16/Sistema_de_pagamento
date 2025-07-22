<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erro de Conexão - Banco Ouro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> <!-- Ícones FontAwesome -->
</head>
<body class="bg-gray-900 font-sans text-gray-200 min-h-screen flex flex-col">
    <header class="bg-black text-yellow-400 shadow-lg">
        <nav class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold">Banco Ouro</div>
            <div class="flex items-center space-x-4">
                <a href="../index.php" class="bg-yellow-500 text-gray-900 px-3 py-2 rounded-lg hover:bg-yellow-400 transition duration-300 text-sm font-semibold">Voltar à Página Inicial</a>
            </div>
        </nav>
    </header>
    <main class="container mx-auto px-4 py-8 flex-grow flex items-center justify-center">
        <section class="text-center max-w-md">
            <i class="fas fa-database text-yellow-400 text-5xl mb-4"></i>
            <h1 class="text-3xl sm:text-4xl font-bold text-yellow-400 mb-4">Erro de Conexão com o Banco de Dados</h1>
            <?php session_start(); if (isset($_SESSION['message'])): ?>
                <div class="mb-4 p-3 rounded bg-red-600 text-white text-sm">
                    <?php echo htmlspecialchars($_SESSION['message']['text']); ?>
                    <?php unset($_SESSION['message']); ?>
                </div>
            <?php else: ?>
                <p class="text-base sm:text-lg text-gray-400 mb-6">Não foi possível conectar ao banco de dados. Tente novamente mais tarde.</p>
            <?php endif; ?>
            <a href="../index.php" class="inline-block bg-yellow-500 text-gray-900 px-6 py-3 rounded-lg hover:bg-yellow-400 transition duration-300 text-sm sm:text-base font-semibold">Tentar Novamente</a>
        </section>
    </main>
    <footer class="bg-black text-yellow-400 text-center py-4">
        <p class="text-sm">Todos os direitos reservados © 2025</p>
    </footer>
</body>
</html>
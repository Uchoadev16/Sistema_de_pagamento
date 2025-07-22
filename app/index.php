<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Pagamentos - Banco</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 font-sans text-gray-200 min-h-screen flex flex-col">
    <header class="bg-black text-yellow-400 shadow-lg">
        <nav class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold">Banco Ouro</div>
            <ul class="flex flex-col sm:flex-row sm:space-x-6 space-y-2 sm:space-y-0">
                <li><a href="./views/login.php" class="hover:text-yellow-300 transition duration-300">Login</a></li>
                <li><a href="./views/cadastro.php" class="hover:text-yellow-300 transition duration-300">Cadastra-se</a></li>
            </ul>
        </nav>
    </header>
    <main class="container mx-auto px-4 py-8 flex-grow">
        <section class="text-center mb-12">
            <h1 class="text-3xl sm:text-4xl font-bold text-yellow-400 mb-4">Pagamentos</h1>
            <p class="text-base sm:text-lg text-gray-400 max-w-2xl mx-auto">Gerencie suas contas com segurança e praticidade, a qualquer hora e em qualquer dispositivo.</p>
        </section>
        <section class="bg-gray-800 rounded-lg shadow-lg p-6 sm:p-8 mb-12">
            <h2 class="text-xl sm:text-2xl font-semibold text-yellow-400 mb-6">Pagamento de Contas</h2>
            <p class="text-gray-300 mb-4">Pague suas contas de forma rápida e segura diretamente pelo nosso sistema. Escolha entre boletos, faturas de serviços ou transferências.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-lg font-semibold text-yellow-400 mb-2">Por que escolher nosso serviço?</h3>
                    <ul class="text-gray-300 space-y-2">
                        <li>✔ Pagamentos processados em tempo real</li>
                        <li>✔ Segurança com criptografia de ponta</li>
                        <li>✔ Suporte 24/7 para suas dúvidas</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-yellow-400 mb-2">Como funciona?</h3>
                    <p class="text-gray-300">Basta inserir os dados do boleto ou conta, confirmar o pagamento e receber a confirmação instantaneamente.</p>
                </div>
            </div>
            <div class="mt-6 text-center">
                <a href="#" class="inline-block bg-yellow-500 text-gray-900 px-6 py-3 rounded-lg hover:bg-yellow-400 transition duration-300 text-sm sm:text-base">Iniciar Pagamento</a>
            </div>
        </section>
    </main>
    <footer class="bg-black text-yellow-400 text-center py-4">
        <p class="text-sm">Todos os direitos reservados © 2025</p>
    </footer>
</body>
</html>
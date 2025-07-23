<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento - Cadastro</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 font-sans text-gray-200 min-h-screen flex items-center justify-center">
    <div class="container mx-auto px-4 py-8 max-w-md">
        <h1 class="text-3xl sm:text-4xl font-bold text-yellow-400 text-center mb-8">Cadastro</h1>
        <form action="../../controllers/controller_autenticacao.php" method="post" class="bg-gray-800 rounded-lg shadow-lg p-6 sm:p-8">
            <div class="mb-4">
                <label for="nome" class="block text-gray-300 mb-2 text-sm sm:text-base">Nome Completo</label>
                <input type="text" name="nome" id="nome" required placeholder="Digite seu nome" class="w-full p-3 rounded bg-gray-700 text-gray-200 border border-gray-600 focus:outline-none focus:border-yellow-400">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-300 mb-2 text-sm sm:text-base">E-mail</label>
                <input type="email" name="email" id="email" required placeholder="seu@email.com" class="w-full p-3 rounded bg-gray-700 text-gray-200 border border-gray-600 focus:outline-none focus:border-yellow-400">
            </div>
            <div class="mb-4">
                <label for="telefone" class="block text-gray-300 mb-2 text-sm sm:text-base">Telefone</label>
                <input type="tel" name="telefone" id="telefone" required placeholder="(xx) xxxxx-xxxx" class="w-full p-3 rounded bg-gray-700 text-gray-200 border border-gray-600 focus:outline-none focus:border-yellow-400">
            </div>
            <div class="mb-6">
                <label for="senha" class="block text-gray-300 mb-2 text-sm sm:text-base">Senha</label>
                <input type="password" name="senha" id="senha" required placeholder="Digite sua senha" class="w-full p-3 rounded bg-gray-700 text-gray-200 border border-gray-600 focus:outline-none focus:border-yellow-400">
            </div>
            <button type="submit" class="w-full bg-yellow-500 text-gray-900 px-4 py-3 rounded-lg hover:bg-yellow-400 transition duration-300 text-sm sm:text-base font-semibold">Cadastrar</button>
            <p class="text-gray-400 text-center mt-4 text-sm">Já tem login? <a href="./login.php" class="text-yellow-400 hover:text-yellow-300 transition duration-300">Faça login</a></p>
        </form>
    </div>
</body>
</html>
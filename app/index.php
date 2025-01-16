<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Pagamento</title>
</head>

<body>

    <h1>Sistema de pagamento</h1>
    <br>
    <form action="./controllers/pagamento.php" method="post">
        <h2>Escolha a forma de pagamento abaixo:</h2>

        <select name="opc" id="">
            <option value="debito">Cartão de débito</option>
            <option value="credito">Cartão de crédito</option>
            <option value="boleto">Boleto</option>
            <option value="pix">Pix</option>
        </select>

        <p>Escolha o valor que deseja mover:</p>
        <label for="valorjs">Valor</label>
        <input type="number" name="valor" id="valorjs">

        <input type="submit" value="Gerar pagamento">
    </form>
</body>

</html>
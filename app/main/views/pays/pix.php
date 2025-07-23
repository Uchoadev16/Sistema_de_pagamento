<?php 
require_once('../../models/sessions.php');
$session = new sessions();
$session->autenticar_session();
$session->tempo_session();
if(isset($_GET['sair'])){
    $session->quebra_session();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pix</title>
</head>
<body>
    
    <form action="" method="post">
        <input type="text" name="chave_pix">
        <input type="number" name="valor" id="">
        <button type="submit">gerar codigo</button>
    </form>

    <?php 
    if(isset($_POST['chave_pix']) && isset($_POST['chave_pix']) &&
    isset($_POST['valor']) && isset($_POST['valor'])){
    ?>

<p>qrcode</p>
<?php 
$dados = "";

// Usar um nome de arquivo único para cada QR Code
$arquivo_qrcode = __DIR__ . "/qrcode_" . $id_livro . "_" . $numero . ".png";

// Gerar o QR Code
QRcode::png($dados, $arquivo_qrcode, QR_ECLEVEL_M, 4);
?>
<img src="<?=$arquivo_qrcode?>" alt="">
<p>codigo</p>
    <?php }?>
</body>
</html>
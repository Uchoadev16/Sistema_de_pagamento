<?php 
require_once('../models/sessions.php');
$session = new sessions();
$session->autenticar_session();
$session->tempo_session();
if(isset($_GET['sair'])){
    $session->quebra_session();
}

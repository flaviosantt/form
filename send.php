<?php
require_once('../config/config.php');

header('Content-Type: application/json');

if (!empty($_POST['website'])) {
    echo json_encode(['status'=>'error','message'=>'Spam detectado.']);
    exit;
}

if (!hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
    echo json_encode(['status'=>'error','message'=>'Erro de segurança.']);
    exit;
}

$nome = htmlspecialchars(trim($_POST['nome']));
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$telefone = htmlspecialchars(trim($_POST['telefone']));
$assunto = htmlspecialchars(trim($_POST['assunto']));
$mensagem = htmlspecialchars(trim($_POST['mensagem']));

if (!$nome || !$email || !$assunto || !$mensagem) {
    echo json_encode(['status'=>'error','message'=>'Preencha todos os campos obrigatórios.']);
    exit;
}

echo json_encode(['status'=>'success','message'=>'Projeto pronto. Configure PHPMailer antes de usar.']);

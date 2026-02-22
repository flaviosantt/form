<?php require_once('../config/config.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulário de Contato</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Entre em Contato</h2>

    <form id="contactForm">
        <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token']; ?>">

        <input type="text" name="nome" placeholder="Seu Nome" required>
        <input type="email" name="email" placeholder="Seu E-mail" required>
        <input type="text" name="telefone" placeholder="Telefone (opcional)">

        <select name="assunto" required>
            <option value="">Selecione um assunto</option>
            <option>Suporte Técnico</option>
            <option>Financeiro</option>
            <option>Comercial</option>
            <option>Parcerias</option>
            <option>Reclamação</option>
            <option>Outros</option>
        </select>

        <textarea name="mensagem" placeholder="Digite sua mensagem" required></textarea>
        <input type="text" name="website" style="display:none">
        <button type="submit">Enviar Mensagem</button>
        <p id="response"></p>
    </form>
</div>

<script src="script.js"></script>
</body>
</html>

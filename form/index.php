<?php

// Verifica se o botão 'btnSubmit' foi clicado (ou seja, se o formulário foi enviado)
if (isset($_POST['btnSubmit'])) {
    // Armazena os valores recebidos do formulário nas variáveis $nome, $sobrenome e $idade
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $idade = $_POST['idade'];

    // Verifica se algum campo está vazio
    if ($nome == '' || $sobrenome == '' || $idade == '') {
        // Exibe uma mensagem se algum campo não estiver preenchido
        echo "Favor preencher todos os dados";
    } else {
        // Exibe os dados coletados do formulário
        echo "Nome: " . $nome . " " . $sobrenome;
        echo " Idade: " . $idade;
    }
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="/" method="post">
        <label>Nome</label>
        <input type="text" name="nome">
        <label>Sobrenome</label>
        <input type="text" name="sobrenome">
        <label>Idade</label>
        <input type="number" name="idade">
        <button name="btnSubmit" type="submit">Enviar</button>
    </form>
</body>
</html>








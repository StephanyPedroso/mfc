<?php

// Verifica se o botão 'btnSubmit' foi clicado (ou seja, se o formulário foi enviado)
if (isset($_POST['btnSubmit'])) {
    // Armazena os valores recebidos do formulário nas variáveis $num1, $num2 e $operacao
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacao = $_POST['operacao'];

    // Realiza o cálculo e exibe o resultado
    calcularResultado($num1, $num2, $operacao);
}

function calcularResultado($num1, $num2, $operacao) {
    // Verifica se algum campo está vazio
    if ($num1 === '' || $num2 === '' || $operacao === '') {
        // Exibe uma mensagem se algum campo não estiver preenchido
        echo "Favor preencher todos os campos";
    } else {
        // Realiza o cálculo de acordo com a operação escolhida
        switch ($operacao) {
            case 'soma':
                $resultado = $num1 + $num2;
                break;
            case 'subtracao':
                $resultado = $num1 - $num2;
                break;
            case 'multiplicacao':
                $resultado = $num1 * $num2;
                break;
            case 'divisao':
                $resultado = ($num2 != 0) ? $num1 / $num2 : "Erro: Divisão por zero";
                break;
            default:
                $resultado = "Operação inválida";
        }

        // Exibe o resultado
        echo "Resultado: " . $resultado;
    }
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo Matemático</title>
</head>
<body>
    <h2>Calculadora Básica</h2>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <label>Número 1</label>
        <input type="number" name="num1" required>
        
        <label>Operação</label>
        <select name="operacao" required>
            <option value="soma">Soma (+)</option>
            <option value="subtracao">Subtração (−)</option>
            <option value="multiplicacao">Multiplicação (*)</option>
            <option value="divisao">Divisão (/)</option>
        </select>
        
        <label>Número 2</label>
        <input type="number" name="num2" required>
        
        <button name="btnSubmit" type="submit">Calcular</button>
    </form>
</body>
</html>

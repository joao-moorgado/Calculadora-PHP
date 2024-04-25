<?php

$historic = [];

if (isset($_POST['calculate'])) {
    // Receber valores do formulário
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    // Validar dados e realizar operação
    if (validarDados($num1, $num2, $operation)) {
        $result = calculate($num1, $num2, $operation);

        $historic[] = array(
            'num1' => $num1,
            'num2' => $num2,
            'operation' => $operation,
            'result' => $result
        );
    } else {
        $erro = 'Dados inválidos.';
    }
}

function validarDados($num1, $num2, $operation) {
    // Validar se os valores são números
    if (!is_numeric($num1) || !is_numeric($num2)) {
        return false;
    }

    $operacoesValidas = array('+', '-', '*', '/', '!', '^');
    return in_array($operation, $operacoesValidas);
}

function calculate($num1, $num2, $operation) {
    if ($operation == '+')
        return $num1 + $num2;
    if ($operation == '-')
        return $num1 - $num2;
    if ($operation == '*')
        return $num1 * $num2;
    if ($operation == '/') {
        if ($num2 == 0) {
            return 'Divisão por zero!';
        } else {
        return $num1 / $num2;
        }
    }
    if ($operation == '!') 
        return fatorial($num1);
    if ($operation == '^')
        return pow($num1, $num2);
}

?>
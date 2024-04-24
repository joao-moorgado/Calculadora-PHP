<?php

function calcular($num1, $num2, $operacao) {
    switch ($operacao) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            if ($num2 == 0) {
                return "Erro: Divisão por zero!";
            } else {
                return $num1 / $num2;
            }
        case '!':
            return fatorial($num1);
        case '^':
            return pow($num1, $num2);
        default:
            return "Operação inválida!";
    }
}

function fatorial($num) {
    if ($num == 0) {
        return 1;
    } else {
        return $num * fatorial($num - 1);
    }
}

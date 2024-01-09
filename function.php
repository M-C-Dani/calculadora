<?php
/**
 * Suma dos números.
 *
 * @param int|float|null $num1 Primer número.
 * @param int|float|null $num2 Segundo número.
 *
 * @return int|float|string Resultado de la suma o mensaje de error.
 */
function sumar(?float $num1, ?float $num2): int|float|string {
    if (is_numeric($num1) && is_numeric($num2)) {
        return $num1 + $num2;
    } else {
        return "$num1 + $num2 no se puede hacer";
    }
}

/**
 * Resta dos números.
 *
 * @param int|float|null $num1 Primer número.
 * @param int|float|null $num2 Segundo número.
 *
 * @return int|float|string Resultado de la resta o mensaje de error.
 */
function restar(?float $num1, ?float $num2): int|float|string {
    if (is_numeric($num1) && is_numeric($num2)) {
        return $num1 - $num2;
    } else {
        return "$num1 - $num2 no se puede hacer";
    }
}

/**
 * Multiplica dos números.
 *
 * @param int|float|null $num1 Primer número.
 * @param int|float|null $num2 Segundo número.
 *
 * @return int|float|string Resultado de la multiplicación o mensaje de error.
 */
function multiplicar(?float $num1, ?float $num2): int|float|string {
    if (is_numeric($num1) && is_numeric($num2)) {
        return $num1 * $num2;
    } else {
        return "$num1 * $num2 no se puede hacer";
    }
}

/**
 * Divide dos números.
 *
 * @param int|float|null $num1 Dividendo.
 * @param int|float|null $num2 Divisor.
 *
 * @return int|float|string Resultado de la división o mensaje de error.
 */
function dividir(?float $num1, ?float $num2): int|float|string {
    if (is_numeric($num1) && is_numeric($num2)) {
        if ($num2 != 0) {
            return $num1 / $num2;
        } else {
            return "No se puede dividir por cero";
        }
    } else {
        return "$num1 / $num2 no se puede hacer";
    }
}
?>
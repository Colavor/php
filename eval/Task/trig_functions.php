<?php
function calculateTrigFunction($name, $value) {
    $radians = deg2rad($value);

    switch ($name) {
        case 'sin':
            return sin($radians);
        case 'cos':
            return cos($radians);
        case 'tan':
            return tan($radians);
        case 'cot':
            $tan = tan($radians);
            if ($tan == 0) return "деление на ноль";
            return 1 / $tan;
        case 'sec':
            $cos = cos($radians);
            if ($cos == 0) return "деление на ноль";
            return 1 / $cos;
        case 'csc':
            $sin = sin($radians);
            if ($sin == 0) return "деление на ноль";
            return 1 / $sin;
        default:
            return "неизвестная функция";
    }
}

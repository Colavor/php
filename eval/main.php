<?php
require_once __DIR__ . '/Task/trig_functions.php';

$filePath = __DIR__ . '/Task/expression.txt';

if (!file_exists($filePath)) {
    echo "Ошибка: файл expression.txt не найден";
    exit;
}

$expression = trim(file_get_contents($filePath));

if (!$expression) {
    echo "Ошибка: выражение пустое";
    exit;
}


if (preg_match('/^([\d\.]+)\s*\/\s*(\w+)\(([\d\.]+)\)$/i', $expression, $matches)) {
    $number = (float)$matches[1];
    $functionName = strtolower($matches[2]);
    $param = (float)$matches[3];

    $functionResult = calculateTrigFunction($functionName, $param);

    if (is_string($functionResult)) {
        echo "Ошибка: $functionResult";
        exit;
    }

    if ($functionResult == 0) {
        echo "Ошибка: деление на ноль";
        exit;
    }

    $finalResult = $number / $functionResult;
    echo $finalResult;
} else {
    echo "Ошибка: неправильный формат выражения";
}

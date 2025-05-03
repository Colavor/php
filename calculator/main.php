<?php
function calculateExpr($expr) {
    $expr = str_replace(' ', '', $expr);
    
    if (!preg_match('/^[\d\+\-\*\/\(\)\.]+$/', $expr)) {
        return "Ошибка: недопустимые символы";
    }

    $balance = 0;
    foreach (str_split($expr) as $char) {
        if ($char === '(') $balance++;
        if ($char === ')') $balance--;
        if ($balance < 0) return "Ошибка скобок";
    }
    if ($balance !== 0) return "Ошибка скобок";

    try {
        return evaluateExpression($expr);
    } catch (Exception $e) {
        return "Ошибка вычисления";
    }
}

function evaluateExpression($expr) {
    $expr = str_replace(' ', '', $expr);
    
    while (($start = strrpos($expr, '(')) !== false) {
        $end = strpos($expr, ')', $start);
        if ($end === false) throw new Exception("Unbalanced brackets");
        
        $inner = substr($expr, $start + 1, $end - $start - 1);
        $result = evaluateExpression($inner);
        $expr = substr_replace($expr, $result, $start, $end - $start + 1);
    }
    
    return calculateBasic($expr);
}

function calculateBasic($expr) {
    while (preg_match('/(\d+\.?\d*)([\/\*])(\d+\.?\d*)/', $expr, $matches)) {
        $left = (float)$matches[1];
        $op = $matches[2];
        $right = (float)$matches[3];
        
        if ($op === '*') {
            $result = $left * $right;
        } elseif ($op === '/' && $right != 0) {
            $result = $left / $right;
        } else {
            return "Ошибка";
        }
        
        $expr = preg_replace('/\d+\.?\d*[\/\*]\d+\.?\d*/', (string)$result, $expr, 1);
    }
    
    while (preg_match('/(^|-?\d+\.?\d*)([+-])(\d+\.?\d*)/', $expr, $matches)) {
        $left = (float)$matches[1];
        $op = $matches[2];
        $right = (float)$matches[3];
        
        if ($op === '+') {
            $result = $left + $right;
        } else {
            $result = $left - $right;
        }
        
        $expr = preg_replace('/-?\d+\.?\d*[+-]\d+\.?\d*/', (string)$result, $expr, 1);
    }
    
    $finalResult = (float)$expr;
    $finalResultStr = (string)$finalResult;

    if (stripos($finalResultStr, 'e') !== false) {
        return "Ошибка: слишком большое число";
    }

    return $finalResult;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $expr = $_POST['expression'] ?? '';
    $result = calculateExpr($expr);
    echo $result;
}
?>

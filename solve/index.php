<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Решение уравнения</title>
</head>
<body>
  <?php
    $equation = "22 * x = 220";
    $array = explode(" ", $equation);

    $first = $array[0];
    $operator = $array[1];
    $second = $array[2];
    $result = $array[4];

    $answer = '';

    switch ($operator) {
      case '*':
        $answer = intval($result) / intval($first);
        break;
      case '/':
        $answer = intval($first) / intval($result);
        break;
      case '+':
        $answer = intval($result) - intval($first);
        break;
      case '-':
        $answer = intval($first) - intval($result);
        break;
    }

    echo '<p>Ответ: ' . $answer . '</p>';
  ?>
</body>
</html>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Калькулятор</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="calculator">
    <input type="text" id="display" readonly>
    <div class="buttons">
      <?php
        $buttons = [
          '7', '8', '9', '/',
          '4', '5', '6', '*',
          '1', '2', '3', '-',
          '(', '0', ')', '+'
        ];
        foreach ($buttons as $btn) {
          echo "<button onclick=\"append('$btn')\">$btn</button>";
        }
      ?>
      <button onclick="backspace()">←</button>
      <button onclick="clearDisplay()">C</button>
      <button onclick="calculate()">=</button>
    </div>
  </div>
  <script src="main.js"></script>
</body>
</html>
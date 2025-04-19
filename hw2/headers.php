<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Заголовки</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <img src="mospolytech.jpg" alt="Логотип">
    <h1>Заголовки</h1>
  </header>

  <main>
    <?php
      $headers = get_headers("https://httpbin.org/post", 1);
      echo '<textarea readonly>';
      print_r($headers);
      echo '</textarea>';
    ?>
    <br>
    <a href="index.php">← Назад</a>
  </main>

  <footer>Самостоятельная работа</footer>
</body>
</html>

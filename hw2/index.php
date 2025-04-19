<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Форма</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <img src="/Mospolytech.jpg" alt="Логотип">
    <h1>Обратная связь</h1>
  </header>

  <main>
    <form action="https://httpbin.org/post" method="POST">
      <input type="text" name="name" placeholder="Имя" required><br>
      <input type="email" name="email" placeholder="Email" required><br>

      <select name="type">
        <option value="complaint">Жалоба</option>
        <option value="suggestion">Предложение</option>
        <option value="thanks">Благодарность</option>
      </select><br>

      <textarea name="message" placeholder="Сообщение" required></textarea><br>

      Ответ по:<br>
      <label><input type="checkbox" name="reply[]" value="sms"> SMS</label>
      <label><input type="checkbox" name="reply[]" value="email"> Email</label><br><br>

      <button type="submit">Отправить</button>
    </form>

    <a href="headers.php">→ Перейти ко 2 странице</a>
  </main>

  <footer>Самостоятельная работа</footer>
</body>
</html>

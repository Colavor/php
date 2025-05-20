<!-- Сделайте счетчик обновления страницы пользователем. Данные храните в сессии. Скрипт должен выводить на экран количество обновлений. При первом заходе на страницу он должен вывести сообщение о том, что вы еще не обновляли страницу. -->
<?php
session_start();
if (isset($_SESSION['count'])) {
    $_SESSION['count'] = $_SESSION['count'] + 1;

    echo "Вы обновили страницу " . $_SESSION['count'] . " раз(а).";
} else {
    $_SESSION['count'] = 0;
    echo "Вы ещё не обновляли эту страницу.";
}
?>

<!-- По заходу на страницу запишите в куку с именем test текст '123'. Затем обновите страницу и выведите содержимое этой куки на экран. -->
<?php
if (!isset($_COOKIE['test'])) {
    setcookie('test', '123', time() + 3600); 
    echo "Кука 'test' установлена. Обновите страницу, чтобы увидеть её значение.";
} else {
    echo "Значение куки 'test': " . $_COOKIE['test'];
}
?>

<!-- Удалите куку с именем test. -->
<?php
if (isset($_COOKIE['test'])) {
    setcookie('test', '', time() - 3600);
    echo "Кука 'test' удалена.";
} else {
    echo "Кука 'test' не найдена.";
}
?>

<!-- Сделайте счетчик посещения сайта посетителем. Каждый раз, заходя на сайт, он должен видеть надпись: 'Вы посетили наш сайт % раз!'. -->
<?php
if (isset($_COOKIE['visit_count'])) {
    $visit_count = $_COOKIE['visit_count'] + 1;
} else {
    $visit_count = 1;
}
setcookie('visit_count', $visit_count, time() + 365 * 24 * 60 * 60);
echo "Вы посетили наш сайт " . $visit_count . " раз(а)!";
?>

<!-- Спросите у пользователя email с помощью формы. Затем сделайте так, чтобы в другой форме (поля: имя, фамилия, пароль, email) при ее открытии поле email было автоматически заполнено. -->
<!-- первая страница -->
<?php
session_start(); 
if (isset($_POST['email'])) {
    $_SESSION['email'] = $_POST['email'];
    header("Location: step2_form.php");
    exit();
}
?>
<form method="post">
    <label for="email">Введите ваш email:</label><br>
    <input type="email" name="email" required><br><br>
    <input type="submit" value="Сохранить и перейти">
</form>

<!-- вторая страница -->
<?php
session_start();
$email_value = "";
if (isset($_SESSION['email'])) {
    $email_value = $_SESSION['email'];
}
?>

<form method="post" action="#">
    <label>Имя:</label><br>
    <input type="text" name="first_name"><br><br>

    <label>Фамилия:</label><br>
    <input type="text" name="last_name"><br><br>

    <label>Пароль:</label><br>
    <input type="password" name="password"><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" value="<?php echo htmlspecialchars($email_value); ?>"><br><br>

    <input type="submit" value="Отправить">
</form>


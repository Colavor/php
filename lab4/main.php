<!-- На карманы в самой регулярке Дана строка 'aae xxz 33a'. Найдите все места, где есть два одинаковых идущих подряд символа и замените их на '!'. -->
 <?php

$string = 'aae xxz 33a';

$pattern = '/(.{1})\1/';

$result = preg_replace($pattern, '!', $string);

echo "Исходная строка: " . $string . "\n";
echo "Измененная строка: " . $result . "\n";
?>

<!-- На \b, \B Дана строка 'xbx aca aea abba adca abea'. Напишите регулярку, которая вокруг каждого слова вставит '!' (получится '!xbx! !aca! !aea! !abba! !adca! !abea!'). -->
<?php

$string = 'xbx aca aea abba adca abea';

$pattern = '/\b/';

$result = preg_replace($pattern, '!', $string);

echo "Исходная строка: " . $string . "\n";
echo "Измененная строка: " . $result . "\n";
?>

<!-- На позитивный и негативный просмотр Дана строка со звездочками 'aaa * bbb ** eee * **'. Замените на '!' только одиночные звездочки, но не двойные. -->
<?php

$string = 'aaa * bbb ** eee * **';

$pattern = '/(?<!\*)\*(?!\*)/';


$result = preg_replace($pattern, '!', $string);

echo "Исходная строка: " . $string . "\n";
echo "Измененная строка: " . $result . "\n";
?>

<!-- Дана строка 'aa aba abba abbba abbbba abbbbba'. Напишите регулярку, которая найдет строки abba, abbba, abbbba и только их. -->
<?php

$string = 'aa aba abba abbba abbbba abbbbba';

$pattern = '/ab{2,4}a/';

$matches = [];

preg_match_all($pattern, $string, $matches);

echo "Исходная строка: " . $string . "\n";
echo "Найденные совпадения:\n";
foreach ($matches[0] as $match) {
    echo $match . "\n";
}
?>

<!-- На \s, \S, \w, \W, \d, \D Дана строка 'ave a#a a2a a$a a4a a5a a-a aca'. Напишите регулярку, которая заменит все пробелы на '!' -->
<?php

$string = 'ave a#a a2a a$a a4a a5a a-a aca';

$pattern = '/\s/';

$result = preg_replace($pattern, '!', $string);

echo "Исходная строка: " . $string . "\n";
echo "Измененная строка: " . $result . "\n";
?>
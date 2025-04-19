<!-- array_count_values. Дан массив с элементами 'a', 'b', 'c', 'b', 'a'. Подсчитайте сколько раз встречается каждая из букв. -->
<?php
$array = ['a', 'b', 'c', 'b', 'a'];
$counts = array_count_values($array);
echo "Результат подсчета:\n";
print_r($counts);
?>

<!-- array_product. Дан массив [1, 2, 3, 4, 5]. Найдите произведение (умножение) элементов данного массива.(вам понадобятся следующие функции: array_product.) -->
<?php
$array = [1, 2, 3, 4, 5];
$product = array_product($array);
echo "Массив: ";
print_r($array);
echo "\n";
echo "Произведение элементов массива: " . $product . "\n";
?>

<!-- array_replace. Дан массив ['a', 'b', 'c', 'd', 'e']. Поменяйте элемент с ключом 0 на '!', а элемент с ключом 3 - на '!!'. -->
<?php
$array = ['a', 'b', 'c', 'd', 'e'];
echo "Исходный массив:\n";
print_r($array);
echo "\n";
$replacements = [
    0 => '!',
    3 => '!!'
];
$newArray = array_replace($array, $replacements);
echo "Массив после замен:\n";
print_r($newArray);
?>

<!-- array_sum. Дан массив [1, 2, 3, 4, 5]. Найдите сумму элементов данного массива.(вам понадобятся следующие функции: array_sum) -->
<?php
$array = [1, 2, 3, 4, 5];
$sum = array_sum($array);
echo "Массив: ";
print_r($array);
echo "\n";
echo "Сумма элементов массива: " . $sum . "\n";
?>

<!-- Ассоциативные массивы. Дан массив $arr. С помощью цикла foreach выведите на экран столбец ключей и элементов в формате 'green - зеленый'. $arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой']; -->
<?php
$arr = ['green' => 'зеленый', 'red' => 'красный', 'blue' => 'голубой'];
echo "Ключи и элементы массива:\n";
foreach ($arr as $key => $value) {
    echo $key . ' - ' . $value . "\n";
}
?>
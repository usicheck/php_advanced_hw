<?php
//1. Напишіть скрипт PHP, який видаляє останнє слово з рядка.
//Зразок рядка: "The quick brown fox"
//Очікуваний результат: швидкий коричневий
echo (preg_replace('/\w*$/', '', 'The quick brown fox')) . PHP_EOL;

//2. Напишіть сценарій PHP, який видаляє пробіли з рядка.
//Зразок рядка: "The quick brown fox"
//Очікуваний результат: Thequick""brownfox
echo (preg_replace('/\s/', '', 'The quick brown fox')) . PHP_EOL;

//3. Напишіть сценарій PHP для видалення нечислових символів, крім коми та крапки.
//Зразок рядка: "$123,34.00A"
//Очікуваний результат: 12 334,00
echo (preg_replace('/[^\d.,]/', '', '$123,34.00A')) . PHP_EOL;
//4. Напишіть сценарій PHP для вилучення тексту (в дужках) із рядка.
//Зразки рядків: "The quick brown [fox]"
//Очікуваний результат: "fox"
(preg_match('/(?<=\[)[a-zA-Z]+?(?=])/', 'The quick brown [fox]', $matches)) . PHP_EOL;
var_dump($matches);

//5. Напишіть сценарій PHP, щоб видалити всі символи з рядка, крім a-z A-Z 0-9 або " ".
//Зразок рядка: abcde$ddfd @abcd )der]
//Очікуваний результат: abcdeddfd abcd der
echo (preg_replace('/[^a-zA-Z\d" ]/','','abcde$ddfd "@abcd" )der]')) . PHP_EOL;

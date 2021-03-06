<?php

/* 
3.  Объявить массив, в котором в качестве ключей будут использоваться названия 
    областей, а в качестве значений – массивы с названиями городов из 
    соответствующей области. 
  
    Вывести в цикле значения массива, чтобы результат был таким:
    
    Московская область:
    Москва, Зеленоград, Клин
    Ленинградская область:
    Санкт-Петербург, Всеволожск, Павловск, Кронштадт
    Рязанская область … (названия городов можно найти на maps.yandex.ru)
 */

$region = [
            "Московская область:"=>
              [
                "Москва", "Зеленоград", "Клин"
              ],
            "Ленинградская область:" =>
              [
                "Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"
              ],
            "Рязанская область:" =>
              [
                "Рязань", "Шацк", "Караблино"
              ]
          ];

//echo '<pre>';
//print_r($region);
//echo '</pre>';

foreach ($region as $key => $value) {
  
  echo "<b>$key</b><br>";
  $cities = "";
  
  foreach ($value as $innerValue) {
     $cities .= "$innerValue, ";
  }
  
  $cities = substr($cities, 0, strripos($cities, ","));
  echo "$cities<br>";
}

//Вариант2. Более эффективно без вложенного цикла
foreach ($region as $key => $value) {
  echo "<br><b>$key</b><br>". implode(", ", $value);
}
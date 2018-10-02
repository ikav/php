<?php

/* 
8.  Повторить третье задание, но вывести на экран только города, 
    начинающиеся с буквы «К».
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
    //либо if(mb_substr($innerValue, 0, 1) =='К')
    if(mb_stripos($innerValue, "К")===0){
     $cities .= "$innerValue, ";
    }
  }
  
  $cities = substr($cities, 0, strripos($cities, ","));
  echo "$cities<br>";
}

<?php

/*
7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате 
с правильными склонениями, например:
    - 22 часа 15 минут
    - 21 час 43 минуты
*/

function timeDeclination () {
  
  $hours = date("H");
  $minutes = date("i");
  
  switch ($hours) {
    case 1:
    case 21:
      $hours .= ' час ';
      break;
    case 2:
    case 3:
    case 4:
    case 22:
    case 23:
      $hours .= ' часа ';
      break;
    default: $hours .= ' часов ';
  }
  
   switch ($minutes) {
    case 1:
    case 21:
    case 31:
    case 41:
    case 51:
      $minutes .= ' минута ';
      break;
    case 2:
    case 3:
    case 4:
    case 22:
    case 23:
    case 24:
    case 32:
    case 33:
    case 34:
    case 42:
    case 43:
    case 44:
    case 52:
    case 53:
    case 54:
      $minutes .= ' минуты ';
      break;
    default: $minutes .= ' минут ';
  }
  
  return $hours . $minutes;
}

echo timeDeclination();

//Для поверки
//for ($i=0; $i<24; $i++) {
//  echo timeDeclination($i, 0);
//  echo '<br>';
//}
//
//echo '<hr>';
//
//for ($i=0; $i<60; $i++) {
//  echo timeDeclination(0, $i);
//  echo '<br>';
//}

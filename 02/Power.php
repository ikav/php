<?php

/*
 6. *С помощью рекурсии организовать функцию возведения числа в степень. 
 * Формат: 
 * function power($val, $pow), 
 * где $val – заданное число, $pow – степень.
 */

function power($val, $pow) {
  
  if($pow == 1){
    return $val;
  }
  elseif($pow == 0){
    return 1;
  }
  
  if($pow > 1) {
    return $val * power($val, $pow-1);
  }
  return $val;
}

echo power(5, 3);

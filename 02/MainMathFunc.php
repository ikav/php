<?php

/* 
3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.
Обязательно использовать оператор return.
*/

function summ($num1, $num2) {
  return $num1 + $num2;
}
function diff($num1, $num2) {
  return $num1 - $num2;
}
function mult($num1, $num2) {
  return $num1 * $num2;
}
function div($num1, $num2) {
  if($num2==0){
    echo "Делить на ноль нельзя!";
    return null;
  }
  return $num1 / $num2;
}

echo summ(5,3);
echo '<br>';
echo summ(5,-3);
echo '<br>';
echo diff(5,3);
echo '<br>';
echo mult(5,3);
echo '<br>';
echo div(5,3);
echo '<br>';
echo div(5,0);
echo '<hr>';
  
/* 4. Реализовать функцию с тремя параметрами: 
 function mathOperation($arg1, $arg2, $operation), 
 где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. 
 
 В зависимости от переданного значения операции выполнить одну из арифметических операций 
 (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).
 */

 function mathOperation($arg1, $arg2, $operation) {
   switch ($operation) {
     case "summ": 
       $res = summ($arg1,$arg2);
       break;
     case "diff": 
       $res = diff($arg1,$arg2);
       break;
     case "mult": 
       $res = mult($arg1,$arg2);
       break;
     case "div": 
       $res = div($arg1,$arg2);
       break;
     default:
       echo "$operation - неверное значение арифметической операции";
       $res = null;
   }
   return $res;
 }
 
 
 echo mathOperation(10, 12, "summ");
 echo '<br>';
 echo mathOperation(10, 12, "diff");
 echo '<br>';
 echo mathOperation(10, 12, "mult");
 echo '<br>';
 echo mathOperation(10, 5, "div");
 echo '<br>';
 echo mathOperation(10, 0, "div");
 echo '<br>';
 echo mathOperation(10, 0, "what");
 echo '<br>';

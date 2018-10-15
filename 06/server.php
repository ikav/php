<?php

$calculate = $_GET['calculate'];
$button = $_GET['button'];

if (!is_null($calculate)) {
  switch ($_GET['operation']){
    case "+" :
      $res = $_GET['firstField'] + $_GET['secondField'];
      break;
    case "-" :
      $res = $_GET['firstField'] - $_GET['secondField'];
      break;
    case "*" :
      $res = $_GET['firstField'] * $_GET['secondField'];
      break;
    case "/" :
      if ($_GET['secondField'] == 0) {
        echo 'Делить на ноль нельзя!<br>Введите число отличное от нуля!';
        $res = null;
        break;
      }
      $res = $_GET['firstField'] / $_GET['secondField'];
      break;
  }
  
  if (!is_null($res)) {
      $res =" = " . $res;
  }
} 
elseif (!is_null($button)) {
  switch ($button){
    case "+" :
      $res2 = $_GET['firstNum'] + $_GET['secondNum'];
      break;
    case "-" :
      $res2 = $_GET['firstNum'] - $_GET['secondNum'];
      break;
    case "*" :
      $res2 = $_GET['firstNum'] * $_GET['secondNum'];
      break;
    case "/" :
      if ($_GET['secondNum'] == 0) {
        echo 'Делить на ноль нельзя!<br>Введите число отличное от нуля!';
        $res2 = null;
        break;
      }
      $res2 = $_GET['firstNum'] / $_GET['secondNum'];
      break;
  }

  if (!is_null($res2)) {
      $res2 =" = " . $res2;
  }
}







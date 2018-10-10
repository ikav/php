<?php

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
//  echo $_GET['firstField'] . " " . $_GET['operation'] . " " . $_GET['secondField'] . " = " . $res; 
    echo " = $res";
}




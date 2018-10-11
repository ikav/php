<?php

switch ($_GET['operation']){
  case "+" :
    $selected_plus = 'selected';
    break;
  case "-" :
    $selected_minus = 'selected';
    break;
  case "*" :
    $selected_muliple = 'selected';
    break;
  case "/" :
    $selected_divided = 'selected';
    break;
  default :
    $selected_plus = 'selected';
}
    


<?php

switch ($_GET['operation']){
  case "+" :
    echo "<option selected value='+'>+</option>
    <option value='-'>-</option>
    <option value='*'>*</option>
    <option value='/'>/</option>";
    break;
  case "-" :
    echo "<option value='+'>+</option>
    <option selected value='-'>-</option>
    <option value='*'>*</option>
    <option value='/'>/</option>";
    break;
  case "*" :
    echo "<option value='+'>+</option>
    <option value='-'>-</option>
    <option selected value='*'>*</option>
    <option value='/'>/</option>";
    break;
  case "/" :
    echo "<option value='+'>+</option>
    <option value='-'>-</option>
    <option value='*'>*</option>
    <option selected value='/'>/</option>";
    break;
}
    


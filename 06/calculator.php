<?php
  include "server.php";
?>

<form>
  
  <h1>Калькулятор</h1>
  <p>Введите числа, выберите операцию и нажмите "Выполнить"</p>
  <input type="text" name="firstField" value="<?=$_GET['firstField']?>" style="width:100px">
  <select name="operation">
    <?php
      include_once 'options.php';
    ?>
    <option <?=$selected_plus?> value="+">+</option>
    <option <?=$selected_minus?> value="-">-</option>
    <option <?=$selected_muliple?> value="*">*</option>
    <option <?=$selected_divided?> value="/">/</option>
  </select>
  <input type="text" name="secondField" value="<?=$_GET['secondField']?>" style="width:100px">
  <?="$res"?>

  <p><input type="submit" name="calculate" value="Выполнить"></p>
  
  <hr>
  
  <!--Калькулятор с кнопками-->
  <p>Введите числа и выберите операцию. Сразу же получите результат</p>
  <input type="text" name="firstNum" value="<?=$_GET['firstNum']?>" style="width:100px">
  <input type="text" name="secondNum" value="<?=$_GET['secondNum']?>" style="width:100px">
  <?="$res2"?>
  <p>
    <input type="submit" name="button" value="+">
    <input type="submit" name="button" value="-">
    <input type="submit" name="button" value="*">
    <input type="submit" name="button" value="/">
  </p>
  
</form>
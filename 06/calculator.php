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
  <?php
    include_once "server.php";
  ?>
  <p><input type="submit" value="Выполнить"></p>
  
</form>
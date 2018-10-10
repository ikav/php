<form>
  
  <h1>Калькулятор</h1>
  <p>Введите числа, выберите операцию и нажмите "Выполнить"</p>
  <input type="text" name="firstField" value="<?=$_GET['firstField']?>" style="width:100px">
  <select name="operation">
<!--    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>-->
    <?php
      include_once 'options.php';
    ?>
  </select>
  <input type="text" name="secondField" value="<?=$_GET['secondField']?>" style="width:100px">
  <?php
    include_once "server.php";
  ?>
  <p><input type="submit" value="Выполнить"></p>
  
</form>
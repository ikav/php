<?php
  
  CONST SERVER = "localhost";
  $login = "root";
  $pwd = "";
  $db = "galary";
  
  $connect = mysqli_connect(SERVER, $login, $pwd, $db);
  
  if (!$connect) {
    echo "Невозможно установить соединение с базой данных<br>";
    echo "Код ошибки: " . mysqli_errno($connect) . "<br>";
    echo "Описание ошибки: " . mysqli_error($connect);
  }
  
?>


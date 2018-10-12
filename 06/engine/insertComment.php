<?php
//======================================
//Добавляем комментарий в базу данных
//======================================
include_once "/config/config.php";

if (!is_null($_POST['saveComment'])) {
  $sql = "INSERT INTO comments(author, comment, dateComment) VALUES (\"". htmlspecialchars($_POST['author']) . 
          "\", \"" . htmlspecialchars($_POST['comment']) . "\", \"" . date("Y.m.d") . "\")";
  
  if (mysqli_query($connect, $sql)) {
    echo 'Спасибо за Ваш комментарий! Он успешно добавлен.';
  } else {
    echo 'Во время добавления комментария в базу данных произошла ошибка!';
  }
}
?>

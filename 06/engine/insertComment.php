<?php
//======================================
//Добавляем комментарий в базу данных
//======================================

include_once "/config/config.php";

if (!is_null($_POST['saveComment'])) {
  $sql = "INSERT INTO comments(author, comment, dateComment) VALUES (\"". htmlspecialchars($_POST['author']) . 
          "\", \"" . htmlspecialchars($_POST['comment']) . "\", \"" . date("Y.m.d") . "\")";
  
  if (mysqli_query($connect, $sql)) {
//    $message = 'Спасибо за Ваш комментарий! Он успешно добавлен.';
    echo 'Спасибо за Ваш комментарий! Он успешно добавлен.';
  } else {
    $message = 'Во время добавления комментария в базу данных произошла ошибка!';
  }
}

?>

<?php
//=======================================
//Выводит все комментарии к  сайту
//=======================================
  include_once "/config/config.php";

  $sql = "select * from comments";
  $res = mysqli_query($connect, $sql);

  while($data = mysqli_fetch_assoc($res)){
    echo "<p><i>Автор: " . $data['author'] . ", " . $data['dateComment'] ."</i></p>";
    echo "<p>" . $data['comment'] . "</p><hr>";
  }

?>


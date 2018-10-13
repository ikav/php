<?php 
  if (!empty($_POST["saveComment"])) {
    header("Location: ".$_SERVER["REQUEST_URI"]);
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Комментарии</title>
</head>
<body>

  <h1>Комментарии к нашей работе</h1>

  <?php
    include_once "/engine/outputComments.php";
    include_once "/engine/insertComment.php";
  ?>

  <?=$message?>
  <form method="POST" action="comments.php">
    <h2>Оставьте свой комментарий</h2>
    <p><input placeholder="Скажите как Вас зовут" type="text" name="author" style="width: 250px" required=""></p>
    <textarea placeholder="Введите свой комментарий" name="comment" rows="10" cols="50" required=""></textarea>
    <p><input type="submit" name="saveComment" value="Сохранить"></p>
  </form>
  
</body>
</html>
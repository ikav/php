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
    include_once "/config/config.php";

    $sql = "select * from comments";
    $res = mysqli_query($connect, $sql);
    
    while($data = mysqli_fetch_assoc($res)){
      echo "<p><i>Автор: " . $data['author'] . ", " . $data['dateComment'] ."</i></p>";
      echo "<p>" . $data['comment'] . "</p><hr>";
    }

  ?>
  
  <form>
    <h2>Оставьте свой комментарий</h2>
    <p><input placeholder="Скажите как Вас зовут" type="text" name="author" style="width: 250px"></p>
    <textarea placeholder="Введите свой комментарий" name="comment" rows="10" cols="50"></textarea>
    <p><input type="submit" name="saveComment" value="Сохранить"></p>
  </form>
</body>
</html>

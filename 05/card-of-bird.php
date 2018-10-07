<?php
  include_once "/config/config.php";
  
  $sql = "select * from birds where id=".$_GET['id'];
  $res = mysqli_query($connect, $sql);
  if (mysqli_num_rows($res) > 0) : 
    $data = mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>
<html>
  <head>
    <title><?=$data['name']?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="public/css/style.css" rel="stylesheet" >
  </head>
  <body>
    <h2><?=$data['name']?></h2>
    <img src="<?=$data['url']?>" alt="<?=$data['description']?>">
    <p>Эту птичку уже посмотрели: <b><?=$data['numViews']?></b> раз</p>
  </body>
</html>

<?php
  else :
    echo 'Такой птички не найдено!';
  endif;
  
  mysqli_close($connect);
?>
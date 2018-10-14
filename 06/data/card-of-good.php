<?php
  include_once "/config/config.php";
  
  $sql = "select * from catalog where id=".$_GET['id'];
  $res = mysqli_query($connect, $sql);
  if (mysqli_num_rows($res) > 0) : 
    $data = mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>
<html>
  <head>
    <title><?=$data['title']?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="public/css/style.css" rel="stylesheet" >
  </head>
  <body>
    <div class="card-of-good">
      <h1 class="title"><?=$data['title']?></h1>
      <div class="img-with-descr">
        <div>
          <img class="image-of-good" src="<?=str_replace('-small', '', $data['url_img_small'])?>" alt="<?=$data['title']?>">
        </div>
        <div class="description">
          <?=$data['descr']?>
        </div>
      </div>
      <input class="order" type="submit" name="order" value="Заказать">
    </div>
  </body>
</html>

<?php
  else :
    echo 'Такой птички не найдено!';
  endif;
  
  mysqli_close($connect);
?>
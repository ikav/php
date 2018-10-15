<?php
//=======================================
//Выводит карточку товара
//=======================================
  include_once "config/config.php";

  $tpl = file_get_contents("templates/card-of-good.tpl");
  
  $sql = "select * from catalog where id=".$_GET['id'];
  $res = mysqli_query($connect, $sql);
  
  if (mysqli_num_rows($res) > 0) { 
    
    $data = mysqli_fetch_assoc($res);
    $title = $data['title'];
    $url_img = str_replace('-small', '', $data['url_img_small']);
    $description = $data['descr'];
  
    $pattern = array ('/{title}/', '/{url_img}/', '/{description}/');
    $replace = array ($title, $url_img, $description);

    echo preg_replace($pattern, $replace, $tpl);
    
  } else {
    echo 'Такой птички не найдено!';
  }
          
?>

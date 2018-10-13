<?php
//=======================================
//Выводит весь каталог из базы данных
//=======================================
  include_once "/config/config.php";

  $tpl = file_get_contents("templates/iconsOfGoods.tpl");
  
  $sql = "select * from catalog";
  $res = mysqli_query($connect, $sql);

  while($data = mysqli_fetch_assoc($res)){ 
    echo "<li class='product-item'>";
      echo "<div>" . $data['title'] . "</div>";
      echo "<p>";
        echo "<a href='card-of-good.php?id=" . $data['id'] . "' target='_blank'>";  
          echo "<img src='" . $data['url_img_small'] . "' alt='" . $data['descr'] . "'>";
        echo "</a>";
      echo "</p>";
      echo "<div> Цена: " . $data['price'] . " руб.</div>";
    echo "</li>";
  }

?>  
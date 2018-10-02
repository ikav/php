<!--6.  В имеющемся шаблоне сайта заменить статичное меню (ul - li) на генерируемое 
    через PHP. Необходимо представить пункты меню как элементы массива и 
    вывести их циклом. 
  
    Подумать, как можно реализовать меню с вложенными подменю? 
    Попробовать его реализовать.-->


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Динамическое меню</title>
</head>
<body>
  
<?php
  $menu = 
    [
      "Главная"=>[],
      "Компания"=> 
        [
          "Руководство",
          "Контакты",
          "Лицензии"
        ],
      "Каталог" => 
        [
          "Товары",
          "Программы",
          "Услуги"
        ],
      "Новости"=> 
        [
          "Последние новости",
          "Архив"
        ],
      "Спецпредложения" => 
        [
          "Горящие акции",
          "Архив акций"
        ],
      "Доставка"=>[]
    ];
    
  echo '<ul>';
  foreach ($menu as $key => $value) {
    echo "<li><a href='#'>$key</a></li>";
    
    echo '<ul>';
    //is_array() - определяет является ли переменная массивом
    foreach ($value as $innerValue) {
      echo "<li><a href='#'>$innerValue</a></li>";
    }
    echo '</ul>';
    
  }
  echo '</ul>';
  
?>

</body>
</html>





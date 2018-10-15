<!-- Шаблон карточка с описанием товара -->
<!DOCTYPE html>
<html>
  <head>
    <title>{title}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="public/css/style.css" rel="stylesheet" >
  </head>
  <body>
    <div class="card-of-good">
      <h1 class="title">{title}</h1>
      <div class="img-with-descr">
        <div>
          <img class="image-of-good" src="{url_img}" alt="{title}">
        </div>
        <div class="description">
          {description}
        </div>
      </div>
      <input class="order" type="submit" name="order" value="Заказать">
    </div>
  </body>
</html>


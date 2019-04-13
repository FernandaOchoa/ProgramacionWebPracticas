<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>FeedReader</title>
  </head>
  <body>
    <h1>Lector RSS</h1>
    <?php
    $newsfeed = "silverstone.xml";
    $show = "";
    if ($rss = @simplexml_load_file($newsfeed)) {
      foreach ($rss-> channel->item as $item) {
        $show .= "<h3>{$item->title}</h3>";
        $show .= "<p>{$item->description}</p>";
        $show .= "<div><a href='{$item->link}'>leer todo</a></div><hr>";
      }
      echo utf8_decode($show);
    } else {
      echo "<div>Error, no se pudo leer el archivo </div>";
    }
     ?>
  </body>
</html>

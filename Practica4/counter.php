<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Counter</title>
  </head>
  <body>
    <h1>Counter Sencillo</h1>
    <p>Cantidad de visitas:
      <b> <?php
      $file = fopen("counter.txt","w");
      session_start();
      $_SESSION['v'] = $_SESSION['v']+1;
      $count = $_SESSION['v'];
      fwrite($file,$count);
      $fi = file_get_contents("counter.txt");
      $count_read = "Esta pagina ha sido visitada: ".$fi." veces";
      echo $count_read;
       ?> </b></p>
  </body>
</html>

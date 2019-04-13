<?php
setcookie("check", 1);
if (isset($_POST['submit'])){
  setcookie("voted",1);
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Encuesta de Opinion</title>
  </head>
  <body>
    <h1> Encuesta </h1>
    <h3> ¿Que opinas de los nuevos tranvias de la ciudad de Barcelona?</h3>

    <!-- formulario -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <input type="radio" name="reply" value="0">
      Una idea excelente, los tranvia son rapidos y eficientes.<br>

      <input type="radio" name="reply" value="1">
      Me da igual, yo siempre voy en coche.<br>

      <input type="radio" name="reply" value="2">
      ¡Barcelona no necesita tranvias!
      <br><br>
      <?php
      if(empty($_POST['submit']) && empty($_COOKIE['voted'])) {
        //Mostrar el boton submit solo si el formulario todavia no
        // se ha enviado y el usuario no ha votado
        ?>
        <input name="submit" type="submit" value="vota!">
        <?php
      } else {
        echo "<p>Gracias por tu voto</p>\n";
        //Formulario enviado?, cookies activas? todavia no se ha votado?
        if (isset($_POST['reply'])&& isset($_COOKIE['check']) && empty($_COOKIE['voted'])) {
          //Guardar nombre de archivo en la variable
          $file = "results.txt";
          $fp = fopen($file, "r+");
          $vote = fread($fp,filesize($file));

          // Descomponer la string del archivo en array con coma como separador
          $arr_vote = explode(",",$vote);

          //Que valor se ha seleccionado en el formulario?
          //El recuento aumenta en 1
          $reply = $_POST['reply'];
          $arr_vote[$reply]++;

          //volver a montar la string
          $vote = implode(",",$arr_vote);
          rewind($fp);

          //escribir nueva string en el archivo
          fputs($fp, $vote);
          fclose($fp);
        }
      }
      ?>
    </form>
    <p>
      [<a href="results.php" target="_blank">ver resultados de la encuesta</a>]
    </p>
  </body>
</html>

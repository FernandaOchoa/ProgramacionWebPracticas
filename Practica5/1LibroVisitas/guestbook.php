<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Libro de Visitas</title>
  </head>
  <body>
    <h1>Libro de visitas</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
      <!--Comentario -->
      Tu comentario:<br>
      <textarea cols="55" rows="4" name="comment"></textarea><br>

      <!--Nombre -->
      Tu nombre: <br>
      <input type="text" name="name"><br>

      <!--email -->
      Tu email: <br>
      <input type="email" name="email"><br>

      <!-- publicar -->
      <input type="submit" value="Publicar">
    </form>

    <h3> Mostrar todos los comentarios</h3>

    <?php
    //Guarda el nombre del archivo en una variable
    $file = "guestbook.txt";

    //Variable comment definida, nombre e email estan vacios?
    if(isset($_POST['comment']) && $_POST['name'] !="" && $_POST['email'] != "") {
      $comment = $_POST['comment'];
      $name = $_POST['name'];
      $email = $_POST['email'];

      //El archivo se abre para escribir y leer
      $fp = fopen($file, "r+");

      //Leemos todos los datos y los almacenamos en $old
      $old = fread($fp, filesize($file));

      //Se crea el vinculo de $email
      $email = "<a href=\"mailto:$email\">$email</a>";

      //se incluye la fecha y se le da formato
      $dateOfEntry = date("Y-n-j");

      //ocultar caracteres HTML, eliminar slashes y mantener saltos de linea
      $comment = htmlspecialchars($comment);
      $comment = stripslashes(nl2br($comment));

      //montar la entrada (entry) del libro de Visitas
      $entry = "<p><b>$name</b> ($email) wrote on <i>$dateOfEntry</i>:<br>$comment</p>\n";

      //el cursor invisible regresa al principio
      rewind($fp);

      //Escribir la nueva entrada antes de las antiguas en el archivo:
      fputs($fp, "$entry \ $old");

      //cerrar el archivo
      fclose($fp);
    }

    //mostrar el archivo completo
    readfile($file);
     ?>
  </body>
</html>

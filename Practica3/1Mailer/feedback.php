<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario de Opinion</title>
  </head>
  <body>
    <h1>Feedback Mailer</h1>
    <p>¡Envíame un mail </p>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      Tu direccion de email: <br>
      <input type="email" name="Mail"><br>
      Tu comentario: <br>
      <textarea name="message" cols="50" rows="5">
      </textarea><br>
      <input type="submit" value="Enviar">
    </form>
    <?php
    $recieverMail = "monsh8a@gmail.com";
    if (isset($_POST['Mail']) && $_POST['Mail']!= null) {
      if (@mail($recieverMail, "Tienes un correo nuevo",$_POST['message'],
      "From: $_POST[Mail]")) {
          echo "<p>Gracias por enviarme tu opinion. </p>\n";
      } else {
        echo "<p>Lo siento, ha ocurrido un error.</p>\n";
      }
    }
     ?>
  </body>
</html>

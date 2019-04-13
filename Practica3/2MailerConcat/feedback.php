<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Form Mailer</title>
  </head>
  <body>

    <?php
    /* Empieza el area editable */
    $recieverMail = "monsh8a@gmail.com";
    $subject = "...";
    $message = "Datos enviados: \n\n";
    /* Termina el area editable */

    /* El bucle lee los pares atributo-valor*/
    foreach ($_POST as $name => $value) {
      //Todos los datos se guardan en $messsage
      $message .= "$name: $value\n"; //Concat abreviado
    }
    // Enviar . prever un campo mail en el formulario

    if (isset($_POST['Mail']) && $_POST['Mail']!= null) { // Campo no vacio
      //Se activa la funcion de envio mail()
      $poster = $_POST['Mail'];
      if (@mail($recieverMail, $subject,$message,
      "From: $poster")) {
          echo "<p>Gracias por enviarme tu opinion. </p>\n";
          echo "Tu mensaje ha sido enviado";
      } else {
        echo "<p>Lo sentimos, No se ha podido enviar tu mensaje.</p>\n";
      }
    } else {
      echo "<h1> No te olvides de rellenar tu direccion de correo electronico</h1>";
    }
     ?>
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
  </body>
</html>

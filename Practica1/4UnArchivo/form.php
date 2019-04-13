<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario HTML</title>
  </head>
  <body>
    <h1>Rellena los campos (form.php)</h1>
    <form class="" action="form.php" method="post">
      <input type="radio" name="gender" value="0"> Sr.<br>
      <input type="radio" name="gender" value="1"> Sra.<br>
      Tu nombre:
      <input type="text" name="firstName"><br>
      Tu apellido:
      <input type="text" name="lastName">
      <input type="submit" name="submitbutton" value="Envialo!">
    </form>
    <?php
    if (isset ($_POST['gender'])&&
    isset($_POST['firstName']) &&
     $_POST['lastName'] !="") {
      if ($_POST['gender'] == 0) {
        echo "Hola Sr. <br>";
      } else {
        echo "Hola Sra. <br>";
      }
      echo "Hola <b>{$_POST{'lastName'}}</b>, encantado de saludarte";
    } else {
      echo "Por favor rellena todos los campos";
    }
    echo $_SERVER['PHP_SELF'];
    ?>
  </body>
</html>

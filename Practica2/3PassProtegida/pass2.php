<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Conoces la contraseña</title>
</head>
<body>
  <h2>Conoces la contraseña?(pass2.php)</h2><br>
  <form action="<?php echo
  $_SERVER['PHP_SELF'];?>" method="post">
  <input type="text" name="pw">
  <input type="submit" value="Envialo">
</form>
<?php
if (isset($_POST['pw'])) {
  $pw = $_POST['pw'];
  if ($pw == "818181") {
    ?>
    <h3> 1. Sección protegida</h3>
    <p> contenido interesante...</p>
    <?php
  } else if($pw == "212121"){
    ?>
    <h3> 2. Sección protegida</h3>
    <p> contenido interesante...</p>
    <?php
  } else {
    ?>
    <h3> Lo siento no puedo entrar</h3>
    <p> Es obvio que no sabes la contraseña</p>
    <?php
  }
}
?>
</body>
</html>

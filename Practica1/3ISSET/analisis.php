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
?>

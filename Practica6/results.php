<?php
error_reporting(E_ALL ^ E_NOTICE);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Resultados de la Encuesta</title>
  </head>
  <body>
    <h1> Resultados de la encuesta </h1>
    <?php
    $file = "results.txt";
    $fp = fopen($file,"r");
    $vote = fread($fp,filesize($file));
    fclose($fp);

    //Se divide la string, se crea el array
    $vote = explode(',', $vote);

    //Cantidad total de votos
    $allvotes = array_sum($vote);

    //longitud maxima de la barra
    $length = 400;

    //Cuota de la opcion1 (valor indice 0)
    $length0 = $vote[0] * $length / $allvotes;

    //Cuota de la opcion2 (valor indice 1)
    $length1 = $vote[1] * $length / $allvotes;

    //Cuota de la opcion3 (valor indice 2)
    $length2 = $vote[2] * $length / $allvotes;

    //Rendondeo de valores
    $length0 = round($length0);
    $length1 = round($length1);
    $length2 = round($length2);

    //Calcular y redondear porcentaje de 0
    $percent0 = 100 * $vote[0] / $allvotes;
    $percent0 = round($percent0, 0);

    //Calcular y redondear porcentaje de 1
    $percent1 = 100 * $vote[1] / $allvotes;
    $percent1 = round($percent1, 0);

    //Calcular y redondear porcentaje de 2
    $percent2 = 100 * $vote[2] / $allvotes;
    $percent2 = round($percent2, 0);

    //Mostrar solo para fines de prueba;
    //echo "$lenght0 $lenght1 $lenght2";
     ?>

     <p> Total de votos: <?php echo $allvotes; ?> </p>
     <h3>Resultados</h3>
     <!-- Opcion 1 -->
     <table border="0">
       <tr>
         <td><b> Opcion 1</b></td>
         <td>&nbsp;</td>
         <td width="<?php echo $length0; ?>" bgcolor="#8e44ad">&nbsp;</td>
         <td>&nbsp;<?php echo "$percent0%"; ?>&nbsp;(<i><?php echo $vote[0]; ?></i>)</td>
       </tr>
     </table>
     <!-- Opcion 2 -->
     <table border="0">
       <tr>
         <td><b>Opcion 2</b></td>
         <td>&nbsp;</td>
         <td width="<?php echo $length1; ?>" bgcolor="#2980b9">&nbsp;</td>
         <td>&nbsp;<?php echo "$percent1%"; ?>&nbsp;(<i><?php echo $vote[1]; ?></i>)</td>
       </tr>
     </table>
     <!-- Opcion 3 -->
     <table border="0">
       <tr>
         <td><b>Opcion 3</b></td>
         <td>&nbsp;</td>
         <td width="<?php echo $length2; ?>" bgcolor="#f1c40f">&nbsp;</td>
         <td>&nbsp;<?php echo "$percent2%"; ?>&nbsp;(<i><?php echo $vote[2]; ?></i>)</td>
       </tr>
     </table>
  </body>
</html>

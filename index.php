<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Arreglo de datos</title>
    </head>
    <body>
       <h3>Arreglo de datos</h3>
 <?php
 //Arreglo con llaves numéricas autodefinidas
 
 $HeaderArray = array(
 array("Nombre", "Dirección", "Teléfono", "Fecha de Cumpleanos", "Color Favorito", "Significado")
 );
 
 $DataArray = array(
 array("Juan Perez", "Cra. 45 # 45 - 56", 3456789, "23/12/1997", "Amarillo"),
 array("Pablo Manrique", "Clle. 23 # 12 - 19 Sur", 3214567, "12/10/1980", "Verde"),
 array("Nancy Peña", "Av. 34 # 16 - 12", 2135423, "07/06/2000", "Rojo")
 );
 
 $key = array("Amarillo"  => "Riqueza y Alegria");
?>
        <table style="width:324px;" border="3" cellspacing="1" cellpadding="1">
<?php
 echo "<tr>";
 foreach($HeaderArray as $header) {
 echo "<td bgcolor=yellow>$header[0]</td>";
 echo "<td bgcolor=yellow>$header[1]</td>";
 echo "<td bgcolor=yellow>$header[2]</td>";
 echo "<td bgcolor=yellow>$header[3]</td>";
 echo "<td bgcolor=yellow>$header[4]</td>";
 echo "<td bgcolor=yellow>$header[5]</td>";
 }
 echo "</tr>";
 
 foreach ($DataArray as $data){
     echo "<tr>";
  $data[0];
  $data[1];
  $data[2];
  $data[3];
  $data[4];
 
 foreach ($data as $element => $cell) {
      echo "<td> $cell </td>";
 if ($element === 4) {
          echo "<td>";
          echo isset($key[$cell]) ? $key[$cell] : "No se encuentra el significado";
          echo "</td>";
        }
      }
      echo "</tr>";
    }
  ?>
        </table>
    </body>
</html>

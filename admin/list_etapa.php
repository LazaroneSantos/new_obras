<?php

  require 'config/config.php';

  $etapas = Etapa::find('all');
  $td_style = "text-align: center; border: 1px solid #000;";
  $th_style = "width: 250px; border: 1px solid #000; background-color: #CCC";
?>

<input name="inicio" type="button" onClick="window.location='index.php'" value="Inicio" title="Inicio" />
<input name="cadastro" type="button" onClick="window.location='form_etapa.php'" value="Adicionar" title="Adicionar" />

<?php
  echo "<table>";
  echo "<tr>";
  echo "<th style='".$th_style."'>NOME</th>";
  echo "<th style='".$th_style."'>PORCENTAGEM</th>";
  echo "<th style='".$th_style."'>FUNCOES</th>";

  echo "</tr>";
    foreach ($etapas as $etapa) :
      echo "<tr>";
        echo "<td style='".$td_style."'>".$etapa->nome."</td>";
        echo "<td style='".$td_style."'>".$etapa->porcentagem."</td>";
        echo "<td style='".$td_style."'>"
          . "<a href=form_etapa.php?id=".$etapa->id."><img src='".$img."editar.png' width='16px' height='16px' title='Editar' /></a>"
          . "</td>";
      echo "</tr>";
    endforeach;
  echo "</table>"

?>

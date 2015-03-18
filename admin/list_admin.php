<?php

  require 'config/config.php';

  $admins = Admin::find('all');
  $td_style = "text-align: center; border: 1px solid #000;";
  $th_style = "width: 250px; border: 1px solid #000; background-color: #CCC";
?>
<meta charset='UTF-8'>
<input name="inicio" type="button" onClick="window.location='index.php'" value="Inicio" title="Inicio" />
<input name="cadastro" type="button" onClick="window.location='form_admin.php'" value="Adicionar" title="Adicionar" />

<?php
  echo "<table>";
  echo "<tr>";
  echo "<th style='".$th_style."'>NOME</th>";
  echo "<th style='".$th_style."'>EMAIL</th>";
  echo "<th style='".$th_style."'>TELEFONE</th>";
  echo "<th style='".$th_style."'>NIVEL</th>";
  echo "<th style='".$th_style."'>FUNCOES</th>";

  echo "</tr>";
    foreach ($admins as $admin) :
      echo "<tr>";
        echo "<td style='".$td_style."'>".$admin->nome."</td>";
        echo "<td style='".$td_style."'>".$admin->email."</td>";
        echo "<td style='".$td_style."'>".$admin->telefone."</td>";
        echo "<td style='".$td_style."'>".$admin->nivel."</td>";
        echo "<td style='".$td_style."'>"
           . "<a href=form_admin.php?id=".$admin->id."><img src='".$img."editar.png' width='16px' height='16px' title='Editar' /></a>"
           . "</td>";
      echo "</tr>";
    endforeach;
  echo "</table>"

?>
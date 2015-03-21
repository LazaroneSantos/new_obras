<?php

  require 'config/config.php';

  $funcionarios = Funcionario::find('all');
  $td_style = "text-align: center; border: 1px solid #000;";
  $th_style = "width: 250px; border: 1px solid #000; background-color: #CCC";
?>
<meta charset='UTF-8'>
<input name="inicio" type="button" onClick="window.location='index.php'" value="Inicio" title="Inicio" />
<input name="cadastro" type="button" onClick="window.location='form_funcionario.php'" value="Adicionar" title="Adicionar" />

<?php
  echo "<table>";
  echo "<tr>";
  echo "<th style='".$th_style."'>NOME</th>";
  echo "<th style='".$th_style."'>CPF</th>";
  echo "<th style='".$th_style."'>FUNÇÕES</th>";

  echo "</tr>";
    foreach ($funcionarios as $funcionario) :
      echo "<tr>";
        echo "<td style='".$td_style."'>".$funcionario->nome."</td>";
        echo "<td style='".$td_style."'>".$funcionario->cpf."</td>";
        echo "<td style='".$td_style."'>"
           . "<a href=form_funcionario.php?id=".$funcionario->id."><img src='".$img."editar.png' width='16px' height='16px' title='Editar' /></a>"
           . "</td>";
      echo "</tr>";
    endforeach;
  echo "</table>"

?>
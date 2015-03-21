<?php

  require 'config/config.php';

  $fases = Fase::find('all');
  $td_style = "text-align: center; border: 1px solid #000;";
  $th_style = "width: 250px; border: 1px solid #000; background-color: #CCC";
?>

<input name="inicio" type="button" onClick="window.location='index.php'" value="Inicio" title="Inicio" />
<input name="cadastro" type="button" onClick="window.location='form_fase.php'" value="Adicionar" title="Adicionar" />

<?php
  echo "<table>";
  echo "<tr>";
  echo "<th style='".$th_style."'>NOME</th>";
  echo "<th style='".$th_style."'>FUNÇÕES</th>";

  echo "</tr>";
    foreach ($fases as $fase) :
      echo "<tr>";
        echo "<td style='".$td_style."'>".$fase->nome."</td>";
        echo "<td style='".$td_style."'>"
          . "<a href=form_fase.php?id=".$fase->id."><img src='".$img."editar.png' width='16px' height='16px' title='Editar' /></a>"
          . "</td>";
      echo "</tr>";
    endforeach;
  echo "</table>";
?>
<a href="pdf/pdf_list_fase.php" >
  <?php echo "<img src='".$img."pdf.png' width='16px' height='16px' title='Gerar PDF' />"; ?>
</a>

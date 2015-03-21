<?php

  require 'config/config.php';
  include '../../librarys/mpdf/mpdf.php';

  $etapas = Etapa::find('all');
  $td_style = "text-align: center; border: 1px solid #000;";
  $th_style = "width: 250px; border: 1px solid #000; background-color: #CCC";

  $html = "<html><body>";
  $html .= "<table>";
  $html .= "<tr>";
  $html .= "<th style='".$th_style."'>NOME</th>";
  $html .= "<th style='".$th_style."'>PORCENTAGEM</th>";
  $html .= "</tr>";

  foreach ($etapas as $etapa):
    $html .= '<tr>';
    $html .= "<td style='".$td_style."'>".$etapa->nome."</td>";
    $html .= "<td style='".$td_style."'>".$etapa->porcentagem."</td>";
    $html .= '</tr>'; 
  endforeach;

  $html .= "</table>";
  $html .= "</body></html>";

  $arquivo = "relatorio_etapa".date('Y').".pdf";

  $mpdf = new mPDF();
  $mpdf->WriteHTML($html);

  /*
   * F - salva o arquivo
   * I - abre no navegador
   * D - chama o prompt
   */
  
  $mpdf->Output($arquivo, 'D');

?>
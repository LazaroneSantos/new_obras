<?php

  require 'config/config.php';
  include '../../librarys/mpdf/mpdf.php';

  $fases = Fase::find('all');
  $td_style = "text-align: center; border: 1px solid #000;";
  $th_style = "width: 250px; border: 1px solid #000; background-color: #CCC";

  $html = "<html><body>";
  $html .= "<table>";
  $html .= "<tr>";
  $html .= "<th style='".$th_style."'>NOME</th>";
  $html .= "</tr>";

  foreach ($fases as $fase):
    $html .= '<tr>';
    $html .= "<td style='".$td_style."'>".$fase->nome."</td>";
    $html .= '</tr>'; 
  endforeach;

  $html .= "</table>";
  $html .= "</body></html>";

  $arquivo = "relatorio_fase".date('Y').".pdf";

  $mpdf = new mPDF();
  $mpdf->WriteHTML($html);

  /*
   * F - salva o arquivo
   * I - abre no navegador
   * D - chama o prompt
   */
  
  $mpdf->Output($arquivo, 'D');

?>
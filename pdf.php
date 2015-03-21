<?php

  include 'librarys/mpdf/mpdf.php';
  
  $dados = "<h1>Lazarone Santos Santana</h1>";

  $arquivo = "relatorio".date('Y').".pdf";

  $mpdf = new mPDF();
  $mpdf->WriteHTML($saida);

  /*
   * F - salva o arquivo
   * I - abre no navegador
   * D - chama o prompt
   */
  
  $mpdf->Output($arquivo, 'D');
?>
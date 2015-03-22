<?php

  require 'config/config.php';
  $etapa = Etapa::find($_REQUEST['id']);

?>
<html>
  <head>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Atual',     <?php echo $etapa->porcentagem; ?>],
          ['Restante',  <?php echo (100 - $etapa->porcentagem); ?>]
        ]);

        var options = {
          title: 'Status Etapa: <?php echo $etapa->nome ?>'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <input name="voltar" type="button" onClick="window.location='list_etapa.php'" value="Voltar" title="Voltar" />
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>
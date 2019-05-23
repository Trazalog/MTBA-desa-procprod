<?php echo var_dump($data) ?>

<input class="hidden "type="number" id="buenas" value="<?php echo $data['buenas']?>">
<input class="hidden "type="number" id="malas" value="<?php echo $data['malas']?>">
<div id="graph-container" style="width:100%; max-width: 250px; margin:0 auto 20px;">
    <canvas id="miGrafico"></canvas>
</div>

<script>

graficarParametro();
  /* grafico usando charjs 2.5 */
  function graficarParametro() {
    var areaChartCanvas = document.getElementById("miGrafico");

    var myChart = new Chart(areaChartCanvas, {
      type: 'doughnut',
      data: {
        labels: ["Fecha Cumplida", "Fecha Excedida"],
        datasets: [{
          data: [$('#buenas').val(), $('#malas').val()],
          backgroundColor: [
          "#00a65a",
          "#f39c12"
          ],
          hoverBackgroundColor: [
          "#00a65a",
          "#f39c12"
          ]
        }]
      }
    });
  }



</script>
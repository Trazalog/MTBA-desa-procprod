<input class="hidden " type="number" id="buenas" value="<?php echo $buenas?>">
<input class="hidden " type="number" id="malas" value="<?php echo $malas?>">
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Informe de Entregas</h3>
        <!--<span class="label label-primary pull-right"><i class="fa fa-info"></i></span>-->
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div><!-- /.box-tools -->
    </div><!-- /.box-header -->
    <div class="box-body" style="display: block;">

        <div class="row">
            <div class="col-md-4 col-xs-12">
                <div id="graph-container" style="width:100%; max-width: 250px; margin:0 auto 20px;"><iframe
                        class="chartjs-hidden-iframe" tabindex="-1"
                        style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                    <canvas id="miGrafico" width="312" height="312"
                        style="display: block; height: 250px; width: 250px;"></canvas>
                </div>
            </div>


            <div class="col-md-4 col-xs-12">
                <!-- Apply any bg-* class to to the info-box to color it -->
                <div class="info-box bg-green">
                    <span class="info-box-icon"><i class="ion ion-information-circled"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Entregas Cumplidas</span>
                        <span class="info-box-number"><?php echo $buenas ?></span>
                        <!-- The progress section is optional -->
                        <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                        </div>
                        <span class="progress-description">
                            Cantidad de Entregas Cumplidas
                        </span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->

                <div class="small-box bg-blue">
                    <div class="inner">
                        <h3><?php echo round(($buenas*100)/($buenas+$malas)) ?>%</h3>
                        <p>Cumplimiento</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-information-circled"></i>
                    </div>
            
                </div>
            </div>

            <div class="col-md-4 col-xs-12">
                <div class="info-box bg-yellow">
                    <span class="info-box-icon"><i class="ion ion-information-circled"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Fuera de Término</span>
                        <span class="info-box-number"><?php echo $malas?></span>
                        <!-- The progress section is optional -->
                        <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                        </div>
                        <span class="progress-description">
                            Cantidad de Fechas Incumplidas
                        </span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->

                <div class="small-box bg-red">
                    <div class="inner">
                        <h3><?php echo round(($malas*100)/($buenas+$malas)) ?>%</h3>
                        <p>Es la morosidad actualmente.</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-android-warning"></i>
                    </div>
                    <!--<a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a>-->
                </div>
            </div>

        </div>
    </div><!-- /.box-body -->
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
                    "#dd4b39"
                ],
                hoverBackgroundColor: [
                    "#00a65a",
                    "#dd4b39"
                ]
            }]
        }
    });
}
</script>
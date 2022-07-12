<?php

$qtd = [0, 0, 0];

include "../banco/config.php";
$sql = "SELECT * FROM cartao";
$query = $mysqli->query($sql);
while ($dados = $query->fetch_array()){
    $qtd[$dados['card_id'] - 1] += 1;
}
?>

<!-- css -->
<style>
  h1 {
    font-size: 80px;
    color: white;
    text-align: center;
  }
  h2 {
    text-align:center; 
    color:green;
  }
  .template-pag-grafico {
    width:100%;
    height:calc(100% / 1.237);
  }
</style>
<!-- HTML -->
<h1>Gráfico</h1>
<div id="chartdiv"></div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <h2>cartão 1</h2>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4kzVAzewV0sRbISE6LWaxHMhj-W9PBMJw8A&usqp=CAU" alt="" class="template-pag-grafico">
        </div>
        <div class="col-md-4">
            <h2>cartão 2</h2>
            <img src="https://st2.depositphotos.com/1043073/5673/i/600/depositphotos_56732483-stock-photo-christmas-card.jpg" alt="" class="template-pag-grafico">
        </div>
        <div class="col-md-4">
            <h2>cartão 3</h2>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQlirU_1SQDTBbY_7VOlPaTtnW3t7heVbeZJw&usqp=CAU" alt="" class="template-pag-grafico">
        </div>
    </div>
</div>

<!-- Styles -->
<style>
#chartdiv {
  width: 50%;
  height: 500px;
  position: relative;
  margin: auto;
}
</style>

<!-- Resources -->
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script>
  /**
 * ---------------------------------------
 * This demo was created using amCharts 5.
 *
 * For more information visit:
 * https://www.amcharts.com/
 *
 * Documentation is available at:
 * https://www.amcharts.com/docs/v5/
 * ---------------------------------------
 */

// Create root and chart
var root = am5.Root.new("chartdiv");

root.setThemes([
  am5themes_Animated.new(root)
]);

var chart = root.container.children.push(
  am5percent.PieChart.new(root, {})
);

// Define data
var data = [{
  cartao: "cartão 1",
  qtd: <?php echo $qtd[0] ?>
}, {
  cartao: "cartão 2",
  qtd: <?php echo $qtd[1] ?>
}, {
  cartao: "cartão 3",
  qtd: <?php echo $qtd[2] ?>
}];

// Create series
var series = chart.series.push(
  am5percent.PieSeries.new(root, {
    name: "Series",
    valueField: "qtd",
    categoryField: "cartao",
    alignLabels: false
  })
);

series.data.setAll(data);

series.labels.template.setAll({
  fontSize: 12,
  text: "{category}",
  textType: "radial",
  radius: 0,
  centerX: am5.percent(100),
  fill: am5.color(0xffffff)
})

</script>
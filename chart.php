<?php
 
$dataPoints = array(
	array("label"=> "Januari", "y"=> 284935),
	array("label"=> "Februari", "y"=> 256548),
	array("label"=> "Maret", "y"=> 245214),
	array("label"=> "April", "y"=> 233464),
	array("label"=> "May", "y"=> 200285),
	array("label"=> "Juny", "y"=> 194422),
	array("label"=> "Juli", "y"=> 180337),
	array("label"=> "Agustus", "y"=> 172340),
	array("label"=> "September", "y"=> 118187),
);
	
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	title: {
		text: "Penjualan Minang "
	},
	axisY: {
		title: "Number of Apps",
		includeZero: false
	},
	data: [{
		type: "column",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>                              
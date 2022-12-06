<!DOCTYPE html>
<?php
header("Refresh:7");
//echo date('H:i:s Y-m-d');
?>
<html>
<head>
	<title>Graficos con plotly</title>
	
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-primary">
					<div class="panel panel-heading">
						Gráficos Comparativo de Ventas
					</div>
					<div class="panel panel-body">
						<div class="row">
							<div class="col-sm-6">
								<div id="cargaLineal"></div>
							</div>
							<div class="col-sm-6">
								<div id="cargaBarras"></div>
							</div>
							<div class="col-sm-4">
								<div id="cargaBarras2"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		//$('#cargaLineal').load('lineal.php');
	//	$('#cargaBarras').load('barras.php');
//		$('#cargaBarras2').load('barras0.php');
	});
</script>

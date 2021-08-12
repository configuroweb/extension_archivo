<!DOCTYPE>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="https://www.configuroweb.com/desarrollo/">ConfiguroWeb</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Obtener la extensión de un archivo</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-4">
			<form action="save_file.php" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label>Nombre del Archivo</label>
					<input type="file" name="file" class="form-control" required="required"/>
				</div>
				
				
				<center><button name="save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Guardar</button></center>
			
			</form>
		</div>
		<div class="col-md-8">
		<form method="POST" action="">
			<button name="get" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-down"></span> Obtener Extensión</button>
		</form>
		<br /><br />
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead class="alert-info">
					<tr>
						<td>Nombre de Archivo</td>
						<td>Extensión del Archivo</td>
					</tr>
				</thead>
				<tbody>
					<?php include 'get_ex.php'?>
				</tbody>
			</table>
		</div>
		</div>
	</div>
</body>
</html>
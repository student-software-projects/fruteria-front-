<?php include_once "encabezado.php" ?>
<?php
include_once "database.php";
$sentencia = $database->query("SELECT * FROM LOVECOOL;");
$LOVECOOL = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

	<div class="col-xs-12">
		<h1>LOVECOOL</h1>
		<div>
			<a class="btn btn-success" href="./formulario.php">Nuevo <i class="fa fa-plus"></i></a>
		</div>
		<br>
		<table class="table table-bordered">
			<thead>
				<tr>
					
					<th>Nombre</th>
					<th>Descripcion</th>
					
				</tr>
			</thead>
			<tbody>
				<?php foreach($LOVECOOL as $fruterie){ ?>
				<tr>
				>
					<td><?php echo $fruterie->nombre ?></td>
					<td><?php echo $fruterie->descripcion ?></td>
					
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
<?php include_once "pie.php" ?>
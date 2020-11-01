<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "database.php";
$sentencia = $database->prepare("SELECT * FROM LOVECOOL WHERE id = ?;");
$sentencia->execute([$id]);
$fruterie = $sentencia->fetch(PDO::FETCH_OBJ);
if($fruterie === FALSE){
	echo "¡No existe!";
	exit();
}

?>
<?php include_once "encabezado.php" ?>
	<div class="col-xs-12">
		
            <label for="descripcion">Nombre:</label>
			<textarea required id="nombre" name="descripcion" cols="30" rows="5" class="form-control"><?php echo $medicamento->nombre ?></textarea>

			<label for="descripcion">Descripcion:</label>
			<textarea required id="descripcion" name="descripcion" cols="30" rows="5" class="form-control"><?php echo $producto->descripcion ?></textarea>

			
		</form>
	</div>
<?php include_once "pie.php" ?>

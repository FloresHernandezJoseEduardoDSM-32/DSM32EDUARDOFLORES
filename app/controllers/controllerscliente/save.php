<?php
require("../../../databases/conexion.php");
$nom=$_POST['name'];
$raz=$_POST['raza'];
$col=$_POST['color'];
$tam=$_POST['tam'];
$tip=$_POST['tipo'];
$sql="INSERT INTO cliente(id_cliente,Apellido_P,Apellido_M,Nombres_C,Telefono_C,Direccion_C)
VALUES (null,'$app','$app','$nom','$tel','$dir');";
$res=mysqli_query($conn,$sql);
include('../../../test.php');
include('../../../layout/header.php');
include('../../../layout/menu.php');
?>
<div class="container">
			
			<div class="row text-center">
				<?php if($res) { ?>
					<h3>REGISTRO GUARDADO</h3>
					<?php } else { ?>
					<h3>ERROR AL GUARDAR</h3>
				<?php } ?>
			</div>
			<div class="row text-center">
				<a href="../../../views/cliente/index.php" class="btn btn-primary">Regresar</a>
			</div>
		</div>
<?php
include('../../../layout/footer.php');
?>

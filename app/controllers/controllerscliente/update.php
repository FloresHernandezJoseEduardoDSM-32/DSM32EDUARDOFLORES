<?php
require("../../../databases/conexion.php");
$id=$_POST['id'];
$nom=$_POST['name'];
$raz=$_POST['raza'];
$col=$_POST['color'];
$tam=$_POST['tam'];
$tip=$_POST['tipo'];
$sql = "UPDATE mascota 
SET nom_masc='$nom',raza='$raz',color='$col',tamaño='$tam',tipo='$tip' WHERE id_masc='$id'";
$resultado=mysqli_query($conn,$sql);
include('../../../test.php');
include('../../../layout/header.php');
include('../../../layout/menu.php');
?>
<div class="container">
			<div class="row">
				<?php if($resultado) { ?>
					<h3>REGISTRO MODIFICADO</h3>
					<?php } else { ?>
					<h3>ERROR AL MODIFICAR</h3>
				<?php } ?>
			</div>
			<div class="row">
                <a href="../../../views/mascota/index.php" class="btn btn-primary">Regresar</a>
			</div>
		</div>
<?php
include("../../../layout/footer.php");
?>
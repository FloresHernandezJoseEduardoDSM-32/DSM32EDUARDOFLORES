<?php
    include("../../databases/conexion.php");
    $consu="SELECT id_user, nom_user, ap_pat, ap_mat, concat(no_ext,', ',no_int,', ',calle,', ',CP)as dir, typeu FROM usuario,domicilio, typeuser
    WHERE usuario.id_type1=typeuser.id_type and domicilio.id_user1=usuario.id_user ORDER BY id_user";
    $resu=mysqli_query($conn,$consu);
?>
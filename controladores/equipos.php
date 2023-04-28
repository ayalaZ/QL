<?php
include("../complementos/BD.php");
$nombreEquipo = $_POST['nombre'];
$presidente = $_POST['presidente'];
$entrenador = $_POST['entrenador'];
// Obtenemos la imagen del escudo
$escudo = $_FILES["escudo"]["name"];
$ruta = "img/" . $escudo;
move_uploaded_file($_FILES["escudo"]["tmp_name"], $ruta);
$objeto = new acciones;

$ingresar = $objeto->insert('equipo','nombre_equipo,presidente,entrenador,escudo',"'$nombreEquipo','$presidente','$entrenador','$ruta'");
if ($ingresar) {
    echo "<script>
    alertify.alert('Registro exitoso', 'El equipo ha sido registrado correctamente.', function(){
        window.location.href = document.referrer;
    });
  </script>";
}else{
    echo "<script>
    alertify.error('Error al registrar', 'Hubo un problema al ingresar el equipo en la base de datos.');
  </script>";
}
?>
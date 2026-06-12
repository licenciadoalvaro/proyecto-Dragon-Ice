<?php
  $direccion="localhost";
  $usuario="root";
  $contraseña="";
  $nombreBase="dragonice";

  $connect=new mysqli($direccion, $usuario, $contraseña, $nombreBase);
    if ($conn->connect_error) {
        echo "hubo un error al conectar a las base de datos";
}
$codigo=$_POST['codigo'];
$nombre=$_POST['nombre'];
$descripccion=$_POST['descripcion'];
$precio=$_POST['precio'];
$costo=$_POST['costo'];
$stock=$_POST['stock'];
$sql ="INSERT INTO usuario(ciu, nombre, direccion, celular, rol, estado) VALUES ('$codigo', '$nombre', '$descripcion', '$precio', '$costo', '$stock')";
if ($conexion->query($sql)==TRUE){
  echo "Se registro correctamente";
}
else{
  echo $sql->error;
}

?>

<?php
session_start();

include_once '../../Conexion/conexion.php';

//recepción de datos enviados mediante POST desde ajax
$id_usuario = (isset($_POST['id_usuario'])) ? $_POST['id_usuario'] : '';
$clave = (isset($_POST['clave'])) ? $_POST['clave'] : '';

$pass = md5($clave); //encripto la clave enviada por el usuario para compararla con la clava encriptada y almacenada en la BD

$consulta = "SELECT * FROM usuarios WHERE id_usuario='$id_usuario' AND clave='$clave' ";
$resultado = $conexion->prepare($consulta);
$resultado->execute();

if($resultado->rowCount() >= 1){
    $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION["s_usuario"] = $id_usuario;
}else{
    $_SESSION["s_usuario"] = null;
    $data=null;
}

print json_encode($data);
$conexion=null;

<?php
require_once("model.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nombre=$_POST ['nom'];
    $apellido=$_POST['ape'];
    $telefono=$_POST['tel'];
    $correo=$_POST['correo'];
    $contraseña=$_POST['contra'];

    if(insertarusuario($nombre,$apellido,$telefono,$correo,$contraseña)){
  echo "<script'> alert('SE HA REGISTRADO CORRECTAMENTE');</script>";
    }}

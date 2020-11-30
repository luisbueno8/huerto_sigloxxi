<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulario</title>
<style type="text/css">
</style>
</head>

<body bgcolor="#FFFFFF">
<FORM method="post" name="formulario">
Nombre:<input type="text" name="nombre" id="nombre">

Apellido: <input type="text" name="apellido" id="apellido">

<br />
<input type="submit" value="Guardar">
<input type="submit" value="Ver datos">

<?php
$archivo = "alumnos.txt";//
$gestor = @fopen("datos.txt", "w");

fclose($gestor);
?>
</FORM>
</body>
</html>



<?php
$nombre="";
if (!empty($_REQUEST['nombre'])){
$nombre=$_REQUEST['nombre'];
}

$apellido="";
if (!empty($_REQUEST['apellido'])){
$apellido=$_REQUEST['apellido'];

}

//Luego sobrescribo el txt

$archivo="https://luisbueno8.github.io/huerto_sigloxxi/datos.txt";

     $file=fopen($archivo,"w");
     fwrite($file,$nombre,$apellido);
  ?>

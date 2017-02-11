
<?php
require  'medoo.php';
 
$database = new medoo([
	// required
	'database_type' => 'mysql',
	'database_name' => 'empresa',
	'server' => 'localhost',
	'username' => 'root',
	'password' => 'root',
	'charset' => 'utf8',
 
	
]);
 if($_POST){
$database->insert("tb_personal", [
	"nombre" => $_POST["nombre"],
	"apellido" => $_POST["apellido"],
	"departamento"=> $_POST["departamento"]
]);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Insertar</title>
</head>
<body>
<form action="insertar.php" method="post">
	<label for="text">Nombre</label>
 	<input type="text" name="nombre">

 	<label for="">Apellido</label>
  	<input type="text" name="apellido">

 	<label for="">Departamento</label>
  	<input type="text" name="departamento">
  	<br>
  	  	<br>
  	<input type="submit" value="Registrar" style="margin-left:70px">
</form>

</body>
</html>
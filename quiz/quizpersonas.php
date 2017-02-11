<?php
echo"hola";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Lunguajes</title>
</head>
<body>

// if ($_GET) {
// 	echo "<h3>La persona selecionada es: 
// 	</h3>".$lenguajes[$_GET["id"]];
// }
	<?php

	
	$nombres=["Javier","Michael","Max","Alberto"];
	$elementos=count($nombres);
	echo $elementos;
 	for ($i=0; $i < $elementos ; $i++) {
 	echo "<li>"  $nombres[$i] "</li>";
 	}
 	?>


</body>
</html> -->
<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>Lunguajes</title>
</head>
<body>

	<?php

	
	$nombres=["Javier","Michael","Max","Alberto"];
	$elementos=count($nombres);
	echo $elementos;
 	for ($i=0; $i < $elementos ; $i++) {
 	echo "<li><a>" . $nombres[$i]. "</a></li>";
 	}
 	?>


</body>
</html>
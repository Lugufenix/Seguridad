<?php 
echo"<!DOCTYPE html> 
<html>  
	<head> 
	<title></title>  
	</head>  

	<body> 
	<h1>CODIFICACION</h1> 
	<form method='get' action=codificacion.php> 
	<input type=text name='d' placeholder='CODIFICACION'>
	<input type='submit'></form>"; 
$codificacion=array('a''1','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','v','w','x','y','z');
$codificacion=array('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25');
	if(isset($_GET['d']))
	{
		$usuario=$_GET['d'];
		$co=str_replace('hola',$codificacion,$usuario);
		echo $co;
	}
	else 
		echo "Colocar valores a codificar";
	
	 echo"
	</body> 
</html> "; 
?> 

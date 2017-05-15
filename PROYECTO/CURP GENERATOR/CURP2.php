<?php
$a=(explode(' ',$_GET['nom']));
$lugarnacimiento=$_GET['lugarnacimiento'];
$b=(explode('-',$_GET['fechnac']));
$sex= $_GET['sexo'];
$homoclave1= $_GET['codper0'];
$homoclave2= $_GET['codper1'];


function nombres($a,$b,$c )
{
					
					$apellp=substr($a,0,2);
					$apellm=substr($b,0,1);
					$nom=substr($c,0,1);
					$primerseccion=array($apellp,$apellm,$nom);
				
			return(implode($primerseccion));
}
function fecha($a,$b,$c )
{
					
					$año=substr($a,2,2);
					$mes=substr($b,0,2);
					$dia=substr($c,0,2);
					$c=array($año,$mes,$dia);
				
			return(implode($c));
}

function consonantes ($a)
{
	$i=0;
	foreach($a as $e=>$f){
	if ($f=='a'||$f=='e'||$f=='i'||$f=='o'||$f=='u'){}
	else
		$k[$i++]=$f;
	};
	return $k;
}
$aa= strtoupper(nombres($a[0],$a[1],$a[2]));
echo "CURP:<br/>";
//iniciales nombre
echo $aa;

//Fecha de nacimiento
echo fecha($b[0],$b[1],$b[2]);

//sexo
echo $sex;

//Iniciales del lugar de nacimiento
echo $lugarnacimiento;

//siguiente CONSONANTE DEL PRIMER APELLIDO
$d= str_split($a[0]);
$k= consonantes($d);
$kk= strtoupper($k[1]);
print_r ($kk);

//siguiente CONSONANTE DEL PRIMER APELLIDO
$e= str_split($a[1]);
$l= consonantes($e);
$ll=strtoupper($l[1]);
print_r ($ll);

//siguiente CONSONANTE DEL PRIMER NOMBRE
$f= str_split($a[2]);
$m= consonantes($f);
$mm=strtoupper($m[1]);
print_r ($mm);

// HOMOCLAVE
print_r ($homoclave1);
print_r ($homoclave2);
?>
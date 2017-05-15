
<?php
echo"<!DOCTYPE html>
<html lang='es'>
	<head>
		<title>CURP</title>
		<meta charset='UTF-8'/>
		<link rel='stylesheet' type='text/css' href='formu.css'/>
	</head>
	<body>
	
	<form method='GET' action='CURP2.php'>
		
		<fieldset><legend>Datos personales</legend>
		
			<label>Nombre:</label>
			<input type='text' name='nom' size='40' maxlength='40' placeholder='Apellido Paterno, Apellido Materno y Nombre(s)'/>
			
			
			<label>Fecha de nacimiento:</label>
			<input type='date' name='fechnac'/>
			
			
			<label>Sexo:</label>
			<label class='diferente'>Hombre</label>
			<input type='radio' name='sexo' class='diferente' value='H'/>
			<label class='diferente' >Mujer</label>
			<input type='radio' name='sexo'  class='diferente' value='M'/><br/>
			
			
			
			
			<label>Lugar de Nacimiento:</label>
			<select  name='lugarnacimiento'>
					<option value='AG'>AGUAS CALIENTES</option>
					<option value='BC'>BAJA CALIFORNIA</option>
					<option value='BS'>BAJA CALIFORNIA SUR</option>
					<option value='CC'>CAMPECHE</option>
					<option value='CL'>COAHUILA</option>
					<option value='CM'>COLIMA</option>
					<option value='CS'>CHIAPAS</option>
					<option value='CH'>CHIHUAHUA</option>
					<option value='DF'>DISTRITO FEDERAL</option>
					<option value='DG'>DURANGO</option>
					<option value='GT'>GUANAJUATO</option>
					<option value='GR'>GUERRERO</option>
					<option value='HG'>HIDALGO</option>
					<option value='JC'>JALISCO</option>
					<option value='MC'>EDO. MÉXICO</option>
					<option value='MN'>MICHOACÁN</option>
					<option value='MS'>MORELOS</option>
					<option value='NT'>NAYARIT</option>
					<option value='NL'>NUEVO LEÓN</option>
					<option value='OC'>OAXACA</option>
					<option value='PL'>PUEBLA</option>
					<option value='QT'>QUERÉTARO</option>
					<option value='QR'>QUINTANA ROO</option>
					<option value='SP'>SAN LUIS POTOSÍ</option>
					<option value='SL'>SINALOA</option>
					<option value='SR'>SONORA</option>
					<option value='TC'> TABASCO</option>
					<option value='TS'>TAMAULIPAS</option>
					<option value='TL'>TLAXCALA</option>
					<option value='VZ'>VERACRUZ</option>
					<option value='YN'>YUCATÁN</option>
					<option value='ZS'>ZACATECAS</option>
					</br>";
					

	echo"</select>	
		<label>Código personal:</label>
			<input type='number' name='codper0' class='diferente' min='0' max='9'/>
			<input type='number' name='codper1' class='diferente' min='0' max='9'/><br/>
			<input type='submit' class='diferente' value='Enviar datos'/>
			<input type='submit' class='diferente'value='Borrar datos'/>
		</fieldset>
		</form>
		
		
		
		
		
		
		
	</body>
</html>";
	?>
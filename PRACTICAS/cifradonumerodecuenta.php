<?php
$numero_cuenta='315336986';
echo $numero_cuenta;
echo "<br/><br/>".base_convert($numero_cuenta,16,8 );
$md5=md5($numero_cuenta);
echo "<br/><br/>".$md5;
?>
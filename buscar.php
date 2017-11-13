<?php
$habilitar=$_POST['habilitarDeshabilitar'];
if ($habilitar=='1'){
$retorno=$_POST['retorno'];
}
else {$retorno=0;}
$destino=$_POST['destino'];
$salida=$_POST['salida'];


$n1=$_POST['n1'];

$n2=$_POST['n2'];
$n3=$_POST['n3'];


   if(isset($destino) && isset($salida) && isset($retorno) && isset($n1) && isset($n2) && isset($n3) && isset($habilitar)) {

if ($destino==='JAUJA'){
	$destino==='JAUJA';
	$salida1=6;
	$salida2=8;
	$arribo1=8;
	$arribo2=10;
	$retorno1=6;
	$retorno2=8;
	$pre1=48.00;
	$pre2=58.00;
	$pre3=75.30;
	$vuelo1= 'LIM-JAU<br> 230';
	$vuelo2= 'LIM-JAU<br> 240';
	$vuelo3= 'JAU-LIM<br> 233';
	$vuelo4= 'JAU-LIM<br> 244';
	$duracion1=0;
	$duracion2=0;
	$duracion3=0;
	$duracion4=0;

}

else if ($destino==='AREQUIPA'){
	$destino==='AREQUIPA';
	$salida1=8;
	$salida2=6;
	$arribo1=9;
	$arribo2=7;
	$retorno1=8;
	$retorno2=6;
	$pre1=58.00;
	$pre2=78.00;
	$pre3=90.00;
	$vuelo1= 'LIM-AREQ<br> 210';
	$vuelo2= 'LIM-AREQ<br> 245';
	$vuelo3= 'AREQ-LIM<br> 212';
	$vuelo4= 'AREQ-LIM<br> 247';
   
}
else if ($destino==='IQUITOS'){
	$destino==='IQUITOS';
	$salida1=6;
	$salida2=8;
	$arribo=9;
	$arribo1=9;
	$arribo2=11;
	$retorno1=6;
	$retorno2=8;
	$pre1=78.00;
	$pre2=90.00;
	$pre3=105.00;
	$vuelo1= 'LIM-IQUI<br> 220';
	$vuelo2= 'LIM-IQUI<br> 235';
	$vuelo3= 'IQUI-LIM<br> 221';
	$vuelo4= 'IQUI-LIM<br> 225';
}
else if ($destino==='CUSCO'){
	$destino==='CUSCO';
	$salida1=9;
	$salida2=6;
	$arribo1=11;
	$arribo2=8;
	$retorno1=9;
	$retorno2=6;
	$pre1=78.00;
	$pre2=88.00;
	$pre3=102.00;
	$vuelo1= 'LIM-CUSC<br> 115';
	$vuelo2= 'LIM-CUSC<br> 125';
	$vuelo3= 'CUSC-LIM<br> 105';
	$vuelo4= 'CUSC-LIM<br> 115';
	
}else{
	echo 'lacageis';

}

$duracion1=$arribo1-$salida1;
$duracion2=$arribo2-$salida2;
$duracion3=$arribo1-$retorno1;
$duracion4=$arribo2-$retorno2;



if ($habilitar==='1') {
	include 'tablaidayvuelta.php';
}else{
	include 'tablasoloida.php';


}
   
   }
?>
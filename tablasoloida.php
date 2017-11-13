
<html>
<head>
<title>TARIFA</title>
<link rel="stylesheet" href="estivuelo.css">

	 
<script type="text/javascript" src="codigo.js"></script> 
</head>
<body>
<form name="calculator" action="calculo.php"  method="POST">
<div class="show"id="cont2" >
<table  name="habilitar"class="T1" width="65%" align="center"  >
<tr height="15"></tr>
<tr>
<td>ITINEARIO</td>
<td></td>

<td colspan="2"></td>
</tr>
<tr height="15"></tr>
<tr >
<td colspan="3" >
<table class="T1" align="center" width="80%" >
			<tr class="t5" >
			<td class="t5">ORIGEN</td>
			<td class="t5">DESTINO</td>
			<td class="t5">DETALLE PASAJEROS</td>
			<td class="t5">SALIDA</td>
			<td class="t5">RETORNO</td>
			</tr>
			<tr >
			<td class="t6">Lima</td>
			<td class="t6"><?php echo $destino;?></td>
			<td class="t6"><?php echo $n1;?> Adulto(s),
				<?php echo $n2;?> Niño(s) y 
				<?php echo $n3;?> Infante(s)</td>
			<td class="t6"><?php echo $salida;?></td>
			<td class="t6"><?php echo $retorno;?></td>
			</tr>
			</table>
			</td>
    </tr>

   
<tr height="25"></tr>
<tr>
<td>RETORNO</td>
<td></td>
<td colspan="2"></td>
</tr>
<tr height="15"></tr>
<tr >
<td colspan="3" >
<table class="T1" align="center" width="80%" >
			<tr class="t5" >
			<td class="t5">VUELO</td>
			<td class="t5">FECHA</td>
			<td class="t5">SALIDA</td>
			<td class="t5">ARRIBO</td>
			<td class="t5">DURACION</td>
			<td class="t5">ESCALA</td>
			<td class="t5">ECONOMICA</td>
			<td class="t5">FLEXIBLE</td>
			<td class="t5">FULL FLEXIBLE</td>
			</tr>
			<tr class="t6" >
			<td class="t6"><?php echo $vuelo3;?></td>
			<td class="t6"><?php echo $retorno;?></td>
			<td class="t6"> <?php echo $retorno1;?>:00 pm.</td>
			<td class="t6"><?php echo $arribo1;?>:00 pm.</td>
			<td class="t6"><?php echo $duracion3;?>:00 horas</td>
			<td class="t6">0</td>
			<td class="t6"> <input class="button"  type="button" value="<?php echo $pre1;?>$UD" onClick="document.calculator.ans.value='<?php echo $pre1;?>'"></td>
			<td class="t6"><input class="button"  type="button" value="<?php echo $pre2;?>$UD" onClick="document.calculator.ans.value='<?php echo $pre2;?>'"> </td>
			<td class="t6"><input class="button"  type="button" value="<?php echo $pre3;?>$UD" onClick="document.calculator.ans.value='<?php echo $pre3;?>'"></td>
			</tr>
			</table>
			</td>
</tr>
<tr height="15"></tr>
<tr >
<td colspan="3" >
<table class="T1" align="center" width="80%" >
			<tr class="t5" >
			<td class="t5">VUELO</td>
			<td class="t5">FECHA</td>
			<td class="t5">SALIDA</td>
			<td class="t5">ARRIBO</td>
			<td class="t5">DURACION</td>
			<td class="t5">ESCALA</td>
			<td class="t5">ECONOMICA</td>
			<td class="t5">FLEXIBLE</td>
			<td class="t5">FULL FLEXIBLE</td>
			</tr>
			<tr class="t6" >
			<td class="t6"><?php echo $vuelo4;?></td>
			<td class="t6"><?php echo $retorno;?></td>
			<td class="t6"> <?php echo $retorno2;?>:00 pm.</td>
			<td class="t6"><?php echo $arribo2;?>:00 pm.</td>
			<td class="t6"><?php echo $duracion4;?>:00 horas</td>
			<td class="t6">0</td>
<td class="t6"> <input class="button"  type="button" value="<?php echo $pre1;?>$UD" onClick="document.calculator.ans.value='<?php echo $pre1;?>'"></td>
			<td class="t6"><input class="button"  type="button" value="<?php echo $pre2;?>$UD" onClick="document.calculator.ans.value='<?php echo $pre2;?>'"> </td>
			<td class="t6"><input class="button"  type="button" value="<?php echo $pre3;?>$UD" onClick="document.calculator.ans.value='<?php echo $pre3;?>'"></td>
			</tr>
			</table>
			</td>
</tr>
<tr height="25"></tr>
<tr>
<td align="right"><font color="black" size="5" ><b>Tarifa(*):</b></font><font color="red" size="5" ><b>US$</b></font></td>
<td><textarea name="ans" value="" rows="1" cols="5"></textarea> </td>
<td><font color="red" size="4" > por pasajero</font></td>
</tr>
<tr align="left">
<td ><button id="lbl"  >CALCULAR TARIFA"</button> </td>
</tr>
</table>
    </div>
    
</form>
    
</body>
</html>


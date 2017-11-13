<html>
<head>
<title>TARIFA</title>
<link rel="stylesheet" href="estivuelo.css">
<script type="text/javascript" src="codigo.js"></script> 
	
</head>
<body>
    
<form name="calculator"  action="calculo.php" method="POST" >
   
    
    
    
     <section id="cont2">
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
                <td class="t6"><table align="center"><tr><td class="t6" name="l1"><?php echo $n1;?></td><td> Adulto(s),</td><td class="t6">
                    <?php echo $n2;?></td><td> Niño(s) y</td><td class="t6"> 
                    <?php echo $n3;?></td><td> Infante(s)</td></tr></table></td>
			<td class="t6"><?php echo $salida;?></td>
			<td class="t6"><?php echo $retorno;?></td>
			</tr>
			</table>
			</td>
    </tr>
<tr height="25"></tr>
    <tr>
<td>SALIDA</td>
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
			<td class="t6"><?php echo $vuelo1;?></td>
			<td class="t6"><?php echo $salida;?></td>
			<td class="t6"> <?php echo $salida1;?>:00 am.</td>
			<td class="t6"><?php echo $arribo1;?>:00 am.</td>
			<td class="t6"><?php echo $duracion1;?>:00 horas</td>
			<td class="t6">0</td>
			<td class="t6"> <input class="button" name="ida" type="button" value="<?php echo $pre1;?>$UD" onClick="document.calculator.ans.value='<?php echo $pre1;?>'"></td>
			<td class="t6"><input class="button" name="ida" type="button" value="<?php echo $pre2;?>$UD" onClick="document.calculator.ans.value='<?php echo $pre2;?>'"> </td>
			<td class="t6"><input class="button" name="ida" type="button" value="<?php echo $pre3;?>$UD" onClick="document.calculator.ans.value='<?php echo $pre3;?>'"></td>
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
			<td class="t6"><?php echo $vuelo2;?></td>
			<td class="t6"><?php echo $salida;?></td>
			<td class="t6"> <?php echo $salida2;?>:00 am.</td>
			<td class="t6"><?php echo $arribo2;?>:00 am.</td>
			<td class="t6"><?php echo $duracion2;?>:00 horas</td>
			<td class="t6">0</td>
			<td class="t6"> <input class="button" name="ida1" type="button" value="<?php echo $pre1;?>$UD" onClick="document.calculator.ans.value='<?php echo $pre1;?>'"></td>
			<td class="t6"><input class="button" name="ida1" type="button" value="<?php echo $pre2;?>$UD" onClick="document.calculator.ans.value='<?php echo $pre2;?>'"> </td>
			<td class="t6"><input class="button" name="ida1" type="button" value="<?php echo $pre3;?>$UD" onClick="document.calculator.ans.value='<?php echo $pre3;?>'"></td>
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
			<td class="t6"> <input class="button"  name="vuelta"  type="button" value="<?php echo $pre1;?>$UD" onClick="document.calculator.ans1.value='<?php echo $pre1;?>'"></td>
			<td class="t6"><input class="button"  name="vuelta" type="button" value="<?php echo $pre2;?>$UD" onClick="document.calculator.ans1.value='<?php echo $pre2;?>'"> </td>
			<td class="t6"><input class="button"  name="vuelta" type="button" value="<?php echo $pre3;?>$UD" onClick="document.calculator.ans1.value='<?php echo $pre3;?>'"></td>
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
<td class="t6"> <input class="button"  type="button" name="vuelta1" value="<?php echo $pre1;?>$UD" onClick="document.calculator.ans1.value='<?php echo $pre1;?>'"></td>
			<td class="t6"><input class="button"  name="vuelta1"  type="button" value="<?php echo $pre2;?>$UD" onClick="document.calculator.ans1.value='<?php echo $pre2;?>'"> </td>
			<td class="t6"><input class="button" name="vuelta1"  type="button" value="<?php echo $pre3;?>$UD" onClick="document.calculator.ans1.value='<?php echo $pre3;?>'"></td>
			</tr>
			</table>
			</td>
</tr>
<tr height="25"></tr>
<tr>
<td align="right"><font color="black" size="5" ><b>Tarifa(*):</b></font><font color="red" size="4" ><b> Salida:US$</b></font> </td>
<td><textarea name="ans" value="" rows="1" cols="5"></textarea> </td>
<td><font color="red" size="4" > por pasajero</font></td>
</tr>
    <tr>
<td align="right"><font color="red" size="4" ><b> Retorno:US$</b></font> </td>
<td><textarea name="ans1" value="" rows="1" cols="5"></textarea> </td>
<td><font color="red" size="4" > por pasajero</font></td>
</tr>
    
<tr align="left">
<td ><input  class="box"type="submit"id="boton" onclick="mostrar_ocultar()"name="btn_enviar" value="CALCULAR TARIFA" ></td>
</tr>
</table>
    </section>
    <section name="cont3">
    
    
    
    </section>
</form>
</body>
</html>


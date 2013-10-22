<?php
	session_start();
	$_SESSION['security_number']=rand(10000,99999);
?>
<html>
<head>
	<title>Formulario Aviso Privacidad</title>
    <style type="text/css">
<!--
p {color: #666666;}
.Estilo1 {color: #666666;}
.Estilo2 {color: #333333;}
.Estilo3 {color: #0000FF;}
.textoChico {font-size: 9px; color: #0000FF}
-->
    </style>
</head>
<body>
	<h2><center>
	  <span class="Estilo1">Formulario</span><br/>
	  <span class="textoChico">CON BASE EN LA GU&Iacute;A PR&Aacute;CTICA PARA GENERAR EL AVISO DE PRIVACIDAD<br/>
	   Modelo A de Aviso de Privacidad Completo, IFAI junio 2011.</span>
	</center></h2> 
	<hr>
	<center>
	<form ENCTYPE="multipart/form-data" method="post" action="insert.php" />
		<table border="0" width="75%" CELLSPACING="0" />
			<tr>
			  <td colspan="2" bgcolor="#99FFFF" ><span class="Estilo3">Mi aviso de privacidad</span> </td>
			  <td >&nbsp;</td>
		      <td colspan="2" bgcolor="#33FF99" ><span class="Estilo3">Utilizar&eacute; los siguientes datos </span></td>
			  <td >&nbsp;</td>
			  <td colspan="2" bgcolor="#FFFF99" ><span class="Estilo3">Cont&aacute;ctenos</span></td>
			  <td >&nbsp;</td>
			  <td colspan="2" bgcolor="#CCFFFF" ><span class="Estilo3">Destinatarios de estas transferencias</span></td>
			  <td >&nbsp;</td>
			  <td colspan="2" bgcolor="#CC99FF" ><span class="Estilo3">No consiento </span></td>
		    </tr>		
			<tr>
			  <td bgcolor="#99FFFF" ><div align="right" class="Estilo2">Usuario</div></td>
			  <td bgcolor="#99FFFF" ><input name="name" type="text" maxlength="10" TABINDEX=1 style="background:#FFC993; color:black"; /></td>
			  <td >&nbsp;</td>
		      <td bgcolor="#33FF99" ><div align="right" class="Estilo2">Dato 1</div></td>
			  <td valign="top" bgcolor="#33FF99" ><input name="dato10" type="text" id="dato10" TABINDEX=11 maxlength="30" style="background:#FFC993; color:black"/></td>
			  <td >&nbsp;</td>
			  <td bgcolor="#FFFF99" ><div align="right" class="Estilo2">Nombre contacto </div></td>
			  <td bgcolor="#FFFF99" ><input name="dato14" type="text" id="dato14" TABINDEX=15 maxlength="40" style="background:#FFC993; color:black"/></td>
			  <td >&nbsp;</td>
			  <td bgcolor="#CCFFFF" ><div align="right" class="Estilo2">Comparte informaci&oacute;n 1 </div></td>
			  <td valign="top" bgcolor="#CCFFFF" ><input name="dato25" type="text" id="dato25" TABINDEX=26 maxlength="30" style="background:#FFC993; color:black"/></td>			  
			  <td >&nbsp;</td>
			  <td bgcolor="#CC99FF" ><div align="right" class="Estilo2">Tel&eacute;fono</div></td>
			  <td bgcolor="#CC99FF" ><input name="dato33" type="text" id="dato33" TABINDEX=34 maxlength="15" style="background:#FFC993; color:black"/></td>			  
			</tr>
			<tr>
			  <td bgcolor="#99FFFF" ><div align="right" class="Estilo2">Raz&oacute;n social </div></td>
			  <td bgcolor="#99FFFF" ><input name="dato01" type="text" id="dato01" TABINDEX=2 maxlength="50" style="background:#FFC993; color:black"/></td>
		      <td >&nbsp;</td>
		      <td bgcolor="#33FF99" ><div align="right" class="Estilo2">Dato 2</div></td>
			  <td valign="top" bgcolor="#33FF99" ><input name="dato11" type="text" id="dato11" TABINDEX=12 maxlength="30" style="background:#FFC993; color:black"/></td>
			  <td >&nbsp;</td>
			  <td bgcolor="#FFFF99" ><div align="right" class="Estilo2">Calle</div></td>
			  <td bgcolor="#FFFF99" ><input name="dato15" type="text" id="dato15" TABINDEX=16 maxlength="30" style="background:#FFC993; color:black"/></td>
			  <td >&nbsp;</td>
			  <td bgcolor="#CCFFFF" ><div align="right" class="Estilo2">Comparte informaci&oacute;n 2</div></td>
			  <td valign="top" bgcolor="#CCFFFF" ><input name="dato26" type="text" id="dato26" TABINDEX=27 maxlength="30" style="background:#FFC993; color:black"/></td>			  
			  <td >&nbsp;</td>
			  <td bgcolor="#CC99FF" ><div align="right" class="Estilo2">Calle</div></td>
			  <td bgcolor="#CC99FF" ><input name="dato34" type="text" id="dato34" TABINDEX=35 maxlength="30" style="background:#FFC993; color:black"/></td>			  
			</tr>
			<tr>
			  <td bgcolor="#99FFFF" ><div align="right" class="Estilo2">Denominaci&oacute;n comercial </div></td>
			  <td bgcolor="#99FFFF" ><input name="dato02" type="text" id="dato02" TABINDEX=3 maxlength="50" style="background:#FFC993; color:black"></td>
		      <td >&nbsp;</td>
		      <td bgcolor="#33FF99" ><div align="right" class="Estilo2">Dato 3</div></td>
			  <td valign="top" bgcolor="#33FF99" ><input name="dato12" type="text" id="dato12" TABINDEX=13 maxlength="30" style="background:#FFC993; color:black"/></td>
			  <td >&nbsp;</td>
			  <td bgcolor="#FFFF99" ><div align="right" class="Estilo2">N&uacute;mero</div></td>
			  <td bgcolor="#FFFF99" ><input name="dato16" type="text" id="dato16" TABINDEX=17 maxlength="15" style="background:#FFC993; color:black"/></td>
			  <td >&nbsp;</td>
			  <td bgcolor="#CCFFFF" ><div align="right" class="Estilo2">Comparte informaci&oacute;n 3 </div></td>
			  <td valign="top" bgcolor="#CCFFFF" ><input name="dato27" type="text" id="dato27" TABINDEX=28 maxlength="30" style="background:#FFC993; color:black"/></td>			  
			  <td >&nbsp;</td>
			  <td bgcolor="#CC99FF" ><div align="right" class="Estilo2">N&uacute;mero</div></td>
			  <td bgcolor="#CC99FF" ><input name="dato35" type="text" id="dato35" TABINDEX=36 maxlength="15" style="background:#FFC993; color:black"/></td>			  
			</tr>
			<tr>
			  <td bgcolor="#99FFFF" ><div align="right" class="Estilo2">Calle</div></td>
			  <td bgcolor="#99FFFF" ><input name="dato03" type="text" id="dato03" TABINDEX=4 maxlength="30" style="background:#FFC993; color:black"/></td>
		      <td >&nbsp;</td>
		      <td bgcolor="#33FF99" ><div align="right" class="Estilo2">Dato 4</div></td>
			  <td valign="top" bgcolor="#33FF99" ><input name="dato13" type="text" id="dato13" TABINDEX=14 maxlength="30" style="background:#FFC993; color:black"/></td>
			  <td >&nbsp;</td>
			  <td bgcolor="#FFFF99" ><div align="right" class="Estilo2">Colonia</div></td>
			  <td bgcolor="#FFFF99" ><input name="dato17" type="text" TABINDEX=18 maxlength="30" /></td>
			  <td >&nbsp;</td>
			  <td bgcolor="#CCFFFF" ><div align="right" class="Estilo2">Comparte informaci&oacute;n 4 </div></td>
			  <td valign="top" bgcolor="#CCFFFF" ><input name="dato28" type="text" id="dato28" TABINDEX=29 maxlength="30" style="background:#FFC993; color:black"/></td>			  
			  <td >&nbsp;</td>
			  <td bgcolor="#CC99FF" ><div align="right" class="Estilo2">Colonia</div></td>
			  <td bgcolor="#CC99FF" ><input name="dato36" type="text" id="dato36" TABINDEX=37 maxlength="30" /></td>			  
			</tr>
			<tr>
			  <td bgcolor="#99FFFF" ><div align="right" class="Estilo2">N&uacute;mero</div></td>
			  <td bgcolor="#99FFFF" ><input name="dato04" type="text" id="dato04" TABINDEX=5 maxlength="15" style="background:#FFC993; color:black"/></td>
		      <td >&nbsp;</td>
		      <td >&nbsp;</td>
			  <td >&nbsp;</td>
			  <td >&nbsp;</td>
			  <td bgcolor="#FFFF99" ><div align="right" class="Estilo2">Ciudad</div></td>
			  <td bgcolor="#FFFF99" ><input name="dato18" type="text" id="dato18" TABINDEX=19 maxlength="30" style="background:#FFC993; color:black"/></td>
			  <td >&nbsp;</td>
			  <td bgcolor="#CCFFFF" ><div align="right" class="Estilo2">Finalidad 1 </div></td>
			  <td bgcolor="#CCFFFF" ><input name="dato29" type="text" id="dato29" TABINDEX=30 maxlength="30" style="background:#FFC993; color:black"/></td>			  
			  <td >&nbsp;</td>
			  <td bgcolor="#CC99FF" ><div align="right" class="Estilo2">Ciudad</div></td>
			  <td bgcolor="#CC99FF" ><input name="dato37" type="text" id="dato37" tabindex=38 maxlength="30" style="background:#FFC993; color:black"/></td>
			</tr>
			<tr>
			  <td bgcolor="#99FFFF" ><div align="right" class="Estilo2">Colonia </div></td>
			  <td bgcolor="#99FFFF" ><input name="dato05" type="text" id="dato05" TABINDEX=6 maxlength="30"/></td>
		      <td >&nbsp;</td>
		      <td >&nbsp;</td>
			  <td >&nbsp;</td>
			  <td >&nbsp;</td>
			  <td bgcolor="#FFFF99" ><div align="right" class="Estilo2">Delegaci&oacute;n o Municipio</div></td>
			  <td bgcolor="#FFFF99" ><input name="dato19" type="text" id="dato19" TABINDEX=20 maxlength="40" style="background:#FFC993; color:black"/></td>
			  <td >&nbsp;</td>
			  <td bgcolor="#CCFFFF" ><div align="right" class="Estilo2">Finalidad 2 </div></td>
			  <td bgcolor="#CCFFFF" ><input name="dato30" type="text" id="dato30" TABINDEX=31 maxlength="30" style="background:#FFC993; color:black"/></td>			  
			  <td >&nbsp;</td>
			  <td bgcolor="#CC99FF" ><div align="right" class="Estilo2">Delegaci&oacute;n o Municipio</div></td>
			  <td bgcolor="#CC99FF" ><input name="dato38" type="text" id="dato38" tabindex=39 maxlength="40" style="background:#FFC993; color:black"/></td>			  
			</tr>
			<tr>
			  <td bgcolor="#99FFFF" ><div align="right" class="Estilo2">Ciudad</div></td>
			  <td bgcolor="#99FFFF" ><input name="dato06" type="text" id="dato06" TABINDEX=7 maxlength="30" style="background:#FFC993; color:black"/></td>
		      <td >&nbsp;</td>
		      <td >&nbsp;</td>
			  <td >&nbsp;</td>
			  <td >&nbsp;</td>
			  <td bgcolor="#FFFF99" ><div align="right" class="Estilo2">CP</div></td>
			  <td bgcolor="#FFFF99" ><input name="dato20" type="text" id="dato20" TABINDEX=21 maxlength="5" style="background:#FFC993; color:black"/></td>
			  <td >&nbsp;</td>
			  <td bgcolor="#CCFFFF" ><div align="right" class="Estilo2">Finalidad 3 </div></td>
			  <td bgcolor="#CCFFFF" ><input name="dato31" type="text" id="dato31" TABINDEX=32 maxlength="30" style="background:#FFC993; color:black"/></td>			  
			  <td >&nbsp;</td>
			  <td bgcolor="#CC99FF" ><div align="right" class="Estilo2">CP</div></td>
			  <td bgcolor="#CC99FF" ><input name="dato39" type="text" id="dato39" TABINDEX=40 maxlength="6" style="background:#FFC993; color:black" /></td>
			</tr>															
			<tr>
			  <td bgcolor="#99FFFF" ><div align="right" class="Estilo2"> Delegaci&oacute;n o Municipio</div></td>
			  <td bgcolor="#99FFFF" ><input name="dato07" type="text" id="dato07" TABINDEX=8 maxlength="40" style="background:#FFC993; color:black"/></td>
		      <td >&nbsp;</td>
		      <td >&nbsp;</td>
			  <td >&nbsp;</td>
			  <td >&nbsp;</td>
			  <td bgcolor="#FFFF99" ><div align="right" class="Estilo2">Entidad federativa </div></td>
			  <td bgcolor="#FFFF99" ><input name="dato21" type="text" id="dato21" TABINDEX=22 maxlength="30" style="background:#FFC993; color:black"/></td>
			  <td >&nbsp;</td>
			  <td bgcolor="#CCFFFF" ><div align="right" class="Estilo2">Finalidad 4 </div></td>
			  <td bgcolor="#CCFFFF" ><input name="dato32" type="text" id="dato32" TABINDEX=33 maxlength="30" style="background:#FFC993; color:black"/></td>			  
			  <td >&nbsp;</td>
			  <td bgcolor="#CC99FF" ><div align="right" class="Estilo2">Entidad federativa </div></td>
			  <td bgcolor="#CC99FF" ><input name="dato40" type="text" id="dato40" TABINDEX=41 maxlength="30" style="background:#FFC993; color:black"/></td>			  
			</tr>	
			<tr>
			  <td bgcolor="#99FFFF" ><div align="right" class="Estilo2">CP</div></td>
			  <td bgcolor="#99FFFF" ><input name="dato08" type="text" id="dato08" TABINDEX=9 maxlength="5" style="background:#FFC993; color:black" /></td>
		      <td >&nbsp;</td>
		      <td >&nbsp;</td>
			  <td >&nbsp;</td>
			  <td >&nbsp;</td>
			  <td bgcolor="#FFFF99" ><div align="right" class="Estilo2">Tel&eacute;fono</div></td>
			  <td bgcolor="#FFFF99" ><input name="dato22" type="text" id="dato22" TABINDEX=23 maxlength="15" style="background:#FFC993; color:black"/></td>
			  <td >&nbsp;</td>
			  <td >&nbsp;</td>
			  <td >&nbsp;</td>
			  <td >&nbsp;</td>
			  <td bgcolor="#CC99FF" ><div align="right" class="Estilo2">Correo electr&oacute;nico </div></td>
			  <td bgcolor="#CC99FF" ><input name="dato41" type="text" id="dato41" TABINDEX=42 maxlength="50" style="background:#FFC993; color:black"/></td>			  
			</tr>	
			<tr>
			  <td bgcolor="#99FFFF" ><div align="right" class="Estilo2">Entidad federativa </div></td>
			  <td bgcolor="#99FFFF" ><input name="dato09" type="text" id="dato09" TABINDEX=10 maxlength="30" style="background:#FFC993; color:black"/></td>
		      <td >&nbsp;</td>
		      <td >&nbsp;</td>
			  <td >&nbsp;</td>
			  <td >&nbsp;</td>
			  <td bgcolor="#FFFF99" ><div align="right" class="Estilo2">Correo electr&oacute;nico </div></td>
			  <td bgcolor="#FFFF99" ><input name="dato23" type="text" id="dato23" TABINDEX=24 maxlength="50" style="background:#FFC993; color:black"/></td>
			  <td >&nbsp;</td>
			  <td >&nbsp;</td>
			  <td >&nbsp;</td>
			  <td >&nbsp;</td>
			  <td bgcolor="#CC99FF" ><div align="right" class="Estilo2">Medio</div></td>
			  <td bgcolor="#CC99FF" ><input name="dato42" type="text" id="dato42" TABINDEX=43 maxlength="40" style="background:#FFC993; color:black"/></td>			  
			</tr>	
			<tr><td >&nbsp;</td>
			  <td >&nbsp;</td>
			  <td >&nbsp;</td>
			  <td >&nbsp;</td>
			  <td >&nbsp;</td>
			  <td >&nbsp;</td>
			  <td bgcolor="#FFFF99" ><div align="right" class="Estilo2">P&aacute;gina web </div></td>
			  <td bgcolor="#FFFF99" ><input name="dato24" type="text" id="dato24" TABINDEX=25 maxlength="50" /></td>
			  <td >&nbsp;</td>
			  <td >&nbsp;</td>
			  <td >&nbsp;</td>
			  <td >&nbsp;</td>
				<td bgcolor="#CCCCCC" ><div align="right" class="Estilo2">Correo electr&oacute;nico de Distribuidor</div></td>
			 	<td bgcolor="#CCCCCC" ><input name="dato43" type="text" id="dato43" TABINDEX=44 maxlength="50" /></td>
			</tr>													
		<input type="hidden" name="MAX_FILE_SIZE" value="100000">
	  </table>
		<p>Debe agregar im&aacute;gen o logotipo en formato JPEG o JPG o BMP no m&aacute;s de 97Kb de tama&ntilde;o:
			<input type="file" name="upload"><br/>
			Registre la clave de seguridad Captcha para procesar sus datos aceptando los t&eacute;rminos, condiciones, contrato y/o pol&iacute;ticas de <a href="http://goo.gl/ls16m">privacidad</a>.<br/>
			CAPTCHA: <?php echo $_SESSION['security_number']; ?>
			<input type="text" name="capturo" maxlength="5">
			&nbsp;&nbsp;<a href="">Limpiar y Re-Capctha<a/>.<br/>
		<input type="submit" name="submit" value="Registrar" />
		Los cuadros fondo blanco son opcionales.</p>
	</form>
	</center>
</body>
</html>

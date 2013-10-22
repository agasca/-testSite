<?php
	$epoch = time(); 
	$dt = new DateTime("@$epoch");
	//$dt->format('Y/m/d');
	$fe = $dt->format('Y/m/d');
	session_start();
	if(!isset($_POST['submit'])){
		echo "Access not allowed.";
		exit;
	}else{
		if($_POST['capturo']==$_SESSION['security_number']){
			$cadena = $_SESSION["security_number"]."-".date('Ym.d,H.i.s')."@".$_SERVER['REMOTE_ADDR'];
			$mypic = $_FILES['upload']['name'];
			$temp = $_FILES['upload']['tmp_name'];
			$type = $_FILES['upload']['type'];
			mysql_connect("Localhost","thewhole_root","mexico1") or die("Can not connect rigth now. Try it later!!!");
			mysql_select_db("thewhole_testsite");
			$name = mysql_real_escape_string($_POST['name']);
			$dato01 = mysql_real_escape_string($_POST['dato01']);
			$dato02 = mysql_real_escape_string($_POST['dato02']);
			$dato03 = mysql_real_escape_string($_POST['dato03']);
			$dato04 = mysql_real_escape_string($_POST['dato04']);
			$dato05 = mysql_real_escape_string($_POST['dato05']);
			$dato06 = mysql_real_escape_string($_POST['dato06']);
			$dato07 = mysql_real_escape_string($_POST['dato07']);
			$dato08 = mysql_real_escape_string($_POST['dato08']);
			$dato09 = mysql_real_escape_string($_POST['dato09']);
			$dato10 = mysql_real_escape_string($_POST['dato10']);
			$dato11 = mysql_real_escape_string($_POST['dato11']);
			$dato12 = mysql_real_escape_string($_POST['dato12']);
			$dato13 = mysql_real_escape_string($_POST['dato13']);
			$dato14 = mysql_real_escape_string($_POST['dato14']);
			$dato15 = mysql_real_escape_string($_POST['dato15']);
			$dato16 = mysql_real_escape_string($_POST['dato16']);
			$dato17 = mysql_real_escape_string($_POST['dato17']);
			$dato18 = mysql_real_escape_string($_POST['dato18']);
			$dato19 = mysql_real_escape_string($_POST['dato19']);
			$dato20 = mysql_real_escape_string($_POST['dato20']);
			$dato21 = mysql_real_escape_string($_POST['dato21']);
			$dato22 = mysql_real_escape_string($_POST['dato22']);
			$dato23 = mysql_real_escape_string($_POST['dato23']);
			$dato24 = mysql_real_escape_string($_POST['dato24']);
			$dato25 = mysql_real_escape_string($_POST['dato25']);
			$dato26 = mysql_real_escape_string($_POST['dato26']);
			$dato27 = mysql_real_escape_string($_POST['dato27']);
			$dato28 = mysql_real_escape_string($_POST['dato28']);
			$dato29 = mysql_real_escape_string($_POST['dato29']);
			$dato30 = mysql_real_escape_string($_POST['dato30']);
			$dato31 = mysql_real_escape_string($_POST['dato31']);
			$dato32 = mysql_real_escape_string($_POST['dato32']);
			$dato33 = mysql_real_escape_string($_POST['dato33']);
			$dato34 = mysql_real_escape_string($_POST['dato34']);
			$dato35 = mysql_real_escape_string($_POST['dato35']);
			$dato36 = mysql_real_escape_string($_POST['dato36']);
			$dato37 = mysql_real_escape_string($_POST['dato37']);
			$dato38 = mysql_real_escape_string($_POST['dato38']);
			$dato39 = mysql_real_escape_string($_POST['dato39']);
			$dato40 = mysql_real_escape_string($_POST['dato40']);
			$dato41 = mysql_real_escape_string($_POST['dato41']);
			$dato42 = mysql_real_escape_string($_POST['dato42']);
			$dato43 = mysql_real_escape_string($_POST['dato43']);
			if ($name && $dato01 && $dato02 && $dato03 && $dato04 && $dato06 && $dato07 && $dato08 && $dato09 && $dato10 && $dato11 && $dato12 && $dato13 && $dato14 && $dato15 && $dato16 && $dato18 && $dato19 && $dato20 && $dato21 && $dato22 && $dato23 && $dato25 && $dato26 && $dato27 && $dato28 && $dato29 && $dato30 && $dato31 && $dato32 && $dato33 && $dato34 && $dato35 && $dato37 && $dato38 && $dato39 && $dato40 && $dato41){
				if(preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $dato23) && preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $dato41)){
//					mysql_connect("Localhost","thewhole_root","mexico1") or die("Can not connect rigth now. Try it later!!!");
//					mysql_select_db("thewhole_testsite");
					$username = mysql_query("select name from users where name = '$name'");	//confirm exist only one
					$count = mysql_num_rows($username); //confirm exist only one
					$remail = mysql_query("select conEmail from users where conEmail = '$dato23'");
					$checkemail = mysql_num_rows($remail);
					$remail2 = mysql_query("select noConcientoEmail from users where noConcientoEmail = '$dato41'");
					$checkemail2 = mysql_num_rows($remail2);
					if($checkemail!=0 && $checkemail2!=0){
						echo "These emails already registered";
					}else{
						if($count!=0){	//confirm exist only one
							echo "Username ya existe!";
						}else{
							if(($type=="image/jpeg") || ($type=="image/jpg") || ($type=="image/bmp")){
								$directory =  "./profiles/$name/images/";
								mkdir($directory, 0777, true);
								move_uploaded_file($temp, "profiles/$name/images/$mypic");
								echo "Im&aacute;gen seleccionada<p><img border='1' width='50' height='50' src='profiles/$name/images/$mypic'/><p>";
								$pagina="<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transition..." ;
								$pagina.="<html>";
								$pagina.="<head>";
								$pagina.= " <title>Creado</title>";
								$pagina.="</head>";
								$pagina.="<body>";
								$pagina.="AVISO / POL&Iacute;TICAS DE PRIVACIDAD<br/><p>
								De acuerdo a la Ley Federal de Protecci&oacute;n de Datos Personales en Posesi&oacute;n de los Particulares, aprobada el
								d&iacute;a 13 de abril de 2010 en los art&iacute;culos 3, Fracciones II y VII, y 33, as&iacute; como la denominaci&oacute;n del 
								cap&iacute;tulo II, del T&iacute;tulo Segundo, de la Ley Federal de Transparencia y Acceso a la Informaci&oacute;n 
								P&uacute;blica Gubernamental, hacemos de su conocimiento que '$dato01 y/o $dato02', con domicilio en 
								$dato03, $dato04, $dato05, $dato06, $dato07, $dato08, $dato09, es responsable  de recabar sus datos 
								personales, del uso que se le d&eacute; a los mismos y de su protecci&oacute;n.<br/><p>

								Su informaci&oacute;n personal ser&aacute; utilizada para: proveer los servicios y productos que ha solicitado, 
								informarle y/o notificarle sobre cambios en los mismos, realizar evaluaciones peri&oacute;dicas de nuestros productos y servicios a efecto 
								de mejorar la calidad de los mismos. Con base en las finalidades antes mencionadas, requerimos obtener los siguientes datos personales: 
								$dato10, $dato11, considerado como sensible seg&uacute;n la Ley Federal de Protecci&oacute;n de Datos Personales en 
								Posesi&oacute;n de los Particulares: $dato12 y $dato13.<br/><p>

								Es importante informarle que usted tiene derecho de acceder, rectificar y cancelar sus datos personales, as&iacute; como de oponerse
								al tratamiento de los mismos o revocar el consentimiento que para tal fin nos haya otorgado, a 
								trav&eacute;s de los procedimientos que hemos implementado es necesario que env&iacute;e la solicitud en los t&eacute;rminos que marca la Ley en su
								Art. 29. con nuestro departamento de datos personales en $dato14, $dato15, $dato16, $dato17, $dato18, $dato19, $dato20, $dato21 
								$dato22, $dato23 ";
								if ($dato24){
									$pagina.=" &oacute; visitar nuestra p&aacute;gina de Internet $dato24<br/><p>";
								}else{
									$pagina.=".<br/><p>";
								}
								$pagina.="As&iacute; mismo,  hacemos de su conocimiento que sus datos personales pueden ser transferidos y tratados dentro y 
								fuera del pa&iacute;s, por personas distintas a esta empresa. En ese sentido, su informaci&oacute;n puede ser 
								compartida con $dato25 $dato26 $dato27 $dato28, para $dato29 $dato30 $dato31 $dato32. Si usted no manifiesta su oposici&oacute;n para que sus
								datos personales sean transferidos, se entender&aacute; que ha otorgado su consentimiento para ello.<br/><p>

								&deg; Para el no consentimiento sobre mis datos personales que sean transferidos en los t&eacute;rminos que se&ntilde;ala el presente. 
								S&iacute; usted desea dejar de recibir mensajes promocionales de nuestra parte puede solicitarlo a trav&eacute;s 
								de $dato33, $dato34, $dato35, $dato36, $dato37, $dato38, $dato39, $dato40, $dato41.
								Cualquier modificaci&oacute;n a este aviso de privacidad podr&aacute; consultarla en $dato42.<br/><p>

								Fecha &uacute;ltima actualizaci&oacute;n: $fe";
								$pagina.="</body></html>";
								$path="./profiles/$name/images/aviso.htm"; 
								$Open = fopen ($path,"a+"); 
								if ($Open) { 
								    fwrite ($Open,"$pagina"); 
								    } 
								if ($dato43){
									$to = $dato43.', contacto@pegoga.com';
								}else{
									$to = $dato23.', contacto@pegoga.com';
								}
								$subject = 'Intrucciones para pago del proceso de Crear Aviso';
								$body = $dato01 . ' / ' . $dato23 . ' : ' . $dato43 . ' Gracias por utilizar nuestro servidor.
Para realizar el pago: 
Deposito por $49.00 en cuenta de HSBC o en Chedraui, Farmacias Benavides, Farmacias ABC, Telecomm; 
Enviar imagen de la ficha del pago/deposito respondiendo a este correo.
Entregables: 
Despues de conciliar el pago (12 a 24 hrs) se enviara la pagina de con los datos que ud capturo en el formulario.
Ud. podra generar con la siguiente sugerencia una URL corta y un codigo bidimensional QR: http://www.the-qrcode-generator.com/' ;
								$from = "contacto@pegoga.com";
								$headers = "From: $from";
								if($to && $subject && $body){
									mail($to,$subject,$body,$headers);
									}
								$dato01 = md5($dato01);
								$dato02 = md5($dato02);
								$dato03 = md5($dato03);
								$dato04 = md5($dato04);
								$dato05 = md5($dato05);
								$dato06 = md5($dato06);
								$dato07 = md5($dato07);
								$dato08 = md5($dato08);
								$dato09 = md5($dato09);
								$dato10 = md5($dato10);
								$dato11 = md5($dato11);
								$dato12 = md5($dato12);
								$dato13 = md5($dato13);
								$dato14 = md5($dato14);
								$dato15 = md5($dato15);
								$dato16 = md5($dato16);
								$dato17 = md5($dato17);
								$dato18 = md5($dato18);
								$dato19 = md5($dato19);
								$dato20 = md5($dato20);
								$dato21 = md5($dato21);
								$dato22 = md5($dato22);
								$dato23 = md5($dato23);
								$dato24 = md5($dato24);
								$dato25 = md5($dato25);
								$dato26 = md5($dato26);
								$dato27 = md5($dato27);
								$dato28 = md5($dato28);
								$dato29 = md5($dato29);
								$dato30 = md5($dato30);
								$dato31 = md5($dato31);
								$dato32 = md5($dato32);
								$dato33 = md5($dato33);
								$dato34 = md5($dato34);
								$dato35 = md5($dato35);
								$dato36 = md5($dato36);
								$dato37 = md5($dato37);
								$dato38 = md5($dato38);
								$dato39 = md5($dato39);
								$dato40 = md5($dato40);
								$dato41 = md5($dato41);
								$dato42 = md5($dato42);
								mysql_query("insert into users (name , razSocial, comercial, calle, numero, colonia, ciudad, munDelegacion, cp, entidad, dato1, dato2, dato3, dato4, conNombre, conDirTel, conEmail, conWWW, tipoDestinatario, finalidades, noConcientoTel, noConcientoDir, noConcientoEmail, medio, fechaActualizacion, captcha) values ('$name', '$dato01', '$dato02', '$dato03', '$dato04', '$dato05', '$dato06', '$dato07', '$dato08', '$dato09', '$dato10', '$dato11', '$dato12', '$dato13', '$dato14', '$dato15 $dato16 $dato17 $dato18 $dato19 $dato20 $dato21 $dato22', '$dato23', '$dato24', '$dato25 $dato26 $dato27 $dato28', '$dato29 $dato30 $dato31 $dato32', '$dato33', '$dato34 $dato35 $dato36 $dato37 $dato38 $dato39 $dato40', '$dato41', '$dato42', '$fe','$cadena')");
								$registered = mysql_affected_rows();
								mysql_close();
								//echo "Registro: ".$registered.$_SESSION['security_number']."@".date('Ym.d,H.i.s').",".$_SERVER["REMOTE_ADDR"].$to."<br/>";
								echo "Registro: ".$registered.$_SESSION['security_number'].$cadena."<br/>";
								echo "Por favor, revisar su cuenta de correo electr&oacute;nico.<br/> Le llegar&aacute; instrucciones sobre como realizar el pago y recibir su URL de la p&aacute;gina html e im&aacute;gen QR";
								//header("Refresh:4; url=logout.php");
								sleep(2);
								{
								printf("<script>location.href='logout.php'</script>");
								}
							}else{
								echo "Seleccione una im&aacute;gen del tipo de archivo permitido";
							}
						}
					}
				}else{
					echo "Formato de correo invalido";
				}
			}else{
				echo "Llene los campos.";
			}
		}else{
			echo "Codigo de seguridad CAPTCHA incorrecto.<br/> Transacci&oacute;n Rechazada";
		}
	}
?>
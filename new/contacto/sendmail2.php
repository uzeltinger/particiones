<?php

require_once('PHPMailer_v5.1/class.phpmailer.php');

$mail             = new PHPMailer(); // defaults to using php "mail()"

//$body             = file_get_contents('contents.html');
//$body             = eregi_replace("[\]",'',$body);


$mail->IsSMTP(); // telling the class to use SMTP
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Host       = "mail.particiones.net"; // sets the SMTP server
$mail->Port       = 587;                    // set the SMTP port for the GMAIL server
$mail->Username   = "contacto@particiones.net"; // SMTP account username
$mail->Password   = "mvWbND4K4J";        // SMTP account password


$mail->SetFrom('ventas@particiones.net', 'Contacto Web');

$mail->AddReplyTo("ventas@particiones.net","PARTICIONES");


$mail->AddAddress('ventas@particiones.net', "PARTICIONES");

$mail->Subject    = "Contacto Web PARTICIONES";

$mail->AltBody    = "Tu programa de Correo no permite leer este tipo de correo."; // optional, comment out and test


$body  = '<p><strong  style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#C00">Datos de Formulario de Contacto Web.</strong></p>';
$body .= '<p  style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#036">Se ha recibido la siguiente informaci&oacute;n, a trav&eacute;s de nuestro formulario de contacto.<br />';
$body .= '  <br />';
$body .= '  </p>';
$body .= '<table width="400" border="0" cellspacing="1" cellpadding="7" bgcolor="#CCCCCC">';
$body .= '  <tr>';
$body .= '    <td width="100" height="20" bgcolor="#FFFFFF" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#036"><strong>Nombre</strong>:</td>';
$body .= '    <td width="300" height="20" bgcolor="#FFFFFF" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#036">'.$_POST['nombre'].'</td>';
$body .= '  </tr>';
$body .= '  <tr>';
$body .= '    <td width="100" height="20" bgcolor="#FFFFFF" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#036"><strong>Email</strong>:</td>';
$body .= '    <td width="300" height="20" bgcolor="#FFFFFF" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#036">'.$_POST['email'].'</td>';
$body .= '  </tr>';
$body .= '  <tr>';
$body .= '    <td width="100" height="20" bgcolor="#FFFFFF" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#036"><strong>Telefono:</strong></td>';
$body .= '    <td width="300" height="20" bgcolor="#FFFFFF" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#036">'.$_POST['telefono'].'</td>';
$body .= '  </tr>';
$body .= '  <tr>';
$body .= '    <td width="100" height="20" bgcolor="#FFFFFF" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#036"><strong>Empresa:</strong></td>';
$body .= '    <td width="300" height="20" bgcolor="#FFFFFF" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#036">'.$_POST['empresa'].'</td>';
$body .= '  </tr>';
$body .= '  <tr>';
$body .= '    <td width="100" height="20" bgcolor="#FFFFFF" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#036"><strong>Mensaje:</strong></td>';
$body .= '    <td width="300" height="20" bgcolor="#FFFFFF" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#036">'.$_POST['mensaje'].'</td>';
$body .= '  </tr>';
$body .= '</table>';
$body .= '<p><br />';
$body .= '</p>';


$mail->MsgHTML($body);

$error = '';

if(!$mail->Send()) {
  $error = '<table width="400" border="0" cellspacing="1" cellpadding="35" bgcolor="#CCCCCC">';
  $error .= '  	                        <tr>';
  $error .= '  	                          <td height="300" align="center" valign="top" bgcolor="#FFFFFF" background="../img/error.jpg" style="background-repeat:no-repeat; background-position:bottom right"><p class="textoNormalBold">HUBO UN ERROR!!</p>';
  $error .= '  	                            <p class="txtExito">Lamentablemente ha ocurrido un error en nuestro sistema.<br />'.$mail->ErrorInfo.'<br/>';
  $error .= '  	                              <br />';
  $error .= '  	                              Si gusta puede enviarnos un mail directo a<br />';
  $error .= '  	                               <script type="text/javascript">document.write(';

  $error .= '"<n uers=\"znvygb:vasb@havpynff.py\" pynff=\"grkgbAbeznyObyq\">vasb@havpynff.py</n>".replace(/[a-zA-Z]/g, function(c){return String.fromCharCode((c<="Z"?90:122)>=(c=c.charCodeAt(0)+13)?c:c-26);}));';
  $error .= '              </script>';
  $error .= '               <br />';
  $error .= '  	                            </p>';
  $error .= '<p class="textoNormal">Atte.</p>';
  $error .= '  	                            <p class="textoNormalBold">PARTICIONES</p></td>';
  $error .= '	                          </tr>';
  $error .= '	                        </table>';
                              
} else {

		$mail             = new PHPMailer(); // defaults to using php "mail()"
		
		$mail->IsSMTP(); // telling the class to use SMTP
												   // 1 = errors and messages
												   // 2 = messages only
		$mail->SMTPAuth   = true;                  // enable SMTP authentication
		$mail->Host       = "mail.particiones.net"; // sets the SMTP server
		$mail->Port       = 587;                    // set the SMTP port for the GMAIL server
		$mail->Username   = "contacto@particiones.net"; // SMTP account username
		$mail->Password   = "mvWbND4K4J";        // SMTP account password
		
		$mail->SetFrom('ventas@particiones.net', 'Contacto Web PARTICIONES');
		
		$mail->AddReplyTo("ventas@particiones.net","PARTICIONES");
		
		
		$mail->AddAddress($_POST['email'], $_POST['nombre']);
		
		$mail->Subject    = "Contacto Web PARTICIONES";
		
		$mail->AltBody    = "Tu programa de Correo no permite leer este tipo de correo."; // optional, comment out and test
	
		$body  = '<p><strong  style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#C00"></strong></p>';
		$body .= '<p  style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#036">Gracias '.$_POST['nombre'].',<br><br>Hemos recibido su mensaje y sus datos, a la brevedad nos pondremos en contacto con Usted.</p><p  style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#036">Atte.</p><p  style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#C00"><strong>PARTICIONES S.A</strong><br />';

		$mail->MsgHTML($body);
		
				if(!$mail->Send()) {
				  $error .= '<table width="400" border="0" cellspacing="1" cellpadding="35" bgcolor="#CCCCCC">';
				  $error .= '  	                        <tr>';
				  $error .= '  	                          <td height="300" align="center" valign="top" bgcolor="#FFFFFF" background="../img/error.jpg" style="background-repeat:no-repeat; background-position:bottom right"><p class="textoNormalBold">HUBO UN ERROR!!</p>';
				  $error .= '  	                            <p class="txtExito">Lamentablemente ha ocurrido un error en nuestro sistema.<br />'.$mail->ErrorInfo.'<br/>';
				  $error .= '  	                              <br />';
				  $error .= '  	                              Si gusta puede enviarnos un mail directo a<br />';
				  $error .= '  	                               <script type="text/javascript">document.write(';
				  $error .= '"<n uers=\"znvygb:vasb@havpynff.py\" pynff=\"grkgbAbeznyObyq\">vasb@havpynff.py</n>".replace(/[a-zA-Z]/g, function(c){return String.fromCharCode((c<="Z"?90:122)>=(c=c.charCodeAt(0)+13)?c:c-26);}));';
				  $error .= '              </script>';
				  $error .= '               <br />';
				  $error .= '  	                            </p>';
				  $error .= '<p class="ttextoNormal">Atte.</p>';
				  $error .= '  	                            <p class="textoNormalBold">PARTICIONES</p></td>';
				  $error .= '	                          </tr>';
				  $error .= '	                        </table>';
								  
				} else {
				}
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Exito | Particiones · Solicite información. +56227391153. ventas@particiones.net</title>

<meta name="description" content="Particiones S.A. fabrica y comercializa separadores de fibra sólida de papel reciclado para la industria del vino, aceite, y otras. Contacto: +562 2739 1153" />
<meta name="keywords" content="Separadores, Tabiques, Particiones, Embalaje, Fibra sólida, Partitions, Box partitions,Fiber partitions " />

<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
<link rel="icon" href="../favicon.ico" type="image/x-icon">

<link href="../css/estilos.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Muli:300,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300,800' rel='stylesheet' type='text/css'>

<link rel="stylesheet" type="text/css" href="../css/demo.css" />
<link rel="stylesheet" type="text/css" href="../css/style2.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' rel='stylesheet' type='text/css' />
<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
</script>
<noscript>
  <link rel="stylesheet" type="text/css" href="../css/noscript.css" />
</noscript>
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico"
<link rel="stylesheet" type="text/css" href="../css/new/demo.css" />
<link rel="stylesheet" type="text/css" href="../css/new/common.css" />
<link rel="stylesheet" type="text/css" href="../css/new/style5.css" />

</head>

<body>
<div class="header">
  <div class="logo">
    <div class="cajaLogo"><a href="../index.php"><img src="../img/logo.jpg" width="281" height="147" border="0" /></a></div>
    <div class="slogan">
      <div class="menuMain">
        <div class="cajaMenuCurrent">CONTACTO</div>
        <div class="cajaSepa">|</div>
        <div class="cajaMenu"><a href="../clientes/">CLIENTES</a></div>
        <div class="cajaSepa">|</div>
        <div class="cajaMenu"><a href="../servicio/servicio.html">SERVICIO</a></div>
        <div class="cajaSepa">|</div>
        <div class="cajaMenu"><a href="../servicio/calidad.html">CALIDAD</a></div>
        <div class="cajaSepa">|</div>
        <div class="cajaMenu"><a href="../producto//">PRODUCTO</a></div>
        <div class="cajaSepa">|</div>
        <div class="cajaMenu"><a href="../empresa/">EMPRESA</a></div>
        
      </div>
    </div>
  </div>
</div>
<div class="bannerContacto">	
  <div class="titBanner">CONTACTO</div>
</div>
<div class="cajaContacto">	
  <div class="cajaSombraMapa"></div>  
  <div class="cajaConta_centro">
  	<div class="sepaTop"></div>    
    <div class="cajaConta1">    	
      <div class="cajaConta1_centro">
        <div class="logoCont"><span style="font-size:35px; color:#552e1f; line-height:40px">PARTICIONES</span></div>        
        <div class="addres">
          <p>Presidente Jorge Alessandri 11.500<img src="../img/sepaAdd1.png" width="25" height="12" /><br />
            edificio 1 espacio 2B<img src="../img/sepaAdd2.png" width="25" height="12" /><br />
            San Bernardo, Santiago<img src="../img/sepaAdd3.png" width="25" height="12" /><br />
            <br />
          </p>
Tel. +562 3207 1122<img src="../img/sepaAdd4.png" width="25" height="12" /><br />
        <script language=JavaScript>m='ventas@particiones.net';d=unescape(m);document.write(d);</script><img src="../img/sepaAdd5.png" width="25" height="12" />        </div>
      </div>
    </div>
    <div class="cajaConta2">
	<div class="cajaConta1_centro2">    	
		<div class="gracias"><span style="font-size:20px">¡¡ GRACIAS !!</span><br />
		  <br />
		Hemos recibido su mensaje.<br />
		<br />
		Uno de nuestros ejecutivos se pondrá<br />
		en contacto con Usted a la brevedad.<br />
		<br />
		PARTICIONES</div>
    </div>
    </div>
    <div class="clear" style="height:74px"></div>     
    <div class="googleMap">
      <div class="centroMapa1">      	
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3324.9170825918604!2d-70.7104205845931!3d-33.555530610299336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662db8efc62b73b%3A0xaa32391ee1039448!2sPdte+Jorge+Alessandri+Rodr%C3%ADguez+11500%2C+San+Bernardo%2C+Regi%C3%B3n+Metropolitana!5e0!3m2!1ses-419!2scl!4v1467671961964" width="940" height="338" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>
<div class="cajaGrisServ">	
  <div class="cajaGris_centro"></div>
</div>
<div class="redes">
  <div class="redes_int">  	
  	<!--<div class="cajaRedes" style="margin-right:25px"><a href="../youtube" target="_blank"><img class="fade" src="../img/youtube.png" width="68" height="68" alt="Vea nuestro canal de Youtube" /></a></div>-->
    <div class="cajaRedes"><a href="javascript:void(0);"><img class="fade" src="../img/skype.png" width="68" height="68" alt="Skype" title="Agréguenos en Skype"/></a></div>
    <div class="cajaRedes"><a href="../linkedin" target="_blank"><img class="fade" src="../img/linkedin.png" width="68" height="68" alt="Linkedin" title="Búsquenos en Linkedin"/></a></div>
    <div class="cajaRedes"><a href="https://www.facebook.com/profile.php?id=100006811399122&fref=ts" target="_blank"><img class="fade" src="../img/face.png" width="68" height="68" alt="Facebook" title="Síganos en Facebook" /></a></div>
  </div>
</div>
<div class="footer">	
  <div class="footer_int">
    <div class="caja1Footer">
      <div class="cajaTitCont">Contacto</div>
      <div class="cajaTitCont2">Presidente Jorge Alessandri 11.500 <br />
        edificio 1 espacio 2B<br />
        San Bernardo, Santiago.</div>
      <div class="cajaTitCont3">+562 3207 1122</div>
      <div class="cajaTitCont4"><script language=JavaScript>m='ventas@particiones.net';d=unescape(m);document.write(d);</script></div>
    </div>
    <div class="caja2Footer"></div>
    <div class="caja3Footer">
      <div class="cajaTitLink" style="color:#f90">Menú</div>
      <div class="menuLinks_web">
        <ul>
          <li><a href="../empresa/">Empresa</a></li>
          <li><a href="../producto/">Producto</a></li>
          <li><a href="../servicio/calidad.html">Calidad</a></li>
          <li><a href="../servicio/servicio.html">Servicio</a></li>
          <li><a href="../clientes">Clientes</a></li>
          <li class="menuLinks_web_current">Contacto</li>
        </ul>
      </div>
    </div>
  </div>  
  <div class="pie">  	
    <div class="pie_int">
      <div class="powered" style="color:#a78471"><a href="http://www.chilered.com" target="_blank">Powered by Chilered </a></div>
      <div class="powered" style="margin-left:260px">PARTICIONES • <script>document.write(new Date().getFullYear())</script> <span style="color:#F90; font-size:12px">®</span> Todos los Derechos Reservados</div>
    </div>
  </div>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
<script type="text/javascript" src="../js/jquery.eislideshow.js"></script>
<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
<script type="text/javascript">
            $(function() {
                $('#ei-slider').eislideshow({
					easing		: 'easeOutExpo',
					titleeasing	: 'easeOutExpo',
					titlespeed	: 1200
                });
            });
</script>
        
</body>
</html>
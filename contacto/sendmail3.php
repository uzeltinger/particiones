<?php

require_once('PHPMailer_v5.1/class.phpmailer.php');

$mail             = new PHPMailer(); // defaults to using php "mail()"

//$body             = file_get_contents('contents.html');
//$body             = eregi_replace("[\]",'',$body);


$mail->IsSMTP(); // telling the class to use SMTP
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Host       = "mail.grupounificados.cl"; // sets the SMTP server
$mail->Port       = 587;                    // set the SMTP port for the GMAIL server
$mail->Username   = "gabriel@grupounificados.cl"; // SMTP account username
$mail->Password   = "gabriel123";        // SMTP account password


$mail->SetFrom('gabriel@grupounificados.cl', 'Contacto Web');

$mail->AddReplyTo("gabriel@grupounificados.cl","UNICLASS");


$mail->AddAddress('rruiz@grupounificados.cl', "UNICLASS");

$mail->Subject    = "Contacto Web UNICLASS";

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
  $error .= '  	                            <p class="textoNormalBold">UNICLASS</p></td>';
  $error .= '	                          </tr>';
  $error .= '	                        </table>';
                              
} else {

		$mail             = new PHPMailer(); // defaults to using php "mail()"
		
		$mail->IsSMTP(); // telling the class to use SMTP
												   // 1 = errors and messages
												   // 2 = messages only
		$mail->SMTPAuth   = true;                  // enable SMTP authentication
		$mail->Host       = "mail.grupounificados.cl"; // sets the SMTP server
		$mail->Port       = 587;                    // set the SMTP port for the GMAIL server
		$mail->Username   = "gabriel@grupounificados.cl"; // SMTP account username
		$mail->Password   = "gabriel123";        // SMTP account password
		
		$mail->SetFrom('gabriel@grupounificados.cl', 'Contacto Web UNICLASS');
		
		$mail->AddReplyTo("gabriel@grupounificados.cl","UNICLASS");
		
		
		$mail->AddAddress($_POST['email'], $_POST['nombre']);
		
		$mail->Subject    = "Contacto Web UNICLASS";
		
		$mail->AltBody    = "Tu programa de Correo no permite leer este tipo de correo."; // optional, comment out and test
	
		$body  = '<p><strong  style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#C00"></strong></p>';
		$body .= '<p  style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#036">Gracias '.$_POST['nombre'].',<br><br>Hemos recibido su mensaje y sus datos, a la brevedad nos pondremos en contacto con Usted.</p><p  style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#036">Atte.</p><p  style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#C00"><strong>UNICLASS</strong><br />';

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
				  $error .= '  	                            <p class="textoNormalBold">UNICLASS</p></td>';
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
<title>UNICLASS · Contacto · E-Learning & Plataformas de Gestión </title>

<meta name="description" content="Particiones S.A. fabrica y comercializa separadores de fibra sólida de papel reciclado para la industria del vino, aceite, y otras. Contacto: +562 2739 1153" />
<meta name="keywords" content="Separadores, Tabiques, Particiones, Embalaje, Fibra sólida, Partitions, Box partitions,Fiber partitions " />


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
</head>

<body>
<div class="header">
  <div class="head1">
    <div class="head1_int">
      <div class="menuMain">
        <div class="cajaMenuCurrent">CONTACTO</div>
        <div class="cajaSepa">|</div>
        <div class="cajaMenu"><a href="../clientes/index.html">CASOS</a></div>
        <div class="cajaSepa">|</div>
        <div class="cajaMenu"><a href="../producto/index.html">SERVICIOS</a></div>
        <div class="cajaSepa">|</div>
        <div class="cajaMenu"><a href="../producto/index.html">EMPRESA</a></div>
        <div class="cajaSepa">|</div>
        <div class="cajaMenu"></div>
      </div>
    </div>
  </div>
  <div class="logo">
    <div class="cajaLogo"><a href="../index.html"><img src="../img/logo.jpg" width="281" height="147" border="0" title="Ir a HOME"/></a></div>
    <div class="slogan">
      <div class="cajaSlogan">E-LEARNING <span style="color:#5ab5ca">&amp;</span> PLATAFORMAS DE GESTION</div>
      <div class="cajaDots"></div>
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
        <div class="logoCont"><span style="font-size:35px; color:#00529e; line-height:40px">UNICLASS</span><br />
         <span style="font-size:15px; color:#F60; line-height:18px">E-LEARNING &amp; PLATAFORMAS DE GESTIÓN</span>
        </div>        
        <div class="addres">
          <p>Av. Nueva Providencia 2214<img src="../img/sepaAdd1.png" width="25" height="12" /><br />
            Oficina 156, Piso 15<img src="../img/sepaAdd2.png" width="25" height="12" /><br />
            Edificio Nuevo Centro<img src="../img/sepaAdd3.png" width="25" height="12" /><br />
            <br />
          </p>
          <p>Tel. +56 2 2348 2134<img src="../img/sepaAdd4.png" width="25" height="12" /><br />
          Email. info@uniclass.cl<img src="../img/sepaAdd5.png" width="25" height="12" /></p>
        </div>
      </div>
    </div>
    <div class="cajaConta2">
	<div class="cajaConta1_centro2">    	
		<div class="gracias"><span style="font-size:20px">¡¡ GRACIAS !!</span><br />
		  <br />
		Hemos recibido sus datos en forma exitosa.<br />
		<br />
		Uno de nuestros ejecutivos se pondrá en contacto con Usted a la brevedad.<br />
		<br />
		UNICLASS
        </div>
    </div>
    </div>
    <div class="clear" style="height:74px"></div>     
    <div class="googleMap">
      <div class="centroMapa1">      	
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3330.0442457321515!2d-70.60864660000001!3d-33.4220908!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662cf68c19c553d%3A0xf63195026c6c4f7b!2sNueva+Providencia+2214%2C+Providencia%2C+Regi%C3%B3n+Metropolitana!5e0!3m2!1ses-419!2scl!4v1409871412169" width="940" height="338" frameborder="0" style="border:0"></iframe>
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
      <div class="cajaTitCont2">Av. Nueva Providencia 2214<br />
        Piso 15, Oficina 156
      </div>
      <div class="cajaTitCont3">+56 22 348 2134</div>
      <div class="cajaTitCont4">info@uniclass.cl</div>
    </div>
    <div class="caja2Footer">
      <div class="cajaTitLink">Link</div>
      
      <div class="menuLinks">
      	<ul>
          <li><a href="http://www.grupounificados.cl" target="_blank">Grupo Unificados</a></li>
          <li><a href="http://www.grupounificados.cl" target="_blank">Unificados OTEC</a></li>
          <li><a href="javascript:void(0);">Unijob</a></li>
          <li><a href="javascript:void(0);">UniClass</a></li>
        </ul>
      </div>
    </div>
    <div class="caja3Footer">
      <div class="cajaTitLink" style="color:#f90">Menú</div>
      <div class="menuLinks_web">
        <ul>
          <li></li>
          <li><a href="../empreesa">Empresa</a></li>
          <li><a href="../producto/index.html">Servicios</a></li>
          <li><a href="../clientes/index.html">Casos</a></li>
          <li class="menuLinks_web_current">Contacto</li>
        </ul>
      </div>
    </div>
  </div>  
  <div class="pie">  	
    <div class="pie_int">
    	UNICLASS  •  E-LEARNING & PLATAFORMAS DE GESTION  •  2014 <span style="color:#F90; font-size:12px">®</span> Todos los Derechos Reservados
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
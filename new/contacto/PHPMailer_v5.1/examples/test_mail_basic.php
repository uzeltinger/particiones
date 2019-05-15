<html>
<head>
<title>PHPMailer - Mail() basic test</title>
<link rel="shortcut icon" href="favicon.ico">
<script type="text/javascript" src="http://www.belezapura.cl/js/stmenu.js"></script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-31775504-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<meta name="keywords" content="centro de estética, salud corporal, tratamientos faciales, tratamientos corporales, faciales, corporales, tratamientos embarazadas, tratamientos post parto, post parto, tratamientos para novias, tratamientos para madrinas. tratamientos para novios, cavitación, cavitacion, reflexología, reflexología, peeling, peeling profesional, modelante, adiposidades localizadas, celulitis, flaccidez, tratamientos de algas, tratamientos a base de murtilla, masaje de relajación, drenaje linfatico post quirúrgico, exfoliación corporal, electroporación, criolipólisis, limpieza profunda, hidratación profunda, facial glicólico + vitamina C, lifting facial, tratamientos a base de murtilla, electroporación, scanner de piel, cosmelan, delineado permanente, ondulación de pestañas, extensión de pestañas ">
</head>
<body>

<?php

require_once('../class.phpmailer.php');

$mail             = new PHPMailer(); // defaults to using php "mail()"

$body             = file_get_contents('contents.html');
$body             = eregi_replace("[\]",'',$body);

$mail->AddReplyTo("name@yourdomain.com","First Last");

$mail->SetFrom('name@yourdomain.com', 'First Last');

$mail->AddReplyTo("name@yourdomain.com","First Last");

$address = "whoto@otherdomain.com";
$mail->AddAddress($address, "John Doe");

$mail->Subject    = "PHPMailer Test Subject via mail(), basic";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);

$mail->AddAttachment("images/phpmailer.gif");      // attachment
$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}

?>

</body>
</html>

<html>
<head>
<title>POP before SMTP Test</title>
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
require_once('../class.pop3.php'); // required for POP before SMTP

$pop = new POP3();
$pop->Authorise('pop3.yourdomain.com', 110, 30, 'username', 'password', 1);

$mail = new PHPMailer();

$body             = file_get_contents('contents.html');
$body             = eregi_replace("[\]",'',$body);

$mail->IsSMTP();
$mail->SMTPDebug = 2;
$mail->Host     = 'pop3.yourdomain.com';

$mail->SetFrom('name@yourdomain.com', 'First Last');

$mail->AddReplyTo("name@yourdomain.com","First Last");

$mail->Subject    = "PHPMailer Test Subject via POP before SMTP, basic";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);

$address = "whoto@otherdomain.com";
$mail->AddAddress($address, "John Doe");

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

<html>
<head>
<title>PHPMailer - MySQL Database - SMTP basic test with authentication</title>
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

//error_reporting(E_ALL);
error_reporting(E_STRICT);

date_default_timezone_set('America/Toronto');

require_once('../class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail                = new PHPMailer();

$body                = file_get_contents('contents.html');
$body                = eregi_replace("[\]",'',$body);

$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host          = "smtp1.site.com;smtp2.site.com";
$mail->SMTPAuth      = true;                  // enable SMTP authentication
$mail->SMTPKeepAlive = true;                  // SMTP connection will not close after each email sent
$mail->Host          = "mail.yourdomain.com"; // sets the SMTP server
$mail->Port          = 26;                    // set the SMTP port for the GMAIL server
$mail->Username      = "yourname@yourdomain"; // SMTP account username
$mail->Password      = "yourpassword";        // SMTP account password
$mail->SetFrom('list@mydomain.com', 'List manager');
$mail->AddReplyTo('list@mydomain.com', 'List manager');

$mail->Subject       = "PHPMailer Test Subject via smtp, basic with authentication";

@MYSQL_CONNECT("localhost","root","password");
@mysql_select_db("my_company");
$query  = "SELECT full_name, email, photo FROM employee WHERE id=$id";
$result = @MYSQL_QUERY($query);

while ($row = mysql_fetch_array ($result)) {
  $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
  $mail->MsgHTML($body);
  $mail->AddAddress($row["email"], $row["full_name"]);
  $mail->AddStringAttachment($row["photo"], "YourPhoto.jpg");

  if(!$mail->Send()) {
    echo "Mailer Error (" . str_replace("@", "&#64;", $row["email"]) . ') ' . $mail->ErrorInfo . '<br />';
  } else {
    echo "Message sent to :" . $row["full_name"] . ' (' . str_replace("@", "&#64;", $row["email"]) . ')<br />';
  }
  // Clear all addresses and attachments for next loop
  $mail->ClearAddresses();
  $mail->ClearAttachments();
}
?>

</body>
</html>

<html>
<head>
<title>PHPMailer Lite - DKIM and Callback Function test</title>
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
/* This is a sample callback function for PHPMailer Lite.
 * This callback function will echo the results of PHPMailer processing.
 */

/* Callback (action) function
 *   bool    $result        result of the send action
 *   string  $to            email address of the recipient
 *   string  $cc            cc email addresses
 *   string  $bcc           bcc email addresses
 *   string  $subject       the subject
 *   string  $body          the email body
 * @return boolean
 */
function callbackAction ($result, $to, $cc, $bcc, $subject, $body) {
  /*
  this callback example echos the results to the screen - implement to
  post to databases, build CSV log files, etc., with minor changes
  */
  $to  = cleanEmails($to,'to');
  $cc  = cleanEmails($cc[0],'cc');
  $bcc = cleanEmails($bcc[0],'cc');
  echo $result . "\tTo: "  . $to['Name'] . "\tTo: "  . $to['Email'] . "\tCc: "  . $cc['Name'] . "\tCc: "  . $cc['Email'] . "\tBcc: "  . $bcc['Name'] . "\tBcc: "  . $bcc['Email'] . "\t"  . $subject . "<br />\n";
  return true;
}

$testLite = false;

if ($testLite) {
  require_once '../class.phpmailer-lite.php';
  $mail = new PHPMailerLite();
} else {
  require_once '../class.phpmailer.php';
  $mail = new PHPMailer();
}

try {
  $mail->IsMail(); // telling the class to use SMTP
  $mail->SetFrom('you@yourdomain.com', 'Your Name');
  $mail->AddAddress('another@yourdomain.com', 'John Doe');
  $mail->Subject = 'PHPMailer Lite Test Subject via Mail()';
  $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
  $mail->MsgHTML(file_get_contents('contents.html'));
  $mail->AddAttachment('images/phpmailer.gif');      // attachment
  $mail->AddAttachment('images/phpmailer_mini.gif'); // attachment
  $mail->action_function = 'callbackAction';
  $mail->Send();
  echo "Message Sent OK</p>\n";
} catch (phpmailerException $e) {
  echo $e->errorMessage(); //Pretty error messages from PHPMailer
} catch (Exception $e) {
  echo $e->getMessage(); //Boring error messages from anything else!
}

function cleanEmails($str,$type) {
  if ($type == 'cc') {
    $addy['Email'] = $str[0];
    $addy['Name']  = $str[1];
    return $addy;
  }
  if (!strstr($str, ' <')) {
    $addy['Name']  = '';
    $addy['Email'] = $addy;
    return $addy;
  }
  $addyArr = explode(' <', $str);
  if (substr($addyArr[1],-1) == '>') {
    $addyArr[1] = substr($addyArr[1],0,-1);
  }
  $addy['Name']  = $addyArr[0];
  $addy['Email'] = $addyArr[1];
  $addy['Email'] = str_replace('@', '&#64;', $addy['Email']);
  return $addy;
}

?>
</body>
</html>

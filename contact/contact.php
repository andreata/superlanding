<?php

if(!$_POST) exit;

define('spbpStrong', TRUE);

include '../config.php';

date_default_timezone_set('Europe/Rome');

require __DIR__  . '/../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");

$phone_before_trim = (isset($_POST['phone'])) ? $_POST['phone'] : '' ;
$name = (isset($_POST['name'])) ? $_POST['name'] : '' ;
$surname = (isset($_POST['surname'])) ? $_POST['surname'] : '' ;

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
   $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {                   
   $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
   $ip = $_SERVER['REMOTE_ADDR'];
}

$gclid = (isset($_POST['gclid'])) ? $_POST['gclid'] : '' ;
$msclkid = (isset($_POST['msclkid'])) ? $_POST['msclkid'] : '' ;
$fbclid = (isset($_POST['fbclid'])) ? $_POST['fbclid'] : '' ;
$medium = (isset($_POST['medium'])) ? $_POST['medium'] : '' ;
$utm_source = (isset($_POST['utm_source'])) ? $_POST['utm_source'] : '' ;
$cn = (isset($_POST['cn'])) ? $_POST['cn'] : '' ;
$kwd = (isset($_POST['kwd'])) ? $_POST['kwd'] : '' ;
$gbraid = (isset($_POST['gbraid'])) ? $_POST['gbraid'] : '' ;
$wbraid = (isset($_POST['wbraid'])) ? $_POST['wbraid'] : '' ;

$privacy = (isset($_POST['privacy'])) ? $_POST['privacy'] : '' ;


if($privacy == "accettata"){
	$privacy_crm = "Si";
} else {
	$privacy_crm = "No";
}

function clean($string) {
   $string = str_replace(' ', '', $string);
   return preg_replace('/[^0-9+]/', '', $string);
}

$phone = clean($phone_before_trim);

// Send Mail
try {
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;   // Enable verbose debug output
    $mail->isSMTP();                           // Send using SMTP
    $mail->Host       = $host_smtp;            // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                  // Enable SMTP authentication
    $mail->Username   = $mail_smtp;            // SMTP username
    $mail->Password   = $psw_smtp;             // SMTP password
    $mail->SMTPSecure = 'ssl';                 // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = $port_smtp;            // TCP port to connect to
	
	$mail->setFrom($form_email, $provenienza_lead);
	$mail->addAddress($to_email, $provenienza_lead);
	$mail->addReplyTo($to_email, $provenienza_lead);
	$crm_name = $provenienza_lead;

    $date_year = date('Y');
    $date_month = date('m');
    $date_day = date('d');
    $date_hours = date('H:i:s');

    if ($gclid) {
        $canale = 'Google';
        $click_id = $gclid;
    }
    if ($msclkid) {
        $canale = 'Microsoft';
        $click_id = $msclkid;
    }
    if ($fbclid) {
        $canale = 'Facebook';
        $click_id = $fbclid;
    }
    if ($gbraid) {
        $canale = 'Google';
        $click_id = $gbraid;
    }
    if ($wbraid) {
        $canale = 'Google';
        $click_id = $wbraid;
    }

    $mail->isHTML(true);
    $mail->Subject = $crm_name;
    $mail->Body = "Data Consenso: $date_day/$date_month/$date_year<br>
    Ora Consenso: $date_hours<br>
    Indirizzo Ip: $ip<br>
    Nome: $name<br>
    Cognome: $surname<br>
    Telefono: $phone<br>
    Canale: $canale<br>
    Provenienza Lead: $crm_name<br>
    Click Id: $click_id
	Privacy accettata: $privacy_crm<br>" . PHP_EOL . PHP_EOL;
 
    $mail->send();

} catch (Exception $e) {
    echo "Il messaggio non può essere inviato. Errore: {$mail->ErrorInfo}";
}


//Start Integrazion Vtiger
$date_year = date('Y');
$date_month = date('m');
$date_day = date('d');
$date_hours = date('H:i:s');

// Creata Data array
$data = array(
    '__vtrftk' => $__vtrftk,
    'publicid' => $publicid,
    'urlencodeenable' => '1',
    'name' => $nome_webform,
    'lastname' => $surname,
    'firstname' => $name,

    // Lead ricevuto il
    'cf_1299' => $date_year . '-' .$date_month . '-' . $date_day,

    // Telefono Principale
    'phone' => $phone,

    // Provenienza Lead
    'cf_660' => $crm_name,

    // Indirizzo IP
    'cf_1323' => $ip,

    // Data Consenso
    'cf_1325' => $date_year . '-' .$date_month . '-' . $date_day,

    // Ora Consenso
    'cf_1327' => $date_hours,

    // Campagna 
    'cf_768' => $campagna,

    'cf_1337' => $click_id,

    'cf_1357' => $referral_link,

    'cf_1353' => $canale,
	
	'cf_938' => $privacy_crm,

    //'company' => "Sales Performance S.R.L.S.",
);
// Create a connection
$url = 'https://vtigercrm.salesperformance.it/modules/Webforms/capture.php';
$ch = curl_init($url);

// Form data string
$postString = http_build_query($data, '', '&');

// Setting our options
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Get the response
$response = curl_exec($ch);

//echo $response;
curl_close($ch);

/*
**********************************************
STOP Integrazion Vtiger
**********************************************
*/

/*
**********************************************
Start Integrazion database MySQL
**********************************************
*/

    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $date_year = date('Y');
    $date_month = date('m');
    $date_day = date('d');
    $date_hours = date('H:i:s');
    $year = "$date_day/$date_month/$date_year";
    $name_landing = $referral_link;


    $sql = "INSERT INTO $nome_tabella (ip, nome, cognome, telefono, landing, anno, mese, giorno, ora, datalead, utm_source, clickid, id_leadcrm) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"; 
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("sssssssssssss", $ip, $name, $surname, $phone, $name_landing, $date_year, $date_month, $date_day, $date_hours, $year, $utm_source, $click_id, $leadid);

    $stmt->execute();
   


/*
**********************************************
Stop Integrazion database MySQL
**********************************************
*/

header("Location: /contact/grazie.php");
die();

?>



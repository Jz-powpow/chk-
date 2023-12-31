<?php

$owners = ["6321377431", "5995982496", "HexnyneJz", "97SKYY"];  // Add owner ids here

function getUsersCount($filename) {
    if(file_exists($filename)) {
        $lines = file($filename);
        return count($lines);
    } else {
        return 0; // Return 0 if the file doesn't exist
    }
}

$update = json_decode(file_get_contents('php://input'), true);

if (isset($update['message']['text'])) {
    $message = $update['message']['text'];
    $chat_id = $update['message']['chat']['id'];

    if ($message === '/users') {
        if (in_array($chat_id, $owners)) {
            $freeUserCount = getUsersCount('Database/free.txt');
            $paidUserCount = getUsersCount('Database/paid.txt');
            $banUserCount = getUsersCount('Database/banned.txt');
            $response = "<b>[†] 𝙐𝙨𝙪𝙖𝙧𝙞𝙤𝙨: {$freeUserCount}%0A[†] 𝙐𝙨𝙪𝙖𝙧𝙞𝙤𝙨 𝙙𝙚 𝙥𝙖𝙜𝙤: {$paidUserCount}%0A[†] 𝙐𝙨𝙪𝙖𝙧𝙞𝙤𝙨 𝙗𝙖𝙣𝙚𝙖𝙙𝙤𝙨: {$banUserCount}%0A%0A† [ʙᴏᴛ ʙʏ] † @hexnynejz </b>";
        } else {
            $response = "<b>𝙉𝙤 𝙚𝙧𝙚𝙨 𝙊𝙬𝙣𝙚𝙧 ❌</b>";
        }
        sendMessage($chat_id, $response, $message_id);
    }
}
?>

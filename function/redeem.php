<?php

if (strpos($message, "/redeem") === 0) {
    $codeToRedeem = trim(substr($message, 8)); // get the code from the message

    $codesAndExpiryDays = file('Database/codes.txt', FILE_IGNORE_NEW_LINES);
    $found = false;
    $newCodesAndExpiryDays = [];

    foreach ($codesAndExpiryDays as $line) {
        $line = trim($line);
        if (strpos($line, '') === 0 && strpos($line, '') !== false) {
            $parts = explode("|", substr($line, 1, -1)); // remove brackets and split code and expiry
            $codeFromFile = trim($parts[0]);
            
            if ($codeToRedeem === $codeFromFile && !$found) {
                $found = true;
                
                // Add the user id and the expiry date to the paid.txt file
                $expiryDays = (int) $parts[1];
                $expiryDate = date('Y-m-d', strtotime("+$expiryDays days"));
                file_put_contents('Database/paid.txt', "$userId $expiryDate\n", FILE_APPEND);

                sendMessage($chatId, "𝘾𝙖𝙣𝙟𝙚𝙖𝙙𝙤 𝙘𝙤𝙣 𝙚𝙭𝙞𝙩𝙤 ✅", $messageId);
            } else {
                $newCodesAndExpiryDays[] = $line;
            }
        }
    }

    if ($found) {
        file_put_contents('Database/codes.txt', implode("\n", $newCodesAndExpiryDays));
    } else {
        sendMessage($chatId, "𝙄𝙣𝙫𝙖𝙡𝙞𝙙𝙤 𝙤 𝙮𝙖 𝙛𝙪𝙚 𝙘𝙖𝙣𝙟𝙚𝙖𝙙𝙤 ❌.", $messageId);
    }
}
?>

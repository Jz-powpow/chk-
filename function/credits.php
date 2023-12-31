<?php


function checkAndUpdateUserStatus($userId, $username, $firstname, $chatId, $messageId) {
    $currentDate = date('Y-m-d');
    $rank = "FREE";
    $expiryDate = "0";

    $paidUsers = file('Database/paid.txt', FILE_IGNORE_NEW_LINES);
    $freeUsers = file('Database/free.txt', FILE_IGNORE_NEW_LINES);
    $owners = file('Database/owner.txt', FILE_IGNORE_NEW_LINES);

    if(in_array($userId, $owners)) {
        $rank = "OWNER";
       $expiryDate = "NUNCA"; 
    } else {
        foreach ($paidUsers as $index => $line) {
            list($userIdFromFile, $userExpiryDate) = explode(" ", $line);
            if ($userIdFromFile == $userId) {
                if ($userExpiryDate < $currentDate) {
                    unset($paidUsers[$index]); //
                    file_put_contents('Database/paid.txt', implode("\n", $paidUsers));
                    $freeUsers[] = $userId; // add to free users list
                    file_put_contents('Database/free.txt', implode("\n", $freeUsers));
                } else {
                    $rank = "PAID";
                    $expiryDate = $userExpiryDate;
                }
            }
        }
    }

    $messageToSend = "<b>
† 𝙐𝙨𝙚𝙧: @$username 
† 𝙄𝘿:  <code>$userId</code>
† 𝙍𝙖𝙣𝙠: $rank
† 𝙀𝙭𝙥𝙞𝙧𝙖𝙘𝙞𝙤𝙣: $expiryDate</b>";

    sendMessage($chatId, urlencode($messageToSend), $messageId);
}

// Then in the '.my' command
if (strpos($message, ".my") === 0) {
    checkAndUpdateUserStatus($userId, $username, $firstname, $chatId, $messageId);
}

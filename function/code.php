<?php

function clean($message) {
    return htmlspecialchars(trim($message));
}

function random_strings($length_of_string) {
    $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZIJKLMNOP28427JEKUBKQOPDH';
    $str_shuffled = str_shuffle($str_result);
    return substr($str_shuffled, 0, $length_of_string);
}

if ((strpos($message, "/code") === 0) || (strpos($message, "!code") === 0) || (strpos($message, ".code") === 0)) {
    $owners = file_get_contents('Database/owner.txt');
    $admins = explode("\n", $owners);
    if (!in_array($userId, $admins)) {
        sendMessage($chatId, "𝙉𝙊 𝙀𝙍𝙀𝙎 𝘼𝘿𝙈𝙄𝙉  ", $messageId);
    } else {
        $command = substr($message, 6);
        $command = clean($command);

        if ($command == ' ' || $command == '') {
            $expiryDays = 1;
            $amountOfCodes = 1;
        } else {
            $cmdExplode = explode('-', $command); // assuming the format is {expiry_days}-{amount_of_codes}
            $expiryDays = (int)$cmdExplode[0];
            $amountOfCodes = (int)$cmdExplode[1];
        }

        $expiryDate = date('d M Y', strtotime("+$expiryDays days")); // setting the key expiry date as provided by the owner

        $credt = array();
        while ($amountOfCodes > 0) {
            $rnds = 'DAXX-' . random_strings(4) . '-' . random_strings(4) . '-' . random_strings(4);
            $credt[] = $rnds;
            $amountOfCodes = $amountOfCodes - 1;
        }

        foreach ($credt as $code) {
            $credtf = fopen('Database/codes.txt', 'a');
            fwrite($credtf, "[$code|$expiryDays],\n");
            fclose($credtf);
            $formattedCode = "<code>$code</code>";
            $messageToSend = urlencode(
                "[†] 𝘽𝙤𝙩: @HxNyneBOT \n".
                "[†] 𝙆𝙚𝙮 𝙘𝙧𝙚𝙖𝙙𝙖 \n" .
                "[†] 𝙐𝙨𝙖 /redeem\n" .
                "[†] 𝙆𝙚𝙮: $formattedCode\n" .
                "[†] 𝘿𝙞𝙖𝙨: $expiryDays\n" .
                "[†] 𝙇𝙖 𝙠𝙚𝙮 𝙚𝙭𝙥𝙞𝙧𝙖 𝙚𝙣: $expiryDate\n" .
                "[†] 𝙍𝙖𝙣𝙠: PREMIUM"
            );
            sendMessage($chatId, $messageToSend, $messageId); // using $messageId instead of $message_id_1
        }
    }
}
?>

<?php


if (strpos($message, "/remexp") === 0) {
    // Read the owner's chat ID from the file
    $ownerId = trim(file_get_contents('Database/owner.txt'));

    // Check if the user's chat ID matches the owner's chat ID
    if ($chatId != $ownerId) {
        sendMessage($chatId, "𝙉𝙤 𝙚𝙧𝙚𝙨 𝙊𝙬𝙣𝙚𝙧 ❌", $randomArgument);
    } else {
        // The rest of your code goes here
        $lines = file('Database/paid.txt', FILE_IGNORE_NEW_LINES);
        $currentDate = date('Y-m-d');
        foreach ($lines as $index => $line) {
            list($userIdFromFile, $expiryDate) = explode(" ", $line);
            if ($expiryDate < $currentDate) {
                unset($lines[$index]); // remove the expired entry
            }
        }
        // save the remaining (non-expired) entries back to the file
        $result = file_put_contents('Database/paid.txt', implode("\n", $lines));
        if ($result !== false) {
            sendMessage($chatId, "𝙏𝙤𝙙𝙤𝙨 𝙡𝙤𝙨 𝙪𝙨𝙪𝙖𝙧𝙞𝙤𝙨 𝙘𝙖𝙙𝙪𝙘𝙖𝙙𝙤𝙨 𝙨𝙚 𝙚𝙡𝙞𝙢𝙞𝙣𝙖𝙧𝙤𝙣 𝙘𝙤𝙧𝙧𝙚𝙘𝙩𝙖𝙢𝙚𝙣𝙩𝙚 ✅", $randomArgument);
        } else {
            sendMessage($chatId, "𝙊𝙘𝙪𝙧𝙧𝙞𝙤 𝙪𝙣 𝙚𝙧𝙧𝙤𝙧 ❌", $randomArgument);
        }
    }
}

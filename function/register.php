<?php
if (preg_match('/\/register/', $message)) {
    // Load the existing users.
    $users = file_get_contents('Database/free.txt');
    $freeusers = explode("\n", $users);

    // Check if the user has already registered.
    if (in_array($userId, $freeusers)) {
        $response = '𝙔𝙖 𝙛𝙪𝙚 𝙧𝙚𝙜𝙞𝙨𝙩𝙧𝙖𝙙𝙤 ❌';
    } else {
        // If not, add the user to the file.
        $file = fopen('Database/free.txt', 'a');
        fwrite($file, $userId . "\n");
        fclose($file);

        $response = '𝙍𝙚𝙜𝙞𝙨𝙩𝙧𝙖𝙙𝙤 𝙘𝙤𝙧𝙧𝙚𝙘𝙩𝙖𝙢𝙚𝙣𝙩𝙚 ✅!𝙋𝙪𝙚𝙙𝙚𝙨 𝙪𝙨𝙖𝙧 /start';
    }

    // Send the response.
    reply_tox($chatId, $message_id, $keyboard, $response);
}
?>


<?php

function getUserProfilePhoto($userId) {
    global $website;
    $url = $website . "/getUserProfilePhotos?user_id=" . $userId . "&limit=1";

    $response = json_decode(file_get_contents($url), TRUE);

    if ($response === FALSE) {
        error_log("Failed to get user profile photo: " . $url);
        return null;
    }
    if ($response['ok'] && count($response['result']['photos']) > 0) {
        return $response['result']['photos'][0][0]['file_id'];
    }

    return null;
}



//============function end==========//
if (preg_match('/^(\/id|\.id|!info)/', $text)) {

    $photoId = getUserProfilePhoto($userId);

    $m = "<b>[火] User info %0A╔═════════════════╗%0A•├User[NAME] » @$username%0A•├User[ID] » <code>$userId</code>%0A•├Name[TG] » $firstname%0A•├User[RANK] » <code>$rank</code>%0A╚═════════════════╝%0A•𝘿𝙚𝙫 𝙗𝙮 » <code>@hexnynejz</code></b>";

    if ($photoId) {
        sendPhotox($chatId, $photoId, $m);
    } else {
        sendMessage($chatId, $m, $message_id);
    }
}

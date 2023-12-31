<?php


$users = file_get_contents('Database/free.txt');
$freeusers = explode("\n", $users);

$videoURLStart = "https://t.me/chkTest09/5";


if (preg_match('/^(start)/', $text)) {
    if (in_array($userId, $freeusers)) {
        $caption = "<b> ❀ 𝙃𝙤𝙡𝙖 ❀ @$username 
𝙄𝘿:  <code>$userId</code></b><code>
𝘽𝙞𝙚𝙣𝙫𝙚𝙣𝙞𝙙𝙤 𝙖 † 𝙃𝙚𝙭𝙣𝙮𝙣𝙚𝘾𝙃𝙆 †, 𝙥𝙪𝙚𝙙𝙚𝙨 𝙝𝙖𝙘𝙚𝙧 𝙪𝙨𝙤 𝙙𝙚 𝙡𝙤𝙨 𝙘𝙤𝙢𝙖𝙣𝙙𝙤𝙨 𝙘𝙤𝙣: ' /cmds ' 𝙔 𝙘𝙪𝙖𝙡𝙦𝙪𝙞𝙚𝙧 𝙏𝙤𝙤𝙡 # /cmds </code> <code>button</code> /cmds";
        sendVideox($chatId, $videoURLStart, $caption, $keyboard);
    } else {
        reply_tox($chatId,$message_id,$keyboard,"<code>𝙉𝙤 𝙚𝙨𝙩𝙖𝙨 𝙧𝙚𝙜𝙞𝙨𝙩𝙧𝙖𝙙𝙤, 𝙝𝙖𝙯𝙡𝙤 𝙘𝙤𝙣</code> /register <code> 𝙥𝙖𝙧𝙖 𝙪𝙨𝙖𝙧 𝙚𝙡 𝙗𝙤𝙩</code>");
    }
}
//=========START END========//
if (preg_match('/^(\/cmds|\.cmds|!cmds)/', $text)) {
  
    $videoUrl = "https://t.me/chkTest09/5"; 

    $keyboard2 = json_encode([
        'inline_keyboard' => [
            [
                ['text' => '𝙂𝙖𝙩𝙚𝙨', 'callback_data' => 'gates'],
                ['text' => '𝙏𝙤𝙤𝙡𝙨', 'callback_data' => 'herr'],
                ['text' => '𝙋𝙧𝙚𝙘𝙞𝙤𝙨', 'callback_data' => 'price'],
            ],
            [
                ['text' => '𝙁𝙞𝙣𝙖𝙡𝙞𝙯𝙖𝙧', 'callback_data' => 'finalize'],
            ],
            [
                ['text' => '𝘾𝙖𝙣𝙖𝙡', 'callback_data' => 'channel'],
            ],
        ]
    ]);

    $caption = "<b> 𝙎𝙞𝙜𝙪𝙞𝙚𝙣𝙩𝙚 𝙥𝙖𝙣𝙚𝙡: ⛏ $firstname
    
𝙀𝙭𝙥𝙡𝙤𝙧𝙖𝙧: </b>";
    file_get_contents("https://api.telegram.org/bot$botToken/deleteMessage?chat_id=$chatId&message_id=$messageId");

    // Using sendVideo endpoint instead of sendPhoto
    file_get_contents("https://api.telegram.org/bot$botToken/sendVideo?chat_id=$chatId&video=$videoUrl&caption=" . urlencode($caption) . "&parse_mode=HTML&reply_markup=$keyboard2");
}

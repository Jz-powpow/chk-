<?php

$botToken = "6778123440:AAFy-V-cHZg0xADqspnb4vA_JXD8cjNFJik";
$website = "https://api.telegram.org/bot".$botToken;
$update = file_get_contents('php://input');
//echo $update;
$update = json_decode($update, TRUE);
//global $website;
$e = print_r($update);
$update["message"]["chat"]["title"]; 
$newusername     = $update["message"]["new_chat_member"]["username"];
$newgId          = $update["message"]["new_chat_member"]["id"];
$newfirstname    = $update["message"]["new_chat_member"]["first_name"];
$new_chat_member = $update["message"]["new_chat_member"];
$message         = $update["message"]["text"];
$message_id      = $update["message"]["message_id"];
$chatId          = $update["message"]["chat"]["id"];
$username2       = $update["message"]["from"]["username"];
$firstname       = $update["message"]["from"]["first_name"];
$cdata2          = $update["callback_query"]["data"];
$cchatid2        = $update["callback_query"]["message"]["chat"]["id"]; 
$username2       = $update["callback_query"]["from"]["username"];
$firstname2      = $update["callback_query"]["from"]["first_name"];
$userId2         = $update["callback_query"]["from"]["id"];
$cmessage_id2    = $update["callback_query"]["message"]["message_id"]; 
$username3       = ('@'.$username);
// $username3       = '@'.$username2;
 $info            = json_encode($update, JSON_PRETTY_PRINT); 
$emojid = '❌';
$emojil = '✅';
$owner = '<code>@hexnyejz</code>';
$cofuid = '1212';
$cofuid2 = '1212';
$cofuid3 = '1212';
#FIN DE LA CAPTURA

$update = json_decode(file_get_contents("php://input"));

$chat_id = $update->message->chat->id;

$userId = $update->message->from->id;

$userIdd = $update->message->reply_to_message->from->id;

$firstnamee = $update->message->reply_to_message->from->first_name;

$firstname = $update->message->from->first_name;

$lastname = $update->message->from->last_name;

$username = $update->message->from->username;

$chattype = $update->message->chat->type;

$replytomessageis = $update->message->reply_to_message->text;

$replytomessagei = $update->message->reply_to_message->from->id;

$replytomessageiss = $update->message->reply_to_message;

$data = $update->callback_query->data;

$callbackfname = $update->callback_query->from->first_name;

$callbacklname = $update->callback_query->from->last_name;

$callbackusername = $update->callback_query->from->username;

$callbackchatid = $update->callback_query->message->chat->id;

$callbackuserid = $update->callback_query->message->reply_to_message->from->id;

$callbackmessageid = $update->callback_query->message->message_id;

$callbackfrom = $update->callback_query->from->id;

$callbackmessage = $update->callback_query->message->text;

$callbackid = $update->callback_query->id;

$text = $update->message->text;
$owner = '<code>@hexnynejz</code>';




//=======inline keyboard========//
$keyboard = json_encode([
    'inline_keyboard' => [
        [
            ['text' => "[ᴏᴡɴᴇʀ]", 'url' => "t.me/hexnynejz"],
            ['text' => "[ꜱᴇʟʟᴇʀ]", 'url' => "https://t.me/SKYY970"],
        ],
    ]
]);

//=======Inline Keyboard for "BACK" button========//

if ($cdata2 == "back") {
    // Go back to the welcome page
    $gatesText = "<b>━━━━━━━━━━━━━━━━━━━\n" . str_repeat(' ', 20) . "† 𝑮𝑨𝑻𝑬𝑾𝑨𝒀𝑺 †" . str_repeat(' ', 20) . "\n━━━━━━━━━━━━━━━━━━━\n TOTAL GATES ⇢ 9\n ⡷⠂ᴘʀᴇᴍɪᴜᴍ ɢᴀᴛᴇꜱ⠐⢾ ⇢ 5\n ⡷⠂ꜰʀᴇᴇ ɢᴀᴛᴇꜱ⠐⢾ ⇢ 4\n\n † [ʙᴏᴛ ʙʏ] † @hexnynejz</b>";

    $gatesText = "<b>━━━━━━━━━━━━━━━━━━━\n" 
               . str_repeat(' ', 20) . " † 𝑮𝑨𝑻𝑬𝑾𝑨𝒀𝑺 † " 
               . str_repeat(' ', 20) 
               . "\n━━━━━━━━━━━━━━━━━━━\n 𝗚𝗔𝗧𝗘𝗦 ⇢ 9\n ⡷⠂ᴘʀᴇᴍɪᴜᴍ ɢᴀᴛᴇꜱ⠐⢾ ⇢ 5 \n ⡷⠂ꜰʀᴇᴇ ɢᴀᴛᴇꜱ⠐⢾ ⇢ 4\n\n━━━━━━━━━━━━━━━━━━━\n •𝘿𝙚𝙫 𝙗𝙮 † <code>@hexnynejz</code></b>";

    $gatesKeyboard = json_encode([
        'inline_keyboard' => [
            [['text' => '𝙋𝙍𝙀𝙈𝙄𝙐𝙈 ', 'callback_data' => 'premium'], ['text' => '𝙁𝙍𝙀𝙀 ', 'callback_data' => 'free']],
            [['text' => '𝘼𝙏𝙍𝘼𝙎', 'callback_data' => 'back2']]
        ]
    ]);
    $videoUrl = "https://t.me/chkTest09/5";

    $inputMediaVideo = json_encode([
        'type' => 'video',
        'media' => $videoUrl,
        'caption' => $gatesText,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($gatesKeyboard));
}

//============GATES START===========//

if ($cdata2 == "gates") {
    $gatesText = "<b>━━━━━━━━━━━━━━━━━━━\n" 
               . str_repeat(' ', 20) . "『 𝑮𝑨𝑻𝑬𝑾𝑨𝒀𝑺 』" 
               . str_repeat(' ', 20) 
               . "\n━━━━━━━━━━━━━━━━━━━\n 𝗧𝗼𝘁𝗮𝗹 𝗚𝗔𝗧𝗘𝗦 ⇢ 9\n ⡷⠂ᴘʀᴇᴍɪᴜᴍ ɢᴀᴛᴇꜱ⠐⢾ ⇢ 5\n ⡷⠂ꜰʀᴇᴇ ɢᴀᴛᴇꜱ⠐⢾ ⇢ 4\n\n━━━━━━━━━━━━━━━━━━━\n •𝘿𝙚𝙫 𝙗𝙮 † <code>@hexnynejz</code></b>";

  
    $gatesKeyboard = json_encode([
        'inline_keyboard' => [
            [['text' => '𝙋𝙍𝙀𝙈𝙄𝙐𝙈 ', 'callback_data' => 'premium'], ['text' => '𝙁𝙍𝙀𝙀 ', 'callback_data' => 'free']],
            [['text' => '𝘼𝙏𝙍𝘼𝙎', 'callback_data' => 'back2']]
        ]
    ]);

    $videoUrl = "https://t.me/chkTest09/5";

    $inputMediaVideo = json_encode([
        'type' => 'video',
        'media' => $videoUrl,
        'caption' => $gatesText,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($gatesKeyboard));
}





//=========Back===========//

$premiumButton = json_encode([
    'inline_keyboard' => [
        [
            ['text' => '𝙋𝙍𝙀𝙈𝙄𝙐𝙈 ', 'callback_data' => 'premium'],
            ['text' => '𝘼𝙏𝙍𝘼𝙎 ', 'callback_data' => 'back']
        ]
    ]
]);

if ($cdata2 == "free") {
    $freeText = "<b>\n𝙁𝙍𝙀𝙀 𝙂𝘼𝙏𝙀𝙎 ⇢\n\n╔═════════════════╗\n├<u>𝑮𝒂𝒕𝒆𝒘𝒂𝒚 </u> : 𝑺𝒕𝒓𝒊𝒑𝒆 𝑪𝒉𝒂𝒓𝒈𝒆 $1 ✅ 
├𝑼𝒔𝒆𝒓 : 𝗙𝗥𝗘𝗘 
├𝙐𝙎𝙊 : <code>/au 𝒄𝒄|𝒎𝒎|𝒆𝒙𝒑|𝒄𝒗𝒗 </code>\n\n├<u>𝑮𝒂𝒕𝒆𝒘𝒂𝒚</u> : Auth
├𝑼𝒔𝒆𝒓 : 𝑭𝒓𝒆𝒆 on ✅
├𝙐𝙎𝙊 : <code>/sr 𝒄𝒄|𝒎𝒎|𝒆𝒙𝒑|𝒄𝒗𝒗 </code>\n\n├<u>𝑮𝒂𝒕𝒆𝒘𝒂𝒚</u> : OFF ❌
├𝑼𝒔𝒆𝒓 : 𝘰𝘧𝘧𝘭𝘪𝘯𝘦 
├𝙐𝙎𝙊 : <code>/pp 𝒄𝒄|𝒎𝒎|𝒆𝒙𝒑|𝒄𝒗𝒗 </code>\n\n├<u>𝑮𝒂𝒕𝒆𝒘𝒂𝒚</u> : PAYPAL
├𝑼𝒔𝒆𝒓 : 𝑭𝒓𝒆𝒆 on ✅
├𝙐𝙎𝙊 : <code>/ccn 𝒄𝒄|𝒎𝒎|𝒆𝒙𝒑|𝒄𝒗𝒗 </code>\n╚═════════════════╝\n</b>";

    // Replace this with your video URL
    $videoUrl = "https://t.me/chkTest09/5";

    $inputMediaVideo = json_encode([
        'type' => 'video',
        'media' => $videoUrl,
        'caption' => $freeText,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($premiumButton));
}


//========Premium and free=======//
$freeButton = json_encode([
    'inline_keyboard' => [
        [
            ['text' => '𝙁𝙍𝙀𝙀 ', 'callback_data' => 'free'],
            ['text' => '𝘼𝙏𝙍𝘼𝙎 ', 'callback_data' => 'back']
        ]
    ]
]);

if ($cdata2 == "premium") {
   $premiumText = "┏                                                  ┓
 † 𝙋𝙍𝙀𝙈𝙄𝙐𝙈 𝙂𝘼𝙏𝙀𝙎 †  
┗                                                  ┛
- - - - - - - - - - - - - - - - - - - - -
𝙂𝙚𝙩𝙖𝙬𝙖𝙮 ★ 𝗦𝗤𝗨𝗔𝗥𝗘 𝗔𝗨𝗧𝗛 
┣ꜱᴛᴀᴛᴜꜱ [ ᴏɴʟɪɴᴇ ✅ ]
┣ᴜꜱᴇʀ [ ᴘʀᴇᴍɪᴜᴍ ]
┣ꜰᴏʀᴍᴀᴛ: /sq ᴄᴄ|ᴍᴏɴᴛʜ|ʏᴇᴀʀ|ᴄᴠᴠ
- - - - - - - - - - - - - - - - - - - - -
𝙂𝙖𝙩𝙚𝙬𝙖𝙮 ★ CCN CHARGE
┣ꜱᴛᴀᴛᴜꜱ [ ᴏɴʟɪɴᴇ ✅ ]
┣ᴜꜱᴇʀ [ ᴘʀᴇᴍɪᴜᴍ ]
┣ꜰᴏʀᴍᴀᴛ: /ccn ᴄᴄ|ᴍᴏɴᴛʜ|ʏᴇᴀʀ|ᴄᴠᴠ
- - - - - - - - - - - - - - - - - - - - -
 𝙂𝙖𝙩𝙚𝙬𝙖𝙮 ★ 𝙎𝙩𝙧𝙞𝙥𝙚 [ 𝟭$ ]
┣ꜱᴛᴀᴛᴜꜱ [ ᴏɴʟɪɴᴇ ✅ ]
┣ᴜꜱᴇʀ [ ᴘʀᴇᴍɪᴜᴍ ]
┣ꜰᴏʀᴍᴀᴛ: /chk ᴄᴄ|ᴍᴏɴᴛʜ|ʏᴇᴀʀ|ᴄᴠᴠ
- - - - - - - - - - - - - - - - - - - - -
𝙂𝙖𝙩𝙚𝙬𝙖𝙮 ★ BRAINTREE
┣ꜱᴛᴀᴛᴜꜱ [ ᴏɴʟɪɴᴇ ✅ ]
┣ᴜꜱᴇʀ [ ᴘʀᴇᴍɪᴜᴍ ]
┣ꜰᴏʀᴍᴀᴛ: /bra ᴄᴄ|ᴍᴏɴᴛʜ|ʏᴇᴀʀ|ᴄᴠᴠ
 - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
𝙂𝙖𝙩𝙚𝙬𝙖𝙮 - 𝙋𝙖𝙮𝙛𝙡𝙤𝙬 𝘼𝙫𝙨
┣ꜱᴛᴀᴛᴜꜱ [ ᴏɴʟɪɴᴇ ✅ ]
┣ᴜꜱᴇʀ [ none ]
┣ꜰᴏʀᴍᴀᴛ: /pf ᴄᴄ|ᴍᴏɴᴛʜ|ʏᴇᴀʀ|ᴄᴠᴠ
- - - - - - - - - - - - - - - - - - - - -

┗━━━━━━━━━━━━━━━━━━━
";

    // Replace this with your video URL
    $videoUrl = "https://t.me/chkTest09/5";

    $inputMediaVideo = json_encode([
        'type' => 'video', 
        'media' => $videoUrl,
        'caption' => $premiumText,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($freeButton));
}


//=======Premium and free end=====//


//==============TOOLS===============//
$toolKeyboard = json_encode([
    'inline_keyboard' => [
        [['text' => "𝙂𝘼𝙏𝙀𝙎", 'callback_data' => 'gates'], ['text' => "𝘼𝙏𝙍𝘼𝙎", 'callback_data' => 'back2']]
    ]
]);



if ($cdata2 == "herr") {

  $toolcmds = "<b>
🛠 𝑻𝒐𝒐𝒍𝒔 🛠
╔═════════════════╗
├<u>𝙄𝙣𝙛𝙤</u> » /id\n├𝙐𝙎𝙊 » <code>/id</code>

├<u>𝙄𝙋 𝙇𝙤𝙤𝙠𝙪𝙥</u> » /ip\n├𝙐𝙎𝙊 » /ip <code>1.1.1.1</code>

├<u>𝘽𝙞𝙣 𝙇𝙤𝙤𝙠𝙪𝙥</u> » /bin\n├𝙐𝙎𝙊 » <code>/bin 601120</code> 

├<u>𝙂𝙚𝙣</u> » /gen\n├𝙐𝙎𝙊 » <code>/gen 601120xxx|xx|xx|xxx</code>

├<u>𝘾𝙧𝙚𝙙𝙞𝙩𝙤𝙨</u> » /credits \n├𝙐𝙎𝙊 » <code> /credits Check </code>

├<u>𝙁𝙖𝙠𝙚 𝙖𝙙𝙙𝙧𝙚𝙨</u> » /addr\n├𝙐𝙎𝙊 » <code>/addr us</code>

├<u>𝙎𝙆 𝘾𝙝𝙚𝙘𝙠</u> » /sk\n├𝙐𝙎𝙊 » <code>/sk sk_live_</code>
 
╚═════════════════╝

               </b>";
  
    // Change this to your video URL
    $videoUrl = "https://t.me/chkTest09/5";

    $inputMediaVideo = json_encode([
        'type' => 'video',
        'media' => $videoUrl,
        'caption' => $toolcmds,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($toolKeyboard));
}



//=============TOOLS END============//

//=============PRICE===============//
if ($cdata2 == "price") {
    $priceText = "<b>\n" . str_repeat(' ', 20) . "『 𝙋𝙧𝙚𝙘𝙞𝙤𝙨 』" . str_repeat(' ', 20) . "\n╔═════════════════╗\n •├15 𝘿𝙞𝙖𝙨 ⇢ 3.5$\n •├30 𝘿𝙞𝙖𝙨 ⇢ 5$\n╚═════════════════╝\n •𝙎𝙀𝙇𝙇𝙀𝙍 † <code>@SKYY970</code>\n━━━━━━━━━━━━━━━━━━━</b>";

    $priceKeyboard = json_encode([
        'inline_keyboard' => [
            [['text' => '𝙄𝙉𝙄𝘾𝙄𝙊', 'callback_data' => 'back2'], ['text' => '𝙎𝙀𝙇𝙇𝙀𝙍', 'url' => 'https://t.me/SKYY970']]
        ]
    ]);

    // Change this to your video URL
    $videoUrl = "https://t.me/chkTest09/5";

    $inputMediaVideo = json_encode([
        'type' => 'video',
        'media' => $videoUrl,
        'caption' => $priceText,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($priceKeyboard));
}



//=============PRICE END============//

if ($cdata2 == "finalize") {
    if ($callbackfrom != $callbackuserid) {

    bot('answerCallbackQuery', [
      'callback_query_id' => $callbackid,
      'text' => "Not Allowed ❌",
      "show_alert" => true
    ]);

  } else {
file_get_contents("https://api.telegram.org/bot$botToken/deleteMessage?chat_id=$cchatid2&message_id=$cmessage_id2");
}
}





//========finalize end=========//
$channel = json_encode([
    'inline_keyboard' => [
        [['text' => "𝙂𝙧𝙪𝙥𝙤 ", 'url' => "https://t.me/hexnynechkgroup"], ['text' => "𝘾𝙖𝙣𝙖𝙡", 'url' => "https://t.me/chkTest09"]],
        [['text' => "𝘼𝙏𝙍𝘼𝙎 ", 'callback_data' => 'back2']]
    ]
]);

if ($cdata2 == "channel") {
    $channelText = "<b>✞</b>";
    
    // Change this to your video URL
    $videoUrl = "https://t.me/chkTest09/5";

    $inputMediaVideo = json_encode([
        'type' => 'video',
        'media' => $videoUrl,
        'caption' => $channelText,
        'parse_mode' => 'HTML'
    ]);

file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($channel));
}



//==========back and close========//
if ($cdata2 == "back2") {
    $backtxt = ("<b>𝘾𝙊𝙈𝘼𝙉𝘿𝙊𝙎 $firstname
    
</b>");
    
    // Change this to your video url
    $backVideoUrl = "https://t.me/chkTest09/5"; 

    $keyboard2 = json_encode([
        'inline_keyboard' => [
            [
                ['text' => '𝙂𝙖𝙩𝙚𝙨', 'callback_data' => 'gates'],
                ['text' => '𝙏𝙤𝙤𝙡𝙨', 'callback_data' => 'herr'],
                ['text' => '𝙋𝙧𝙚𝙘𝙞𝙤𝙨 ', 'callback_data' => 'price'],
            ],
            [
                ['text' => '𝙁𝙞𝙣𝙖𝙡𝙞𝙯𝙖𝙧', 'callback_data' => 'finalize'],
            ],
            [
                ['text' => '𝘾𝙖𝙣𝙖𝙡 ', 'callback_data' => 'channel'],
            ],
        ]
    ]);

    $mediaArray = json_encode([
        'type' => 'video',
        'media' => $backVideoUrl,
        'caption' => $backtxt,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($mediaArray) . "&reply_markup=$keyboard2");
}


//========back and close end=======//

//=========functions started=========//

///=====Function Sendphoto======//
function sendPhotox($chatId, $photo, $caption, $keyboard = null) {
    global $website;
    $url = $website."/sendPhoto?chat_id=".$chatId."&photo=".$photo."&caption=".$caption."&parse_mode=HTML";
    
    if ($keyboard != null) {
        $url .= "&reply_markup=".$keyboard;
    }

    return file_get_contents($url);
}

///======function sendVideo========///
function sendVideox($chatId, $videoURL, $caption, $keyboard) {
    global $botToken;
    $url = "https://api.telegram.org/bot$botToken/sendVideo?chat_id=$chatId&video=$videoURL&caption=" . urlencode($caption) . "&parse_mode=HTML&reply_markup=$keyboard";
    file_get_contents($url);
}



function reply_tox($chatId,$message_id,$keyboard,$message) {
    global $website;
    $url = $website."/sendMessage?chat_id=".$chatId."&text=".$message."&reply_to_message_id=".$message_id."&parse_mode=HTML&reply_markup=".$keyboard."";
    return file_get_contents($url);
}

function deleteM($chatId,$message_id){
    global $website;
    $url = $website."/deleteMessage?chat_id=".$chatId."&message_id=".$message_id."";
    file_get_contents($url);
}


function edit_message($chatId,$message,$message_id_1) {
  sendChatAction($chatId,"type");
   $url = $GLOBALS['website']."/editMessageText?chat_id=".$chatId."&text=".$message."&message_id=".$message_id."&parse_mode=HTML&disable_web_page_preview=True";
	file_get_contents($url);
}


function multiexplode($delimiters, $string)
{
  $one = str_replace($delimiters, $delimiters[0], $string);
  $two = explode($delimiters[0], $one);
  return $two;
}

function gibarray($message){
    return explode("\n", $message);
}

function sendMessage ($chatId, $message, $messageId){
  sendChatAction($chatId,"type");
$url = $GLOBALS['website']."/sendMessage?chat_id=".$chatId."&text=".$message."&parse_mode=html&disable_web_page_preview=True";
file_get_contents($url);
  
};
function delMessage ($chatId, $messageId){
$url = $GLOBALS['website']."/deleteMessage?chat_id=".$chatId."&message_id=".$messageId."";
file_get_contents($url);
};

function sendChatAction($chatId, $action)
{
  
$data = array("type" => "typing", "photo" => "upload_photo", "rcvideo" => "record_video", "video" => "upload_video", "rcvoice" => "record_voice", "voice" => "upload_voice", "doc" => "upload_document", "location" => "find_location", "rcvideonote" => "record_video_note", "uvideonote" => "upload_video_note");
$actiontype = $data["$action"];
$url = $GLOBALS['website']."/sendChatAction?chat_id=".$chatId."&action=".$actiontype."&parse_mode=HTML";
file_get_contents($url);
  
}

function answerCallbackQuery($data) {
    global $botToken; // Use the global bot token

    $url = "https://api.telegram.org/bot$botToken/answerCallbackQuery";

    $options = [
        'http' => [
            'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data)
        ]
    ];

    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

}

function bot($method, $datas = [])
{
    global $botToken;
    $url = "https://api.telegram.org/bot" . $botToken . "/" . $method;

    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => json_encode($datas),
        CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
    ]);

    $response = curl_exec($ch);
    $error = curl_error($ch);
    curl_close($ch);

    if ($error) {
        // Manejar el error de cURL
        return false;
    } else {
        // Decodificar la respuesta
        $result = json_decode($response, true);

        if ($result['ok']) {
            // La solicitud fue exitosa
            return $result['result'];
        } else {
            // Manejar el error de la API de Telegram
            return false;
        }
    }
}

//=========Functions end===========//


foreach (glob("tools/*.php") as $filename)
{
    include $filename;
} 

foreach (glob("function/*.php") as $filename)
{
    include $filename;
} 

foreach (glob("gates/*.php") as $filename)
{
    include $filename;
} 

foreach (glob("admin/*.php") as $filename)
{
    include $filename;
} 



//==========foreach end============//



?>

    

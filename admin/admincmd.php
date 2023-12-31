<?php
if ((strpos($message, "/adm") === 0)||(strpos($message, "!adm") === 0)||(strpos($message, ".adm") === 0))
{
  $owners = file_get_contents('Database/owner.txt');
  $admins = explode("\n", $owners);
  if (!in_array($userId, $admins)) {
      sendMessage($chatId,"𝙉𝙤 𝙚𝙧𝙚𝙨 𝘼𝙙𝙢𝙞𝙣 ❌",$messageId);
  } else
  {
  sendMessage($chatId,urlencode(
    "<b>
𝘼𝙙𝙢𝙞𝙣 𝙘𝙢𝙙𝙨:

† 𝙂𝙚𝙣𝙚𝙧𝙖𝙧 𝙠𝙚𝙮: /code day-amount
𝙐𝙨𝙤: <code>/code 1-1</code>

† 𝙀𝙡𝙞𝙢𝙞𝙣𝙖𝙧 𝙚𝙭𝙥𝙞𝙧𝙖𝙙𝙤𝙨: /remexp
𝙐𝙨𝙤: <code>/remexp</code>

† 𝙀𝙧𝙞 𝙜𝙚𝙞 :𝙫 /gay
𝙐𝙨𝙤: <code>/gay</code>
</b>"),$messageId);
  }
}

?>

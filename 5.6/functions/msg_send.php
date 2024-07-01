<?php

return array (
  'type' => 'function',
  'name' => 'msg_send',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'msg_send',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'msg_send function (php.net)',
        'url' => 'https://www.php.net/manual/function.msg-send.php',
      ),
    ),
  ),
  'doc' => false,
  'parameters' => 
  array (
  ),
  'return' => NULL,
  'extension' => 'sysvmsg',
  'toString' => 'Function [ <internal:sysvmsg> function msg_send ] {

  - Parameters [6] {
    Parameter #0 [ <required> $queue ]
    Parameter #1 [ <required> $msgtype ]
    Parameter #2 [ <required> $message ]
    Parameter #3 [ <optional> $serialize ]
    Parameter #4 [ <optional> $blocking ]
    Parameter #5 [ <optional> &$errorcode ]
  }
}
',
);

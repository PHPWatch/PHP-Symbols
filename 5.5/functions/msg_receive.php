<?php

return array (
  'type' => 'function',
  'name' => 'msg_receive',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'msg_receive',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'msg_receive function (php.net)',
        'url' => 'https://www.php.net/manual/function.msg-receive.php',
      ),
    ),
  ),
  'doc' => false,
  'parameters' => 
  array (
  ),
  'return' => NULL,
  'extension' => 'sysvmsg',
  'toString' => 'Function [ <internal:sysvmsg> function msg_receive ] {

  - Parameters [8] {
    Parameter #0 [ <required> $queue ]
    Parameter #1 [ <required> $desiredmsgtype ]
    Parameter #2 [ <required> &$msgtype ]
    Parameter #3 [ <required> $maxsize ]
    Parameter #4 [ <required> &$message ]
    Parameter #5 [ <optional> $unserialize ]
    Parameter #6 [ <optional> $flags ]
    Parameter #7 [ <optional> &$errorcode ]
  }
}
',
);

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
  'return' => 
  array (
    'type' => 'ReflectionNamedType',
    'nullable' => false,
  ),
  'extension' => 'sysvmsg',
  'toString' => 'Function [ <internal:sysvmsg> function msg_receive ] {

  - Parameters [8] {
    Parameter #0 [ <required> SysvMessageQueue $queue ]
    Parameter #1 [ <required> int $desired_message_type ]
    Parameter #2 [ <required> &$received_message_type ]
    Parameter #3 [ <required> int $max_message_size ]
    Parameter #4 [ <required> mixed &$message ]
    Parameter #5 [ <optional> bool $unserialize = true ]
    Parameter #6 [ <optional> int $flags = 0 ]
    Parameter #7 [ <optional> &$error_code = null ]
  }
  - Return [ bool ]
}
',
);

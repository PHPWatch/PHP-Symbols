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
  'return' => 
  array (
    'type' => 
    \ReflectionNamedType::__set_state(array(
    )),
    'nullable' => false,
  ),
  'extension' => 'sysvmsg',
  'toString' => 'Function [ <internal:sysvmsg> function msg_send ] {

  - Parameters [6] {
    Parameter #0 [ <required> SysvMessageQueue $queue ]
    Parameter #1 [ <required> int $message_type ]
    Parameter #2 [ <required> $message ]
    Parameter #3 [ <optional> bool $serialize = true ]
    Parameter #4 [ <optional> bool $blocking = true ]
    Parameter #5 [ <optional> &$error_code = null ]
  }
  - Return [ bool ]
}
',
);

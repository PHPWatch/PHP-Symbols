<?php

return array (
  'type' => 'function',
  'name' => 'socket_sendmsg',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'socket_sendmsg',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'socket_sendmsg function (php.net)',
        'url' => 'https://www.php.net/manual/function.socket-sendmsg.php',
      ),
    ),
  ),
  'doc' => false,
  'parameters' => 
  array (
  ),
  'return' => 
  array (
    'type' => 'ReflectionUnionType',
    'nullable' => false,
  ),
  'extension' => 'sockets',
  'toString' => 'Function [ <internal:sockets> function socket_sendmsg ] {

  - Parameters [3] {
    Parameter #0 [ <required> Socket $socket ]
    Parameter #1 [ <required> array $message ]
    Parameter #2 [ <optional> int $flags = 0 ]
  }
  - Return [ int|false ]
}
',
);

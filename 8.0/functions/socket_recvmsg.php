<?php

return array (
  'type' => 'function',
  'name' => 'socket_recvmsg',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'socket_recvmsg',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'socket_recvmsg function (php.net)',
        'url' => 'https://www.php.net/manual/function.socket-recvmsg.php',
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
    ReflectionUnionType::__set_state(array(
    )),
    'nullable' => false,
  ),
  'extension' => 'sockets',
  'toString' => 'Function [ <internal:sockets> function socket_recvmsg ] {

  - Parameters [3] {
    Parameter #0 [ <required> Socket $socket ]
    Parameter #1 [ <required> array &$message ]
    Parameter #2 [ <optional> int $flags = 0 ]
  }
  - Return [ int|false ]
}
',
);

<?php

return array (
  'type' => 'function',
  'name' => 'socket_sendto',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'socket_sendto',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'socket_sendto function (php.net)',
        'url' => 'https://www.php.net/manual/function.socket-sendto.php',
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
  'toString' => 'Function [ <internal:sockets> function socket_sendto ] {

  - Parameters [6] {
    Parameter #0 [ <required> Socket $socket ]
    Parameter #1 [ <required> string $data ]
    Parameter #2 [ <required> int $length ]
    Parameter #3 [ <required> int $flags ]
    Parameter #4 [ <required> string $address ]
    Parameter #5 [ <optional> ?int $port = null ]
  }
  - Return [ int|false ]
}
',
);

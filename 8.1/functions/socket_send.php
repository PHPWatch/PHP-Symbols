<?php

return array (
  'type' => 'function',
  'name' => 'socket_send',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'socket_send',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'socket_send function (php.net)',
        'url' => 'https://www.php.net/manual/function.socket-send.php',
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
  'toString' => 'Function [ <internal:sockets> function socket_send ] {

  - Parameters [4] {
    Parameter #0 [ <required> Socket $socket ]
    Parameter #1 [ <required> string $data ]
    Parameter #2 [ <required> int $length ]
    Parameter #3 [ <required> int $flags ]
  }
  - Return [ int|false ]
}
',
);

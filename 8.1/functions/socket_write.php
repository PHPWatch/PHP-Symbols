<?php

return array (
  'type' => 'function',
  'name' => 'socket_write',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'socket_write',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'socket_write function (php.net)',
        'url' => 'https://www.php.net/manual/function.socket-write.php',
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
  'toString' => 'Function [ <internal:sockets> function socket_write ] {

  - Parameters [3] {
    Parameter #0 [ <required> Socket $socket ]
    Parameter #1 [ <required> string $data ]
    Parameter #2 [ <optional> ?int $length = null ]
  }
  - Return [ int|false ]
}
',
);

<?php

return array (
  'type' => 'function',
  'name' => 'socket_read',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'socket_read',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'socket_read function (php.net)',
        'url' => 'https://www.php.net/manual/function.socket-read.php',
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
  'toString' => 'Function [ <internal:sockets> function socket_read ] {

  - Parameters [3] {
    Parameter #0 [ <required> Socket $socket ]
    Parameter #1 [ <required> int $length ]
    Parameter #2 [ <optional> int $mode = PHP_BINARY_READ ]
  }
  - Return [ string|false ]
}
',
);

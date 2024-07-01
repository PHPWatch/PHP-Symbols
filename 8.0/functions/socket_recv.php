<?php

return array (
  'type' => 'function',
  'name' => 'socket_recv',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'socket_recv',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'socket_recv function (php.net)',
        'url' => 'https://www.php.net/manual/function.socket-recv.php',
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
  'toString' => 'Function [ <internal:sockets> function socket_recv ] {

  - Parameters [4] {
    Parameter #0 [ <required> Socket $socket ]
    Parameter #1 [ <required> &$data ]
    Parameter #2 [ <required> int $length ]
    Parameter #3 [ <required> int $flags ]
  }
  - Return [ int|false ]
}
',
);

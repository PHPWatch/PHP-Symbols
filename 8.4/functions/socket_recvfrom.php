<?php

return array (
  'type' => 'function',
  'name' => 'socket_recvfrom',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'socket_recvfrom',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'socket_recvfrom function (php.net)',
        'url' => 'https://www.php.net/manual/function.socket-recvfrom.php',
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
    \ReflectionUnionType::__set_state(array(
    )),
    'nullable' => false,
  ),
  'extension' => 'sockets',
  'toString' => 'Function [ <internal:sockets> function socket_recvfrom ] {

  - Parameters [6] {
    Parameter #0 [ <required> Socket $socket ]
    Parameter #1 [ <required> &$data ]
    Parameter #2 [ <required> int $length ]
    Parameter #3 [ <required> int $flags ]
    Parameter #4 [ <required> &$address ]
    Parameter #5 [ <optional> &$port = null ]
  }
  - Return [ int|false ]
}
',
);

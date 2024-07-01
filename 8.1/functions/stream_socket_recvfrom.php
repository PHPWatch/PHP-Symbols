<?php

return array (
  'type' => 'function',
  'name' => 'stream_socket_recvfrom',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'stream_socket_recvfrom',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'stream_socket_recvfrom function (php.net)',
        'url' => 'https://www.php.net/manual/function.stream-socket-recvfrom.php',
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
  'extension' => 'standard',
  'toString' => 'Function [ <internal:standard> function stream_socket_recvfrom ] {

  - Parameters [4] {
    Parameter #0 [ <required> $socket ]
    Parameter #1 [ <required> int $length ]
    Parameter #2 [ <optional> int $flags = 0 ]
    Parameter #3 [ <optional> &$address = null ]
  }
  - Return [ string|false ]
}
',
);

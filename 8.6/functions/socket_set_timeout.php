<?php

return array (
  'type' => 'function',
  'name' => 'socket_set_timeout',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'socket_set_timeout',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => true,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'socket_set_timeout function (php.net)',
        'url' => 'https://www.php.net/manual/function.socket-set-timeout.php',
      ),
    ),
  ),
  'doc' => false,
  'parameters' => 
  array (
  ),
  'return' => 
  array (
    'type' => 'ReflectionNamedType',
    'nullable' => false,
  ),
  'extension' => 'standard',
  'toString' => 'Function [ <internal, deprecated:standard> function socket_set_timeout ] {

  - Parameters [3] {
    Parameter #0 [ <required> $stream ]
    Parameter #1 [ <required> int $seconds ]
    Parameter #2 [ <optional> int $microseconds = 0 ]
  }
  - Return [ bool ]
}
',
  'attributes' => 
  array (
    '__self' => 
    array (
      0 => 
      array (
        'attribute' => 'Deprecated',
        'params' => 
        array (
          'since' => '8.5',
          'message' => 'use stream_set_timeout() instead',
        ),
      ),
    ),
  ),
);

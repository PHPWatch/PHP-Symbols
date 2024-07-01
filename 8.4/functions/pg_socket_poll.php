<?php

return array (
  'type' => 'function',
  'name' => 'pg_socket_poll',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_socket_poll',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_socket_poll function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-socket-poll.php',
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
  'extension' => 'pgsql',
  'toString' => 'Function [ <internal:pgsql> function pg_socket_poll ] {

  - Parameters [4] {
    Parameter #0 [ <required> $socket ]
    Parameter #1 [ <required> int $read ]
    Parameter #2 [ <required> int $write ]
    Parameter #3 [ <optional> int $timeout = -1 ]
  }
  - Return [ int ]
}
',
);

<?php

return array (
  'type' => 'function',
  'name' => 'socket_create_listen',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'socket_create_listen',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'socket_create_listen function (php.net)',
        'url' => 'https://www.php.net/manual/function.socket-create-listen.php',
      ),
    ),
  ),
  'doc' => false,
  'parameters' => 
  array (
  ),
  'return' => 
  array (
    'type' => 'ReflectionUnionType',
    'nullable' => false,
  ),
  'extension' => 'sockets',
  'toString' => 'Function [ <internal:sockets> function socket_create_listen ] {

  - Parameters [2] {
    Parameter #0 [ <required> int $port ]
    Parameter #1 [ <optional> int $backlog = SOMAXCONN ]
  }
  - Return [ Socket|false ]
}
',
);

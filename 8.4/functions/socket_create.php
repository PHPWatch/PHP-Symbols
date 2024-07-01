<?php

return array (
  'type' => 'function',
  'name' => 'socket_create',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'socket_create',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'socket_create function (php.net)',
        'url' => 'https://www.php.net/manual/function.socket-create.php',
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
  'toString' => 'Function [ <internal:sockets> function socket_create ] {

  - Parameters [3] {
    Parameter #0 [ <required> int $domain ]
    Parameter #1 [ <required> int $type ]
    Parameter #2 [ <required> int $protocol ]
  }
  - Return [ Socket|false ]
}
',
);

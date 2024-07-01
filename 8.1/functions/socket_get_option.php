<?php

return array (
  'type' => 'function',
  'name' => 'socket_get_option',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'socket_get_option',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'socket_get_option function (php.net)',
        'url' => 'https://www.php.net/manual/function.socket-get-option.php',
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
  'toString' => 'Function [ <internal:sockets> function socket_get_option ] {

  - Parameters [3] {
    Parameter #0 [ <required> Socket $socket ]
    Parameter #1 [ <required> int $level ]
    Parameter #2 [ <required> int $option ]
  }
  - Return [ array|int|false ]
}
',
);

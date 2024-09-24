<?php

return array (
  'type' => 'function',
  'name' => 'socket_select',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'socket_select',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'socket_select function (php.net)',
        'url' => 'https://www.php.net/manual/function.socket-select.php',
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
  'toString' => 'Function [ <internal:sockets> function socket_select ] {

  - Parameters [5] {
    Parameter #0 [ <required> ?array &$read ]
    Parameter #1 [ <required> ?array &$write ]
    Parameter #2 [ <required> ?array &$except ]
    Parameter #3 [ <required> ?int $seconds ]
    Parameter #4 [ <optional> int $microseconds = 0 ]
  }
  - Return [ int|false ]
}
',
);

<?php

return array (
  'type' => 'function',
  'name' => 'stream_select',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'stream_select',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'stream_select function (php.net)',
        'url' => 'https://www.php.net/manual/function.stream-select.php',
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
  'extension' => 'standard',
  'toString' => 'Function [ <internal:standard> function stream_select ] {

  - Parameters [5] {
    Parameter #0 [ <required> ?array &$read ]
    Parameter #1 [ <required> ?array &$write ]
    Parameter #2 [ <required> ?array &$except ]
    Parameter #3 [ <required> ?int $seconds ]
    Parameter #4 [ <optional> ?int $microseconds = null ]
  }
  - Return [ int|false ]
}
',
);

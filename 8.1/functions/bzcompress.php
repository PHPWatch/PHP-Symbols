<?php

return array (
  'type' => 'function',
  'name' => 'bzcompress',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'bzcompress',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'bzcompress function (php.net)',
        'url' => 'https://www.php.net/manual/function.bzcompress.php',
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
  'extension' => 'bz2',
  'toString' => 'Function [ <internal:bz2> function bzcompress ] {

  - Parameters [3] {
    Parameter #0 [ <required> string $data ]
    Parameter #1 [ <optional> int $block_size = 4 ]
    Parameter #2 [ <optional> int $work_factor = 0 ]
  }
  - Return [ string|int ]
}
',
);

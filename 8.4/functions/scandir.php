<?php

return array (
  'type' => 'function',
  'name' => 'scandir',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'scandir',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'scandir function (php.net)',
        'url' => 'https://www.php.net/manual/function.scandir.php',
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
  'extension' => 'standard',
  'toString' => 'Function [ <internal:standard> function scandir ] {

  - Parameters [3] {
    Parameter #0 [ <required> string $directory ]
    Parameter #1 [ <optional> int $sorting_order = SCANDIR_SORT_ASCENDING ]
    Parameter #2 [ <optional> $context = null ]
  }
  - Return [ array|false ]
}
',
);

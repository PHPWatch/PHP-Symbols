<?php

return array (
  'type' => 'function',
  'name' => 'fgetcsv',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'fgetcsv',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'fgetcsv function (php.net)',
        'url' => 'https://www.php.net/manual/function.fgetcsv.php',
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
  'toString' => 'Function [ <internal:standard> function fgetcsv ] {

  - Parameters [5] {
    Parameter #0 [ <required> $stream ]
    Parameter #1 [ <optional> ?int $length = null ]
    Parameter #2 [ <optional> string $separator = "," ]
    Parameter #3 [ <optional> string $enclosure = "\\"" ]
    Parameter #4 [ <optional> string $escape = "\\\\" ]
  }
  - Return [ array|false ]
}
',
);

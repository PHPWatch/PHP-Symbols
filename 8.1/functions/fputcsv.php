<?php

return array (
  'type' => 'function',
  'name' => 'fputcsv',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'fputcsv',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'fputcsv function (php.net)',
        'url' => 'https://www.php.net/manual/function.fputcsv.php',
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
  'extension' => 'standard',
  'toString' => 'Function [ <internal:standard> function fputcsv ] {

  - Parameters [6] {
    Parameter #0 [ <required> $stream ]
    Parameter #1 [ <required> array $fields ]
    Parameter #2 [ <optional> string $separator = "," ]
    Parameter #3 [ <optional> string $enclosure = "\\"" ]
    Parameter #4 [ <optional> string $escape = "\\\\" ]
    Parameter #5 [ <optional> string $eol = "\\n" ]
  }
  - Return [ int|false ]
}
',
);

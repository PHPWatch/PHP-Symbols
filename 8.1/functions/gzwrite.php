<?php

return array (
  'type' => 'function',
  'name' => 'gzwrite',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'gzwrite',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'gzwrite function (php.net)',
        'url' => 'https://www.php.net/manual/function.gzwrite.php',
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
  'extension' => 'zlib',
  'toString' => 'Function [ <internal:zlib> function gzwrite ] {

  - Parameters [3] {
    Parameter #0 [ <required> $stream ]
    Parameter #1 [ <required> string $data ]
    Parameter #2 [ <optional> ?int $length = null ]
  }
  - Return [ int|false ]
}
',
);

<?php

return array (
  'type' => 'function',
  'name' => 'gzencode',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'gzencode',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'gzencode function (php.net)',
        'url' => 'https://www.php.net/manual/function.gzencode.php',
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
  'extension' => 'zlib',
  'toString' => 'Function [ <internal:zlib> function gzencode ] {

  - Parameters [3] {
    Parameter #0 [ <required> string $data ]
    Parameter #1 [ <optional> int $level = -1 ]
    Parameter #2 [ <optional> int $encoding = ZLIB_ENCODING_GZIP ]
  }
  - Return [ string|false ]
}
',
);

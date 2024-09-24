<?php

return array (
  'type' => 'function',
  'name' => 'gzcompress',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'gzcompress',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'gzcompress function (php.net)',
        'url' => 'https://www.php.net/manual/function.gzcompress.php',
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
  'toString' => 'Function [ <internal:zlib> function gzcompress ] {

  - Parameters [3] {
    Parameter #0 [ <required> string $data ]
    Parameter #1 [ <optional> int $level = -1 ]
    Parameter #2 [ <optional> int $encoding = ZLIB_ENCODING_DEFLATE ]
  }
  - Return [ string|false ]
}
',
);

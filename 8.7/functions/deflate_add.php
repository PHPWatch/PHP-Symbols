<?php

return array (
  'type' => 'function',
  'name' => 'deflate_add',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'deflate_add',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'deflate_add function (php.net)',
        'url' => 'https://www.php.net/manual/function.deflate-add.php',
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
  'toString' => 'Function [ <internal:zlib> function deflate_add ] {

  - Parameters [3] {
    Parameter #0 [ <required> DeflateContext $context ]
    Parameter #1 [ <required> string $data ]
    Parameter #2 [ <optional> int $flush_mode = ZLIB_SYNC_FLUSH ]
  }
  - Return [ string|false ]
}
',
);

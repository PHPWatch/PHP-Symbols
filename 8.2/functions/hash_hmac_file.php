<?php

return array (
  'type' => 'function',
  'name' => 'hash_hmac_file',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'hash_hmac_file',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'hash_hmac_file function (php.net)',
        'url' => 'https://www.php.net/manual/function.hash-hmac-file.php',
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
  'extension' => 'hash',
  'toString' => 'Function [ <internal:hash> function hash_hmac_file ] {

  - Parameters [4] {
    Parameter #0 [ <required> string $algo ]
    Parameter #1 [ <required> string $filename ]
    Parameter #2 [ <required> string $key ]
    Parameter #3 [ <optional> bool $binary = false ]
  }
  - Return [ string|false ]
}
',
  'attributes' => 
  array (
    'params' => 
    array (
      'key' => 
      array (
        0 => 
        array (
          'attribute' => 'SensitiveParameter',
          'params' => 
          array (
          ),
        ),
      ),
    ),
  ),
);

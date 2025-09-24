<?php

return array (
  'type' => 'function',
  'name' => 'openssl_verify',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'openssl_verify',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'openssl_verify function (php.net)',
        'url' => 'https://www.php.net/manual/function.openssl-verify.php',
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
  'extension' => 'openssl',
  'toString' => 'Function [ <internal:openssl> function openssl_verify ] {

  - Parameters [5] {
    Parameter #0 [ <required> string $data ]
    Parameter #1 [ <required> string $signature ]
    Parameter #2 [ <required> $public_key ]
    Parameter #3 [ <optional> string|int $algorithm = OPENSSL_ALGO_SHA1 ]
    Parameter #4 [ <optional> int $padding = 0 ]
  }
  - Return [ int|false ]
}
',
);

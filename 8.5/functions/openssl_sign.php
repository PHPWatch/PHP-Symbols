<?php

return array (
  'type' => 'function',
  'name' => 'openssl_sign',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'openssl_sign',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'openssl_sign function (php.net)',
        'url' => 'https://www.php.net/manual/function.openssl-sign.php',
      ),
    ),
  ),
  'doc' => false,
  'parameters' => 
  array (
  ),
  'return' => 
  array (
    'type' => 'ReflectionNamedType',
    'nullable' => false,
  ),
  'extension' => 'openssl',
  'toString' => 'Function [ <internal:openssl> function openssl_sign ] {

  - Parameters [5] {
    Parameter #0 [ <required> string $data ]
    Parameter #1 [ <required> &$signature ]
    Parameter #2 [ <required> $private_key ]
    Parameter #3 [ <optional> string|int $algorithm = OPENSSL_ALGO_SHA1 ]
    Parameter #4 [ <optional> int $padding = 0 ]
  }
  - Return [ bool ]
}
',
  'attributes' => 
  array (
    'params' => 
    array (
      'private_key' => 
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

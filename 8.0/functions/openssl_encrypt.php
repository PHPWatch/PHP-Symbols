<?php

return array (
  'type' => 'function',
  'name' => 'openssl_encrypt',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'openssl_encrypt',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'openssl_encrypt function (php.net)',
        'url' => 'https://www.php.net/manual/function.openssl-encrypt.php',
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
  'toString' => 'Function [ <internal:openssl> function openssl_encrypt ] {

  - Parameters [8] {
    Parameter #0 [ <required> string $data ]
    Parameter #1 [ <required> string $cipher_algo ]
    Parameter #2 [ <required> string $passphrase ]
    Parameter #3 [ <optional> int $options = 0 ]
    Parameter #4 [ <optional> string $iv = "" ]
    Parameter #5 [ <optional> &$tag = null ]
    Parameter #6 [ <optional> string $aad = "" ]
    Parameter #7 [ <optional> int $tag_length = 16 ]
  }
  - Return [ string|false ]
}
',
);

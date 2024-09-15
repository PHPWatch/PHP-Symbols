<?php

return array (
  'type' => 'function',
  'name' => 'openssl_decrypt',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'openssl_decrypt',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'openssl_decrypt function (php.net)',
        'url' => 'https://www.php.net/manual/function.openssl-decrypt.php',
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
  'toString' => 'Function [ <internal:openssl> function openssl_decrypt ] {

  - Parameters [7] {
    Parameter #0 [ <required> string $data ]
    Parameter #1 [ <required> string $cipher_algo ]
    Parameter #2 [ <required> string $passphrase ]
    Parameter #3 [ <optional> int $options = 0 ]
    Parameter #4 [ <optional> string $iv = "" ]
    Parameter #5 [ <optional> ?string $tag = null ]
    Parameter #6 [ <optional> string $aad = "" ]
  }
  - Return [ string|false ]
}
',
  'attributes' => 
  array (
    'params' => 
    array (
      'passphrase' => 
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

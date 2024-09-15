<?php

return array (
  'type' => 'function',
  'name' => 'openssl_public_encrypt',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'openssl_public_encrypt',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'openssl_public_encrypt function (php.net)',
        'url' => 'https://www.php.net/manual/function.openssl-public-encrypt.php',
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
  'toString' => 'Function [ <internal:openssl> function openssl_public_encrypt ] {

  - Parameters [4] {
    Parameter #0 [ <required> string $data ]
    Parameter #1 [ <required> &$encrypted_data ]
    Parameter #2 [ <required> $public_key ]
    Parameter #3 [ <optional> int $padding = OPENSSL_PKCS1_PADDING ]
  }
  - Return [ bool ]
}
',
  'attributes' => 
  array (
    'params' => 
    array (
      'data' => 
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

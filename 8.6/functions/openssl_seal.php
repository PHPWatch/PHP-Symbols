<?php

return array (
  'type' => 'function',
  'name' => 'openssl_seal',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'openssl_seal',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'openssl_seal function (php.net)',
        'url' => 'https://www.php.net/manual/function.openssl-seal.php',
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
  'toString' => 'Function [ <internal:openssl> function openssl_seal ] {

  - Parameters [7] {
    Parameter #0 [ <required> string $data ]
    Parameter #1 [ <required> &$sealed_data ]
    Parameter #2 [ <required> &$encrypted_keys ]
    Parameter #3 [ <required> array $public_key ]
    Parameter #4 [ <required> string $cipher_algo ]
    Parameter #5 [ <optional> &$iv = null ]
    Parameter #6 [ <optional> &$tag = null ]
  }
  - Return [ int|false ]
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

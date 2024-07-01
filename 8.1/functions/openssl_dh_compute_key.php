<?php

return array (
  'type' => 'function',
  'name' => 'openssl_dh_compute_key',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'openssl_dh_compute_key',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'openssl_dh_compute_key function (php.net)',
        'url' => 'https://www.php.net/manual/function.openssl-dh-compute-key.php',
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
  'toString' => 'Function [ <internal:openssl> function openssl_dh_compute_key ] {

  - Parameters [2] {
    Parameter #0 [ <required> string $public_key ]
    Parameter #1 [ <required> OpenSSLAsymmetricKey $private_key ]
  }
  - Return [ string|false ]
}
',
);

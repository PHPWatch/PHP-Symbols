<?php

return array (
  'type' => 'function',
  'name' => 'openssl_pkey_get_private',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'openssl_pkey_get_private',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'openssl_pkey_get_private function (php.net)',
        'url' => 'https://www.php.net/manual/function.openssl-pkey-get-private.php',
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
  'toString' => 'Function [ <internal:openssl> function openssl_pkey_get_private ] {

  - Parameters [2] {
    Parameter #0 [ <required> $private_key ]
    Parameter #1 [ <optional> ?string $passphrase = null ]
  }
  - Return [ OpenSSLAsymmetricKey|false ]
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

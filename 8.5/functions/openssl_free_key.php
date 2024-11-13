<?php

return array (
  'type' => 'function',
  'name' => 'openssl_free_key',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'openssl_free_key',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => true,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'openssl_free_key function (php.net)',
        'url' => 'https://www.php.net/manual/function.openssl-free-key.php',
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
  'toString' => 'Function [ <internal, deprecated:openssl> function openssl_free_key ] {

  - Parameters [1] {
    Parameter #0 [ <required> OpenSSLAsymmetricKey $key ]
  }
  - Return [ void ]
}
',
  'attributes' => 
  array (
    '__self' => 
    array (
      0 => 
      array (
        'attribute' => 'Deprecated',
        'params' => 
        array (
          'since' => '8.0',
          'message' => 'as OpenSSLAsymmetricKey objects are freed automatically',
        ),
      ),
    ),
  ),
);

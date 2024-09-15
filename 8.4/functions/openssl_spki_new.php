<?php

return array (
  'type' => 'function',
  'name' => 'openssl_spki_new',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'openssl_spki_new',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'openssl_spki_new function (php.net)',
        'url' => 'https://www.php.net/manual/function.openssl-spki-new.php',
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
  'toString' => 'Function [ <internal:openssl> function openssl_spki_new ] {

  - Parameters [3] {
    Parameter #0 [ <required> OpenSSLAsymmetricKey $private_key ]
    Parameter #1 [ <required> string $challenge ]
    Parameter #2 [ <optional> int $digest_algo = OPENSSL_ALGO_MD5 ]
  }
  - Return [ string|false ]
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

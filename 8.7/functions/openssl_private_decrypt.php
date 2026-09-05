<?php

return array (
  'type' => 'function',
  'name' => 'openssl_private_decrypt',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'openssl_private_decrypt',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'openssl_private_decrypt function (php.net)',
        'url' => 'https://www.php.net/manual/function.openssl-private-decrypt.php',
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
  'toString' => 'Function [ <internal:openssl> function openssl_private_decrypt ] {

  - Parameters [5] {
    Parameter #0 [ <required> string $data ]
    Parameter #1 [ <required> &$decrypted_data ]
    Parameter #2 [ <required> $private_key ]
    Parameter #3 [ <optional> int $padding = OPENSSL_PKCS1_PADDING ]
    Parameter #4 [ <optional> ?string $digest_algo = null ]
  }
  - Return [ bool ]
}
',
  'attributes' => 
  array (
    'params' => 
    array (
      'decrypted_data' => 
      array (
        0 => 
        array (
          'attribute' => 'SensitiveParameter',
          'params' => 
          array (
          ),
        ),
      ),
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

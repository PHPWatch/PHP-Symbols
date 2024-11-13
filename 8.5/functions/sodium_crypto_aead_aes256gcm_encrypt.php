<?php

return array (
  'type' => 'function',
  'name' => 'sodium_crypto_aead_aes256gcm_encrypt',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'sodium_crypto_aead_aes256gcm_encrypt',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'sodium_crypto_aead_aes256gcm_encrypt function (php.net)',
        'url' => 'https://www.php.net/manual/function.sodium-crypto-aead-aes256gcm-encrypt.php',
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
  'extension' => 'sodium',
  'toString' => 'Function [ <internal:sodium> function sodium_crypto_aead_aes256gcm_encrypt ] {

  - Parameters [4] {
    Parameter #0 [ <required> string $message ]
    Parameter #1 [ <required> string $additional_data ]
    Parameter #2 [ <required> string $nonce ]
    Parameter #3 [ <required> string $key ]
  }
  - Return [ string ]
}
',
  'attributes' => 
  array (
    'params' => 
    array (
      'message' => 
      array (
        0 => 
        array (
          'attribute' => 'SensitiveParameter',
          'params' => 
          array (
          ),
        ),
      ),
      'key' => 
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

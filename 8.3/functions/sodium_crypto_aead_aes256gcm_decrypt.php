<?php

return array (
  'type' => 'function',
  'name' => 'sodium_crypto_aead_aes256gcm_decrypt',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'sodium_crypto_aead_aes256gcm_decrypt',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'sodium_crypto_aead_aes256gcm_decrypt function (php.net)',
        'url' => 'https://www.php.net/manual/function.sodium-crypto-aead-aes256gcm-decrypt.php',
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
  'extension' => 'sodium',
  'toString' => 'Function [ <internal:sodium> function sodium_crypto_aead_aes256gcm_decrypt ] {

  - Parameters [4] {
    Parameter #0 [ <required> string $ciphertext ]
    Parameter #1 [ <required> string $additional_data ]
    Parameter #2 [ <required> string $nonce ]
    Parameter #3 [ <required> string $key ]
  }
  - Return [ string|false ]
}
',
  'attributes' => 
  array (
    'params' => 
    array (
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

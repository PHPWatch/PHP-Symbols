<?php

return array (
  'type' => 'function',
  'name' => 'sodium_crypto_sign_detached',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'sodium_crypto_sign_detached',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'sodium_crypto_sign_detached function (php.net)',
        'url' => 'https://www.php.net/manual/function.sodium-crypto-sign-detached.php',
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
  'toString' => 'Function [ <internal:sodium> function sodium_crypto_sign_detached ] {

  - Parameters [2] {
    Parameter #0 [ <required> string $message ]
    Parameter #1 [ <required> string $secret_key ]
  }
  - Return [ string ]
}
',
  'attributes' => 
  array (
    'params' => 
    array (
      'secret_key' => 
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

<?php

return array (
  'type' => 'function',
  'name' => 'sodium_crypto_box_keypair_from_secretkey_and_publickey',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'sodium_crypto_box_keypair_from_secretkey_and_publickey',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'sodium_crypto_box_keypair_from_secretkey_and_publickey function (php.net)',
        'url' => 'https://www.php.net/manual/function.sodium-crypto-box-keypair-from-secretkey-and-publickey.php',
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
  'toString' => 'Function [ <internal:sodium> function sodium_crypto_box_keypair_from_secretkey_and_publickey ] {

  - Parameters [2] {
    Parameter #0 [ <required> string $secret_key ]
    Parameter #1 [ <required> string $public_key ]
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
